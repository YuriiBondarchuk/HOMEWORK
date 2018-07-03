import React, {Component, Fragment} from 'react';
import logo from './logo.svg';
import './App.css';
import Navigation from './Navigation';
import {Link} from 'react-router';



class App extends Component {
    myZapros = () => {

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


    componentWillMount() {
        console.log('componentWill')
        this.myZapros();

    }


    constructor() {
        super();
        this.state = {
            category: 'men',
            author: {display: 'none'},
            date: {display: 'none'},
            views: {display: 'none'},
            points: {display: 'none'},
            comments: {display: 'none'},
            tittle: {display: 'none'},
            zapros: []


        }


    }

    categoryClick = () => {
        var category = `${this.refNav.refSelect.value}`
        this.setState({category: `${category}`})
        this.myZapros();


    }

    myCheck = () => {
        const {refInputauthor, refInputcomments, refInputdate, refInputpoints, refInputviews, refInputtittle} = this.refNav

        return (
            refInputauthor.checked ? this.setState({author: { display: 'view'}}) : this.setState({author: { display: 'none'}}) ,
                refInputcomments.checked ? this.setState({comments: {display: 'view'}}) : this.setState({comments: { display: 'none'}}),
                refInputdate.checked ? this.setState({date: {display: 'view'}}) : this.setState({date: { display: 'none'}}),
                refInputpoints.checked ? this.setState({points: {display: 'view'}}) : this.setState({points: { display: 'none'}}),
                refInputviews.checked ? this.setState({views: {display: 'view'}}) : this.setState({views: { display: 'none'}}),
                refInputtittle.checked ? this.setState({tittle: {display: 'view'}}) : this.setState({tittle: { display: 'none'}})
        )
    }


    render() {

        return (
            <div className="App">
                <header className="App-header">
                    <img src={logo} className="App-logo" alt="logo"/>
                    <h1 className="App-title">my integration with the imgur API</h1>
                </header>
                <Fragment>
                    <Navigation change={this.categoryClick} check={this.myCheck} ref={el => this.refNav = el}/>
                </Fragment>

                <div>
                    {
                        this.state.zapros.map(data => {
                                if (data.sizes !== undefined) {


                                    return (
                                        <div key={data.id}>
                                            <Link to={"/Comments?image_id="+data.id+"&image_url="+data.link} many={'ura'}> <img src={data.link} alt=""/></Link>
                                            <p className={this.state.views.display}>Views: {data.views}</p>

                                            <p className={this.state.tittle.display}>Title: {data.title}</p>
                                            <p className={this.state.comments.display}> Coments: {data.coment_count}</p>
                                            <p className={this.state.points.display}>Points:{data.points}</p>
                                            <p className={this.state.date.display}>Date: <b>{new Date((data.datetime * 1000)).toDateString()}</b>
                                            </p>
                                            <p className={this.state.author.display}>Author: {data.author}</p>
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




