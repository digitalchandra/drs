import React from 'react'
import Nav from '../../components/front/Nav'
import Slider from '../../components/front/Slider'
import Landcalculator from '../../components/calculator/Landcalculator'
export default function Homepage() {
  return (
    <div>
        <Nav/>
       <Slider/>
       <Landcalculator/>
    </div>
  )
}
