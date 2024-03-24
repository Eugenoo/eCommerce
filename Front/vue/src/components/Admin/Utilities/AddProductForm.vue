<template>
  <form method="post" @submit.prevent="addProduct">
    <div>
      <label>Name</label>
      <br>
      <input class="rounded-3xl" v-model="product.name" type="text">
    </div>
    <div>
      <label>Description</label>
      <br>
      <input class="rounded-3xl" v-model="product.description" type="text">
    </div>
    <div>
      <label>Price</label>
      <br>
      <input class="rounded-3xl" v-model="product.price" type="text">
    </div>
    <div>
      <label>Age</label>
      <br>
      <input class="rounded-3xl" v-model="product.age" type="text">
    </div>
    <div>
      <label>Stock</label>
      <br>
      <input class="rounded-3xl" v-model="product.stock" type="text">
    </div>
    <div>
      <label>Category_id</label>
      <br>
      <input class="rounded-3xl" v-model="product.category_id" type="text">
    </div>
    <div>
      <label>Photo</label>
      <br>
      <input type="file"  v-on:change="imageUploaded()">
    </div>
    <button class="rounded-3xl bg-cyan-200 m-5 p-5 justify-center" type="submit">Dodaj</button>
  </form>
</template>

<script setup>
import {useProductStore} from "../../../stores/Product/ProductStore.js";
import {ref} from "vue";

const store = useProductStore();

const product = ref({
  'category_id':'',
  'name':'',
  'description':'',
  'price':'',
  'age':'',
  'stock':'',
  'photo':'',
})

function addProduct()
{
  console.log(store);
  product.value.photo = base64String;
  store.createProduct(product.value);
  store.fetchProducts();
}
</script>

<style scoped>

</style>