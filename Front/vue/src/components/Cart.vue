<template>
  <div class="bg-white dark:bg-gray-900">
  </div>
  <div class="flex flex-col h-screen">
    <div class="h-20 flex items-center justify-between p-4 gap-20 bg-red-800">
      <div class="mt-2">
        <div class="flex">
          <router-link :to="{name: 'Home'}">
            <img class="h-6" src="/navigation/back-arrow.png">
          </router-link>
        </div>
      </div>
      <div class="flex text-white text-xl font-bold">Checkout</div>
      <div></div>
    </div>
    <header class="p-4 bg-red-800 text-center text-white font-bold">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 bg-red-900 rounded-xl">
        <router-link :to="{ name: 'cart.summary'}"  active-class="text-white dark:text-white" class="block py-2 pl-3 pr-4 text-gray-400 md:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 ">Summary</router-link>
        <router-link :to="{ name: 'cart.delivery'}" active-class="text-white dark:text-white" class="block py-2 pl-3 pr-4 text-gray-400 md:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 ">Delivery</router-link>
        <router-link :to="{ name: 'cart.checkout'}" active-class="text-white dark:text-white" class="block py-2 pl-3 pr-4 text-gray-400 md:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 ">Checkout</router-link>
      </div>
    </header>
    <router-view>
    </router-view>
  </div>
</template>

<script setup>

import {useCartStore} from "../stores/Cart/CartStore.js";
import {onMounted} from "vue";
import Navbar from "./Admin/Utilities/Navbar.vue";

const cartStore = useCartStore();
onMounted(() => {
})

function deleteItem(product) {
  cartStore.removeFromCart(product.id);
}
</script>

<style scoped>

</style>