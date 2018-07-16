import React, {Component} from 'react';
import { Link} from 'react-router';
import './Comments.css'


class Comments extends Component {
    constructor() {
        super();
        this.state={
            comments:[],
            image_url:'',
            image_title:''
        }
    }
    myZapros = () => {
        const {location} = this.props;
        const {image_id} = location.query;



        const url = 'https://api.imgur.com/3/gallery/'+image_id+'/comments/top ' ;

        fetch(url, {async: true, mode: "cors", headers: {"Authorization": 'Client-ID d2847c77a35ca8f'}})
            .then(response => response.json())

            .then(data => data.data.map(content => (

                {
                   comments: content.comment

                }

            )))
            .then(data => this.setState({comments: data}))
            .catch(error => console.log('This ERROR', error))

        const url_url = 'https://api.imgur.com/3/image/'+image_id;

        fetch(url_url, {async: true, mode: "cors", headers: {"Authorization": 'Client-ID d2847c77a35ca8f'}})
            .then(response => response.json())

            .then(data => this.setState({image_url:data.data.link,image_title:data.data.title}))
            .catch(error => console.log('This ERROR', error))
    }
    componentWillMount() {
        console.log('componentWill')
        this.myZapros();

    }


    render(){


        return (
                        <div>



                            <Link to= '/'><img src="/static/media/back.d7fda2c6.png"  className={'back'} alt=""/></Link>
                            <p className={'bg-info'}>{this.state.image_title}</p>
                            <img src={this.state.image_url} className={'img_c'} alt=""/>
                            <span>Coments:</span><br/><br/>
                            <ul className={"list-group"}>{this.state.comments.map((value,i)=>{
                                return <li className={"list-group-item list-group-item-success"} key={i}>{value.comments}</li>
                            })}</ul>
                        </div>




        )
    }



}




export default Comments