<template>
  <div>
    <div>


      <v-app style="background: gray;">
      <v-container>

          <!-- <div class="text-h3 mx-5">
          Ini halaman login
        </div> -->
        <v-row align="center"
      justify="center" >
          <v-col cols="5" class="pt-10" >
          <v-card light class="vkartu" style="background: white ;">
            <div style="padding:20px;">

              <h2>Login</h2>
            </div>
            <div class="kartu">
              <v-text-field v-model="username" label="username" ></v-text-field>
              <v-text-field v-model="password" type="password" label="password"  ></v-text-field>
            </div>
            <div>
              <v-btn class="tombol" @click.prevent="login()" style="background: #1976D2; color:white;">Login</v-btn>
            </div>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </v-app>


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
  middleware: 'middlewareku',
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
          // this.$router.push('/dashboard/')
          this.$store.dispatch("userr/login", this.username)
          // this.$router.push('/dashboard/')
          // this.$cookies.set('cookieku', 'true')

        }else{
          alert('Isi Username dan password dengan benar')
        }
    }

  },
  // mounted() {
  //   this.$store.dispatch("userr/kkk")
  // }

}
</script>
