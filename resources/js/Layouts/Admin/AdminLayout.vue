<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div id="hedaer" class="">
        <div>
            <Link :href="route('logout')" method="post" as="button">Logout</Link>
        </div>
    </div>
</template>