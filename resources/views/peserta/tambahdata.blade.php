@extends('layout1.app')
@section('title', 'Data Peserta')

@section('contents')
  <h1 class="text-center mb-4">Tambah Data Peserta Softskill</h1>

    <div class="container">

      <div class="row justify-content-center">
        <div class="col-10">

        <div class="card">
          <div class="card-body">
          <form action="/peserta/insertdata" method="post">
                    @csrf
            <div class="mb-3">
            <label for="NIM" class="form-label">NIM:</label>
            <input type="number" class="form-control" name="NIM" placeholder="Enter NIM">
          </div>
          <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap:</label>
            <input type="text" class="form-control" name="nama_lengkap" placeholder="Enter Nama Lengkap">
          </div>
          <div class="mb-3">
            <label for="prodi" class="form-label">Prodi:</label>
            <select class="custom-select" name="prodi">
            <option selected>Pilih Prodi</option>
            <option value="Teknologi Informasi">Teknologi Informasi</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
            <option value="Manajemen">Manajemen</option>
            <option value="Teknnik Sipil">Hukum</option>
            <option value="Psikologi">Psikologi</option>
            <option value="Agribisnis">Agribisnis</option>
            <option value="Peternakan">Peternakan</option>
            <option value="Pendidikan Bahasa dan Sastra Indonesia">Pendidikan Bahasa dan Sastra Indonesia</option>
            <option value="Pendidikan Bahasa dan Sastra Jawa">Pendidikan Bahasa dan Sastra Jawa</option>
            <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
            <option value="Pendidikan Ekonomi">Pendidikan Ekonomi</option>
            <option value="Pendidikan Matematika">Pendidikan Matematika</option>
            <option value="Pendidikan Teknik Otomotif">Pendidikan Teknik Otomotif</option>
            <option value="Pendidikan Guru SD">Pendidikan Guru SD</option>
            </select> 
            </div>


            <div class="mb-3">
            <label for="level" class="form-label">Level:</label>
            <select class="custom-select" name="level">
            <option selected>Pilih Level</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            </select>            
            </div>

            <div class="mb-3">
            <label for="tahun" class="form-label">Tahun:</label>
            <select class="custom-select" name="tahun">
            <option selected>Pilih Tahun</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            </select>         
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          </div>
        </div>
      </div>

    </div>
    @endsection
