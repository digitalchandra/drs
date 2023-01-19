import './App.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.js';
import {BrowserRouter, Routes,Route} from 'react-router-dom';
import Dashboard  from './pages/Dashboard';
import NewPost from './pages/NewPost';
import UpdateItems from './pages/UpdateItems';
import Homepage from './forntend/pages/Homepage';
function App() {
  return (
    <div className="App">
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<Homepage/>}/>
          <Route path="/dashboard" element={<Dashboard/>}/>
          <Route path="/addpost" element={<NewPost/>}/>
          <Route path="/updateitems/:_id" element={<UpdateItems/>}/>
        </Routes>
       
      </BrowserRouter>
    </div>
  );
}

export default App;
