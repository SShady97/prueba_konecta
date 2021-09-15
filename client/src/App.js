import React from "react";
import Login from "./components/Login";
import Home from "./components/Home/Home";
import LoginState from './context/login/loginState';
import PrivateRoute from "./components/routes/PrivateRoute";
import {
    BrowserRouter as Router,
    Switch,
    Route
} from "react-router-dom";

function App() {

    return (
        
        <LoginState>
            <Router>
                <Switch>
                    <Route exact path="/login" component={Login} />
                    <PrivateRoute exact path="/" component={Home} />
                </Switch>
            </Router>
        </LoginState>
    );
}

export default App;
