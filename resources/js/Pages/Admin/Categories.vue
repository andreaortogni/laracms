<script setup>
import PrimaryButton from '@/Components/Admin/PrimaryButton.vue';
import AdminLayout from '@/Layouts/Admin/AdminLayout.vue';
</script>

<template>
    <AdminLayout>
        <div class="flex flex-row justify-end p-4">
            <h1 class="font-bold text-2xl">Categorie</h1>
            <div class="flex-auto"></div>
            <PrimaryButton>Add category</PrimaryButton>
        </div>
    </AdminLayout>
</template>