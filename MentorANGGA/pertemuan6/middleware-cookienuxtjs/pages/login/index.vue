<template>
  <div>
    <div>


      <v-container>
      <div class="text-h1">
        <h1>

          Ini halaman login
        </h1>
        </div>
        <v-row justify="center">
          <v-col cols="5" >
          <v-card class="vkartu" style="background: yellowgreen;">
            <div class="kartu">
              <v-text-field v-model="username" label="username" ></v-text-field>
              <v-text-field v-model="password" label="password"  ></v-text-field>
            </div>
            <div>
              <v-btn class="tombol" @click.prevent="login()" color="primary">Login</v-btn>
            </div>
          </v-card>
        </v-col>
      </v-row>
    </v-container>


  </div>
  </div>
</template>

<style>
html{
  background: gray;
}
.kartu{
  padding:20px 30px;
}

input{
  /* color:white; */
  /* background: rgb(255, 255, 255); */
  padding:10px 20px;
  margin: 5px;
}
.tombol{
  margin:20px;
  background: rgb(0, 179, 255);
}
</style>
<script>
import axios from 'axios'
export default{

  data(){
    return{
      username:null,
      password:null
    }
  },
  methods:{
    async login(){
      if(this.username === null || this.username === '' || this.password === null ||  this.password === ''){
          alert('Isi Data Dengan Benar')
        }else if(this.username === "admin" && this.password === "admin"){
          alert('Anda berhasil login')
          const  response = await axios.post('http://localhost:3000/login', {
            username : this.username,
            password : this.password
          });
          console.log(response)
          this.$store.dispatch("userr/kkk")
          this.$router.push('/dashboard/')

        }else{
          alert('Isi Username dan password dengan benar')
        }
    }

  }

}
</script>
