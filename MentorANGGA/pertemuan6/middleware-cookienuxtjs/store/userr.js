export const state = () =>{
  return {
    authenticated:false
  }
}

export const mutations = {
  tes(state){
    state.authenticated = true
  }
}
export const actions = {
  kkk(tess){
    tess.commit('tes')
  }
}
