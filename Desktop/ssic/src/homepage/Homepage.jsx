import React from 'react'
import Footer from '../components/Footer'
import Header from '../components/Header'
import HomeSlider from '../components/HomeSlider'
import HomeServices from './HomeServices'
import AboutJapan from './AboutJapan'
import HomeDestination from './HomeDestination'
import HomeBlog from './HomeBlog'

export default function Homepage() {
  
  return (
    <>
    <Header/>
      <HomeSlider/>
      <HomeServices/>
      <AboutJapan/>
      <HomeDestination/>
      <HomeBlog/>
      <Footer/>
    
    </>
  )
}
