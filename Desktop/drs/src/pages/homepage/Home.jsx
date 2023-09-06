import React from 'react'
import Header from '../../component/Header'
import Category from './Category'
import Slide from './Silde'
import Itltsads from './Itltsads'
import Services from './Services'
import Destination from './Destination'
import Clint from './Clint'
import Footer from '../../component/Footer'


export default function Home() {
  return (
    <>
        <Header/>
        <Slide/>
        <Itltsads/>
        <Services/>
        <Destination/>
        <Clint/>
     
        
        <Footer/>

    </>
  )
}
