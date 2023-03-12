@extends('layouts.home.master',[
'title' => 'Detail Caffe | Bento Group Indonesia',
'pageTitle' => 'Detail Caffe | Bento Group Indonesia',
])
@section('content')
<div class="single">
                <div class="container">
                    <div class="section-header">
                        @foreach($group as $grup)
                        <h2>Daftar Caffe Dari Group: {!! $grup->group_caffe !!} </h2>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <img class="img-fluid rounded" src="img/single.jpg" alt="Image">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit. Nam congue molestie nibh in venenatis. Etiam non dui vel purus mollis consectetur. Sed at cursus lectus, sed iaculis lorem. Suspendisse venenatis est eu neque elementum, a accumsan tortor scelerisque. Nullam id erat arcu. Morbi suscipit commodo tortor non efficitur. Ut pretium sollicitudin lorem quis laoreet. Nulla vestibulum ante ut tellus hendrerit, ac condimentum sapien vehicula. Fusce dapibus, nulla non venenatis pretium, purus mauris vehicula elit, at posuere leo elit id augue. Donec ullamcorper tortor et tellus convallis maximus.
                            </p>
                            <ul class="ul-group">
                                <li>First list item</li>
                                <li>Second list item</li>
                                <li>Third list item</li>
                                <li>Fourth list item</li>
                                <li>Fifth list item</li>
                            </ul>
                            <p>
                                Mauris tempor et odio ut condimentum. Donec eleifend magna eu hendrerit lacinia. Praesent luctus diam ut rhoncus vulputate. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed ut metus efficitur, volutpat eros et, mollis enim. Sed quis tortor id erat iaculis sagittis. Aenean at pretium lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam sollicitudin vitae lacus id fermentum. Nullam sit amet tortor arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elementum nibh in dui congue, id faucibus lectus auctor. Nunc quis tincidunt odio, id finibus massa. Phasellus tincidunt libero est, in blandit turpis malesuada a. Quisque congue, mauris non consectetur tempus, arcu urna blandit arcu, ac finibus dolor ante ut nibh. Etiam congue dignissim sollicitudin. 
                            </p>
                            <ol class="ol-group">
                                <li>First list item</li>
                                <li>Second list item</li>
                                <li>Third list item</li>
                                <li>Fourth list item</li>
                                <li>Fifth list item</li>
                            </ol>
                            <p>
                                Donec vel euismod tortor. Aenean euismod risus ac enim hendrerit, ac sagittis erat porta. Donec ultrices et massa at ullamcorper. Nam faucibus mattis mattis. Etiam a metus condimentum, pretium elit a, accumsan dui. Donec ipsum erat, ultricies ut ante vel, consequat elementum nibh. Vestibulum egestas id nunc lobortis bibendum. Aliquam odio ex, efficitur vitae risus vitae, iaculis suscipit justo. Nam eleifend orci nulla, in pulvinar risus eleifend sit amet
                            </p>
                            <ul class="list-group">
                                <li class="list-group-item">First list item</li>
                                <li class="list-group-item">Second list item</li>
                                <li class="list-group-item">Third list item</li>
                                <li class="list-group-item">Fourth list item</li>
                                <li class="list-group-item">Fifth list item</li>
                            </ul>
                            <p>
                                Aenean dolor nisi, ultrices vitae urna vitae, tristique auctor tortor. Cras eu aliquet metus. Nunc volutpat est nec convallis vulputate. Maecenas quis tortor molestie, maximus arcu mattis, vehicula orci. Curabitur consequat eu orci vel vulputate. In mollis purus in tellus consectetur, at tristique lacus gravida. Integer tempor mattis elit, eu mollis tellus pretium in. Duis id iaculis ipsum, eu tempus purus. Fusce euismod lacus quis felis eleifend egestas. Nam at dolor vitae risus varius mattis sed ut tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque diam nisl, interdum sit amet congue efficitur, ultrices id dolor. 
                            </p>
                            <table class="table table-bordered">
                                <thead>
        <tr>
            <th>Group Caffe</th>
            <th>Nama Caffe</th>
            <th>Alamat Caffe</th>
            <th>Provinsi</th>
            <th>Jumlah Karyawan</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($caffe as $kafe)
        <tr>
            <td>{{ $kafe->group_caffe }}</td>
            <td>{{ $kafe->nama_caffe }}</td>
            <td>{{ $kafe->alamat_caffe }}</td>
            <td>{{ $kafe->provinsi }}</td>
            <td>{{ $kafe->jumlah_pegawai }}</td>
        </tr>
        @endforeach
        </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



  <div class="table-responsive">
    <table class="table table-bordered">
        
   </table>
  </div>
@endsection