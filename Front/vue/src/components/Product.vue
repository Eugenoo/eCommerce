<template>
  <navbar-component></navbar-component>
  <router-link :to="{name: 'Home'}">
    <img class="h-10 m-2" src="/navigation/left-chevron.png">
  </router-link>
  <div class="rounded-xl my-5">
    <div class="grid justify-items-center p-2">
      <div>
        <img class="p-20 m-5" :src="store.product.photosrc">
      </div>
      <p class="font-semibold p-2">{{ store.product.name }}</p>
      <p> {{store.product.description}}</p>
      <p>Wiek: {{ store.product.age }} +</p>

      <p class="text-3xl">{{store.product.price}}</p>
    </div>

    <div class="flex justify-center">
      <button @click="buttonClick" class="btn bg-blue-700 justify-center rounded-md p-1 text-white m-2">Add to cart</button>
    </div>
  </div>
</template>

<script setup>
import NavbarComponent from "./Navbar/NavbarComponent.vue";
import {onMounted} from "vue";
import { useRoute } from "vue-router";
import {useProductStore} from "../stores/Product/ProductStore.js";




const store = useProductStore();

onMounted(() => {
  const route = useRoute();
  const idProduct = route.params;
  store.getSingleProduct(idProduct);
})

</script>

<style scoped>

</style>