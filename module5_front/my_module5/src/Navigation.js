import React, {Component} from 'react';



class Navigation extends Component {

    render() {
    console.log('render')
        return (
            <nav>

                <label htmlFor="category">Category
                    <select className={'nav nav-pills'} name="category" id="category" key={"category"} ref={(select=>this.refSelect=select)}  onChange={this.props.change} >
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
                        <input type="checkbox" id="date" className={'ura'} ref={(input=>this.refInputdate=input)}name="filter" value="date"  onChange={this.props.check}/>
                        <label htmlFor="date">Date</label>
                    </div>
                    <div>
                        <input type="checkbox" id="author" className={'ura'} ref={(input=>this.refInputauthor=input)} name="filter" value="author" onChange={this.props.check}/>
                        <label htmlFor="author">Author</label>
                    </div>
                    <div>
                        <input type="checkbox" id="points" name="filter" ref={(input=>this.refInputpoints=input)} onChange={this.props.check} value="points"/>
                        <label htmlFor="points">points</label>
                    </div>
                    <div>
                        <input type="checkbox" id="comments" name="filter" ref={(input=>this.refInputcomments=input)} onChange={this.props.check} value="comments"/>
                        <label htmlFor="comments">Comments</label>
                    </div>
                    <div>
                        <input type="checkbox" id="views" name="filter" ref={(input=>this.refInputviews=input)} onChange={this.props.check} value="views"/>
                        <label htmlFor="views">views</label>
                    </div>
                    <div>
                        <input type="checkbox" id="tittle" name="filter" ref={(input=>this.refInputtittle=input)} onChange={this.props.check} value="tittle"/>
                        <label htmlFor="tittle">tittle</label>
                    </div>
                </fieldset>
            </nav>

        );


    }

}

export default Navigation;