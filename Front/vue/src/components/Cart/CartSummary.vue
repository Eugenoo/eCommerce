<template>
  <main class="h-64 bg-gray-200 flex-grow relative">
    <div class="h-28 bg-red-800">
    </div>
    <div class="h-full overflow-y-scroll no-scrollbar absolute top-0"><!-- cart product list-->
      <div v-for="cartItem in cartStore.cart.product" class="m-5">
        <div class="bg-white rounded-xl p-5 w-full grid grid-cols-6 relative">
          <div class="flex items-center col-span-2">
                <!--foto-->
                <img :src="cartItem.photo" class="h-12">
          </div>
          <div class="col-span-3">
                <!--details-->
              <p>{{ cartItem.name }}</p>
            <p>{{ cartItem.price }}</p>
          </div>
          <div class="flex justify-center items-center">
                <!--quantity-->
            <div>
              <button @click="addItem(cartItem)">+</button>
              <div>{{ cartItem.quantity}}</div>
              <button v-show="cartItem.quantity" @click="subItem(cartItem)">-</button>
            </div>
          </div>
          <button @click="deleteItem(cartItem)" class="absolute p-2 -right-2 top-4 bg-red-500 rounded-md text-white">
              x
          </button>
        </div>
      </div>
    </div>
  </main>
  <div class="bg-gray-200 p-4">
      <div class="p-5 w-full grid grid-cols-3 relative text-end">
        <div></div>
        <div>
          <div>
            Summary
          </div>
          <div>
            Shipping
          </div>
          <div class="font-bold">
            Cart Total
          </div>
        </div>
        <div>
          <div>
            {{cartStore.cart.total}} PLN
          </div>
          <div>
            9.99 PLN
          </div>
          <div class="font-bold">
            {{cartStore.cart.total + 9.99}}
          </div>
        </div>
      </div>
  </div>
  <footer class="p-4 bg-gray-200 text-center text-white font-bold">
    <div id="button" class="flex flex-wrap justify-center mx-auto">
      <router-link :to="{ name : 'cart.delivery'}" class="bg-red-800 rounded-xl w-80 p-4">
        Next
      </router-link>
    </div>

  </footer>
</template>

<script setup>
import {useCartStore} from "../../stores/Cart/CartStore.js";
import {onMounted} from "vue";

const cartStore = useCartStore();
onMounted(() => {
})

function deleteItem(product) {
  cartStore.removeFromCart(product.id);
}

function addItem(x) {
  cartStore.addProduct(x);
}

function subItem(x) {
  cartStore.subProduct(x);
}
</script>

<style scoped>

</style>