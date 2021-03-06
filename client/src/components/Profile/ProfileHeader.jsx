import React, {Component} from "react";
import {Row, Col} from "reactstrap";
import {Label, Icon} from "semantic-ui-react";

class ProfileHeader extends Component {
  render() {
    const styleTeam = [
      {size: "small", color: "blue"},
      {size: "medium", color: "green"},
      {size: "large", color: "grey"},
      {size: "large", color: "brown"},
      {size: "large", color: "purple"},
      {size: "large", color: "yellow"},
      {size: "large", color: "orange"}
    ];

    let {username, access_level, teams} = this.props.userInfo;

    const listTeam = teams.map((item, index) => {
      let {size, color} = styleTeam[index];
      return (
        <Label key={item.id} size={size} color={color}>
          {item.name}
        </Label>
      );
    });

    return (
      <React.Fragment>
        <Row>
          <Col xs="6">
            <Label color="red" size="large" ribbon>
              <Icon name="user" />
              {username}
            </Label>
            <Label color="olive" tag>
              {access_level}
            </Label>
          </Col>
          <Col xs="6" style={{textAlign: "right"}}>
            {listTeam}
          </Col>
        </Row>
      </React.Fragment>
    );
  }
}

export default ProfileHeader;
