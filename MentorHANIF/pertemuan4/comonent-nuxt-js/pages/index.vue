<template>
  <div>


    <div class="row">
      <div class="col">
        <Content :pesan="message" :items="daftar" v-on:eventnya="functionnya" @tbukuran="ukuran +=10" @krgukuran="ukuran -=10" />
      </div>
        <div class="col">
          <img src="~/assets/foto.png" :style ="{ height:ukuran + 'px'}" alt="" srcset=""/>
        </div>
    </div>
  </div>


</template>
<style>

</style>

<script>
 import Content from '~/components/Content.vue'
export default {
  layout: 'layoutku',
  data(){
    return{
      daftar: ['data1', 'data2'],
      ukuran: 300,
      message:"Iza"
    }
  },
  components: {
    Content
  },
  methods: {
    functionnya: function(){
      alert('Selamat Datang')
    }
  }
}
</script>
