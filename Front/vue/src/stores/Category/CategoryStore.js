import { ref, computed } from "vue";
import {defineStore} from "pinia";
import axios from "axios";


export const useCategoryStore = defineStore("category", () => {

    const category = ref({});

    //must be to work
    const website = computed(() => {
        category.value.email.substring(category.value.email.lastIndexOf("@") + 1)
    })

    const changeName = (newName) => {
        category.value.name = newName;
    }

    const fetchCategories = () => {
        const data = axios.get('https://filiptuliszkiewicz.com/api/categories')
            .then((response) => {
                category.value = response.data;
            }).catch((error) => {
                console.log(error);
            })
    }

    return {
        category,
        website,
        changeName,
        fetchCategories
    }
})