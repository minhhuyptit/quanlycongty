import AuthenticationApi from "./../apis/AuthenticationApis";
const authenApi = new AuthenticationApi();

export const user = {
  state: {
    isAuthenticated: false,
    user: {}
  },
  reducers: {
    login(state, data) {
      return {
        isAuthenticated: true,
        user: {...state.user, ...data}
      };
    }
  },
  effects: {
    async asynLogin(item) {
      let res = await authenApi.call("login", {
        body: {
          username: item["username"],
          password: item["password"]
        }
      });
      if (res.status === 200) {
        // console.log("Zo day", res.data);
        this.updateUser(res.data);
      } else {
        alert("Error: " + res.message);
      }
    }
  }
};
