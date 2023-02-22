import axios from 'axios'

export const state = () => ({
  dataapi: [],
});


export const mutations= {
  SET_DATAKU(state, dtap) {
    state.dataapi = dtap
  },
  TAMBAH_DATAKU(state, dtap) {
    state.dataapi.push(dtap)
  }


}
export const actions={
  async ambil({commit}){
    try {
      await axios.get("http://127.0.0.1:8000/tampil").then(result => {

      commit("SET_DATAKU", result.data)
    })
    } catch (error) {
      alert (error);
      console.log(error);
    }
  },

  async tambah({commit}, dtap){
    try {
      await axios.post("http://127.0.0.1:8000/tampil", {params:dtap}).then(result => {

      commit("TAMBAH_DATAKU", dtap)
    })
    } catch (error) {
      alert (error);
      console.log(error);
    }
  }
}
