<template>
  <div class="grid grid-cols-1 bg-gray-200 xl:px-24">
    <div class="grid grid-cols-4">
      <div class="bg-gray-100 rounded-3xl m-5 p-4 justify-items-center col-span-3">
        <input class="bg-white rounded-xl p-2">
        <button> Filter</button>
      </div>
      <div class="bg-gray-100 rounded-3xl m-5 p-4 justify-items-center">
        <button class="bg-white rounded-xl p-2 w-full outline">
          + ADD PRODUCT
        </button>
      </div>
    </div>
    <div>
      <div class="grid grid-cols-5 mx-10">
      <div>Photo</div>
      <div>Name</div>
      <div>Price</div>
      <div></div>
      <div>Action</div>
      </div>
    </div>
    <div class="p-5" id="table">
        <div v-for="product in products">
          <div class="bg-gray-100 rounded-xl h-24">
            <div class="grid grid-cols-5 m-2">
              <div>
                {{product.id}}
              </div>
              <div>
                {{product.name}}
              </div>
              <div>
                {{product.price}}
              </div>
              <div class="bg-gray-100">
                Edit
              </div>
              <div class="grid-cols-2 justify-items-center">
                <button v-on:click="deleteProduct(product)">Edit</button>
                <button v-on:click="deleteProduct(product)">Delete</button>
              </div>
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