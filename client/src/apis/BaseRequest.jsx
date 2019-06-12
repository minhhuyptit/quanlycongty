import axios from "axios";

export default class BaseRequest {
  async get(url, body) {
    axios
      .get(url)
      .then(function(response) {
        console.log("Success: ", response);
      })
      .catch(function(error) {
        console.log("Error: ", error);
      });
  }

  async post(url, body) {
    try {
      let res = await axios.post(url, body);
      return {
        status: res.status,
        data: res.data
      };
    } catch (error) {
      return {
        status: error.response.status,
        message: error.response.data.message
      };
    }
  }
}
