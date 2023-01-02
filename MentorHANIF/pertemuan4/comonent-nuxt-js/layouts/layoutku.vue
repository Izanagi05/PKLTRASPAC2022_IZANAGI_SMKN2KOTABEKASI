<template>
  <div>


  <Header judul="Iza"  home="Home" about="About  " contact="Contact"/>

  <div class="container konten">

    <Nuxt />   <!--ini pages -->
  </div>
  <Footer />


  </div>
</template>
<style>
.konten{
  height: 100vh;
}</style>


<script>

  import Header from '~/components/Header.vue'
  import Footer from '~/components/Footer.vue'
export default {
  layout: 'layoutku',

  name: 'layoutPage',

  components:{
    Header, Footer
  }

}
</script>
