import React, { Component } from "react";

import {
  AppSidebar,
  AppSidebarHeader,
  AppSidebarForm,
  AppSidebarNav,
  AppSidebarFooter,
  AppSidebarMinimizer,
  Suspense
} from "@coreui/react";

import sideBarConfig from "./SidebarConfig";

export default class Sidebar extends Component {
  constructor(props) {
    super(props);
  }

  render() {

    return (
      <AppSidebar fixed display="lg">
        <AppSidebarHeader />
        <AppSidebarForm />
        <AppSidebarNav navConfig={sideBarConfig} {...this.props.context} />
        <AppSidebarFooter />
        <AppSidebarMinimizer />
      </AppSidebar>
    );
  }
}
