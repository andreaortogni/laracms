<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const menuList = ref([
    {path:'admin.categories', label:'Categorie'},
    {path:'admin.categories', label:'Prodotti'}
]);
</script>

<template>
    <div id="left-menu" class="border-r border-gray-800 text-gray-800">
        <ul class="py-4">
            <li class="p-4 py-2 hover:bg-purple-800 hover:text-gray-100" v-for="item in menuList">
                <Link :href="route(item.path)">{{ item.label }}</Link>
            </li>
        </ul>
    </div>
</template>