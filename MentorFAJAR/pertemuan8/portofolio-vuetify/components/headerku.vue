<template>
  <div>
    <v-app-bar dark
        color="rgba(255, 255, 255, 0)"
        elevation="0"
        >
        <v-row justify="end" class="pa-10">
          <v-col cols="6">
            <v-toolbar-title class="text-h4 font-weight-medium ">Izanagi</v-toolbar-title>
          </v-col>
          <v-col cols="6" class="pl-16">

            <div>
              <nuxt-link to="/" class="nuxtlink mr-8 text-decoration-none px-5 py-2 white--text font-weight-medium text-h5">Home</nuxt-link>
              <nuxt-link to="/about" class="nuxtlink mr-8 text-decoration-none white--text px-5 py-2 font-weight-medium text-h5">About</nuxt-link>
              <nuxt-link to="/portofolio" class="nuxtlink mr-8 text-decoration-none white--text px-5 py-2 font-weight-medium text-h5">Portofolio</nuxt-link>
            </div>
          </v-col>
        </v-row>
      </v-app-bar>
  </div>
</template>
<style>
  .nuxtlink{
      border-radius: 100px;
      transition: 0.5s;
  }
.nuxtlink:active{
  background-color: #00C3CF;
    border-radius: 100px;
    transition: 0.5s;
}
</style>
<script>
export default{

}
</script>
