import React from 'react'
import Footer from '../components/Footer'
import Header from '../components/Header'
import HomeSlider from '../components/HomeSlider'
import HomeServices from './HomeServices'
import About from './About'
import AboutJapan from './AboutJapan'
export default function Homepage() {
  
  return (
    <>
    <Header/>
      <HomeSlider/>
      <HomeServices/>
      <AboutJapan/>
      <About/>
    <Footer/>
    </>
  )
}
