import React, {Component} from 'react';


class Choice extends Component {

    render() {
const {Buy}=this.props;

        return (


                <button onClick={Buy}>Buy</button>


        );
    }
}

export default Choice;
