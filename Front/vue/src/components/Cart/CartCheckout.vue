<template>
  <main class="h-64 bg-gray-200 flex-grow justify-center p-5">
    <div class="h-10 flex">
      <router-link :to="{name: 'cart.delivery'}">
        <img class="h-10 m-2" src="/navigation/left-chevron.png">
      </router-link>
    </div>
    <div class="bg-gray-200 h-full overflow-scroll"><!-- cart product list-->
    </div>


  </main>
  <footer class="p-4 bg-gray-200 text-center text-white font-bold">
    <div id="button" class="flex flex-wrap justify-center mx-auto">
      <router-link :to="{ name : ''}" class="bg-red-800 rounded-xl w-80 p-4">
        Buy
      </router-link>
    </div>

  </footer>
</template>

<script setup>

</script>

<style scoped>

</style>