import React from "react";
import { BrowserRouter as Router, Switch, Route, Link } from "react-router-dom";
import Box from "@material-ui/core/Box";
import Shop from "./components/Shop/Shop";
import Navbar from "./components/ui/Navbar";
import Home from "./components/Home/Home";
export default class App extends React.Component {
    render() {
        return (
            <>
                <Router>
                    <Navbar />
                    <Box m={3} mt={15}>
                        <Switch>
                            <Route path="/home">
                                <Home />
                            </Route>
                            <Route path="/shop">
                                <Shop />
                            </Route>
                        </Switch>
                    </Box>
                </Router>
            </>
        );
    }
}