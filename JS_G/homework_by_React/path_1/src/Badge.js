import React, {Component} from 'react';
import './badge.css';

class Badge extends Component {
    render() {
// const {children}=this.props;
        const {defaults, success, primary,info, warning, danger,children} = this.props;
        const className =  (defaults||success||primary||info||warning||danger) ? Object.keys(this.props)[0] : "";

        return (
            <span className={'badge badge-'+ className}>{children}</span>




        );
    }
}

export  default Badge;
