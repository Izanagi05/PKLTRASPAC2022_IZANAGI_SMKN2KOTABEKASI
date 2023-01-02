<template>
  <div>
    <div class="home" >
      <div class="bg-atas"></div>


        <div class="row d-flex content-home">
         <div class="col-5 m-auto text-center">
             <div class="judul-home text-center">
                <img src="~assets/logo.png" alt="" srcset="">
             </div>
             <p class="teks-home">We are the  students from Vocational Highschool 2 Bekasi City, Software Engineering Department. Recently, we became an internship participant at TRASPAC</p>

             <button class="tombol-view"><a href="/about" class="text-decoration-none text-white">View Team</a></button>
         </div>
        </div>
       <div class="bg-bawah"></div>
    </div>
  </div>
</template>
<style>


@import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,600;1,400&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,300&display=swap');

*{
    color: white;
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;

}

.home{
    background-image: url(assets/home.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    height: auto;
}
.bg-atas{
    background-color: #CBC6B9;
    height: 6vw;
    border-bottom-left-radius: 100%;
    border-bottom-right-radius: 100%;
}
.bg-bawah{
    background-color: #CBC6B9;
    height: 8vw;
    border-top-left-radius: 100%;
    border-top-right-radius: 100%;
}
.content-home{
    padding-top: 20px;
    margin: 100px 0px;
}
.judul-home{
    margin-left: 70px;
    font-size: 40px;
}
.teks-home{
    padding-bottom: 122px;
    font-size: 20px;
}
.tombol-view{
    background-color: transparent;
    color: white;
    font-size: 20px;
    border:  4px solid white;
    padding: 13px 42px;
}
</style>
