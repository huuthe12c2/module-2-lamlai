
import './4.scss';
import 'bootstrap/dist/css/bootstrap.css';
import 'font-awesome/css/font-awesome.min.css';
import React, { Component } from 'react';

class Card extends Component {
    constructor() {
        super();

        this.state = {
            showMenu: false,
            showMenu2: false,
        };

        this.showMenu = this.showMenu.bind(this);
        this.showMenu2 = this.showMenu2.bind(this);
        this.closeMenu = this.closeMenu.bind(this);
        this.closeMenu2 = this.closeMenu2.bind(this);
    }

    showMenu(event) {
        event.preventDefault();

        this.setState({ showMenu: true }, () => {
            document.addEventListener('click', this.closeMenu);
        });
    }
    showMenu2(event) {
        event.preventDefault();

        this.setState({ showMenu2: true }, () => {
            document.addEventListener('click', this.closeMenu2);
        });
    }

    closeMenu() {
        this.setState({ showMenu: false }, () => {
            document.removeEventListener('click', this.closeMenu);
        });
    }
    closeMenu2() {
        this.setState({ showMenu2: false }, () => {
            document.removeEventListener('click', this.closeMenu2);
        });
    }

    render() {
        return (
            <div className="benner-header">
                <h2 className="Title-benner">What are you looking for ?</h2>
                <div className="desc-benner">Explore restaurants, bars, and cafés by locality</div>
                <form className="form-benner">
                    <div className="row">
                        <div className="col-md-3">
                            <input className="single-text inp-title" type="text" placeholder="Title"></input>
                        </div>
                        <div className="col-md-3">
                            <div className="dropdown-cate single-text">
                                <a onClick={this.showMenu} className="navbar-brand btn-imenu" href="#">All Categories<i className="fa fa-chevron-down size-chevron" aria-hidden="true"></i></a>
                                <div className="dropdown-menu" >
                                    <a className="dropdown-item item-menu" href="#">Home-Map</a>
                                    <a className="dropdown-item item-menu" href="#">Home-Videos</a>
                                    <a className="dropdown-item item-menu" href="#">Home-Slider</a>
                                </div>
                                {
                                    this.state.showMenu
                                        ? (
                                            <div className="menu">
                                                <a className="item-menu" href="#">Home-Map</a>
                                                <br />
                                                <a className="item-menu" href="#">Home-Videos</a>
                                                <br />
                                                <a className="item-menu" href="#">Home-Slider</a>
                                            </div>
                                        )
                                        : (
                                            null
                                        )
                                }
                            </div>
                        </div>
                        <div className="col-md-3" >
                            <div className="dropdown-cate single-text">
                                <a onClick={this.showMenu2} className="navbar-brand btn-imenu" href="#">All Locations<i className="fa fa-chevron-down size-chevron" aria-hidden="true"></i></a>
                                <div className="dropdown-menu">
                                    <a className="dropdown-item item-menu" href="#">Home-Map</a>
                                    <a className="dropdown-item item-menu" href="#">Home-Videos</a>
                                    <a className="dropdown-item item-menu" href="#">Home-Slider</a>
                                </div>
                                {
                                    this.state.showMenu2
                                        ? (
                                            <div className="menu">
                                                <a className="item-menu" href="#">Home-Map</a>
                                                <br />
                                                <a className="item-menu" href="#">Home-Videos</a>
                                                <br />
                                                <a className="item-menu" href="#">Home-Slider</a>
                                            </div>
                                        )
                                        : (
                                            null
                                        )
                                }
                            </div>
                        </div>
                        <div className="col-md-3 apply">
                            <button className="single-apply">Apply</button>
                        </div>

                    </div>
                </form>
                <div className="column-content"><ul>
                    <li className="most">Most Searches</li>
                    <li className="bd-column-content"><a href="#">Beautiful</a></li>
                    <li className="bd-column-content"><a href="#">Bars &amp; Pubs</a></li>
                    <li className="bd-column-content"><a href="#">Shopping</a></li>
                    <li className="bd-column-content"><a href="#">Hotels</a></li>
                </ul></div>
            </div>

        );
    }
}
export default Card;