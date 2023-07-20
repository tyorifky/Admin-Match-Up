@extends('home.layout.main')

@section('content')
<div class="container pt-3">
    <div class="input-group-kompetisi mb-3">
        <input type="text" class="ps-2 b-primary-mu border-3  " placeholder="Nama..." aria-label="Cari">
        <input type="text" class="ps-2 b-primary-mu border-3  " placeholder="Lokasi..." aria-label="Cari">
        <input type="text" class="ps-2 b-primary-mu border-3  " placeholder="Olahraga..." aria-label="Cari">
        <button class="btn bg-primary-mu rounded-0" type="button">Cari</button>
    </div> 
    <div class="container wrapper m-0 p-0 pb-3">
        <div class="wrapper-box shadow-regular p-2">
            <div class="upperbox d-flex align-items-center">
                <div class="logo-xl blank rounded-circle"></div>
                <div class="ps-2 h-100 w-50 d-flex flex-column justify-content-evenly">
                    <p class="text-muted m-0" style="font-size: 8px;" >Penyelengara Kompetisi</p>
                    <h3 class="bold m-0" >TITLE</h3>
                    <span class="w-50 d-inline-block text-center bold"  style="border: 2px solid #7C5CB1; font-size: 12px; color:#7C5CB1 ">Tingkatan</span>
                </div>
            </div>
            <div class="infobox">
                <div>
                    <div class="logo-xsm blank " ></div>
                    Hello
                </div>
                <div>
                    <div class="logo-xsm blank" ></div>
                    Hello
                </div>
                <div>
                    <div class="logo-xsm blank" ></div>
                    Hello
                </div>
            </div>
            <div class="actionbox">
                <button class="bg-success border-0 text-white">Edit</button>
                <button class="bg-danger border-0 text-white" >Delete</button>
            </div>
        </div>
    </div>
</div>
<div class="add-button rounded-circle blank m-3">

</div>
@endsection