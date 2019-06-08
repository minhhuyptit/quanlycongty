import React, { Component } from "react";
import { AppHeader } from "@coreui/react";

import Sidebar from "./../Sidebar/Sidebar";
import Header from "./Header";

class MainLayout extends Component {
  constructor(props) {
    super(props);
  }

  render() {
    return (
      <div className="app">
        <AppHeader fixed>
          <Header />
        </AppHeader>
        <div className="app-body">
          <Sidebar context={this.props} />
        </div>
      </div>
    );
  }
}

export default MainLayout;
