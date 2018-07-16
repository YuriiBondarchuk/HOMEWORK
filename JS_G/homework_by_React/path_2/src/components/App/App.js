import React, {Component} from 'react';
import logo from '../../logo.svg';
import './App.css';
import Product from "../Product/Product";

import Choice from "../Choice/Choice";


class App extends Component {

    constructor() {

        super();
        this.state = {
            products: [
                {
                    name: 'adidas Samba® Classic',
                    price: '$62.21',
                    description: 'Slightly more athletic than it\'s Originals brother—with\n' +
                    'an extended tongue geared for indoor play—the Samba®\n' +
                    'Classic from adidas® continues to provide that retro vibe in a solid,\n' +
                    'soccer-ready sneaker!'
                },
                {
                    name: 'adidas NMD_R1',
                    price: '$130.00',
                    description: 'Breathable and stretchable Primeknit upper offers a comfortable fit.',
                },
                {
                    name: 'adidas adizero Defiant Bounce',
                    price: '$100.00',
                    description: 'Features durable TPU reinforcement and\n' +
                    'engineered midfoot stabilizing elements for lightweight support.'
                }
            ],
            addproducts:
                {
                    tovar_one:
                        {
                            name: '',
                            price: 0,
                            description: ''
                        },
                    tovar_two: {
                        name: '',
                        price: 0,
                        description: ''
                    },
                    tovar_three: {
                        name: '',
                        price: 0,
                        description: ''
                    }


                }
        }
    }

    Character = () => {
        console.log('ura')

        // this.setState ({addproducts[0].name : 'qqqqqqqqq'})

    }
    Buy = () => {
        const {products} = this.state
        this.setState({
            addproducts: {
                tovar_one: {name: products[0].name, description: products[0].description, price: products[0].price},
                tovar_two: {name: products[1].name, description: products[1].description, price: products[1].price},
                tovar_three: {name: products[2].name, description: products[2].description, price: products[2].price}
            }
        })

    }

    render() {

        console.log('render');


        // console.log(this.state.products[0].name);
        const {products} = this.state;
        // const {addproducts} = this.state;


        // console.log(products[0].name);
        return (

            <div className="App">

                <header className="App-header">
                    <img src={logo} className="App-logo" alt="logo"/>
                    <h1 className="App-title">Welcome to React</h1>
                </header>

                <div>

                    <Product
                        products={products}
                    />
                </div>
                <div className={"choice"}>

                    < Choice Buy={this.Buy}/>

                </div>


                <div className={"basket"}>
                    <h3>Basket</h3>
                    <table className={'basket-table'}>
                        <tbody>
                        <tr>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Description</td>
                        </tr>
                        <tr>
                        <td>{this.state.addproducts.tovar_one.name}</td>
                        <td>{this.state.addproducts.tovar_one.price}</td>
                        <td>{this.state.addproducts.tovar_one.description}</td>

                        </tr>
                        <tr>
                        <td>{this.state.addproducts.tovar_two.name}</td>
                        <td>{this.state.addproducts.tovar_two.price}</td>
                        <td>{this.state.addproducts.tovar_two.description}</td>

                        </tr>
                        <tr>
                        <td>{this.state.addproducts.tovar_three.name}</td>
                        <td>{this.state.addproducts.tovar_three.price}</td>
                        <td>{this.state.addproducts.tovar_three.description}</td>



                        </tr>
                        </tbody>
                    </table>

                </div>




            </div>

        );
    }
}

export default App;
