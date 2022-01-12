import React from 'react';
import ReactDOM from 'react-dom';
import Login from "./components/Login";

function App() {
    return (
        <div className="container m-auto">
            <Login/>
        </div>
    );
}

export default App;

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}
