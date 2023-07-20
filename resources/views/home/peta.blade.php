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
            <th width="20%" scope="col">Nama</th>
            <th width="35%" scope="col">Detail</th>
            <th width="25%" scope="col">Harga</th>
            <th width="20%" scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody >
          <tr class="user-table" >
            <th>1</th>
            <td>Markas</td>
            <td>Jln Markas Besito......</td>
            <td>Rp.75000</td>
            <td>
              <button class="btn btn-success " >Edit</button>
              <button class="btn btn-danger " >Blokir</button>
            </td>
          </tr>
  
        </tbody>
      </table>
    <div class="add-button rounded-circle blank m-3"></div>
</div>
@endsection