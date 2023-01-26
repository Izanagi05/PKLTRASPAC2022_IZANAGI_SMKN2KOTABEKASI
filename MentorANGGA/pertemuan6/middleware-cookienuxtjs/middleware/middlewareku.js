export default function({store, redirect}){

  if(!store.state.userr.authenticated){

    console.log('ini middleware')
    return redirect('/login')
  }
  // console.log(tess)

}
