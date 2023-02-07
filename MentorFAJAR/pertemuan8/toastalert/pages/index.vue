<template>
  <div id="app">

    <!-- <v-app> -->
    <!-- <div class="grey--text">

      <v-btn class="warning" @click="klik">klik</v-btn>
      </div> -->
      <!-- </v-app> -->
      <v-container>

      <v-dialog v-model="dialogku"   max-width="700" persistent  transition="dialog-bottom-transition" >
        <template v-slot:activator="{ on, attrs }" >

         <v-btn
           color="primary"
           dark
           class="mb-2"
           v-bind="attrs"
           v-on="on"
           style="margin:10px;background-color: #1867c0; "
         ><v-icon>mdi-plus</v-icon>Tambah data</v-btn>
       </template>
    <v-card class="kartu  " light style="padding:0px;color:black;border:solid 3px #1867c0;" >
      <div style="background:#1867c0;padding:10px 30px;color:white;">

        <h1>Tambah</h1>
      </div>
      <v-container style="padding:30px;">
    <v-text-field style="color:black;" type="text" v-model="detaildatadialog.name"  label="Name" outline></v-text-field>
    <v-text-field type="text" v-model="detaildatadialog.email" label="Email" outline></v-text-field>
    <v-text-field type="text" v-model="detaildatadialog.phone"  label="Phone" outline></v-text-field>
    <v-text-field type="text" v-model="detaildatadialog.username"  label="Username" outline></v-text-field>
    <v-text-field type="text" v-model="detaildatadialog.website"  label="Website" outline></v-text-field>
    <v-card-actions >
    <v-btn @click="close()" style="margin-right:20px;background:white;color:black;" >Close</v-btn>
      <v-btn @click="tambahdata" style="background:#1867c0;">Save</v-btn>
    </v-card-actions>
    </v-container>
    </v-card>
    </v-dialog>

    <v-dialog v-model="dialogdetail"   max-width="700" persistent transition="dialog-bottom-transition">
    <v-card class="kartu " light style="padding:0px;color:black;border: #fb8c00 solid 3px;">
      <div style="background:#fb8c00;padding:10px 30px;color:white;">
<h1>Detail</h1>
</div>
    <v-container style="padding:30px;">
    <!-- <v-row>
      <v-col>
      </v-col>
      <v-col>
      </v-col>
    </v-row> -->
    <div style="margin:20px;">
      <v-row>
        <v-col cols="5">
          <h3>Name: {{ detaildatadialog.name }}</h3>
        </v-col>
        <v-col>
        <h3>Email: {{ detaildatadialog.email }}</h3>
      </v-col>
    </v-row>
    <v-row>
      <v-col cols="5">

        <h3>Phone: {{ detaildatadialog.phone }}</h3>
      </v-col>
      <v-col>
        <h3>Username: {{ detaildatadialog.username }}</h3>
      </v-col>
    </v-row>
    <v-row>
      <v-col>
        <h3>Website: {{ detaildatadialog.website }}</h3>
      </v-col>
    </v-row>
    <!-- <div></div> -->
  </div>
    <v-card-actions >
    <v-btn @click="closedetail()" style="background:#fb8c00;color:black;">Close</v-btn>
  </v-card-actions>
</v-container>
    </v-card>
  </v-dialog>
    <v-dialog v-model="dialogedit"   max-width="700" persistent transition="dialog-bottom-transition">
    <v-card class="kartu " light style="padding:0px;color:black;border:solid 3px #4caf50;">
      <div style="background:#4caf50;padding:10px 30px;color:white;">
<h1>Ubah data</h1>
</div>
    <v-container style="padding:30px;">

      <v-text-field type="text" v-model="detaildatadialog.name"  label="Name" outline></v-text-field>
    <v-text-field type="text" v-model="detaildatadialog.email" label="Email" outline></v-text-field>
    <v-text-field type="text" v-model="detaildatadialog.phone"  label="Phone" outline></v-text-field>
    <v-text-field type="text" v-model="detaildatadialog.username"  label="Username" outline></v-text-field>
    <v-text-field type="text" v-model="detaildatadialog.website"  label="Website" outline></v-text-field>
    <!-- <div></div> -->
    <v-card-actions >
    <v-btn @click="closeedit()" style="margin-right:20px;background:white;color:black;">Close</v-btn>
    <v-btn @click="update()" style="background: #4caf50;color:white;" >Ubah</v-btn>
  </v-card-actions>
</v-container>
    </v-card>
  </v-dialog>
  <v-data-table data-app
  :headers="headers"
  :items="datauser"


       >
       <!-- <template v-slot:top> -->
         <!-- </template> -->
       <template v-slot:[`item.aksi`]="{ item }">
          <v-btn class="mx-2" fab small  @click="klikdetail(item)" style="margin:15px 15px 15px 0px;">
                        <v-icon dark>mdi-eye</v-icon>
                    </v-btn>
                    <v-btn class="mx-2"  fab small  @click="ubahdata(item)" style="margin:15px 15px 15px 0px;">
                        <v-icon dark >mdi-pencil</v-icon>
                    </v-btn>
          <v-btn class="mx-2" fab small  @click="hapusdata(item)" style="background:#FF2A30;">
                        <v-icon dark>mdi-delete</v-icon>
                    </v-btn>
                  </template>
                  <template v-slot:[`item.nomor`]="{ index }">
                  <div >
                      {{ index+1 }}
                  </div>
                  </template>
                </v-data-table>
              </v-container>

  </div>
