<template>
  <div>

    <div>

      <v-data-table data-app
      :headers="heder"
      :items="ambil2"
      >

      <template v-slot:[`item.thumbnail`]="{ item }">
        <v-img width="200"  :src="item.thumbnail">

        </v-img>
      </template>

      <template v-slot:top>

      <v-dialog v-model="dialogku">
        <template v-slot:activator="{ on, attrs }">
            <v-btn
              color="primary"
              dark
              class="mb-2"
              v-bind="attrs"
              v-on="on"
            >
              New Item
            </v-btn>

          </template>
      <v-card>
        <v-container>

        <!-- <v-file-input label="Title" v-model="datadialog.thumbnail"></v-file-input> -->
        <v-text-field label="Title" v-model="datadialog.title"></v-text-field>
        <v-text-field label="Harga" v-model="datadialog.price"></v-text-field>
        <v-text-field label="Deskripsi" v-model="datadialog.description"></v-text-field>
        <v-text-field label="Rating" v-model="datadialog.rating"></v-text-field>
        <v-text-field label="Stock" v-model="datadialog.stock"></v-text-field>
          <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn
                color="blue darken-1"
                text
                @click="close"
              >
                Cancel
              </v-btn>
              <v-btn
                color="blue darken-1"
                text
                @click="save"
              >
                Save
              </v-btn>
            </v-card-actions>
      </v-container>
    </v-card>

      </v-dialog>
    </template>
    <template v-slot:[`item.aksii`]="{ item }">
      <v-btn @click="editproduk(item)" ><v-icon>mdi-pencil</v-icon></v-btn>
      <v-btn @click="hapusproduk(item)" ><v-icon>mdi-delete</v-icon></v-btn>

    </template>

      </v-data-table>
      <!-- <div v-for="ab in ambil2" :key="ab.id">
        {{ab.title}}
      </div> -->
      <!-- <div>ho{{ ambil2}}</div> -->
      <!-- <v-btn @click="ambil"></v-btn> -->
    </div>
  </div>
</template>

<script>
export default {
  name: 'IndexPage',
  data(){
    return{

      dialogku:false,

      heder: [
        // {text:'Foto', value:'thumbnail', width:'200px'},
        {text:'Nama', value:'title', width:'200px'},
        {text:'Harga', value:'price'},
      {text:'Deskripsi', value:'description', width:'400px'},
      {text:'Rating', value:'rating'},
      {text:'Stok', value:'stock'},
      {text:'Aksi', value:'aksii'},
      ],
      editedIndex: -1,
      datadialog: {
        // thumbnail:'',
        title: '',
        price: '',
        description: '',
        rating: '',
        stock: '',
      },
      defaultItem: {
        // thumbnail:'',
        title: '',
        price: '',
        description: '',
        rating: '',
        stock: '',
      },
    }
  },
  computed:{
    ambil2(){
      return  this.$store.state.storeku.dataproduk
    }

  },
  methods:{


    editproduk(item){
      this.editedIndex = this.ambil2.indexOf(item)
      // this.$store.commit('storeku/editproduk')
      this.datadialog  = Object.assign({}, item)
           console.log('halo')
      this.dialogku=true
    },
    hapusproduk(item){
      // this.ambil2.splice(this.editedIndex, 1)
      this.editedIndex = this.ambil2.indexOf(item)
      this.$store.commit('storeku/hapusproduk')
        this.close  ()
      console.log("berhasil hapus")
    },
    close(){
      this.dialogku = false
    },
    save(){
      if (this.editedIndex > -1) {
          Object.assign(this.ambil2[this.editedIndex], this.datadialog)
          console.log(" EIFS")
        } else {
          // this.ambil2.push(this.datadialog)
          // this.$store.dispatch("storeku/addproduk")
          this.$store.commit('storeku/tambahproduk', this.datadialog)

          console.log(" ELS")
        }
        this.close()
      console.log("berhasil save")
    }
  },



mounted(){
    this.$store.dispatch("storeku/ambildata")

},


}
</script>
