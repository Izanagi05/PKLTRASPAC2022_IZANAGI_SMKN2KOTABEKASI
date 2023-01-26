<template>
  <div>
    <!--  navbar -->
    <div>
      <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
</nav>
</div>

<!-- / navbar -->

<!-- isi layout, pages kalkulator -->
<div class="bg">
  <Nuxt />
</div>
<!-- /isi layout -->


<!-- footer -->
<div class="footer text-center  p-4">
  © 2023 Copyright:
  <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
</div>
<!--/ footer -->
  </div>
</template>
<style>
.bg{
  background-color: gray;
  padding: 200px 0px;
}
.footer{
  background-color: rgb(62, 62, 62);
  color: white;
}
</style>

