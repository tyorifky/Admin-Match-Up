@extends('home.layout.main')

@section('content')
<div class="container pt-3">
  <div class="input-group mb-3">
    <input type="text" class="ps-2 b-primary-mu border-3  " placeholder="Cari..." aria-label="Cari">
    <button class="btn bg-primary-mu rounded-0" type="button">Cari</button>
  </div>  
    <table class="table">
      <thead class="bg-primary-mu " >
        <tr>
          <th width="5%" scope="col">ID</th>
          <th width="20%" scope="col">Username</th>
          <th width="20%" scope="col">Nama</th>
          <th width="30%" scope="col">Email</th>
          <th width="20%" scope="col">Skor</th>
          <th width="20%" scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody >
        <tr class="user-table" >
          <th>1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>otto2gmail.com</td>
          <td>76</td>
          <td>
            <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" >Blokir</a>
          </td>
        </tr>

      </tbody>
    </table>
    <div class="modal" id="exampleModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content" style="width: 32vw" >
          <div class="modal-header bg-primary-mu">
            <div class="blank logo-sm rounded-circle d-inline-block"></div>
            <h5 class="ps-2 modal-title ">
              Konfirmasi Blokir
            </h5>
            <button type="button" class="btn-close btn-close-white"data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p  >Anda yakin ingin memblokir pengguna ini?</p>
            <p>Nama: Otto</p>
            <p>Email: Otto@gmail.com</p>
            <p class="bold font-primary-mu" >Skor: 76</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-danger">Blokir</button>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection