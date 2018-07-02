import React, {Component} from 'react';


class Navigation extends Component {

    render() {
    console.log('render')
        return (
            <nav>

                <label htmlFor="category">Category
                    <select name="category" id="category" key={"category"} ref={(select=>this.refSelect=select)}  onChange={this.props.change} >
                        <option  value="cats">Cats</option>
                        <option value="dog">Dog</option>
                        <option value="girl">Girl</option>
                        <option value="men" >Men</option>
                        <option value="cats OR dog OR girl OR men">All</option>
                    </select>
                </label>
                <fieldset >
                    <legend>Select the data to display</legend>
                    <div>
                        <input type="checkbox" id="date" ref={(input=>this.refInputdate=input)}name="filter" value="date"  onChange={this.props.check}/>
                        <label htmlFor="date">Date</label>
                    </div>
                    <div>
                        <input type="checkbox" id="author" ref={(input=>this.refInputauthor=input)} name="filter" value="author" onChange={this.props.check}/>
                        <label htmlFor="author">Author</label>
                    </div>
                    <div>
                        <input type="checkbox" id="likes" name="filter" value="likes"/>
                        <label htmlFor="likes">Likes</label>
                    </div>
                    <div>
                        <input type="checkbox" id="comments" name="filter" value="comments"/>
                        <label htmlFor="comments">Comments</label>
                    </div>
                    <div>
                        <input type="checkbox" id="time" name="filter" value="time"/>
                        <label htmlFor="time">Time</label>
                    </div>
                </fieldset>
            </nav>

        );


    }

}

export default Navigation;