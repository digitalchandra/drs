import './App.css';
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap/dist/js/bootstrap.js'
import {BrowserRouter, Routes, Route} from 'react-router-dom'
import Homepage from './homepage/Homepage';
import Services from './pages/Services';
import AbroadStudy from './pages/AbroadStudy';
function App() {

  return (
    <>
    <BrowserRouter>
    <div className="App">
        <Routes>
          <Route path="/" element={<Homepage/>}/>
          <Route path ="/services" element={<Services/>} />
          <Route path ="/AbroadStudy" element={<AbroadStudy/>}/>
        </Routes>
    </div>
    </BrowserRouter>
     </>
  );
}

export default App;
