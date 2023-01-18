<template>
  <div style="background-color:gray;">
      <v-container class=""  >
         <div style="margin-left:200px;">
          <v-row class="">
                  <v-col class="p-0" cols="3">
                  <div>
                  <img src="~/assets/foto.jpg"  height="190px"/>
                  </div>
                  </v-col>
                  <v-col class="" cols="7" style="background-color:#0d2840;color:white;" >
                      <div class="judul-nama">
                      <h1>Izanagi Faris Aslam</h1>
                      <h5>Software Engineer</h5>
                      </div>
                  </v-col>
              </v-row>

              <v-row style="height:800px; margin-bottom:100px;" >
                  <v-col class="p-5 pt-5"  style="background-color:#d6e8f4;font-size:14px;" cols="3" >
                  <v-row>
                  <div class="kontak" >
                  <h3>Kontak Saya</h3>
                  <p>Ponsel: +62-812-9099-1181
                  </p>
                  <p>E-mail: izanagifaris@gmail.com
                  </p>
                  </div>
                  </v-row>

                  <v-row>
                      <div class="kemampuan">
                      <h3>Kemampuan</h3>
                      <ul style="margin-left:10px;">
                          <li>CSS, HTML, Boostrap, PHP, Laravel, Mysql</li>
                          <li>Mengatasi masalah</li>
                          <li>Kerja sama Tim</li>
                      </ul>
                  </div>
                  </v-row>
                  <v-row>
                      <div class="organisasi">
                      <h3>Organisasi yang diikuti</h3>
                      <h3>Anggota</h3>
                      <p>Software Club</p>
                  </div>
                  </v-row>


                  </v-col>
                  <v-col class=" p-5 pt-5 " style="padding-left:100px;background-color:white;" cols="7">

                  <v-row>
                  <div class="tentang  ">
                  <h3>Tentang Saya</h3>
                  <p>Saya merupakan seseorang yang tertarik dengan dunia Software Engineer, saya juga senang  belajar hal-hal baru.</p>
                  </div>
                  </v-row>

                  <v-row>
                  <div class="datapribadi  ">
                  <h3>Data Pribadi</h3>
                  <p>Nama Lengkap : Izanagi Faris Aslam</p>
                  <p>Tempat Lahir  : Jakarta</p>
                  <p>Tanggal Lahir : 30 Desember 2005</p>
                  <p>Jenis Kelamin : Laki-Laki</p>
                  <p>Status : Siswa</p>
                  <p>Alamat : Bekasi Timur Regensi Blok L5/02 Jl. NURI 04 Rt. 01 Rw. 07 Kel. Burangkeng Kec. Setu</p>
                  </div>
                  </v-row>

                  <v-row>
                  <div class="pendidikan  ">
                  <h3>Pendidikan</h3>
                  <p>MI Miftahul Ulum
                  </p>
                  <p>
                    2012-2018
                  </p>


                     <p> SMPIT Al-Azhar Jaya Indonesia
                    </p>
                    <p>
                      2018-2021
                    </p>
                      <p>
                      SMKN 2 Kota Bekasi
                    </p>
                    <p>
                      2021-Sekarang
                    </p>

                  </div>
                  </v-row>

                  </v-col>

              </v-row>
         </div>
      </v-container>


  </div>
</template>
<style>

@import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,400;0,500;0,600;0,700;1,500&family=Nunito:ital,wght@0,200;0,300;0,600;1,400&display=swap');
*{
font-family: 'IBM Plex Sans', sans-serif;
}
h3{
  font-size:18px;
}
p{
font-size: 14px;
margin-bottom: 0px;
}
li{
font-size: 14px;
}
.judul-nama{
padding-left: 30px;
padding-top: 30px;
}
.kontak, .kemampuan, .organisasi, .tentang, .datapribadi, .pendidikan{
margin-bottom: 70px;
}
</style>
