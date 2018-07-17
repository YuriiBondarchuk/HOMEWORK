import React, {Component, Fragment} from 'react';
import logo from './logo.svg';
import './App.css';
import Navigation from './Navigation';
import {Link} from 'react-router';
import InfiniteScroll from 'react-infinite-scroller';


class App extends Component {


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
            zapros: [],
            pagestart: 1,
            pageend: true


        }


    }

    handleend = () => {
        console.log('sad');
        this.state.pagestart !==3 ? this.setState({pagestart : this.state.pagestart + 1 }) : this.setState({pageend:false})

        this.myZapros();

    }

    myZapros = () => {
        // console.log('zapros')
        // console.log(this.state.zapros.length === 0)
        const category = (this.refNav === undefined) ? 'men' : this.refNav.refSelect.value;

        const url = `https://api.imgur.com/3/gallery/search/top/all/${this.state.pagestart}?q= ` + category;

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
            .then(data => this.setState({
                zapros: (this.state.zapros.length === 0) ? data : [...this.state.zapros, ...data]
            }))
            .catch(error => console.log('This ERROR', error))


    }


    componentWillMount() {
        // console.log('componentWill')
        this.myZapros();

    }


    categoryClick = () => {
        var category = `${this.refNav.refSelect.value}`
        this.setState({category: `${category}`, zapros: [], pagestart: 1})
        this.myZapros();


    }

    myCheck = () => {
        const {refInputauthor, refInputcomments, refInputdate, refInputpoints, refInputviews, refInputtittle} = this.refNav

        return (
            refInputauthor.checked ? this.setState({author: {display: 'view'}}) : this.setState({author: {display: 'none'}}) ,
                refInputcomments.checked ? this.setState({comments: {display: 'view'}}) : this.setState({comments: {display: 'none'}}),
                refInputdate.checked ? this.setState({date: {display: 'view'}}) : this.setState({date: {display: 'none'}}),
                refInputpoints.checked ? this.setState({points: {display: 'view'}}) : this.setState({points: {display: 'none'}}),
                refInputviews.checked ? this.setState({views: {display: 'view'}}) : this.setState({views: {display: 'none'}}),
                refInputtittle.checked ? this.setState({tittle: {display: 'view'}}) : this.setState({tittle: {display: 'none'}})
        )
    }


    render() {

        return (
            <InfiniteScroll
                pageStart={0}
                loadMore={this.handleend}
                initialLoad={false}
                isReverse={false}

                hasMore={this.state.pageend}
                loader={<div className="loader" key={0}>Loading ...</div>}
            >
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

                                            <div key={data.sizes+Math.random()} className={'main'}>
                                                <p className={this.state.tittle.display}><span
                                                    className={'bg-info'} id={'title-info'}>Title: {data.title}</span></p>
                                                <Link to={"/Comments?image_id=" + data.id + "&image_url=" + data.link}> <img
                                                    src={data.link} alt=""/></Link><br/>
                                                <div className={'alert alert-info'} id={'alert-info'}>
                                                    <div className={'top-info'}>
                                                        <p className={this.state.date.display}><b>Date: </b>
                                                            <u>{new Date((data.datetime * 1000)).toDateString()}</u></p>
                                                        <br/>
                                                        <p className={this.state.author.display}><b>Author: </b>
                                                            <u>{data.author}</u></p>
                                                    </div>

                                                    <div className={'bottom-info'}>
                                                        <p className={this.state.views.display}><b>Views:</b>
                                                            <u>{data.views}</u></p>
                                                        <p className={this.state.comments.display}>
                                                            <b>Coments: </b><u>{data.coment_count}</u></p>
                                                        <p className={this.state.points.display}>
                                                            <b>Points:</b><u>{data.points}</u></p>
                                                    </div>

                                                </div>
                                            </div>


                                        )
                                    }
                                    else return null


                                }
                            )
                        }
                    </div>
                </div>
            </InfiniteScroll>


        );
    }
}

export default App;




