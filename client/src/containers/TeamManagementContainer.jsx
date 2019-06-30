import React, {Component} from "react";
import {Row, Col, Card, CardBody, CardHeader} from "reactstrap";

import ListTeam from "./../components/TeamManagement/ListTeam";
import AddTeamModal from "./../components/TeamManagement/AddTeamModal";

class TeamManagementContainer extends Component {
  render() {
    return (
      <Card className="team-management-container" style={{height: "80%"}}>
        {/* <CardHeader>
          <label className="content-management-title">Team Management</label> */}
          {/* <Popup
            className="btn-add-team"
            trigger={
              <Button className="btn-add-team" content="Add" color="teal" icon="plus" onClick={this.toggleModal} />
            }
            content="Add new team"
          /> */}
        {/* </CardHeader> */}
        <CardBody>
          <AddTeamModal
            // show={this.state.showModal}
            toggle={this.toggleModal}
            handleSubmit={this.handleSubmit}
            data={Object.values(this.props.allMember)}
          />
          <Row>
            <Col sm={{size: 12}}>
              <ListTeam />
            </Col>
          </Row>
        </CardBody>
      </Card>
    );
  }
}

const mapState = state => {
  return {
      allTeam: state.team.teamList,
      // allMember: state.member
  };
}

const mapDispatch = dispatch => ({
  retrieveTeam: () =>
      dispatch
          .team
          .asyncRetrieveTeam(),
  retrieveMember: () =>
      dispatch
          .member
          .asyncRetrieveMember(),
  addTeam: data =>
      dispatch
          .team
          .asyncAddTeam(data),
  deleteTeam: id =>
      dispatch
          .team
          .asyncDeleteTeam(id),
})

export default withRouter(connect(mapState, mapDispatch)(TeamManagementContainer))
