export default function({store, redirect}){


  // if(!store.state.userr.getcookie){

  //   console.log('ini middleware')
  //   return redirect('/login')
  // }else{
  //   console.log('sedang login')

  // }
  store.dispatch('userr/setcookie')
  if(!store.state.userr.authenticated){

    return redirect('/login')
  }else{
    // console.log('sedang login')
    return redirect('/dashboard/')

  }

}
