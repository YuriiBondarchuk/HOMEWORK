import React, {Component} from 'react';
import './buttons.css';

class Buttons extends Component {
    render() {
// const {children}=this.props;
        const {success, primary,info, warning, danger} = this.props;
        const className =  (success||primary||info||warning||danger) ? Object.keys(this.props)[0] : "";

        return (
                <button className={'btn '+ className}>{(className==='')?'default':className}</button>




        );
    }
}

export  default Buttons;
