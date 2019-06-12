import React, {Component} from "react";
import {connect} from "react-redux";
import {withRouter} from "react-router-dom";
import Login from "./../components/Login/Login";

import AuthenticationApi from "./../apis/AuthenticationApis";

class LoginContainer extends Component {
  constructor(props) {
    super(props);

    this.state = {
      isLoading: false
    };

    this.handleSubmit = this.handleSubmit.bind(this);
  }

  componentWillMount() {
    if (this.props.isLogin) {
      this.props.history.push("/dashboard");
    }
  }

  async handleSubmit(username, password) {
    this.setState({isLoading: true});
    const authenApi = new AuthenticationApi();
    let res = await authenApi.call("login", {
      body: {username: username, password: password}
    });
    if (res.status === 200) {
      let {login, history} = this.props;
      login(res.data);
      history.push("/dashboard");
    } else {
      alert("Error: " + res.message);
      this.setState({isLoading: false});
    }
  }

  render() {
    return (
      <div>
        <Login isLoading={this.state.isLoading} handleSubmit={this.handleSubmit} />
      </div>
    );
  }
}

const mapStateToProps = state => {
  return {
    isLogin: state.user.isAuthenticated
  };
};

const mapDispatchToProps = dispatch => ({
  login: item => {
    dispatch.user.login(item);
  }
});

export default withRouter(
  connect(
    mapStateToProps,
    mapDispatchToProps
  )(LoginContainer)
);
