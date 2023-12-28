import { defineStore } from "pinia";
import {ref} from "vue";
import axios from "axios";

export let useProductStore = defineStore('products', () => {
    const products = ref({})

    const fetchProducts = () => {
        const data = axios.get('https://filiptuliszkiewicz.com/api/home')
            .then((response) => {
                products.value = response.data
            }).catch((error) => {
                console.log(error);
            })
    }

    const getSingleProduct = (value) => {
        const data = axios.get('https://filiptuliszkiewicz.com/api/product/'+value.id)
            .then((response) => {
                console.log(response);

                products.value = response.data;
            }).catch((error) => {
                console.log(error);
            })
    }

    const createProduct = (product) => {
        var token = sessionStorage.getItem('TOKEN');
        console.log(token);
        const data = axios.post('https://filiptuliszkiewicz.com/api/product/add', product,
            {
                headers: {
                    "Authorization":"Bearer " + token
                }
            })
            .then((response) => {
                console.log(response);
            }).catch((error) => {
                console.log(error);
            })
    }

    return {
        products,
        fetchProducts,
        getSingleProduct,
        createProduct,
    }
});
