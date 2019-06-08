import React, { Component } from "react";
import { Container, Row, Col } from "reactstrap";

import { Form, Button, Card, Input, Segment, Loader } from "semantic-ui-react";

import "./Login.scss";

class Login extends Component {
  constructor(props) {
    super(props);

    this.state = {
      isLoading: false,
      username: "",
      password: ""
    };

    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleChange(event) {
    const target = event.target;
    const name = target.name;
    const value = target.value;
    this.setState({
      [name]: value
    });
  }

  handleSubmit() {
    if (this.state.username !== "" && this.state.password !== "") {
      this.setState({ isLoading: true });
      console.log(this.state);
    }
  }

  render() {
    let { isLoading, username, password } = this.state;
    let hrefLink = "#";

    return (
      <Container>
        <video autoPlay muted loop id="video_background">
          <source src="/video/background_login.mp4" type="video/mp4" />
        </video>
        <Row className="justify-content-center">
          <Col md="4" className="form-login">
            <Row>
              <Segment color="red">
                <Card fluid>
                  <Card.Content>
                    <Loader size="massive" active={isLoading} />
                    <img id="logo" src="/images/logo.png" alt="logo" />
                    <Form>
                      <Form.Field
                        label="Username"
                        name="username"
                        control={Input}
                        placeholder="Username account"
                        required
                        value={username}
                        onChange={this.handleChange}
                      />
                      <Form.Field
                        label="Password"
                        name="password"
                        control={Input}
                        type="password"
                        placeholder="Password"
                        required
                        value={password}
                        onChange={this.handleChange}
                      />
                      <a href={hrefLink} className="forgot-password">
                        Forgot password?
                      </a>
                      <Button
                        fluid
                        color="blue"
                        type="submit"
                        content="Login"
                        onClick={this.handleSubmit}
                      />
                    </Form>
                    <hr className="hr-text" data-content="Or" />
                    <Row>
                      <Col xs="6">
                        <Button
                          size="small"
                          id="btn-facebook"
                          color="facebook"
                          icon="facebook"
                          content="Facebook"
                        />
                      </Col>
                      <Col xs="6">
                        <Button
                          size="small"
                          id="btn-google"
                          color="google plus"
                          icon="google plus"
                          content="Google"
                        />
                      </Col>
                    </Row>
                  </Card.Content>
                </Card>
              </Segment>
            </Row>
          </Col>
        </Row>
      </Container>
    );
  }
}

export default Login;
