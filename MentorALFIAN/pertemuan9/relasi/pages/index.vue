<template>
  <div>

    <v-dialog v-model="dialogku">
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


    <template v-slot:[`item.aksi`]="{item}">
      <div>
        <v-btn @click="hapus(item)"><v-icon>mdi-delete</v-icon></v-btn>
      </div>
    </template>
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
      {text:'nama', value:''},
      {text:'kelas', value:'pelajarans_id'},
      {text:'pelajaran', value:''},
      // {text:'alamat', value:'alamat'},
      {text:'aksi', value:'aksi'},
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
  close(){
    this.$nextTick(() => {
          this.datadlg = Object.assign({}, this.defaultItem)
        })
    this.dialogku=false

  },
  tambahdata(){
    axios.post('http://127.0.0.1:8000/tampil/add', this.datadlg).then(response => {
console.log(response)
    })
    // this.$store.dispatch('mystore/tambah', this.datadlg)
    this.getdata
    this.close()
  },
  hapus(item){
    axios.delete('http://127.0.0.1:8000/tampil/delete/'+item.id,{
      params:item.id
    }).then(response=>{
      console.log(response)
    })
  }

},
//  mounted(){
//   //  this.$store.dispatch('mystore/ambil');
//    this.getdata()

// },
created(){
  this.getdata()
}
}
</script>

<style>

</style>
