@extends('dashboard',[
'title' => 'Edit Caffe',
'pageTitle' => 'Edit Caffe'
])
   
@section('content')
<div>
    <form action="{{route('admin.update',$data->id_caffe)}}" method="POST">
        @include('component.alert-dismissible')
        @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Group Caffe:</strong>
                    <input type="text" name="group_caffe" value="{{$data->group_caffe}}" class="form-control" placeholder="group_caffe">
                        @error('group_caffe')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>Nama Caffe:</strong>
                    <input type="text" name="nama_caffe" value="{{ $data->nama_caffe }}" class="form-control" placeholder="nama_caffe">
                        @error('nama_caffe')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>Provinsi:</strong>
                    <input type="text" name="provinsi" value="{{ $data->provinsi }}" class="form-control" placeholder="provinsi">
                        @error('provinsi')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>Alamat Caffe:</strong>
                    <input type="text" name="alamat_caffe" value="{{ $data->alamat_caffe }}" class="form-control" placeholder="alamat_caffe">
                        @error('alamat_caffe')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>Jumlah Pegawai:</strong>
                    <input class="form-control" name="jumlah_pegawai" placeholder="jumlah_pegawai" value="{{ $data->jumlah_pegawai }}">
                        @error('jumlah_pegawai')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
@endsection