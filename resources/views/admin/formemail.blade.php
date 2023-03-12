@extends('dashboard',[
'title' => 'Undangan Seleksi Wawancara',
'pageTitle' => 'Undangan Seleksi Wawancara'
])
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="kirimemail" enctype="multipart/form-data">
                @csrf
                <div>Email</div>
                <div class="form-check form-check-inline">
                    @foreach($data as $dat)
                    <input type="checkbox" class="form-check-input @error('emails')is-invalid @enderror" id="emails" name="emails[]" value="{{$dat->email}}">{{$dat->email}}</input>
                            @endforeach
                             
                            @error('emails')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                    
                 </div>
                
                <div class=" form-group">
                    <label>Pesan</label>
                    <marquee>Edit Informasi Yang Diperlikan dan Jangan Hapus text p </marquee>
                    <textarea class="form-control " id="pesan" name="pesan" rows="15">
                    <p>Assalamualikum</p>

                    Yth. Calon Crew Bento Kopi lokasi
                    Terimakasih sudah sudah mendaftar di Bento Group Indonesia. Kami mengudang saudara/i untuk mengikuti seleksi pada:

                    <p>📆 Selasa, 27 Des 2022</p>
                    🕒 16:00- Selesai
                    <p>📝 Seleksi Wawancara
                    <p>📍nama caffe
                    <p>link google map

                    Silahkan membawa CV dan Surat Lamaran berpakaian rapih. Datang sesuai jam yg sudah dijadwalkan.
                    Sekian undangan ini kami sampaikan terimakasih
                    </textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Kirim Email Undangan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
  
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      
    $(".send-email").click(function(){
        var selectRowsCount = $("input[class='user-checkbox']:checked").length;
  
        if (selectRowsCount > 0) {
  
            var ids = $.map($("input[class='user-checkbox']:checked"), function(c){return c.value; });
  
            $.ajax({
               type:'POST',
               url:"{{ route('kirimemail') }}",
               data:{ids:ids},
               success:function(data){
                  alert(data.success);
               }
            });
  
        }else{
            alert("Please select at least one user from list.");
        }
        console.log(selectRowsCount);
    });
  
</script>
@endsection