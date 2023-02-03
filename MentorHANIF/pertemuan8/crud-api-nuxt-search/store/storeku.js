import axios from 'axios'
export const state = () => ({
  dataproduk: [],
  // editedIndex: -1

})
export const getters = {
  searchResult: (state) => state.dataproduk,
}

export const mutations= {
  SET_PRODUK(state, dataproduk) {
    state.dataproduk = dataproduk;
  },
  TAMBAH_PRODUK(state, dataproduk){
    state.dataproduk.push(dataproduk)
    console.log("tmbh")
  },
  UPDATE_PRODUK(state, dataproduk){

    state.dataproduk.items = dataproduk
    // state.dataproduk.splice(state.dataproduk.indexOf(dataproduk), 1)
    // state.dataproduk.push(dataproduk)

    // Object.assign(state.dataproduk, dataproduk)
    // state.dataproduk.items=dataproduk
    // state.dataproduk.indexOf(dataproduk)
    // let olddataproduk=state.dataproduk.indexOf(dataproduk).items

    // Vue.set(state.dataproduk[state.dataproduk.indexOf(dataproduk)
    // ])
    // const jj= dataproduk
    // state.dataproduk = tes
    // state.dataproduk.splice(state.dataproduk.indexOf(dataproduk), 1)

  },
  HAPUS_PRODUK(state, i){
    // let index = state.dataproduk.findIndex((c) => c.id == product);
    // state.dataproduk.splice(index, 1)
  state.dataproduk.splice(state.dataproduk.indexOf(i), 1)
  },
  SEARCH_PRODUK(state, dataproduk){
    // let index = state.dataproduk.findIndex((c) => c.id == product);
    // state.dataproduk.splice(index, 1)
  // state.dataproduk.splice(state.dataproduk.indexOf(i), 1)
  state.dataproduk= dataproduk
  }
}


export const actions ={
   async ambildata({commit}){
    try{
       await axios.get("https://dummyjson.com/products").then(result => {

        commit("SET_PRODUK", result.data.products)
      })
    }catch (error){
      alert (error);
      console.log(error);
    }
  },
  async addproduk({commit},   dataproduk){
    // commit('tambahproduk', dataproduk)
    try{
      await axios.post("https://dummyjson.com/products/add", {
        headers: {
          'Content-Type': 'multipart/form-data'
        },
        params: dataproduk

      }).then(result => {
       commit("TAMBAH_PRODUK", dataproduk)
     //  this.ambildata()
     })
   }catch (error){
     alert (error);
     console.log(error);
   }
  },
  async deleteproduk({commit}, dataproduk){
    try{
      await axios.delete("https://dummyjson.com/products/1", {
        params: dataproduk
      }).then(result => {
       commit("HAPUS_PRODUK", dataproduk)
     //  this.ambildata()
     })
   }catch (error){
     alert (error);
     console.log(error);
   }
    // commit('hapusproduk')
  },
  async editproduk({commit}, dataproduk){
    try{
      await axios.put("https://dummyjson.com/products/1", {
        params: dataproduk
      }).then(result => {
       commit("UPDATE_PRODUK", dataproduk )
     //  this.ambildata()
     })
   }catch (error){
     alert (error);
     console.log(error);
   }
    // commit('hapusproduk')
  },
  async searchproduk({commit}, query){
    try{
      await axios.get(`https://dummyjson.com/products/search?q=${query}`).then(result => {
       commit("SEARCH_PRODUK", result.data.products )
     //  this.ambildata()
     })
   }catch (error){
     alert (error);
     console.log(error);
   }
    // commit('hapusproduk')
  }

}


