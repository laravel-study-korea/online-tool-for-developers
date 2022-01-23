import {Component} from "react";
import {Link} from "react-router-dom";

class Main extends Component {
    render(){
        return(
            <div className="min-h-screen bg-indigo-50">
                <nav className="w-full bg- bg-gradient-to-tr from-indigo-600 to-green-600 py-6 px-6 md:px-20 xl:px-60">
                    <div className="relative">
                        <div className="inline-block">
                            <h1 className="text-white text-2xl font-semibold ">Online Tool For Developers</h1>
                        </div>
                        <div className="inline-block px-10">
                            <div className="hidden lg:block">
                                <span className="text-xl text-white font-thin cursor-pointer">Search : </span>
                                <input type="text" className="py-1 px-2 outline-none rounded-md w-60"/>
                            </div>
                            {/*<button className="border border-white px-4 py-1 rounded-md text-white text-xl">
                            {/*</button>*/}
                        </div>
                        <div className="absolute top-1/2 -translate-y-1/2 right-0 text-zero">
                            <Link to="/login" className="inline-block w-100 h-100">
                                <svg xmlns="http://www.w3.org/2000/svg" className="h-8 w-8 text-white float-right" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                          d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                                </svg>
                            </Link>

                        </div>
                    </div>
                </nav>
                <main>
                    <div className="container w-full mx-auto py-20">
                        <div
                            className="md:grid lg:grid-cols-3 md:grid-cols-2 mlg:grid-cols-3 md:gap-10 space-y-6 md:space-y-0 px-10 md:px-0 mx-auto">
                            <div className="bg-white p-6 shadow-md rounded-md">
                                <h3 className="text-xl text-gray-800 font-semibold mb-3">Tool Title</h3>
                                <p className="mb-2">This tools is for someone who want to generate what the heck.</p>
                                <p className="my-4">blah blah blah</p>
                                <button
                                    className="text-lg font-semibold text-gray-700 bg-indigo-100 px-4 py-1 block mx-auto rounded-md">Get This
                                </button>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        )
    }
}

export default Main;
