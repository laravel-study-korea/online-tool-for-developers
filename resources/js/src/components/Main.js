import {Component} from "react";
import {Link} from "react-router-dom";

class Main extends Component {
    render(){
        return(
            <div
                className="md:grid lg:grid-cols-3 md:grid-cols-2 mlg:grid-cols-3 md:gap-10 space-y-6 md:space-y-0 px-10 md:px-0 mx-auto">
                <div className="bg-white p-6 shadow-md rounded-md">
                    <h3 className="text-xl text-gray-800 font-semibold mb-3">Generate Lorem Ipsum!</h3>
                    <p className="mb-2">Generate Lorem Ipsum!</p>
                    {/*<p className="my-4">blah blah blah</p>*/}
                    <Link to="/lorem-ipsum" className="text-lg font-semibold text-gray-700 bg-indigo-100 px-4 py-1 block mx-auto rounded-md">
                        Get This
                    </Link>
                </div>
            </div>
        )
    }
}

export default Main;
