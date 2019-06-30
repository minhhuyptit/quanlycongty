import BaseApi from "./BaseApis";

export default class AuthenticationApi extends BaseApi{
    constructor() {
        super()
        this.apiList = {
            login: {
                url: 'login',
                method: 'post',
                payload: {
                    body: {
                        username: '',
                        password: ''
                    }
                }
            },
            updateUser: {
                url: 'member/{id}',
                method: 'put',
                payload: {
                    body: {
                        fullname: '',
                        birthday: '',
                        is_male: '',
                        email: '',
                        phone: '',
                        picture: '',
                        execute_by: ''
                    },
                    url: {
                        id: ''
                    }
                }
            }
        }
    }
}