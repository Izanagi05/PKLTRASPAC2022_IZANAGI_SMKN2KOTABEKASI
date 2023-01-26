<template>
  <div >
    <div class="container d-flex justify-content-center">
      <div class="kartu">
        <h1 class="mb-5">Kalkulator sederhana</h1>
        <div class="row rselect ">
        <select id="" v-model="pilihan">
          <option value="null">Pilih</option>
          <option value="tambah" >Penjumlahan</option>
          <option value="kurang"  >Pengurangan</option>
          <option value="kali"  >Perkalian</option>
          <option value="bagi"  >Pembagian</option>
          <option value="module"  >Modulo</option>
        </select>
      </div>
      <div class="row rinputan ">
        <input type="number" v-model="bil1" placeholder="bilanan1">
      </div>
      <div class="row rinputan">
        <input type="number" v-model="bil2" placeholder="bilangan2">
      </div>
      <div class="row tombol">
        <input @click="klik()" class="btnn btn" type="submit" value="Submit">
        <input @click="reset()" class=" btn btn-danger ml-4" type="submit" value="Reset">
      </div>
      <div class="row tombol">
      </div>
      <div v-if="set === true ">
        <h4>Opsi Aritmatika: {{ oopsi }}</h4>
        <h4>Input 1: {{ bil1 }} </h4>
        <h4>Input 2: {{ bil2 }} </h4>
        <h4>Output: {{ output }} </h4>
        <!-- <h4>Hasil : {{ hasil }}</h4> -->
      </div>
      <div v-else>

      </div>
      </div>

    </div>
  </div>
</template>
<style>


.row{
  margin:0;
  padding:0;
}
.kartu{
  color: white;
  border: solid 2px white;
  border-radius: 20px;
  padding: 40px 30px 20px 30px;
  background-color: rgb(41, 44, 59);
}
select{
  border-radius: 100px;
  padding: 4px;
}
input{
  border-radius: 100px;
  padding: 8px;
}
.row{
  margin-bottom: 20px;
}
.tombol input{
  color:black;
}

.btnn{
  background: rgb(0, 255, 174);
}
.btnn:hover{
  background: rgb(0, 196, 134);
  color:white;
}
</style>

<script>
export default {
  layout: 'layoutku',
  name: 'IndexPage',
  data() {
    return{
      set:false,
      bil1:null,
      bil2: null,
      pilihan: null,
      hasil: null,
      oopsi:null

    }
  },
  methods:{
    reset(){
      if(this.bil1 === null || this.bil2 === null || this.bil1 === '' || this.bil2 === '' || (this.pilihan === null || this.pilihan === '' )){
        alert("Gagal Reset")
      }else{
        alert("Berhasil Reset")
        this.bil1 = null,
        this.bil2 = null,
        this.hasil = null,
        this.oopsi = null,
        this.pilihan = null,
        this.set = false
      }
    },

    klik(){

      if(this.bil1 === null || this.bil2 === null || this.bil1 === '' || this.bil2 === '' || (this.pilihan === null || this.pilihan === '' )){
        alert ("Isi input bilangan dengan benar");
      }else{
        this.set=  true

        if(this.pilihan === null || this.pilihan === 'null' ){
          alert("Pilih opsi aritmatika dahulu");
      }
      else if(this.pilihan === 'tambah' ){
        this.oopsi ="+";
        this.hasil = parseInt(this.bil1) + parseInt(this.bil2)
      }
      else if(this.pilihan === 'kurang' ){
        this.oopsi ="-";
        this.hasil = parseInt(this.bil1) - parseInt(this.bil2)
      }
      else if(this.pilihan === 'kali'){
        this.oopsi ="x";
        this.hasil = parseInt(this.bil1) * parseInt(this.bil2)
      }
      else if(this.pilihan === 'bagi' ){
        this.oopsi =":";
        this.hasil = parseInt(this.bil1) / parseInt(this.bil2)
      }
      else if(this.pilihan === 'module' ){
        this.oopsi ="%";
        this.hasil = parseInt(this.bil1) % parseInt(this.bil2)
      }
      }

    }

  },
  computed:{
    output(){
      return this.bil1 +' '+ this.oopsi +' '+ this.bil2 +' = '+ this.hasil

    }
  },
}
</script>
