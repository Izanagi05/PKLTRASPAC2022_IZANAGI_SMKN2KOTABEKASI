<template>
<div>

  <div style="padding:0 200px;">

<div class="form container text-center">
  <h1>Form Input Data</h1>
  <div class="row justify-content-center">

  <div class="col-3">

    <div class="row kolominput">
      <input type="number" class="number" placeholder="masukan NIS"  v-model="outputnis">
    </div>
    <div class="row kolominput">
      <input type="text" class="text"  placeholder="masukan Nama Siswa" v-model="outputnama">
    </div>
  <!-- <input type="text" class="text"  placeholder="masukan Kelas" v-model="inputkelas"> -->
  <div class="row kolominput ">
    <select name="" id="" v-model="outputkelas">
      <option value="10 RPL">10 RPL</option>
      <option value="11 RPL">11 RPL</option>
      <option value="12 RPL">12 RPL</option>
    </select>
  </div>

</div>

  <div class="col-3">

    <div class="row kolominput px-5">

      <input type="text" class="text"  placeholder="masukan Alamat" v-model="outputalamat">
    </div>
    <div class="row kolominput px-5">
      <input type="text" class="text"  placeholder="masukan No Telp" v-model="outputtelp">
    </div>

  </div>

<!-- <h1 v-for="(item, index) in inputannis">{{ index+1 }} {{ item }}</h1> -->
</div>
<input type="submit" class="reset btn btn-danger mx-3"  v-on:click="reset" value="Reset">
<input type="submit" class="submit btn btn-primary"  v-on:click="submit" value="Submit">
</div>

    <div v-if="set === true" class="container d-flex justify-content-center">
      <div class="container output">
          <h1>Output</h1>
          <div class="row">
            <div class="col">
              <h5>Nis Siswa: {{ outputnis }}</h5>
              <h5>Nama Siswa: {{ outputnama }}</h5>
              <h5>Kelas Siswa: {{ outputkelas }}</h5>
            </div>
            <div class="col">
              <h5>Alamat Siswa: {{ outputalamat }}</h5>
              <h5>No Telepon: {{ outputtelp }}</h5>
            </div>
          </div>
      </div>
    </div>

</div>
</div>
</template>
<style>

.form{
  color: white;
  background-color: rgb(94, 94, 177);
  border-radius:50px;
  border:3px rgb(0, 95, 21) solid;
  margin-top:20px ;
  margin-bottom:20px ;
  width:auto;
  padding:100px 0;
}
.kolominput{
  margin:20px 0px 20px 10px ;
}

.output{
  background-color: rgb(60, 143, 60);
  border: yellow solid 2px ;
  width: 900px;
  border-radius: 20px;
  padding:100px;
  margin-top:20px ;
  margin-bottom:20px ;
}
</style>

<script>
export default {
  name: 'IndexPage',
  data() {
    return{

      set: false,

      outputnis:null,
      outputnama:null,
      outputkelas:null,
      outputalamat:null,
      outputtelp:null,



    }
  },
  methods:{
    submit() {
      if (this.outputnis === '' || this.outputnis === null || this.outputnama === null || this.outputnama === '' || this.outputkelas === null || this.outputkelas === '' || this.outputalamat === null ||  this.outputalamat === ''  || this.outputtelp === null || this.outputtelp === ''){
        alert('Isi Data Dengan Benar')
      } else{
        this.set= true;
      }
  },
  reset() {
    if (this.outputnis === '' || this.outputnis === null || this.outputnama === null || this.outputnama === '' || this.outputkelas === null || this.outputkelas === '' || this.outputalamat === null ||  this.outputalamat === ''  || this.outputtelp === null || this.outputtelp === ''){
      alert('Gagal reset data')
    } else {
      this.set= false;
      this.outputnis=null,
      this.outputnama=null,
      this.outputkelas=null,
      this.outputalamat=null,
      this.outputtelp=null,
      alert('reset data berhasil')
    }
  }
}
}
</script>
