import React, {Component} from 'react';
import './alerts.css';

class Alerts extends Component {
    render() {
// const {children}=this.props;
        const {success, primary,info, warning, danger,children} = this.props;
        const className =  (success||primary||info||warning||danger) ? Object.keys(this.props)[0] : "";

        return (
            <div className={'alert alert-'+ className}>{children}</div>




        );
    }
}

export  default Alerts;
