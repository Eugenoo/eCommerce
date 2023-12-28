<template>
  <div class="grid grid-cols-1 md:grid-cols-2">
    <div id="form">
      <div class="bg-gray-100 rounded-3xl m-5 p-5 justify-items-center">
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
        <button>
          Display String
        </button>
      </div>
    </div>
    <div class="p-5" id="table">
        <div v-for="product in products">
          <div class="grid grid-cols-5 m-2">
            <div class="bg-gray-100">
              {{product.id}}
            </div>
            <div class="bg-gray-100">
              {{product.name}}
            </div>
            <div class="bg-gray-100">
              {{product.price}}
            </div>
            <div class="bg-gray-100">
              Edit
            </div>
            <div class="bg-gray-100">
              <button v-on:click="deleteProduct(product)">Delete</button>
            </div>
          </div>
        </div>
    </div>
  </div>

</template>

<script setup>
import {computed, onMounted, ref} from "vue";
import {useProductStore} from "../../stores/Product/ProductStore.js";

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

let base64String = "";

function imageUploaded() {
  let file = document.querySelector(
      'input[type=file]')['files'][0];

  let reader = new FileReader();

  reader.onload = function () {
    base64String = reader.result.replace("data:", "")
      .replace(/^.+,/, "");
  }
  reader.readAsDataURL(file);
}

const products = computed(() => {
  return store.products;
})

onMounted(() => {
    store.fetchProducts();
})

function deleteProduct(product){
    store.deleteProduct(product);
    store.fetchProducts();
}

</script>

<style scoped>

</style>