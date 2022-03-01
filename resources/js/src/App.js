import React from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter, Route, Routes} from 'react-router-dom';

import Main from "./components/Main";
import Login from "./components/Login";
import LoremIpsum from "./components/LoremIpsum";
import Nav from "./components/Nav";

function App() {
    return (
        <div className="w-full">
            <BrowserRouter>
                <Nav/>
                <Routes>
                    <Route path="/" element={<Main />}/>
                    <Route path="/login" element={<Login />}/>
                    <Route path="/lorem-ipsum" element={<LoremIpsum />}/>
                </Routes>
            </BrowserRouter>
        </div>
    );
}

export default App;

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}
