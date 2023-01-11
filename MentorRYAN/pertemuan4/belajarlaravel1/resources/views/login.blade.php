<template>
    <div>

      <div class="container  d-flex justify-content-center " style="heigt:100vh;">
        <div class="card kartu">
          <div class="text-center">

            <h1>Form Login</h1>
            <hr>
          </div>

          <div class="kolominput">

            <label for="username">Username</label>
            <div class="row inputan">
              <input type="text" name="username" id="username" size="30"  v-model="username">
            </div>

            <label for="password">Password</label>
            <div class="row inputan">
              <input type="password" name="password" id="password" size="30" v-model="password">
            </div>
          </div>

          <div class="row tombol">
            <div  v-if="username === null ||  username === '' || password === null ||  password === '' ">
              <button  type="submit" class="reset   btn btn-secondary mx-3 disabled"  value="Reset">Reset</button>
            </div>
            <div  v-else>
              <button  type="submit" class="reset   btn btn-danger mx-3"  v-on:click="reset" value="Reset">Reset</button>
            </div>

            <div>
              <button type="submit" class="submit btn btn-primary "  v-on:click="submit" value="Submit">Login</button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </template>
  <style>
  .kartu{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    margin:30px 10px;
    /* width: 500px; */
  }
  .kolominput{
    /* margin:10px 200px; */
    margin:20px;
  }
  .inputan{
    margin: 10px 10px;
  }
  .tombol{
    margin: 10px;
    margin-top: 20px;
  }
  </style>

  <script>
  export default {

      data(){
        return{
          sett: false,
          username:null,
          password:null,

        }
      },
      methods:{
        submit(){
          if(this.username === null || this.username === '' || this.password === null ||  this.password === ''){
            alert('Isi Data Dengan Benar')
          }else if(this.username === "admin" && this.password === "admin"){
            alert('Anda berhasil login')
            this.$router.push('/form')

          }else{
            alert('Isi Username dan password dengan benar')
          }
        },
        reset(){
          if(this.username === null || this.username === '' || this.password === null ||  this.password === ''){
            alert('gagal reset')
          }else{
            this.username=null
            this.password=null,
            alert('Berhasil reset')
          }
        }
      }
  }
  </script>
