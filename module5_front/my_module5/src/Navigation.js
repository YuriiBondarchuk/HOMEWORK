import React, {Component} from 'react';
import './Navigation.css'


class Navigation extends Component {

    render() {
        // console.log('render')
        return (
            <nav className={'navbar navbar-expand-lg navbar-light '}>
                <div className={'collapse navbar-collapse'}>
                    <label htmlFor="category">Category
                        <select className={'form-control'} defaultValue={'men'} name="category" id="category"
                                key={"category"} ref={(select => this.refSelect = select)} onChange={this.props.change}>
                            <option value="cats">Cats</option>
                            <option value="dog">Dog</option>
                            <option value="girl">Girl</option>
                            <option value="men">Men</option>
                            <option value="cats OR dog OR girl OR men">All</option>
                        </select>
                    </label>
                </div>
                <fieldset className={'collapse navbar-collapse right'}>
                    <legend>Select the data to display</legend>
                    <div>
                        <input type="checkbox" id="date" className={'form-check form-check-inline'}
                               ref={(input => this.refInputdate = input)} name="filter" value="date"
                               onChange={this.props.check}/>
                        <label htmlFor="date">Date</label>

                        <input type="checkbox" id="author" className={'form-check form-check-inline'}
                               ref={(input => this.refInputauthor = input)} name="filter" value="author"
                               onChange={this.props.check}/>
                        <label htmlFor="author">Author</label>

                        <input type="checkbox" id="points" className={'form-check form-check-inline'} name="filter"
                               ref={(input => this.refInputpoints = input)} onChange={this.props.check} value="points"/>
                        <label htmlFor="points">points</label>

                        <input type="checkbox" id="comments" className={'form-check form-check-inline'} name="filter"
                               ref={(input => this.refInputcomments = input)} onChange={this.props.check}
                               value="comments"/>
                        <label htmlFor="comments">Comments</label>

                        <input type="checkbox" id="views" name="filter" className={'form-check form-check-inline'}
                               ref={(input => this.refInputviews = input)} onChange={this.props.check} value="views"/>
                        <label htmlFor="views">views</label>

                        <input type="checkbox" id="tittle" name="filter" className={'form-check form-check-inline'}
                               ref={(input => this.refInputtittle = input)} onChange={this.props.check} value="tittle"/>
                        <label htmlFor="tittle">tittle</label>
                    </div>
                </fieldset>
            </nav>

        );


    }

}

export default Navigation;