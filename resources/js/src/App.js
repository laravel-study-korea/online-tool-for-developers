import React from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter, Route, Routes} from 'react-router-dom';

import Main from "./components/Main";
import Login from "./components/Login";

function App() {
    return (
        <div className="w-full">
            <BrowserRouter>
                <Routes>
                    <Route path="/" element={<Main />}/>
                    <Route path="/login" element={<Login />}/>
                </Routes>
            </BrowserRouter>
        </div>
    );
}

export default App;

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}
