<template>
  <main class="h-64 bg-gray-200 flex-grow relative">
    <div class="h-28 bg-red-800">
    </div>
    <div class="h-full overflow-scroll absolute top-0 no-scrollbar w-full">
      <div class="m-5">
        <div class="bg-white rounded-xl p-5 my-5">
          <div class="justify-center">
            <div class="flex justify-center font-bold text-2xl p-5">
              <div>
                Metody płatności
              </div>
            </div>
            <div class="flex justify-center py-5">
              <img src="/payment/apple_pay.svg" class="h-12">
            </div>
            <div class="flex justify-center py-5">
              <img src="/payment/blik.png" class="h-12">
            </div>
          </div>
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
        </div>
        <div>
          9.99 PLN
        </div>
        <div class="font-bold">
          159.98 PLN
        </div>
      </div>
    </div>
  </div>
  <footer class="p-4 bg-gray-200 text-center text-white font-bold">
    <div id="button" class="flex flex-wrap justify-center mx-auto">
      <router-link :to="{ name : 'cart.checkout'}" class="bg-red-800 rounded-xl w-80 p-4">
        Kupuje
      </router-link>
    </div>

  </footer>
</template>

<script setup>

</script>

<style scoped>

</style>