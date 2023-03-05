import './App.css';
import Dashboard from './admin/Pages/Dashboard';
import {BrowserRouter, Routes, Route} from 'react-router-dom'
import Editpost from './admin/Pages/Editpost'
import Post from './admin/Pages/Post';
import AdminNav from './admin/Navigation/AdminNav'


function App() {
  return (
    <div className="App">
      <BrowserRouter>
        <Routes>
        <Route path="/" element={<Dashboard/>}/>
          <Route path="/" element={<AdminNav/>}/>
          <Route path="/editpost/:id" element={<Editpost/>}/> 
          <Route path="/post" element={<Post/>}/> 
        </Routes>
      </BrowserRouter>
     
    </div>
  );
}

export default App;
