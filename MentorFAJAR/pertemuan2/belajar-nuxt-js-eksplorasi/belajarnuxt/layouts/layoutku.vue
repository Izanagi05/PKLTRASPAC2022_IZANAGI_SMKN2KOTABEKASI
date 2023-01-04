<template>
  <div>
      <Headernavbar /> <!--ini dari components: { Headernavbar yg  diambil dari import  }-->
      <nuxt />
  </div>

</template>

<script>
//panggil name nya yg di komponenku buat di import dlu. lalu name yg di import panggil di component:{}. yg di component di panggil di template nya

import Headernavbar from '~/components/komponenku/Header-navbar.vue'; //import Headernavbar ngambil dari name  nya Header-navbar.vue

export default {
  name: 'MyLayout',
  components: {
    Headernavbar, //ini dari (import 'Headernavbar' )
  }
}
</script>


<style>
  /*semua h1 di pages yg kesambung sama layoutku di layouts stylenya berubah*/
h1{
  color: red;
}
</style>
