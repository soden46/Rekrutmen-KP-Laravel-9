@extends('dashboard',[
'title' => 'Biodata',
'pageTitle' => 'Biodata',
])
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif
<div class="col-lg-6">
	<div class="card">
		<div class="card-header">
			Biodata
		</div>
		<div class="card-body">
			<form method="POST" action="{{ route('biodata.save')}}" enctype="multipart/form-data">
				@csrf
				@method('POST')
				<div class="form-group">
					<label for="id_user">ID</label>
					<input required="" value="{{ Auth::user()->id }}" class="form-control" type="number" id="id_user" name="id_user" readonly>
				</div>
				<div class="form-group">
					<label for="foto">Foto Diri</label>
					<input required="" class="form-control" type="file" id="foto" name="foto">
				</div>
				<div class="form-group">
					<label for="name">Nama Lengkap</label>
					<input required="" value="{{ Auth::user()->nama }}" class="form-control" type="" id="nama" name="nama">
				</div>
				<div class="form-group">
					<label for="name">Alamat (Sesuai KTP)</label>
					<input required="" value="{{old('alamat')}}" class="form-control" type="text" id="alamat" name="alamat">
				</div>
				<div class="form-group">
					<label for="name">Tanggal Lahir</label>
					<input required="" value="{{old('tgl_lahir')}}" class="form-control" type="date" id="tgl_lahir" name="tgl_lahir">
				</div>
				<div class="form-group">
					<label for="name">Alamat Domisili</label>
					<input required="" value="{{old('domisili')}}" class="form-control" type="text" id="domisili" name="domisili">
				</div>
				<div class="form-group">
					<label for="name">No KTP</label>
					<input required="" value="{{old('nik')}}" class="form-control" type="text" id="nik" name="nik">
				</div>
				<div class="form-group">
					<label for="name">No KK</label>
					<input required="" value="{{old('nkk')}}" class="form-control" type="text" id="nkk" name="nkk">
				</div>
				<div class="form-group">
					<label for="name">No WA</label>
					<input required="" value="{{old('nowa')}}" class="form-control" type="text" id="mowa" name="nowa">
				</div>
				<div class="form-group">
					<label for="name">No Saudara</label>
					<input required="" value="{{old('no_saudara')}}" class="form-control" type="text" id="no_saudara" name="no_saudara">
				</div>
				<div class="form-group">
					<button class="btn btn-primary btn-sm">Save</button>
				</div>
			</form>
		</div>
		<div class="card-footer"></div>
	</div>
</div>
@endsection