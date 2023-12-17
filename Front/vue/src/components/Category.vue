<template>
    <div class="grid grid-cols-2 gap-8 pt-20 p-8">
      <div  v-for="category in categoriesStore.category" >
      <div class="bg-blue-400">
        <div class="h-20">
          {{category.id}}

          {{category.name}}
        </div>
      </div>
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
import NavbarComponent from "./Navbar/NavbarComponent.vue";

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