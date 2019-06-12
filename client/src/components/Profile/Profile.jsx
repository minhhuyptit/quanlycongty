import React, { Component } from "react";
import { Card, CardBody } from "reactstrap";
import { Segment } from "semantic-ui-react";

import ProfileHeader from "./ProfileHeader";
import ProfileForm from "./ProfileForm";
import "./profile.scss";

class Profile extends Component {
  constructor(props) {
    super(props);

    this.state = {
      userInfo: this.props.userInfo
    };
    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleChange({ value }, key) {
    let { userInfo } = this.state
    userInfo[key] = value;
    this.setState({ userInfo });
  }

  handleSubmit(picture) {
    let {username, fullname, is_male, birthday, email, phone, access_level} = this.state.userInfo;
    let data = {username, fullname, is_male, birthday, email, phone, picture, access_level};
    this.props.handleSubmit(data);
  }

  render() {
    return (
      <React.Fragment>
        <Card id="profile" style={{ height: "80%" }}>
          <CardBody>
            <Segment color="teal">
              <ProfileHeader userInfo={this.props.userInfo} />
              <ProfileForm
                userInfo={this.state.userInfo}
                handleChange={this.handleChange}
                handleSubmit={this.handleSubmit}
              />
            </Segment>
          </CardBody>
        </Card>
      </React.Fragment>
    );
  }
}

export default Profile;
