<script setup>
import PrimaryButton from '@/Components/Admin/PrimaryButton.vue';
import AdminLayout from '@/Layouts/Admin/AdminLayout.vue';
import { reactive } from 'vue';

const props = defineProps({
    defaultCategory: Object
});

const currentCategory = reactive({
    id: props.defaultCategory.id,
    name: props.defaultCategory.name
});
</script>

<template>
    <AdminLayout>
        <div class="flex flex-row justify-end p-4 mb-10">
            <h1 class="font-bold text-2xl">Categorie</h1>
            <div class="flex-auto"></div>
            <PrimaryButton>Add category</PrimaryButton>
        </div>

        <div class="flex flex-row w-full justify-between">
            <div id="category-tree" class="p-4">
                <ul>
                    <li>
                        <span>{{ defaultCategory.name }}</span>
                        <button class="pl-2 font-bold">+</button>
                    </li>
                </ul>
            </div>

            <div class="pr-20">
                <p><span class="font-bold">Id: </span>{{ currentCategory.id }}</p>
                <label for="current-category-name" class="pr-2 font-bold">Name:</label>
                <input type="text" disabled name="current-category-name" id="current-category-name" v-model="currentCategory.name">
                <br>
                <PrimaryButton>Save</PrimaryButton>
            </div>
        </div>
    </AdminLayout>
</template>