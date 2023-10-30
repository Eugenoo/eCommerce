import {computed, ref} from 'vue';
import {defineStore} from "pinia";
import axios from "axios";


export const useCartStore = defineStore( 'cart', () => {

    const cart = ref({
        "quantity":0,
        "product":[],
        "total":0,
    });

    function addToCart(product){
        cart.value.quantity += 1;
        product.quantity = 1;
        cart.value.product.push(product);
        let value = parseFloat(product.price)
        cart.value.total += value;
    }

    function removeFromCart(productId){
        cart.value.product = cart.value.product.filter(product => product.id !== productId);
        cart.value.quantity -= 1;
    }

    function addProduct(product){
        let index = cart.value.product.findIndex(element => element.id === product.id);
        let value = cart.value.product.find(element => element.id === product.id);
        cart.value.product[index].quantity = value.quantity + 1;
    }

    function subProduct(product){
        let index = cart.value.product.findIndex(element => element.id === product.id);
        let value = cart.value.product.find(element => element.id === product.id);
        cart.value.product[index].quantity = value.quantity - 1;
        //check avaibility of the product.
    }

    return {
        cart,
        addToCart,
        removeFromCart,
        addProduct,
        subProduct,
    }

})