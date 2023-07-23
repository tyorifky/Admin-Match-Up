@extends('home.layout.main')

@section('content')
    <div class="container-fluid vh-100" style="overflow-y: auto">
        <div class="d-flex align-items-center pt-3 pb-2 position-fixed bg-white w-75">
            <a href="/pengguna" class="logo-sm blank"></a>
            <h3 class="text-dark m-0 p-0 ps-3">Tambah Kompetisi</h3>
            <div></div>
        </div>
        <section class="d-flex flex-column align-items-center justify-content-center py-3 mt-5 "  >
                <div class="add-image">
                    <div class="image-box" >
                        <img class="img-preview rounded-circle" style="height: 150px; width: 150px; object-fit:cover; object-position: center; position: relative"  alt="">
                    </div>
                    <div class="edit-image ms-2 p-0 m-0">
                        <label for="image" class="rounded-circle blank" style="width: 35px; height: 35px"></label>
                        <input  style="display: none" type="file" id="image" name="image" onchange="previewImage()">
                    </div>
                </div>
        </section>
        <section class="d-flex flex-column align-items-center py-3 mt-5 "  >
            <div class="w-50 m-0 p-2 bg-primary-mu"><h3>Title</h3></div>
            <div class="kompetisi-wrapper-1 w-50 p-2 shadow-still">
                <div class="mb-3" style="grid-area: w1-1" >
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control input-kompetisi" id="title" placeholder="Masukkan title kompetisi..." style="border: 3px solid #FF8A35">
                </div>
                <div class="mb-3 " style="grid-area: w1-2">
                    <label for="olahraga" class="form-label">Olahraga</label>
                    <select type="text" class="form-select input-kompetisi" id="olahraga" placeholder="Masukkan cabang olahraga..." style="border: 3px solid #FF8A35">
                        <option value="" >Pilih Olahraga...</option>
                        <option value="Sepak Bola">Sepak Bola</option>
                        <option value="Futsal">Futsal</option>
                        <option value="Ping Pong">Ping Pong</option>
                        <option value="Bulutangkis">Bulutangkis</option>
                        <option value="Renang">Renang</option>
                    </select>
                </div>
                <div class="mb-3" style="grid-area: w1-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea type="text" class="form-control input-kompetisi" id="deskripsi" placeholder="Masukkan deskripsi kompetisi..." style="border: 3px solid #FF8A35; height: 90%; resize: none;"></textarea>
                </div>
            </div>
        </section>
        <section class="d-flex flex-column align-items-center py-3 mt-3"  >
            <div class="w-50 m-0 p-2 bg-primary-mu"><h3>Juara</h3></div>
            <div class="kompetisi-wrapper-2 w-50 p-2 shadow-still">
                <div class="mb-3" style="grid-area: w2-1" >
                    <label for="juara1" class="form-label">Juara 1</label>
                    <textarea type="text" class="form-control input-kompetisi h-75 " id="juara1" placeholder="Masukkan deskripsi juara..." style="border: 3px solid #FF8A35; resize: none;"></textarea>
                </div>
                <div class="mb-3 " style="grid-area: w2-2">
                    <label for="juara2" class="form-label">Juara 2</label>
                    <textarea type="text" class="form-control input-kompetisi h-75" id="juara2" placeholder="Masukkan deskripsi juara..." style="border: 3px solid #FF8A35;resize: none;"></textarea>
                </div>
                <div class="mb-3" style="grid-area: w2-3">
                    <label for="juara3" class="form-label">Juara 3</label>
                    <textarea type="text" class="form-control input-kompetisi h-75" id="juara3" placeholder="Masukkan deskripsi juara..." style="border: 3px solid #FF8A35; resize: none;"></textarea>
                </div>
            </div>
        </section>
        <section class="d-flex flex-column align-items-center py-3 mt-3"  >
            <div class="w-50 m-0 p-2 bg-primary-mu"><h3>Lokasi</h3></div>
            <div class="kompetisi-wrapper-3 w-50 p-2 shadow-still">
                <div class="mb-3" >
                    <label for="lokasi" class="form-label">Lokasi Kompetisi</label>
                    <input type="text" class="form-control input-kompetisi h-50 " id="lokasi" placeholder="Masukkan deskripsi juara..." style="border: 3px solid #FF8A35">
                </div>
                <p class="d-flex align-items-center" >Detail Lokasi</p>
                <iframe src="" class="blank w-100 h-100" frameborder="0"></iframe>
            </div>
        </section>
        <section class="d-flex flex-column align-items-center py-3 mt-3"  >
            <div class="w-50 m-0 p-2 bg-primary-mu"><h3>Aksesibilitas</h3></div>
            <div class="kompetisi-wrapper-4 w-50 p-2 shadow-still">
                <div class="mb-3"  >
                    <label for="slot" class="form-label">Slot Tersedia</label>
                    <input type="number" class="form-control input-kompetisi h-50 " id="slot" placeholder="Masukkan jumlah slot..." style="border: 3px solid #FF8A35">
                </div>
                <div class="mb-3 " >
                    <label for="tingkatan" class="form-label">Tingkatan</label>
                    <input type="text" class="form-control input-kompetisi h-50" id="tingkatan" placeholder="Masukkan tingakatan kompetisi..." style="border: 3px solid #FF8A35">
                </div>
            </div>
        </section>
        <section class="d-flex flex-column align-items-center py-3 mt-3"  >
            <div class="w-50 m-0 p-2 bg-primary-mu"><h3>Informasi</h3></div>
            <div class="kompetisi-wrapper-5 w-50 p-2 shadow-still">
                <div class="mb-3" style="grid-area: w5-1" >
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control input-kompetisi h-50 " id="date" placeholder="Masukkan jumlah slot..." style="border: 3px solid #FF8A35">
                </div>
                <div class="mb-3" style="grid-area: w5-2" >
                    <label for="Harga Masuk" class="form-label">Harga Masuk Tersedia</label>
                    <input type="number" class="form-control input-kompetisi h-50 " id="Harga Masuk" placeholder="Masukkan jumlah slot..." style="border: 3px solid #FF8A35">
                </div>
                <div class="mb-3" style="grid-area: w5-3" >
                    <label for="Lama Pertandingan" class="form-label">Lama Pertandingan</label>
                    <input type="number" class="form-control input-kompetisi h-50 " id="Lama Pertandingan" placeholder="Masukkan jumlah slot..." style="border: 3px solid #FF8A35">
                </div>
                <div class="mb-3" style="grid-area: w5-4" >
                    <label for="Pukul" class="form-label">Pukul</label>
                    <input type="number" class="form-control input-kompetisi h-50 " id="Pukul" placeholder="Masukkan jumlah slot..." style="border: 3px solid #FF8A35">
                </div>
                <div class="mb-3" style="grid-area: w5-5" >
                    <label for="PlusInfo" class="form-label">Informasi Tambahan</label>
                    <textarea type="number" class="form-control input-kompetisi " id="slot" placeholder="Masukkan jumlah slot..." style="border: 3px solid #FF8A35; height: 90%; resize: none "></textarea>
                </div>
            </div>
            
        </section>
        <section class="d-flex flex-column align-items-center py-3 mt-3"  >
            <button class="btn bg-primary-mu" >Submit</button>
        </section>
    </div>
@endsection