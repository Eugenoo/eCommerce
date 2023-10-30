<template>
  <nav class="bg-blue-700 p-5">
    <div class="flex justify-around">
      <div>
        <router-link to="/">
          <img class="h-10" src="/rabbit.svg">
        </router-link>
      </div>
      <div class="text-5xl text-white">
        Hazaj
      </div>
      <div>
        <div class="flex gap-2">
          <div>
            <img class="h-10" src="/icons8-shopping-bag-90.png">
          </div>
          <div>
            <router-link to="about">
              <img class="h-10" src="/icons8-cheeseburger-90.png">
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div class="bg-blue-700 px-16 py-6">
    <div class="flex justify-center">
      <input type="text" class="rounded-3xl p-3 w-full">
    </div>
  </div>
  <router-link to="/">
    <img class="h-10 m-2" src="/navigation/left-chevron.png">
  </router-link>
  <div class="outline rounded-xl my-5">
      <div class="grid justify-items-center p-2">
        <img class="p-2" src="/images/sw0330.png">
        <p class="font-semibold p-2">Clone Trooper Commander Wolffe</p>
        <p> Figurka Clone Trooper Commander Wolffe o numerze katalogowym sw0330</p>
        <p>Stan: Używane</p>
        <p>Kondycja: 9/10</p>

        <p class="text-3xl">199.99 zł</p>
      </div>

    <div class="flex justify-center">
      <button @click="buttonClick" class="btn bg-blue-700 justify-center rounded-md p-1 text-white m-2">Add to cart</button>
    </div>
  </div>
  <footer>
    <div class="bg-blue-700 h-32 text-white">
      Footer
    </div>
  </footer>

</template>

<script setup>

</script>

<style scoped>

</style>