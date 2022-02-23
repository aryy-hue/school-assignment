@extends('layouts.master')
@section('headline','Dashboard')
@section('title','Member Data')
@section('content')
<div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">NIK</th>
          <th scope="col">Nama</th>
          <th scope="col">Kelas</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Agama</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
          @foreach ($siswas as $siswa)
        <tr>
          <th scope="row">{{$no}}</th>
          <td>{{$siswa->nik}}</td>
          <td>{{$siswa->nama}}</td>
          <td>{{$siswa->kelas}}</td>
          <td>{{$siswa->tgl_lahir}}</td>
          <td>{{$siswa->agama}}</td>
        </tr>
        <?php $no++; ?>
         @endforeach
      </tbody>
    </table>
    <div class="card-footer text-right">
      <a href="/form"><button class="btn btn-primary">Add Member</button></a>
    </div>
    {!! $siswas->links() !!}
  </div>
@endsection