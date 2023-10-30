<template>
  <div class="bg-white dark:bg-gray-900 px-16 pb-8 pt-10 mt-10">
    <div class="flex justify-center">
      <input type="text" class="rounded-3xl p-3 w-full">
    </div>
  </div>
  <!-- Category RollBar -->
  <div class="h-20">
    <div class="flex  snap-x snap-mandatory h-20 overflow-scroll overflow-y-hidden no-scrollbar">

      <div v-for="category in store.category" class="snap-start flex-shrink-0 p-3 m-3 flex items-center justify-center text-xl text-black font-bold rounded-3xl">
        <router-link to="category">
          {{category.name}}
        </router-link>
      </div>
    </div>
  </div>
  <div>
    <!--Product List -->
    <div class="grid grid-cols-2 p-5 gap-5">
      <!-- Products Loading -->
<!--      <div class="loading" v-if="//productStore.loading">Loading Products...</div>-->
      <div v-for="product in productStore.products">
        <div class="rounded-xl h-full">
          <router-link
              :to="{
                name: 'product',
                params: {
                  id : product.id
                }
            }"
          >
            <div class="grid justify-items-center p-2">
              <img class="h-32 p-2" :src="product.photosrc">
              <p class="font-semibold p-2">{{ product.name }}</p>
              <p class="font-light text-gray-400 text-sm">{{ product.price }}</p>
            </div>
          </router-link>
          <div class="flex justify-center">
            <button @click="addToCart(product)" class="btn bg-blue-700 justify-center rounded-md p-1 text-white m-2">Add to cart</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="bg-white dark:bg-gray-900 h-32 text-black dark:text-white">
      XD
    </div>

  </footer>
</template>

<script setup>
import {ref, onMounted, computed} from "vue";

import {useProductStore} from "../stores/Product/ProductStore.js";
import {useCategoryStore} from "../stores/Category/CategoryStore.js";
import {useCartStore} from "../stores/Cart/CartStore.js";


const store = useCategoryStore();

const productStore = useProductStore();

const cartStore = useCartStore();

onMounted(() => {
  store.fetchCategories();
  productStore.fetchProducts();
})


function addToCart(product){
  cartStore.addToCart(product);
}

</script>

<style scoped>

</style>