@extends('layouts.master')
@section('headline','Create New Member')
@section('title','Register Form')
@section('content') 
<form action="/simpanSiswa" method="POST">
    {{ csrf_field() }}
    <div class="card">
      <div class="card-body">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="nik">NIK</label>
            <input type="text" class="form-control" id="nik" placeholder="NIK" name="nik">
          </div>
          <div class="form-group col-md-6">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="kelas">Kelas</label>
            <select id="kelas" class="form-control" name="kelas">
              <option selected>Pilih Salah Satu</option>
              <option>XII-RPL 1</option>
              <option>XII-RPL 2</option>
              <option>XII-MM 1</option>
              <option>XII-MM 2</option>
              <option>XII-TKJ 1</option>
              <option>XII-TKJ 2</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputCity">Tanggal</label>
            <input type="date" class="form-control" id="inputCity" name="tgl_lahir" >
        </div>
          <div class="form-group col-md-4"">
            <label for="agama">Agama</label>
            <select id="agama" class="form-control" name="agama">
              <option selected>Pilih Salah Satu</option>
              <option>Islam</option>
              <option>Protestan</option>
              <option>Katolik</option>
              <option>Budha</option>
              <option>Hindu</option>
              <option>Konghuchu</option>
            </select>
            </div>
          </div>
        </div>
          <div class="card-footer">
            <button class="btn btn-primary">Submit</button>
          </div>
    </div>
</form>

@endsection