@extends('dashboard',[
'title' => 'Lowongan Pekerjaan',
'pageTitle' => 'Lowongan Pekerjaan',
])
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="row">
    @foreach($news as $berita)
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$berita->judul}}</h5>
                <p class="card-text">{{$berita->kutipan}}</p>
                <button class="btn btn-success" data-toggle="modal" data-target="#smallModal{{$berita->id_berita}}">Lihat Lowongan
                    <i class="fa-solid fa-eye"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="modal fade" id="smallModal{{ $berita->id_berita}}" tabindex="-1" aria-labelledby="smallModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <!--Isi-->
                    <h3 class="d-flex justify-content-center">{{$berita->judul}}</h3>
                    <div class="d-flex justify-content-center">
                        <img loading="lazy" width="200" height="200" src="{{asset('storage/'.$berita->foto)}}" alt="Card image cap">
                    </div>
                    <p>{!!$berita->isi!!}</p>
                    <div> Status Lowongan:
                        <button type="button" class="btn btn-success">{{$berita->status_lowongan}} <i class="fa-regular fa-square-check"></i>
                        </button>
                    </div>
                </div>
                <div class="modal-footer">
                    <form action="/pelamar/lamar" method="GET">
                        @csrf
                        <div class="form-floating">
                            <input type="text" name="id" class="form-control" id="id" value="{{$berita->id_berita}}" hidden>
                        </div>
                        <button class="btn btn-primary" type="submit">Lamar</a>
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak Jadi</button>
                </div>
            </div>
        </div>
    </div>

    @endforeach
</div>

<script>
    $(document).on('click', '#smallButton', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href,
            beforeSend: function() {
                $('#loader').show();
            },
            // return the result
            success: function(result) {
                $('#smallModal').modal("show");
                $('#smallBody').html(result).show();
            },
            complete: function() {
                $('#loader').hide();
            },
            error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                $('#loader').hide();
            },
            timeout: 8000
        })
    });
</script>

@endsection