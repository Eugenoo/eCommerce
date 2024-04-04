import { defineStore } from "pinia";
import axios from "axios";
import router from "../../router/index.js";

export let useUserStore = defineStore('user', {

    state: () => ({
        user: null,
        email: null,
        name: null,
        token: null,
        isLoggedIn: false,
        loginError: null
    }),
    getters: {
    },
    actions: {
        login(data){
            axios.post('https://filiptuliszkiewicz.com/api/login', data)
                .then((response) => {
                    this.user = response.data.user
                    this.token = response.data.token
                    this.loginError = null
                    this.isLoggedIn = true
                    sessionStorage.setItem('isLoggedIn', true)
                    sessionStorage.setItem('TOKEN', response.data.token)
                    router.push('/admin')
                })
                .catch((error) => {
                    this.loginError = error.response.data
                    return error;
                })
        },
        logout(token){
            axios.post('https://filiptuliszkiewicz.com/api/logout', token,
                {
                    headers: {
                        "Authorization" : "Bearer " + token
                    }
                })
                .then((response) => {
                    console.log(response);
                    sessionStorage.setItem('isLoggedIn', false)
                    sessionStorage.removeItem('TOKEN')
                    router.push('/login');
                })
                .catch((error) => {
                    console.log(error);
                })
        }
    }
});
