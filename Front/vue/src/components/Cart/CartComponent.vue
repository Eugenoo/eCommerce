<template>
  <router-link to="/cart">
    <img class="h-10" src="/left-chevron.png">
  </router-link>
  <div>
    <div>
      <p class="text-5xl">Contact Info</p>
      <br>
      <div class="grid grid-cols-2 gap-5">
        <div>
          <p>First Name</p>
          <input class="border">
        </div>
        <div>
          <p>Last Name</p>
          <input class="border">
        </div>
        <div>
          <p>Phone</p>
          <input class="border">
        </div>
        <div>
          <p>Email</p>
          <input class="border">
        </div>
      </div>
    </div>
    <br>
    <div class="outline"></div>
    <div>
      <p class="text-5xl">Shipment Info</p>
      <div class="grid grid-cols-2 gap-5">
        <div>
          <p>Country</p>
          <input class="border">
        </div>
        <div>
          <p>City</p>
          <input class="border">
        </div>
        <div>
          <p>Zip-code</p>
          <input class="border">
        </div>
        <div>
          <p>Addres</p>
          <input class="border">
        </div>
        <div class="col-span-2">
          <p>Komentarz</p>
          <textarea type="text" rows="3" class="border">
          </textarea>
        </div>
      </div>

    </div>
    <div class="outline my-5"></div>
    <br>
    <div class="flex justify-center">
      <router-link to="checkout">
        <button type="button" class="text-white dont-bold text-xl bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 rounded-3xl p-5 m-10">
          Proceed to Stripe
        </button>
      </router-link>
    </div>
  </div>
</template>

<script setup>

</script>

<style scoped>

</style>