<template>
  <div>
    <div v-if="$route.params.kategori">
      <h1>Anda memilih Kategori: {{ $route.params.kategori }}</h1><!--kategori nya sesuai nama filenya. pakai _ karena buat manggil parameter-->

    </div>
    <div v-else>
      <h1>List Kategori</h1>
    </div>
  </div>
</template>
