<template>
  <div>
    <div class="page1" style="padding-bottom:700px;">
      <headerku />
      <div style="padding-top:250px;">

        <v-row justify="center">
          <div >
            <v-col class="">
            <v-avatar size="150px">
              <v-img :src="require('~/assets/foto.jpg')"></v-img>
            </v-avatar>
          </v-col>
        </div>
      </v-row>
      <v-row justify="center">
        <div >
          <v-col class="">
            <div class="text-h4 white--text">
              Welcome to my website
            </div>
          </v-col>
        </div>
      </v-row>
      <v-row justify="center">
        <div >
          <v-col class="">
            <div class="tmbl">
              <nuxt-link to="/about"  style="background:#d9d9d998" class="pa-3 rounded-xl text-decoration-none white--text" >More me <v-icon>mdi-arrow-down-thin</v-icon></nuxt-link>
            </div>
          </v-col>
        </div>
      </v-row>
    </div>

      <div>

    </div>


    <!-- <v-btn class="primary">k</v-btn> -->
  </div>
  </div>
</template>
<style>
.page1{
  /* object-fit: contain; */
  background-size: cover;
  height: 100vh;
  background-position: center;
background-image: url('~/assets/bgku1.jpg');
}
</style>
<script>
import headerku from '~/components/headerku.vue'
export default{
  components: {
    headerku,
  }
}
</script>
