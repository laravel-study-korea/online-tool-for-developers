import {Link} from "react-router-dom";

const LoremIpsum = () => {
    return (
        <>
            <Link to="/" className="m-4">
                <button className='relative bg-blue-500 text-white py-3 px-1 my-1 rounded font-bold overflow-visible'>
                    Go To List
                    <div className="absolute top-0 right-0 -mt-4 -mr-4 px-4 py-1 bg-red-500 rounded-full">1</div>
                </button>
            </Link>
            <div className="main flex border rounded-full overflow-hidden m-4 select-none inline-block">
                <div className="title py-3 my-auto px-5 bg-blue-500 text-white font-semibold mr-3">Type</div>
                <label className="flex radio p-2 cursor-pointer">
                    <input className="my-auto transform scale-125" type="radio" name="sfg" value="paragraph" defaultChecked={true}/>
                    <div className="title px-2">문단</div>
                </label>

                <label className="flex radio p-2 cursor-pointer">
                    <input className="my-auto transform scale-125" type="radio" name="sfg" value="word"/>
                    <div className="title px-2">단어</div>
                </label>

                <label className="flex radio p-2 cursor-pointer">
                    <input className="my-auto transform scale-125" type="radio" name="sfg" value="byte"/>
                    <div className="title px-2">바이트</div>
                </label>
                <input type="number" placeholder="set number" className="px-5"/>
                <button type="button" className="bg-blue-500 px-5" style={{backgroundColor: '#16a34a', color:'white'}}>generate</button>

            </div>
            <p className="lorem_content m-4">
                sample
            </p>
        </>

    );
}

export default LoremIpsum;
