import React, { Component } from "react";
import { BrowserRouter as Router, Switch, Route } from "react-router-dom";
import LoginContainer from "./containers/LoginContainer";
import MainLayout from "./components/Layout/MainLayout";
class App extends Component {
  render() {
    return (
      <Router>
        <Switch>
          <Route exact path="/login" component={LoginContainer} />
          <Route path="*" component={MainLayout} />
        </Switch>
      </Router>
    );
  }
}

export default App;
