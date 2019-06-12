import React, {Component} from "react";
import {connect} from "react-redux";

import Profile from "./../components/Profile/Profile";

class ProfileContainer extends Component {
  constructor(props) {
    super(props);

    let dumpData = {
      username: "huyla36ca",
      fullname: "Nguyễn Hà Minh Huy",
      is_male: true,
      birthday: "2019-06-21",
      email: "minhhuy97.ptit@gmail.com",
      phone: "0794755005",
      picture: "avatar-default",
      access_level: "Admin"
    };
    this.state = {
      userInfo: dumpData
    };

    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleSubmit(item) {
    this.props.updateUser(item);
  }

  render() {
    return (
      <React.Fragment>
        <Profile userInfo={this.state.userInfo} handleSubmit={this.handleSubmit} />
      </React.Fragment>
    );
  }
}

const mapStateToProps = state => {
  return {
    userInfo: state.member
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
