import React, {Component} from 'react';
import './products.css'

class Product extends Component {
    constructor() {

        super();
        this.state = {
            message: '',
            display: 'none'
        }
    }

    modalMessage = (value) => {


        this.setState({message: value, display: 'view'})
    }
    closeModal = () => {


        this.setState({display: 'none'})
    }


    render() {


        const {products} = this.props;
        this.message = ''

        return (
            <div>
                <div className={this.state.display}>
                <div id='modalMessage' className={'modalMessage'}>
                    {this.state.message}
                <br/>
                    <button onClick={() => this.closeModal('none')}>Close</button>
                </div>
                </div>
                <table className={'tableProducts'}>
                    <tbody>
                    <tr>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Description</td>
                    </tr>
                    <tr>
                        <td>{products[0].name}</td>
                        <td>{products[0].price}</td>
                        <td>
                            <button onClick={() => this.modalMessage(products[0].description)}>Character</button>
                        </td>
                    </tr>
                    <tr>
                        <td>{products[1].name}</td>
                        <td>{products[1].price}</td>
                        <td>
                            <button onClick={() => this.modalMessage(products[1].description)}>Character</button>
                        </td>
                    </tr>
                    <tr>
                        <td>{products[2].name}</td>
                        <td>{products[2].price}</td>
                        <td>
                            <button onClick={() => this.modalMessage(products[2].description)}>Character</button>
                        </td>

                    </tr>
                    </tbody>

                </table>
            </div>


        );
    }
}

export default Product;
