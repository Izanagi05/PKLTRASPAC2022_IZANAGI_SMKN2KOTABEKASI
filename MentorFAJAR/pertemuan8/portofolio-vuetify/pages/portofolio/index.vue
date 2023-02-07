<template>
  <div>
    <div class="page-3" style="padding-bottom:200px;">
      <headerku />
      <div class="px-10" style="margin-top:100px;">
        <v-row class="white--text" justify="center">
          <v-col cols="3">
            <div class="text-center">
              <div class="outline pa-2">
                <v-avatar size="80px">
                  <v-img :src="require('~/assets/icuser.png')"></v-img>
                </v-avatar>
              </div>
              <div class="text-h6  font-weight-medium">
                Profil
              </div>
              <div class="font-weight-ragular">
                Nama saya Izanagi Faris Aslam, saya biasa dipanggil Iza
              </div>
          </div>
        </v-col>
          <v-col cols="3">
            <div class="text-center">
              <div class="outline pa-2">

                <v-avatar size="80px">
                  <v-img :src="require('~/assets/icaddress.png')"></v-img>
                </v-avatar>
              </div>
              <div class="text-h6  font-weight-medium">
                Address
              </div>
              <div class="font-weight-ragular">
                Bekasi Timur Regeni Blok L5/02 Jl. NURI 04 Rt. 1/7 Kel. Burangkeng Kec. Setu
              </div>
          </div>
        </v-col>
          <v-col  cols="3">
            <div class="text-center">
              <div class="outline pa-2">
                <v-avatar size="80px">
                  <v-img :src="require('~/assets/ichobi.png')"></v-img>
                </v-avatar>
              </div>
              <div class="text-h6  font-weight-medium">
                Hobby
              </div>
              <div class="font-weight-ragular">
                Hobi saya bersepeda dan bermain game
              </div>
          </div>
        </v-col>
        </v-row>

        <v-row class="mt-16">
          <v-col cols="4">
            <div class="white--text text-h6 p-0" >
              Recent Projects
            </div>
          </v-col>
          <v-col cols="8" class="pt-6">
            <div class="portofolio-line " style="
            border: #00C3CF solid 5px;
            border-bottom: none;
            width: 90%;
            border-left: none;
            border-right: none;
            "></div>
          </v-col>
        </v-row>
        <v-row class="  pt-12 " style="padding-left:90px;" justify="center">
          <v-col>
            <div >
              <v-img class="rounded-xl" :src="require('~/assets/pjku1.jpg')" width="250px"></v-img>
            </div>
          </v-col>
          <v-col>
            <div >
              <v-img class="rounded-xl" :src="require('~/assets/pjku2.png')" width="250px"></v-img>
            </div>
          </v-col>
          <v-col>
            <div >
              <v-img class="rounded-xl" :src="require('~/assets/pjku3.png')" width="250px"></v-img>
            </div>
          </v-col>
        </v-row>
      </div>
      <div>
    </div>
  </div>
  </div>
</template>
<style>
.page-3{
  background-size: cover;
  background-position: center;
  background-image:url('~/assets/bgku3.png') ;
}
.outline{
  /* width:95px;
  height:95px; */
  padding: 0px 0px 0px 0px;
  border: 4px solid #00C3CF;
    border-radius: 100%;
    margin: 0px 87px;
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
