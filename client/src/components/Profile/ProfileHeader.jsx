import React, { Component } from "react";
import { Row, Col } from "reactstrap";
import { Label, Icon } from "semantic-ui-react";

class ProfileHeader extends Component {
  render() {
    return (
      <React.Fragment>
        <Row>
          <Col xs="6">
            <Label color="red" size="large" ribbon>
              <Icon name="user" />huyla35ca
            </Label>
            <Label color="olive" tag>Admin</Label>
          </Col>
          <Col xs="6" style={{ textAlign: "right" }}>
            <span className="title-team">Team: </span>
            <Label size="small" color="blue">Red</Label>
            <Label size="medium" color="orange">Green</Label>
            <Label size="large" color="purple">Blue</Label>
          </Col>
        </Row>
      </React.Fragment>
    );
  }
}

export default ProfileHeader;
