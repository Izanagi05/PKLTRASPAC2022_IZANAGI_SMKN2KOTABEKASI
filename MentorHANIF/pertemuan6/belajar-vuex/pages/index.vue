<template>
  <div>


    <h1>
      Angka: {{ this.$store.state.tesvuex.awal}}
    </h1>
    <button @click="kliktambah()" class="tombol">Tambah</button>
    <button @click="klikkurang()" class="tombol">Kurang</button>
  </div>
</template>

<style>
.tombol{
  background: rgb(113, 235, 235);
  color: black;
  border: 3px solid green;
  border-radius: 10px;
  padding: 10px 20px;
}
</style>

<script>
export default {
  name: 'IndexPage',

  methods: {
    kliktambah(){
        this.$store.dispatch("tesvuex/tambah")
    },
    klikkurang(){
        this.$store.dispatch("tesvuex/kurang")
    }
  }


}
</script>
