import axios from 'axios'
export const state = () => ({
  dataproduk: [],
  // editedIndex: -1

})
// export const getters = {
//   getproduk(state){
//     state.dataproduk
//   }
// }
export const actions ={
   async ambildata({commit}){
    try{
       await axios.get("https://dummyjson.com/products").then(result => {

        commit("SET_PRODUCT", result.data.products)
      })
    }catch (error){
      alert (error);
      console.log(error);
    }
  },
  addproduk(tess){
    tess.commit('tambahproduk')
  },
  deleteproduk(te){
    te.commit('hapusproduk')
  }

}


export const mutations= {
  SET_PRODUCT(state, dataproduk) {
    state.dataproduk = dataproduk;
  },
  tambahproduk(state, dataproduk){
    state.dataproduk.push(dataproduk)
  },
  editproduk(state, dataproduk){
    state.dataproduk.push(dataproduk)
  },
  hapusproduk(state){
    // let index = state.dataproduk.findIndex((c) => c.id == product);
    // state.dataproduk.splice(index, 1)
    state.dataproduk.splice(this.dataproduk, 1)
  }
}
