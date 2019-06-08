import React, { Component } from "react";
import { AppSidebarToggler, AppNavbarBrand } from "@coreui/react";
import {
  Dropdown,
  DropdownItem,
  DropdownMenu,
  DropdownToggle,
  Nav,
  Badge
} from "reactstrap";
class DefaultHeader extends Component {
  constructor(props) {
    super(props);

    this.toggle = this.toggle.bind(this);
    this.state = {
      dropdownOpen: false
    };
  }

  toggle() {
    this.setState(prevState => ({
      dropdownOpen: !prevState.dropdownOpen
    }));
  }

  render() {
    return (
      <React.Fragment>
        <AppSidebarToggler className="d-lg-none" display="md" mobile />
        <AppNavbarBrand
          full={{
            src: "/images/logo.png",
            width: 89,
            height: 25,
            alt: "CoreUI Logo"
          }}
          minimized={{
            src: "/images/logo.png",
            width: 30,
            height: 30,
            alt: "CoreUI Logo"
          }}
        />
        <AppSidebarToggler className="d-md-down-none" display="lg" />
        <Nav className="ml-auto" navbar>
          <Dropdown isOpen={this.state.dropdownOpen} toggle={this.toggle}>
            <DropdownToggle nav>
              <img 
                src="/images/avatar-default.png"
                className="dropdown-avatar"
                alt="avatar"
              />
            </DropdownToggle>
            <DropdownMenu right style={{ right: "auto" }}>
              <DropdownItem className="text-center" header>
                <strong>Account</strong>
              </DropdownItem>
              <DropdownItem>
                <div className="user-option">
                  <img src={"/images/avatar-default.png"} alt="avatar" />
                  <div>
                    <strong>Nguyễn Hà Minh Huy</strong>
                    <div>minhhuy97.ptit@gmail.com</div>
                  </div>
                </div>
              </DropdownItem>
              <DropdownItem>
                <i className="fa fa-bell-o fa-lg" />
                Notifications
                <Badge color="warning" pill>
                  23
                </Badge>
              </DropdownItem>
              <DropdownItem>
                <i className="fa fa-envelope-o fa-lg" />
                Messages
                <Badge color="info" pill>
                  7
                </Badge>
              </DropdownItem>
              <DropdownItem>
                <i className="fa fa-tasks fa-lg" />
                Tasks
                <Badge color="danger" pill>
                  32
                </Badge>
              </DropdownItem>
              <DropdownItem className="text-center" header>
                <strong>Settings</strong>
              </DropdownItem>
              <DropdownItem>
                <i className="fa fa-wrench fa-lg" />
                Setting
              </DropdownItem>
              <DropdownItem>
                <i className="fa fa-user-o fa-lg" />Change Password
              </DropdownItem>
              <DropdownItem divider />
              <DropdownItem>
                <i className="fa fa-lock fa-lg" />Logout
              </DropdownItem>
            </DropdownMenu>
          </Dropdown>
        </Nav>
      </React.Fragment>
    );
  }
}

export default DefaultHeader;
