import React, {Component, Fragment} from 'react';
import './List.css'

class List extends Component {
    constructor() {
        super();
        this.state = {
            sneakers : [
                'adidas', 'Stan', 'Smith', 'AlfaBOUNCE',
                'Superstar', 'stan_smith_adidas', 'alpfabounce_adidas', 'superstar_adidas', 'Nike', 'Air-Max', 'Air-Force',
                'Huarache', 'Air ZOOM Pegasus ', 'Air Max', 'air-essential-mens-shoe', 'jd_030664_a', 'air-huarache-ultra-shoe',
                'ML574SEAML574SEA', 'MRL247RBMRL247RB', 'Icra-Trainer', 'Blaze Black', 'Suede Classic CITI', 'Vikky Platform', ' ST Runner NL'
            ],
            list_seach:[],
            basket:0
        }

    }
clickChange=()=>{



    this.setState({list_seach: this.state.sneakers.map((value)=>{
          return  value.indexOf(this.refInput.value)===-1 ?  null : value
    })})
}
    render() {
        console.log('Hello',this.refInput==null)
        console.log(this.state.list_seach)


        return (
            <Fragment>
                <label htmlFor="seach">Enter words to search for </label>
                <input type="text" name={'seach'} id={'seach'} ref={input=>this.refInput=input} onChange={this.clickChange}/>

                <h3> List sneakers: </h3>
                <ol >
                    {
                        this.state.list_seach.length === 0 ?   this.state.sneakers.map((value, key) => {
                            return (
                                <li key={key}>{value}</li>

                            )}) : this.state.list_seach.map ((value, key) => {
                            return (
                                value===null ? '' : <li key={key}>{value} <button>купить</button></li>

                            )})


                    }
                </ol>
            </Fragment>

        )
    }
}

export default List;