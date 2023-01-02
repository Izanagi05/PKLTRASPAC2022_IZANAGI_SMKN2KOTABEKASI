<template>
  <div>
      <div class="team text-center">
        <div class="judul-team text-center">
            <h1 class="fw-bold">Members of the Team</h1>
        </div>
        <div class="row baris-kartu">
            <div class="col-4 kartu-member text-center">
                <div class="foto-kartu">
                    <img src="~/assets/member.jpg" height="200px" width="200px" alt="" srcset="">
                </div>
                <div class="kolom-teks">
                    <h5 class="kartu-nama">Delshady Rachmadina</h5>
                    <p class="kartu-ket">Saya merupakan siswi SMKN 2 Kota Bekasi dengan jurusan Rekayasa Perangkat Lunak yang sedang melaksanakan Praktek Kerja Lapangan di TRASPAC. Saya tertarik dengan design dan perkembangan dunia digital, dengan ketertarikan saya ini membuat saya senang untuk mempelajari hal-hal baru yang belum saya kuasai.</p>
                </div>
            </div>
            <div class="col-4 kartu-member text-center">
                <div class="foto-kartu">
                    <img src="~/assets/member.jpg" height="200px" width="200px" alt="" srcset="">
                </div>
                <div class="kolom-teks">
                    <h5 class="kartu-nama">Izanagi Faris Aslam</h5>
                    <p class="kartu-ket">Perkenalkan nama saya Izanagi faris aslam, Siswa dari SMKN 2 Kota Bekasi dengan jurusan Rekayasa Perangkat Lunak yang sedang melaksanakan Praktek Kerja Lapangan di TRASPAC. Saya merupakan seseorang yang tertarik dengan dunia Software Engineer dan senang belajar hal-hal baru</p>
                </div>
            </div>
            <div class="col-4 kartu-member text-center">
                <div class="foto-kartu">
                    <img src="~/assets/member.jpg" height="200px" width="200px" alt="" srcset="">
                </div>
                <h5 class="kartu-nama">Nadhifal Azharuddiya A</h5>
                <div class="kolom-teks">
                    <p class="kartu-ket">Seorang Siswa Kelas Unggulan RPL Di SMKN2 Kota Bekasi yang memiliki kemampuan Design, Developing, Gaming, Coding dan Pemasaran dalam beberapa platform. Memiliki pengalaman dalam organisasi dan mampu bekerja dalam tim</p>
                </div>
            </div>
        </div>
        <div class="tomboll">

            <button class="tombol-view"><a href="/home" class="text-decoration-none text-center text-white">Back To Home</a></button>
        </div>
      </div>
  </div>
  </template>
  <style>

.team{
    background-image: url(assets/team.png);
    background-size: cover;
    background-repeat: no-repeat;
    height: auto;


}

.baris-kartu{
    padding: 0px 165px;
}
.judul-team h1{
    padding-top: 100px;
    padding-bottom: 50px;
    color: black;
}

.kartu-member{
    padding-bottom: 94px;
}
.foto-kartu img{
    margin-bottom: 25px;
    border-radius: 100%;
}
.kartu-nama{
    margin-bottom: 38px;
    font-size: 20px;
    color: black;
}
.kartu-ket{
    font-size: 14px;
    color: black;
}
.tomboll{
    padding-bottom: 98px;
}

.tombol-view{
    background-color: transparent;
    color: white;
    font-size: 20px;
    border:  4px solid white;
    padding: 13px 42px;
}
</style>
