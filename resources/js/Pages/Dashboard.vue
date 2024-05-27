<script setup>
import Homelayout from '@/Layouts/Homelayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Food Ordering Dashboard" />

    <Homelayout> 
        <main id="page-trans" class="main-container">
            <header class="welcome">Welcome to the Food Ordering Dashboard, {{ $page.props.auth.user.name }}!</header>
            <img src="https://i.pinimg.com/originals/1f/95/64/1f9564748e1137642b5d97ec0c9e208a.gif" alt="Food Ordering System" class="system-image">
        </main>
    </Homelayout>
</template>

<style scoped>
.main-container {
    background-image: url('https://i.pinimg.com/originals/de/dc/25/dedc25f0ffe2622c2ab7f325ea2bc9f2.gif');
    background-size: cover;
    background-position: center;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.welcome {
    text-align: center;
    margin-top: 15px;
    font-weight: bold;
    font-size: 25px;
    color: #4a90e2;
}
.system-image {
    margin-top: 50px;
    border-radius: 50%;
    width: 200px; 
    height: 200px; 
    border: 2px solid #4a90e2; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
}
</style>
