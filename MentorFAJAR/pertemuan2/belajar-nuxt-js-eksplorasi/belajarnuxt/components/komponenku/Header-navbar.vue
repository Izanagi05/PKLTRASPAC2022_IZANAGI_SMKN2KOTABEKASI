<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <nuxt-link to="/" class="nav-link">Beranda</nuxt-link>
      </li>
      <li class="nav-item">
        <nuxt-link to="/home" class="nav-link">Home</nuxt-link>
      </li>
      <li class="nav-item">
        <nuxt-link to="/about" class="nav-link">About</nuxt-link>
      </li>
      <li class="nav-item">
        <nuxt-link to="/contact" class="nav-link">Contact</nuxt-link>
      </li>
    </ul>
  </div>
</nav>
  </div>
</template>

<script>
export default {
  name: 'Headernavbar'
}
</script>
