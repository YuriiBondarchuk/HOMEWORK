import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import registerServiceWorker from './registerServiceWorker';
import {Router, Route, browserHistory} from 'react-router';
import Comments from './Comments';

ReactDOM.render(
    <Router history={browserHistory}>
        <Route path="/" component={App} ref={"refUra"}/>
        <Route path="/Comments" component={Comments}/>

    </Router>
    , document.getElementById('root'));
registerServiceWorker();
