<script setup>
import { Link } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/Admin/PrimaryButton.vue';
import LeftMenu from '@/Components/Admin/LeftMenu.vue';
</script>

<template>
    <div class="flex flex-col h-full">
        <div id="hedaer" class="flex flex-row bg-gray-800 text-gray-100 p-5 items-center">
            <div>
                <Link :href="route('admin.dashboard')" method="get" as="button">
                    <span class="font-bold text-xl">Admin Dashboard</span>
                </Link>
            </div>
            <div class="flex-auto"></div>
            <div class="a self-end">
                <PrimaryButton>
                    <Link :href="route('logout')" method="post" as="button">Logout</Link>
                </PrimaryButton>
            </div>
        </div>
        <div id="page-content" class="flex-auto">
            <div class="flex flex-row h-full">
                <LeftMenu></LeftMenu>
                <div class="p-4 text-gray-800">
                    <slot />
                </div>
            </div>
        </div>
        <div id="footer" class="p-4 bg-gray-800 text-gray-100">
            <a href="https://www.github.com" target="_blank">Git</a>
        </div>
    </div>
</template>