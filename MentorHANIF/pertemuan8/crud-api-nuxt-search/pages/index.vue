<template>
  <div >
    <!-- <v-btn color="success">tes</v-btn> -->
<v-app  >
  <div light>

      <!-- <v-toolbar style="width:500px;" light>
        <v-text-field><v-icon>mdi-search</v-icon></v-text-field>
      </v-toolbar> -->
      <v-card class="search" style="margin:20px; padding:10px;" light>
            <v-text-field class="input-search" prepend-icon="mdi-magnify" placeholder="search"    v-model="query"></v-text-field>
            <v-btn @click="searchproduk(query)"><v-icon>mdi-magnify</v-icon></v-btn>
            </v-card>

      <v-data-table data-app light
      :headers="heder"
      :items="ambil2"
      >
      <!-- :search="search" -->

      <template v-slot:[`item.thumbnail`]="{ item }">
        <v-img width="200"  :src="item.thumbnail">

        </v-img>
      </template>

      <template v-slot:top>

      <v-dialog v-model="dialogku" width="700px">
        <template v-slot:activator="{ on, attrs }">
            <v-btn
              color="primary"
              dark
              class="mb-2"
              v-bind="attrs"
              v-on="on"
              style="background: #1565C0; margin:10px; margin-left: 30px;"
            >

              New Item
            </v-btn>

          </template>
      <v-card light>
        <div style="background:#1976D2; padding:15px;margin-bottom: 10px;">
          <h3>
            Ubah data
          </h3>
        </div>
        <v-container style="padding:30px;">

          <v-row>
            <!-- <v-img :src="datadialog.thumbnail"  width="200" ></v-img> -->
            <v-col>
              <!-- <v-file-input label="Title" v-model="datadialog.thumbnail"></v-file-input> -->
              <v-text-field label="Judul" v-model="datadialog.title"></v-text-field>
            </v-col>
            <v-col>
              <v-text-field label="Harga" v-model="datadialog.price"></v-text-field>
            </v-col>
          </v-row>

          <v-row>
            <v-col>
              <v-text-field label="Stock" v-model="datadialog.stock"></v-text-field>
            </v-col>
            <v-col>
              <v-text-field label="Rating" v-model="datadialog.rating"></v-text-field>
            </v-col>
          </v-row>
          <v-row>
        <v-col>
          <v-text-field label="Deskripsi" v-model="datadialog.description"></v-text-field>
        </v-col>
      </v-row>



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
                style=""
              >
              Save
              </v-btn>
            </v-card-actions>
      </v-container>
    </v-card>

      </v-dialog>
    </template>
    <template v-slot:[`item.aksii`]="{ item }">
      <v-btn @click="editproduk(item)"  style="margin-right:10px;" fab small><v-icon small>mdi-pencil</v-icon></v-btn>
      <v-btn @click="hapusproduk(item)" small fab ><v-icon small>mdi-delete</v-icon></v-btn>

    </template>

      </v-data-table>
      <!-- <div v-for="ab in ambil2" :key="ab.id">
        {{ab.title}}
      </div> -->
      <!-- <div>ho{{ ambil2}}</div> -->
      <!-- <v-btn @click="ambil"></v-btn> -->
    </div>
  </v-app>
  </div>
</template>

<script>
 import { mapGetters,mapActions} from 'vuex'
export default {
  name: 'IndexPage',
  data(){
    return{

      dialogku:false,
      query:'',

      heder: [
        {text:'Foto', value:'thumbnail', width:'200px'},
        {text:'Nama', value:'title', width:'200px'},
        {text:'Harga', value:'price'},
      {text:'Deskripsi', value:'description'},
      {text:'Rating', value:'rating'},
      {text:'Stok', value:'stock'},
      {text:'Aksi', value:'aksii', width:'200px'},
      ],
      editedIndex: -1,
      datadialog: {
        thumbnail:'',
        title: '',
        price: '',
        description: '',
        rating: '',
        stock: '',
      },
      defaultItem: {
        thumbnail:'',
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
    },
    ...mapGetters(["searchResult"]),
    // ...mapGetters("storeku",["updateResult"]),


  },
  methods:{


    editproduk(item){
      this.editedIndex = this.ambil2.indexOf(item)
      // this.editedIndex = this.$store.commit('storeku/editproduk', item)

      this.datadialog  = Object.assign({}, item)
           console.log('halo')
      this.dialogku=true

    },
    hapusproduk(item){
      // this.ambil2.splice(this.editedIndex, 1)
      // this.editedIndex = this.ambil2.indexOf(item)
      this.$store.dispatch('storeku/deleteproduk', item)
        this.close  ()
        // this.$store.dispatch("storeku/ambildata")
      console.log("berhasil hapus")
    },
    close(){
      this.$nextTick(() => {
          this.datadialog = Object.assign({}, this.defaultItem)
          this.editedIndex = -1
        })
      this.dialogku = false
    },
    save(){
      if (this.editedIndex > -1) {
        // this.$store.commit('storeku/editproduk')
        console.log("berhasil update")
        // Object.assign(this.ambil2[this.editedIndex], this.datadialog)
        this.$store.dispatch('storeku/editproduk', this.datadialog)
        // this.$store.dispatch("storeku/ambildata")
        } else {
          // this.ambil2.push(this.datadialog)
          // this.$store.dispatch("storeku/addproduk")
          this.$store.dispatch('storeku/addproduk', this.datadialog)
          // this.$store.dispatch("storeku/ambildata")

          console.log(" berhasil tambah")
        }
        this.close()
        console.log("berhasil save")
      },
      ...mapActions("storeku",['searchproduk']),
    //   searchh(){
    //   this.$store.dispatch('storeku/searchproduk', this.ambil2)

    // }
  },



mounted(){
    this.$store.dispatch("storeku/ambildata")

},


}
</script>
