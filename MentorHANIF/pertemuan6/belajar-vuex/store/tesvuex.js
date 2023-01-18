export const state = () => ({
  awal: 0
})

export const mutations = {
  plus(state){
    state.awal++
  },
  min(state){
    state.awal--
  }
}

export const actions = {
  tambah (tes) {
    tes.commit('plus')
  },
  kurang (tes) {
    tes.commit('min')
  }

}
// export const getters = {
//   tampil(){
//     return this.$store.state.awal
//   }
// }
