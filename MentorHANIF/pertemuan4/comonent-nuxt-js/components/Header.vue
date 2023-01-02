<template>
  <div  >

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> {{'Hallo' + judul}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <NuxtLink class="nav-link" to="/" n>{{home}}</NuxtLink>
      </li>
      <li class="nav-item">
        <NuxtLink class="nav-link"  to="/about">{{about}}</NuxtLink>
      </li>
      <li class="nav-item">
        <NuxtLink class="nav-link" to="contact">{{contact}}</NuxtLink>
      </li>
    </ul>
  </div>
</nav>
  </div>
</template>
<script>
export default{
  name: 'Header',
  props: {
    // judul: "halo"
    judul: {
      type: String
    },
    home: {
      type: String
    },
    about: {
      type: String
    },
    contact: {
      type: String
    }
  }

}

</script>
