<template>
  <div class="bg-red-200 px-16 py-8">
    <div class="flex justify-center">
      <input
          type="text"
          class="rounded-3xl p-3 w-full"
          placeholder="new Name"
          v-model="nameInput"
      >

      <button @click="handleSubmit" class="bg-green-200 rounded-3xl hover:bg-blue-300 p-5">XD</button>
    </div>
  </div>
  <div v-for="category in categoriesStore.category">
    <div class="h-20">
      {{category.id}}

      {{category.name}}
    </div>
  </div>

  <footer>
    <div class="bg-green-200 h-32">
      Footer
    </div>
  </footer>
</template>

<script setup>
import {useCategoryStore} from "../stores/Category/CategoryStore.js";
import {onMounted, ref} from "vue";

const categoriesStore = useCategoryStore();

const nameInput = ref("");

const handleSubmit = () => {
  store.changeName(nameInput.value);
  nameInput.value = ""
}

onMounted(() => {
  categoriesStore.fetchCategories();
})

</script>

<style scoped>

</style>