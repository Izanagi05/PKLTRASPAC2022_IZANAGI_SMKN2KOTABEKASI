<template>
  <div>

   <!-- <h4>data: {{ datauser }}</h4> -->
    <!-- <v-container >
      <Dialog />
      </v-container> -->

    <!-- <div v-for="user in datauser" :key="user.id">
          {{ user.name }}
        </div> -->
       <v-data-table data-app
       :headers="headers"
       :items="datauser"
       >
       <!-- {{ datauser.email }} -->

       <template v-slot:[`item.aksi`]="{ item }">


          <v-btn class="mx-2" fab small  @click="edititem(item)">
                        <v-icon dark>mdi-eye</v-icon>
                    </v-btn>

      </template>



      </v-data-table>

      <v-dialog v-model="dialogg" persistent>

      <v-card class="kartu ">

        <v-container>

          <h3>Edit</h3>
          <v-text-field type="text" :value="datadialog.name"  label="Name" outline></v-text-field>
<v-text-field type="text" :value="datadialog.email" label="Email" outline></v-text-field>
<v-text-field type="text" :value="datadialog.phone"  label="Phone" outline></v-text-field>
<v-text-field type="text" :value="datadialog.username"  label="Username" outline></v-text-field>
<v-text-field type="text" :value="datadialog.website"  label="Wensite" outline></v-text-field>
<v-card-actions >
  <v-btn @click="dialogg= false">Close</v-btn>
</v-card-actions>
</v-container>
      </v-card>
      </v-dialog>

  </div>
</template>
<style>
.colnama{
  padding: 20px 20px;
}
</style>

<script>
import axios from 'axios';
import Dialog from '~/components/dialog.vue'
export default {
 name: 'IndexPage',
 components:{
 Dialog
 },
 data(){
   return{
     datauser: [],
     dialogg: false,
     datadialog: [],

       headers: [
         {
           text: 'Nama',value: 'name',
         },
         {
           text: 'Nomer Telp',value: 'phone',
         },
         {
           text: 'Aksi',align:'end',value: 'aksi',
         },
       ]

   }
 },

 methods:{

   edititem(item){
    //  this.datadialog= this.datauser.indexOf(item)
     this.datadialog = Object.assign({}, item)
     this.dialogg= true
    //  console.log(datauser)
   }
   ,

   ambildata(){
     axios.get('https://jsonplaceholder.typicode.com/users').then(respon =>{
       this.datauser= respon.data
     })
   }
 },
 created(){
 this.ambildata()
 }
}
</script>
