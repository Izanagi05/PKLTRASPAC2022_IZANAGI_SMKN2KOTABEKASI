// import Cookies from 'cookie-universal-nuxt'
export const state = () =>{
  return {
    authenticated:null,
    // getcookie: null

  }
}

export const mutations = {
  // mlogin(state){
  //   state.authenticated = true
  // },
  // mlogout(state){
  //   state.authenticated = false
  //   // state.getcookie = this.$cookies.get('cookieku')
  //   this.$router.push('/login')


  // },
  msetcookie(state, payload){
    state.authenticated = payload
    // state.getcookie = this.$cookies.get('cookieku')


  }
}
export const actions = {
  setcookie({commit}){
    const cookieku =this.$cookies.get('cookieku')
    commit('msetcookie', cookieku)
  },
  login({commit}, payload){
    this.$cookies.set('cookieku', payload)
    commit('msetcookie')
    window.location.replace('/dashboard/')
  },
  logout({commit}){
    window.location.replace('/login')
    this.$cookies.remove('cookieku')
    alert('berhasil logout')
    commit('msetcookie')
    // this.$router.push('/login')
  }
}
