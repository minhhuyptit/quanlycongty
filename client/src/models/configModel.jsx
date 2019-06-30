import AuthenticationApi from "./../apis/ConfigurationApis";
const configApi = new AuthenticationApi();

export const config = {
  state: {
    access_level: [],
    university: [],
    skill: [],
    contact: [],
    team_member_role: [],
    position: []
  },
  reducers: {
    updateConfig(state, data) {
      return {...state, ...data};
    },
    updateConfigByType(state, type, data) {
      return {...state, [type]: data};
    }
  },
  effects: {
    async asyncGetConfig() {
      let data = await configApi.call("getConfig");
      if (data.status === 200) {
        this.updateConfig(data.data);
      }
    },

    async asyncGetConfigByType(type){
      let data = await configApi.call('getConfigByType', {
          url: {
            type
          }
      });
      if(data.status === 200){
        this.updateConfigByType(type, data.data);
      }
    }
  }
};

function groupConfigByType(data) {
  // console.log(data)
  // let newState = {};
  // data.forEach(item => {
  //   if (!newState.hasOwnProperty(item.type)) {
  //     newState[item.type] = data.filter(elm => {
  //       return elm.type === item.type
  //     })
  //   }
  // })
  // return newState;
}