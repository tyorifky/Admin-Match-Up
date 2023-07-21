@extends('home.layout.main')

@section('content')
    <div class="container-fluid vh-100" style="overflow-y: auto">
        <div class="d-flex align-items-center pt-3 pb-2 position-fixed bg-white w-75">
            <a href="/pengguna" class="logo-sm blank"></a>
            <h3 class="text-dark m-0 p-0 ps-3">Tambah Kompetisi</h3>
            <div></div>
        </div>
        <section class="d-flex flex-column align-items-center py-3 mt-5"  >
            <div class="w-50 m-0 p-2 bg-primary-mu"><h3>Title</h3></div>
            <div class="kompetisi-wrapper-1 w-50 p-2">
                <div class="mb-3" style="grid-area: w1-1" >
                    <label for="embed" class="form-label">Embed google Maps</label>
                    <input type="text" class="form-control" id="embed" placeholder="Masukkan Embed google Maps Lokasi..." style="border: 3px solid #FF8A35">
                </div>
                <div class="mb-3 " style="grid-area: w1-2">
                    <label for="embed" class="form-label">Embed google Maps</label>
                    <input type="text" class="form-control" id="embed" placeholder="Masukkan Embed google Maps Lokasi..." style="border: 3px solid #FF8A35">
                </div>
                <div class="mb-3" style="grid-area: w1-3">
                    <label for="embed" class="form-label">Embed google Maps</label>
                    <input type="text" class="form-control" id="embed" placeholder="Masukkan Embed google Maps Lokasi..." style="border: 3px solid #FF8A35; height: 90%">
                </div>
            </div>
        </section>
    </div>
@endsection