import React, {Component} from 'react';
// import logo from './logo.svg';
import './App.css';

class App extends Component {
    constructor() {
        super();
        this.state = {
            category: 'all',
            data: 'data',
            author: 'author',
            time: "time",
            likes: 'likes',
            coments_count: 'coments',
            img:'default'
        }
        (async function() {



            const url = 'https://api.imgur.com/3/gallery/search/top/all/integer?q=cats';
             await fetch(url,{ headers:{Authorization:'Client-ID d2847c77a35ca8f'}}).then(function (response) {
                // console.log(response.json());

                return response.json();

            }).then(function (data) {
                // console.log(data);

                return data });


            return this.setState({img:"URA"})}) ;
        console.log(this.state);



    }
    componentWillMount(){
        // const {img} = this.state;

    }


    render() {


        return (
            <div>
                <p>
                    {/*{console.log(this.state.img)}*/}
                </p>
            </div>


        );
    }
}

export default App;


// import React, { Component } from 'react';
// import Request from 'react-http-request';
//
// export default class App extends Component {
//     render() {
//         return (
//             <Request
//                 url='https://api.imgur.com/3/account/{{yuriibondarchuk}}'
//                 method='get'
//                 accept='application/data'
//                 verbose={true}
//             >
//                 {
//                     ({error, result, loading,Response}) => {
//                         if (loading) {
//
//                             // return <div>Hi</div>
//                             return <div>loading...</div>;
//                         } else {
//                             console.log(result.text )
//                             return <React.Fragment>{result.text} </ React.Fragment>
//                         }
//                     }
//                 }
//             </Request>
//         );
//     }
// }


// {/*<div className="App">*/}
// {/*<header className="App-header">*/}
// {/*<img src={logo} className="App-logo" alt="logo"/>*/}
// {/*<h1 className="App-title">my integration with the imgur API</h1>*/}
// {/*</header>*/}
// {/*<nav>*/}
// {/*<label htmlFor="category">Category*/}
// {/*<select name="category" id="category">*/}
// {/*<option value="cats">Cats</option>*/}
// {/*<option value="dog">Dog</option>*/}
// {/*<option value="girl">Girl</option>*/}
// {/*<option value="men">Men</option>*/}
// {/*</select>*/}
// {/*</label>*/}
// {/*<fieldset>*/}
// {/*<legend>Select the data to display</legend>*/}
// {/*<div>*/}
// {/*<input type="checkbox" id="date" name="filter" value="date"/>*/}
// {/*<label htmlFor="date">Date</label>*/}
// {/*</div>*/}
// {/*<div>*/}
// {/*<input type="checkbox" id="author" name="filter" value="author"/>*/}
// {/*<label htmlFor="author">Author</label>*/}
// {/*</div>*/}
// {/*<div>*/}
// {/*<input type="checkbox" id="likes" name="filter" value="likes"/>*/}
// {/*<label htmlFor="likes">Likes</label>*/}
// {/*</div>*/}
// {/*<div>*/}
// {/*<input type="checkbox" id="comments" name="filter" value="comments"/>*/}
// {/*<label htmlFor="comments">Comments</label>*/}
// {/*</div>*/}
// {/*<div>*/}
// {/*<input type="checkbox" id="time" name="filter" value="time"/>*/}
// {/*<label htmlFor="time">Time</label>*/}
// {/*</div>*/}
// {/*</fieldset>*/}
// {/*</nav>*/}
// {/*</div>*/}