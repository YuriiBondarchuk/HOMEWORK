import React, {Component, Fragment} from 'react';
import logo from './logo.svg';
import './App.css';
import Navigation from './Navigation'





class App extends Component {
    constructor() {
        super();
        this.state = {
            category: 'men',
            zapros:[],
            author: 'author',
            time: "time",
            likes: 'likes',
            coments_count: 'coments',
            img: 'default',

        }


    }
    categoryClick=(e)=>{
var category = `${this.refNav.refSelect.value}`
    this.setState({category: `${category}`})

        this.myZapros(category);



    }

    myZapros(cat) {
        // (category===undefined)
        const sel = `${this.refNav.refSelect.value}`;
      const {category} = this.state;alert(category)
        var name = 'ura'
        const url = 'https://api.imgur.com/3/gallery/search/top/all/integer?q'+'='+category;


        fetch(url, {async:true, mode: "cors", headers: {"Authorization": 'Client-ID d2847c77a35ca8f'}})
            .then(response => response.json())
            .then(data => data.data.map(content => (

                {
                    link: content.link,
                    description : content.description,
                    id : content.id,
                    title : content.title,
                    points : content.point
                }

            )))
            .then(data => this.setState({zapros: data}))
            .catch(error=>console.log('This ERROR', error))

    }


    componentWilMount() {
//
alert   ('Did')
        this.myZapros(this.state.category);




     }


    render() {
        console.log('render App')



        return (
            <div className="App">
                <header className="App-header">
                    <img src={logo} className="App-logo" alt="logo"/>
                    <h1 className="App-title">my integration with the imgur API</h1>
                </header>
                <Fragment>
                    <Navigation change={this.categoryClick} ref={el=>this.refNav=el}/>
                </Fragment>

                <div>
                    {
                        this.state.zapros.map(data=>
                            {
                             return <img src={data.link} alt="" key={data.id}/>
                            }
                        )
                    }
                </div>
            </div>


        );
    }
}

export default App;




