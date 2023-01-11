<template>
  <div>
    <nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item logout">
        <a class="nav-link " href="#" v-on:click.prevent="logout"> Logout</a>
      </li>
    </ul>
  </div>
</nav>
  </div>
</template>
<style>
.navbar{
  background-color: rgb(0, 0, 0);

}
.logout{
  margin-left: 900px;
}
a{
  color: white;
}
</style>

<script>
export default{
  methods:{
    logout: function(){
      alert('anda berhasil logout')
      this.$router.push('/login')
    }
  }
}
</script>

