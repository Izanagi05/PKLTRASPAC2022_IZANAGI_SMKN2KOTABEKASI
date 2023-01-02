<template>
  <div>


      <h1>Ini komponen Konten</h1>

      <h3>Selamat Datang {{ pesan }}</h3>
      <div>klik
        <button  @click="$emit('eventnya')">klik</button>
      </div>
      <div>
        <h5>daftar data</h5>
        <ul>
          <li v-for="dftr of items" :key="dftr"> {{ dftr }}</li>
        </ul>
      </div>




    <h4>ubah ukuran foto</h4>
    <button @click="$emit('tbukuran')">Tambah</button>
    <button @click="$emit('krgukuran')">Kurang</button>


  </div>

  </div>
</template>

<style>
</style>
<script>
export default{
  name: 'Content',
  data() {
    return{

    }
  },
  props: {
    pesan: {
      type: String
    },
    items: {
      type: String
    }
  }
}
</script>


