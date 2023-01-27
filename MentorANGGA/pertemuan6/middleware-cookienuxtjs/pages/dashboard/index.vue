<template>
  <div style="background-color:#D9D9D9;">
    <div  class="konten">
      <NuxtLink to="/dashboard/about">private page</NuxtLink>
      <a href="/dashboard/about">tes</a>
      <div class="dadjokes" >
        <h2> Dad Jokes</h2>

      </div>

      <div  class="kartu-search">
            <v-card class="search">
            <v-text-field class="input-search" prepend-icon="mdi-magnify" placeholder="frog"    v-model="search"></v-text-field>
            </v-card>
      </div>



      <div v-if="search === null || search === '' ">

        <div class="notavailable">
          <p class=""> Data not available</p>
        </div>



      </div>

      <div v-else >

        <div class="result">
          <h4>Result: {{ filtering.length }}</h4>
        </div>

        <div>
          <v-card v-for="ir in filtering" :key="ir.id"     class="kartu-data">
            <v-card-text class="text-data"><p>{{ ir.joke }}</p></v-card-text>
          </v-card>
        </div>

      </div>
    </div>
  </div>

</template>
<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,600;1,400&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,300&display=swap');
*{
font-family: 'Poppins', sans-serif;
padding: 0px;
margin: 0px;
line-height: 24px;
font-size: 16px;

}
html{
  background-color:#D9D9D9 ;
}

/* .input-search::placeholder{
 font-weight: 500;
} */
.search{
  padding: 14px 27px 14px 40px;
}
.konten{
  margin-left: 215px;
  margin-right: 158px;
}
.dadjokes h2{
  padding:27px 0;
  font-size: 35px;
  font-weight: 600;
  line-height: 52.5px;
  text-align: center;
}
.kartu-search{
  margin-bottom: 61px;
}
.notavailable{
  text-align: center;
}
.result{
  margin-bottom: 12px;
}
.kartu-data{
  margin-bottom: 20px;
  padding: 12px 21px 60px 24px;
  border-radius: 16px;
}
.text-data{
  padding: 0px;

}
</style>
<script>
import axios from 'axios';
export default {
  middleware: 'middlewareku',
  name: 'IndexPage',
  data(){
    return{
      datanya:[],
      jabawan: 'jawaban',
      search: null,
      tess:'sss'

    }
  },
  watch : {
    search(newvalue, oldvalue){
      // if(value.incluede('?')){
      // }
      this.ambildata()
      console.log('old='+ oldvalue, 'new:'+ newvalue)
    }
  },
  computed: {
    filtering(){
      return this.datanya.filter((ir) => {
        return ir.joke.match(this.search)
      })
    }
  },
  methods: {
    ambildata(){
        axios.get("https://icanhazdadjoke.com/search", {
      headers: {
        Accept: " application/json",
      }
    }).then(respon => {
        this.datanya = respon.data.results.filter((ir) => {
        return ir.joke.match(this.search)
      })
      })
        },



  },
  created(){
  this.ambildata();
}
}
</script>
