<template>
  <div>
    <div  class="pageku2  ">
      <headerku />

      <div class="px-10 " style="padding-top:100px;padding-bottom: 100px;">
        <v-row>
          <v-col>
            <div>
              <v-img :src="require('~/assets/asetku1.png')" width="400px"></v-img>
            </div>
          </v-col>
          <v-col class="white--text">

            <div class="text-h3 font-weight-medium"> About me</div>
            <div class="text-h4 mt-3 font-weight-regular">Hai semuanya, nama saya Izanagi Faris Aslam.</div>
            <div class="mt-3">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>

            <div class="tmbl2 mt-8">
              <nuxt-link to="/portofolio"  style="background:#00C3CF" class="pa-3 rounded-xl text-decoration-none white--text" >Visit This Page</nuxt-link>
            </div>
          </v-col>
        </v-row>

    </div>


    <!-- <v-btn class="primary">k</v-btn> -->
  </div>
  </div>
</template>
<style scoped>

.pageku2{
  background-size: cover;
  background-position: center;
  /* height:auto; */
  background-image: url('~/assets/bgku2.png');
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
