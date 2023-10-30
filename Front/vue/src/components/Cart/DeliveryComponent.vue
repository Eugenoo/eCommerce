<template>
  <main class="h-64 bg-gray-200 flex-grow relative">
    <div class="h-28 bg-red-800">
    </div>
    <div class="h-full overflow-scroll absolute top-0 no-scrollbar w-full">
      <div class="m-5">
        <div class="bg-white rounded-xl p-5 my-5">
          <div class="justify-center">
            <div class="flex justify-center font-bold text-2xl p-5">
              Adres i dostawa
            </div>
            <form>
              <div>
                <div class="relative mt-2 rounded-md shadow-sm">
                  <input type="email" name="email" id="email" class="block w-full rounded-md border-0 py-5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Adres E-mail">
                </div>
              </div>
              <div>
                <div class="relative mt-2 rounded-md shadow-sm">
                  <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Imię">
                </div>
              </div>
              <div>
                <div class="relative mt-2 rounded-md shadow-sm">
                  <input type="text" name="surname" id="surname" class="block w-full rounded-md border-0 py-5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Nazwisko">
                </div>
              </div>
              <div>
                <div class="relative mt-2 rounded-md shadow-sm">
                  <input type="text" name="street" id="street" class="block w-full rounded-md border-0 py-5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Ulica">
                </div>
              </div>
              <div>
                <div class="relative mt-2 rounded-md shadow-sm">
                  <input type="text" name="address" id="address" class="block w-full rounded-md border-0 py-5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Nr domu">
                </div>
              </div>
              <div>
                <div class="relative mt-2 rounded-md shadow-sm">
                  <input type="text" name="postal" id="postal" class="block w-full rounded-md border-0 py-5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Kod pocztowy">
                </div>
              </div>
              <div>
                <div class="relative mt-2 rounded-md shadow-sm">
                  <input type="text" name="city" id="city" class="block w-full rounded-md border-0 py-5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Miasto">
                </div>
              </div>
              <div>
                <div class="relative mt-2 rounded-md shadow-sm">
                  <input type="text" name="phone" id="phone" class="block w-full rounded-md border-0 py-5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Numer telefonu">
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="bg-white rounded-xl p-5 my-5">
          <div class="justify-center">
            <div class="flex justify-center font-bold text-2xl p-5">
              Metoda dostawy
            </div>
            <form>
              <div>
                <div class="relative mt-2 rounded-md shadow-sm">
                  <div class="block w-full rounded-md border-0 py-5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"> </div>
                </div>
                <input type="radio" value="XD">
              </div>
            </form>
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
        Next
      </router-link>
    </div>

  </footer>
</template>

<script setup>
</script>

<style scoped>

</style>