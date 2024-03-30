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
                    sessionStorage.setItem('TOKEN', response.data.token)
                    router.push('/admin')

                    localStorage.setItem('localToken', response.data.token)
                })
                .catch((error) => {
                    this.loginError = error.response.data
                    return error;
                })
        },
        logout(){
            axios.post()
        }
    }
});
