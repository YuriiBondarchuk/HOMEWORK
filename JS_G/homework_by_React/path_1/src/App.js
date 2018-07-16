import React, {Component} from 'react';
import logo from './logo.svg';
import './App.css';
import Buttons from './Buttons';
import Alerts from './Alerts';
import Badge from './Badge';


class App extends Component {
    render() {
        return (

            <div className="App">

                <header className="App-header">
                    <img src={logo} className="App-logo" alt="logo"/>
                    <h1 className="App-title">Welcome to React</h1>
                </header>
                <div>
                    <h2>Button Component.</h2>


                    <Buttons >Secondary</Buttons>
                    <Buttons success>Success</Buttons>
                    <Buttons primary>Primary</Buttons>
                    <Buttons info>Info</Buttons>
                    <Buttons warning>Warning</Buttons>
                    <Buttons danger>Danger</Buttons>
                    <hr/>
                </div>
                <div>
                    <h2>Alerts Component.</h2>
                    <Alerts success>
                        <strong>Well done!</strong>
                        You successfully read this important alert message.
                    </Alerts>
                    <Alerts info >
                        <strong>Heads up!</strong>
                        This alert needs your attention, but it's not super important.
                    </Alerts>
                    <Alerts warning >
                        <strong>Warning!</strong>
                        Better check yourself, you're not looking too good.
                    </Alerts>
                    <Alerts danger >
                        <strong>Oh snap!</strong>
                        Change a few things up and try submitting again.
                    </Alerts>
                    <hr/>
                </div>
                <div>
                   <h2>Badge Component.</h2>
                    <Badge defaults>Default</Badge>
                    <Badge success>Success</Badge>
                    <Badge primary>Primary</Badge>
                    <Badge info>Info</Badge>
                    <Badge warning>Warning</Badge>
                    <Badge danger>Danger</Badge>
                    <hr/>
                    <hr/>
                </div>
            </div>
        );
    }
}

export default App;
