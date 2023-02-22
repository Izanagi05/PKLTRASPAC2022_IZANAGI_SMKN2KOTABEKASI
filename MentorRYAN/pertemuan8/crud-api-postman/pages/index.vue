<template>
  <div>

    <v-dialog>
      <template v-slot:activator="{ on, attrs }" >

<v-btn
  color="primary"
  dark
  class="mb-2"
  v-bind="attrs"
  v-on="on"
  style="margin:10px;background-color: #1867c0; "
>Tambah data</v-btn>
</template>

<v-card>
  <v-text-field v-model="datadlg.nama"></v-text-field>
  <v-text-field v-model="datadlg.kelas"></v-text-field>
  <v-text-field v-model="datadlg.alamat"></v-text-field>
</v-card>
<div>
  <v-btn @click="close()">Batal</v-btn>
  <v-btn @click="tambahdata()">Simpan</v-btn>
</div>
    </v-dialog>
    <v-data-table
    :headers="header"
    :items="dataku"
    >


    </v-data-table>

  </div>
</template>

<script>
import axios from 'axios'

export default {
 data(){
  return{
    dialogku:false,
    dataku:[],
    header:[
      {text:'nama', value:'nama'},
      {text:'kelas', value:'kelas'},
      {text:'alamat', value:'alamat'}
    ],
    datadlg:{
      nama:'',
      kelas:'',
      alamat:'',

    },
    defaultItem:{
      nama:'',
      kelas:'',
      alamat:'',

    }
  }
 },

computed:{
  // ambildt(){
  //   return this.$store.state.mystore.dataapi
  // }
},
methods:{
  getdata(){
    axios.get('http://127.0.0.1:8000/tampil').then(response => {
      this.dataku = response.data
    })
  },
  tambahdata(){
    axios.post('http://127.0.0.1:8000/tampil/add', this.datadlg).then(response => {
console.log(response)
    })
    // this.$store.dispatch('mystore/tambah', this.datadlg)
    this.close()
  },
  close(){
    this.$nextTick(() => {
          // this.datadlg = Object.assign({}, this.defaultItem)
        })
    this.dialogku=false

  }
},
//  mounted(){
//    this.$store.dispatch('mystore/ambil');

// },
created(){
  this.getdata()
}
}
</script>

<style>

</style>
