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
            <button class="btn btn-danger h-" >Blokir</button>
          </td>
        </tr>

      </tbody>
    </table>
</div>

@endsection