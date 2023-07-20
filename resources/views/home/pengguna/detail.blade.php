@extends('home.layout.main')

@section('content')
    <div class="container-fluid vh-100" style="overflow-y: auto">
        <div class="d-flex align-items-center pt-3 pb-2 position-fixed bg-white w-75">
            <a href="/pengguna" class="logo-sm blank"></a>
            <h3 class="text-dark m-0 p-0 ps-3">Detail Pengguna</h3>
            <div></div>
        </div>
        <section class="d-flex flex-column align-items-center py-3 mt-5"  >
            <div class="image-box rounded-circle blank"></div>
            <h3 class="my-3">Title</h3>
            <p class="text-muted" >Email</p>
            <div class="w-25 d-flex justify-content-evenly px-5" >
                <a href="" class="logo-xsm blank "></a>
                <a href="" class="logo-xsm blank "></a>
                <a href="" class="logo-xsm blank "></a>
            </div>
            <hr class="w-50" >
            <p>Deskripsi</p>
            <hr class="w-50" >
            <h3>Biodata Diri</h3>
            <table class="table w-50">
                <tbody>
                    <tr class="user-table b-primary-mu" style="border-width: 3px" >
                    <th width="10%" class="user-table b-primary-mu" style="border-width: 3px" > <div class="logo-sm blank "></div> </th>
                    <td class="user-table b-primary-mu" style="border-width: 3px"  >Gender</td>
                    <td>L/P</td>
                    </tr>
                    <tr class="user-table b-primary-mu" style="border-width: 3px" >
                        <th width="10%" class="user-table b-primary-mu" style="border-width: 3px" > <div class="logo-sm blank "></div> </th>
                        <td class="user-table b-primary-mu" style="border-width: 3px"  >Usia</td>
                        <td>L/P</td>
                    </tr>
                    <tr class="user-table b-primary-mu" style="border-width: 3px" >
                        <th width="10%" class="user-table b-primary-mu" style="border-width: 3px" > <div class="logo-sm blank "></div> </th>
                        <td class="user-table b-primary-mu" style="border-width: 3px"  >Berat Badan</td>
                        <td>L/P</td>
                    </tr>
                    <tr class="user-table b-primary-mu" style="border-width: 3px" >
                        <th width="10%" class="user-table b-primary-mu" style="border-width: 3px" > <div class="logo-sm blank "></div> </th>
                        <td class="user-table b-primary-mu" style="border-width: 3px"  >Tinggi Badan</td>
                        <td>L/P</td>
                    </tr>
                </tbody>
            </table>
            <hr class="w-50 " > 
            <h3>Tentang Aku</h3>
            <table class="table w-50">
                <tbody>
                    <tr class="user-table b-primary-mu" style="border-width: 3px" >
                        <td width="5%" class="user-table b-primary-mu" style="border-width: 3px"  >Tim favorit</td>
                        <th width="25%" class="user-table b-primary-mu" style="border-width: 3px" > <div class="logo-xl blank "></div> </th>
                        <td width="50%">Deskripsi</td>
                    </tr>
                    <tr class="user-table b-primary-mu" style="border-width: 3px" >
                        <td width="5%" class="user-table b-primary-mu" style="border-width: 3px"  >Olahraga</td>
                        <th width="25%" class="user-table b-primary-mu" style="border-width: 3px" > <div class="logo-xl blank "></div> </th>
                        <td width="50%">Deskripsi</td>
                    </tr>
                    <tr class="user-table b-primary-mu" style="border-width: 3px" >
                        <td class="user-table b-primary-mu" style="border-width: 3px"  >Status</td>
                        <td class="user-table b-primary-mu" style="border-width: 3px"  >Aktif/NonAktif</td>
                        <td >Deskripsi</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
@endsection