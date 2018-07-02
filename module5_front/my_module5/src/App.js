import React, {Component, Fragment} from 'react';
import logo from './logo.svg';
import './App.css';
import Navigation from './Navigation'


class App extends Component {
    constructor() {
        super();
        this.state = {
            category: 'men',
            zapros: []



        }


    }

    componentWillMount() {
        console.log('componentWill')
        this.myZapros();
    }

    categoryClick = () => {
        var category = `${this.refNav.refSelect.value}`
        this.setState({category: `${category}`})
        this.myZapros();


    }

    myCheck=(e)=> {
        console.log('hello',this.refNav)
    }

    myZapros() {

        const category = (this.refNav === undefined) ? 'men' : this.refNav.refSelect.value;

        const url = 'https://api.imgur.com/3/gallery/search/top/all/integer?q= ' + category;

        fetch(url, {async: true, mode: "cors", headers: {"Authorization": 'Client-ID d2847c77a35ca8f'}})
            .then(response => response.json())

            .then(data => data.data.map(content => (

                {
                    link: content.link,
                    description: content.description,
                    id: content.id,
                    title: content.title,
                    points: content.points,
                    coment_count: content.comment_count,
                    sizes: content.size,
                    datetime: content.datetime,
                    views: content.views,
                    author: content.account_url

                }

            )))
            .then(data => this.setState({zapros: data}))
            .catch(error => console.log('This ERROR', error))

    }

    render() {

        return (
            <div className="App">
                <header className="App-header">
                    <img src={logo} className="App-logo" alt="logo"/>
                    <h1 className="App-title">my integration with the imgur API</h1>
                </header>
                <Fragment>
                    <Navigation change={this.categoryClick} check= {this.myCheck} ref={el => this.refNav = el}/>
                </Fragment>

                <div>
                    {
                        this.state.zapros.map(data => {
                                if (data.sizes !== undefined) {


                                    return (
                                        <div key={data.id}>
                                            <img src={data.link} alt=""/>
                                            <p>Views: {data.views}</p>

                                            <p>Title: {data.title}</p>
                                            <p> Coments: {data.coment_count}</p>
                                            <p>Points:{data.points}</p>

                                            <p>Date: <b>{new Date((data.datetime * 1000)).toDateString()}</b></p>
                                            <p>Author: {data.author}</p>
                                        </div>

                                    )
                                }
                                else return null


                            }
                        )
                    }
                </div>
            </div>


        );
    }
}

export default App;




