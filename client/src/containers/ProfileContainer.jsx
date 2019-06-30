import React, {Component} from "react";
import {connect} from "react-redux";

import Profile from "./../components/Profile/Profile";

class ProfileContainer extends Component {
  constructor(props) {
    super(props);

    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleSubmit(item) {
    this.props.updateUser(item);
  }

  render() {
    return (
      <React.Fragment>
        <Profile userInfo={this.props.userInfo} handleSubmit={this.handleSubmit} />
      </React.Fragment>
    );
  }
}

const mapStateToProps = state => {
  return {
    userInfo: state.user.user
  };
};

const mapDispatchToProps = dispatch => ({
  updateUser: user => {
    dispatch.user.asyncUpdateUser(user);
  }
});

export default connect(
  mapStateToProps,
  mapDispatchToProps
)(ProfileContainer);
