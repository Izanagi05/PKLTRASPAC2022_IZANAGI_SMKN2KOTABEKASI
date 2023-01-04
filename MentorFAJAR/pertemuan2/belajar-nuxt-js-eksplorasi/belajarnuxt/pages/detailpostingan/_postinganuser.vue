<template>
<div>

    <div v-if="$route.params.postinganuser">
      <div class="container py-5">
    <h1>Judul Detail Postingan</h1>
    <h4>Postingan milik: {{ $route.params.postinganuser }}</h4>

  <p>Detail artikel Detail artikel Detail artikel Detail artikel Detail artikel Detail artikel Detail artikel</p>

  </div>
    </div>
    <div v-else>
      <div class="container py-5">
    <h1>Detail postingan tidak ditemukan</h1>


  </div>
    </div>
  </div>

</template>
<script>
export default {
  name: 'Layout',
  layout: 'layoutku',
}
</script>
