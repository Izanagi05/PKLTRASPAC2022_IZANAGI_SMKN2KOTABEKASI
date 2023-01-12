<template>
  <div>
    <!--  navbar -->
    <div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Features</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Pricing</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul>
</div>
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

