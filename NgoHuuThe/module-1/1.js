import React from 'react';
import './1.scss';
import 'bootstrap/dist/css/bootstrap.css';
import 'font-awesome/css/font-awesome.min.css';
function App() {
    return (

        <nav className="navbar navbar-expand-sm navbar-light bg-lightsecond">
            <div className="collapse navbar-collapse" id="collapsibleNavId">
                <ul className="navbar-nav mr-auto mt-2 mt-lg-0">
                    <a className="navbar-brand" href="#"><img src="http://themesgavias.com/drupal/lozin/themes/gavias_lozin/logo.png" className="img-fluid img-logo" alt="logo" /></a>
                </ul>
                <form className="form-inline my-2 my-lg-0">
                    <div className="dropdown">
                        <a className="navbar-brand btn-home" href="#">Home<i className="fa fa-chevron-down size-chevron" aria-hidden="true"></i></a>
                        <div className="dropdown-menu" >
                            <a className="dropdown-item item-menu" href="#">Home-Map</a>
                            <a className="dropdown-item item-menu" href="#">Home-Videos</a>
                            <a className="dropdown-item item-menu-end" href="#">Home-Slider</a>
                        </div>
                    </div>
                    <div className="dropdown">
                        <a className="navbar-brand btn-imenu" href="#">Listings<i className="fa fa-chevron-down size-chevron" aria-hidden="true"/></a>
                        <div className="dropdown-menu drop-up" >
                            <a className="dropdown-item item-menu" href="#">Home-Map</a>
                            <a className="dropdown-item item-menu" href="#">Home-Videos</a>
                            <a className="dropdown-item item-menu-end" href="#">Home-Slider</a>
                        </div>
                    </div>
                    <div className="dropdown">
                        <a className="navbar-brand btn-imenu" href="#">Blog<i className="fa fa-chevron-down size-chevron" aria-hidden="true"/></a>
                        <div className="dropdown-menu" >
                            <a className="dropdown-item item-menu" href="#">Home-Map</a>
                            <a className="dropdown-item item-menu" href="#">Home-Videos</a>
                            <a className="dropdown-item item-menu-end" href="#">Home-Slider</a>
                        </div>
                    </div>
                    <div className="dropdown">
                        <a className="navbar-brand btn-imenu" href="#">Pages<i className="fa fa-chevron-down size-chevron" aria-hidden="true" /></a>
                        <div className="dropdown-menu" >
                            <a className="dropdown-item item-menu" href="#">Home-Map</a>
                            <a className="dropdown-item item-menu" href="#">Home-Videos</a>
                            <a className="dropdown-item item-menu-end" href="#">Home-Slider</a>
                        </div>
                    </div>
                    <div className="dropdown">
                        <a className="navbar-brand btn-imenu" href="#">Features<i className="fa fa-chevron-down size-chevron" aria-hidden="true"/></a>
                        <div className="dropdown-menu" >
                            <a className="dropdown-item item-menu" href="#">Home-Map</a>
                            <a className="dropdown-item item-menu" href="#">Home-Videos</a>
                            <a className="dropdown-item item-menu-end" href="#">Home-Slider</a>
                        </div>
                    </div>
                    <div className="dropdown">
                        <a className="navbar-brand btn-imenu" href="#">Contact</a>
                    </div>
                    <a className="navbar-brand btn-addlist" href="#">+ Add Listing</a>
                    <a className="navbar-brand" href="#"><i className="fa fa-user menu-user" aria-hidden="true"/></a>
                </form>
            </div>
        </nav>
    );
}

export default App;