</template>
<style>
html{
  /* background: #b7d5d4; */
}
.colnama{
  padding: 20px 20px;
}
.toastku-hapus{
  background-color: #A5D6A7 !important;
  color: #0f5132 !important;
}
.toastku-ubah{
  background-color: #A5D6A7 !important;
  color: #0f5132 !important;
}
.toastku-tambah{
  background-color: #A5D6A7 !important;
  color: #0f5132 !important;
}
.toastku-error{
  background-color: #f8d7da !important;
  color: #842029 !important;
}
</style>

<script>
import axios from 'axios';
export default {
 name: 'IndexPage',
 data(){
   return{
     datauser: [],
     dialogku: false,
     dialogdetail: false,
     dialogedit: false,
     indexnya: -1,
     headers: [
       {text: 'Nomor', align: 'start', value: 'nomor'},
       {text: 'Nama', align: 'start', value: 'name'},
       {text: 'Email', align: 'start', value: 'email'},
       {text: 'Phone', align: 'start', value: 'phone'},
       {text: 'Username', align: 'start', value: 'username'},
      //  {text: 'Website', align: 'start', value: 'website'},
       {text: 'Aksi', align:'start', value: 'aksi', width:'300px'},
     ],
     dialoghapus:false,

    //  detaildatadialog: [],
     detaildatadialog:{
       name:'',
      email:'',
      phone:'',
      username:'',
      website:''
     },
     defaultItem:{
      name:'',
      email:'',
      phone:'',
      username:'',
      website:''
    },
  }
 },

 methods:{

   ambildata(){
     axios.get('https://jsonplaceholder.typicode.com/users').then(respon =>{
       this.datauser= respon.data
     })
   },
   klikdetail(item){
    //  this.detaildatadialog= this.datauser.indexOf(item)

     this.detaildatadialog = Object.assign({}, item)
     this.dialogdetail= true
    //  console.log(datauser)
   },
   ubahdata(item){
    //  this.detaildatadialog= this.datauser.indexOf(item)


    this.indexnya = this.datauser.indexOf(item)
    this.detaildatadialog = Object.assign({}, item)

     this.dialogedit= true
    //  console.log(datauser)
   }
   ,
   update(){

    try {

      axios.put('https://jsonplaceholder.typicode.com/users/1',this.detaildatadialog).then(respon =>{
        //  this.datauser.items= item
       console.log(respon)
        // alert('berhasil update')
        this.$toast.show('Berhasil mengubah data', {
          // fullWidth:true,
        // icon:'check',
        action : {
        text : 'ok',
        onClick : (e, toastObject) => {
            toastObject.goAway(0);
        }
    },
        iconPack:'mdi',
        icon : 'mdi-update',
        className:['toastku-ubah'],
        position:'top-center',
        duration: 5000,
    })
        })
    Object.assign(this.datauser[this.indexnya], this.detaildatadialog)
  }catch (error){
    console.log(error);
  }

    this.dialogedit= false
   },
   hapusdata(item){
     const d= this.datauser.indexOf(item)
     try {

       axios.delete('https://jsonplaceholder.typicode.com/users/1', {
        params:item.id
      }).then(respon =>{
        //  this.datauser.items= item
          console.log(respon)
          this.$toast.show('Berhasil hapus data', {
            iconPack:'mdi',
            icon : 'mdi-delete',
          action : {
          text : 'ok',
          onClick : (e, toastObject) => {
              toastObject.goAway(0);
          }
      },
          className:['toastku-hapus'],
          // theme: "bubble",
          position:'top-center',
          duration: 5000,
      })

          })
     } catch (error){
      // alert (error);
      console.log(error);
    }
        this.datauser.splice(d, 1)

  },

  tambahdata(){
    try {

      axios.post('https://jsonplaceholder.typicode.com/users/',
      this.detaildatadialog
      ).then(respon =>{
        console.log(respon)
      this.$toast.show('Berhasil menambah data', {
        // fullWidth:true,
        // icon:'check',
        iconPack:'mdi',
        icon : 'mdi-note-plus',
        action : {
        text : 'ok',
        onClick : (e, toastObject) => {
          toastObject.goAway(0);
        }
      },
        className:['toastku-tambah'],
        position:'top-center',
        duration: 5000,
      })
    })
    this.datauser.push(this.detaildatadialog)
  } catch (error){
      console.log(error);
    }



    this.close()
  },
  close(){
    this.$nextTick(() => {
          this.detaildatadialog = Object.assign({}, this.defaultItem)
        })
    this.dialogku=false

  },
  closedetail(){
    this.$nextTick(() => {
          this.detaildatadialog = Object.assign({}, this.defaultItem)
        })
    this.dialogdetail=false

  },
  closeedit(){
    this.$nextTick(() => {
          this.detaildatadialog = Object.assign({}, this.defaultItem)
        })
    this.dialogedit=false

  }
 },
 created(){
 this.ambildata()
 }
}
</script>

    <!-- this.$router.push({ name: 'command-center-dashboard' }) -->
