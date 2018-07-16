import React, {Component} from 'react';
import logo from './logo.svg';
import './App.css';

class App extends Component {


    clickchecklist = () => {

        let arr_input = [...document.getElementsByClassName('listChek')];
        let check_input = [...document.getElementsByClassName('mainCheck')];
        arr_input[0].checked || arr_input[1].checked || arr_input[2].checked || arr_input[3].checked === true ? check_input[0].checked = true : check_input[0].checked = false


    }

    clickcheckmain = () => {

        let arr_input = [...document.getElementsByClassName('listChek')];
        let check_input = [...document.getElementsByClassName('mainCheck')];
        check_input[0].checked === true ? arr_input.map((value) => {
            return value.checked = true
        }) : arr_input.map((value) => {
            return value.checked = false
        })


    }

    render() {

        return (
            <div className="App">
                <header className="App-header">
                    <img src={logo} className="App-logo" alt="logo"/>
                    <h1 className="App-title">Welcome to React</h1>
                </header>
                <div onClick={this.clickchecklist}>

                    <ol>
                        <li>
                            <input id={'one'} type="checkbox" className={'listChek'}/>
                        </li>

                        <li>
                            <input id={'two'} type="checkbox" className={'listChek'}/>
                        </li>

                        <li>
                            <input id={'three'} type="checkbox" className={'listChek'}/>
                        </li>
                        <li>
                            <input id={'four'} type="checkbox" className={'listChek'}/>
                        </li>

                    </ol>

                </div>
                <div>
                    <label htmlFor="five">Выбрать всё</label>
                    <input id={'five'} type="checkbox" className={'mainCheck'} onClick={this.clickcheckmain}/>
                </div>

            </div>
        );
    }
}

export default App;
