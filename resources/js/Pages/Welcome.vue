<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Welcome" />
    <div class="home">
        <div class="content">
            <img src="https://i.pinimg.com/originals/e5/07/d7/e507d704d4b6fdcb17116762fcd99acd.gif" alt="">
            <p class="text-center text-4xl font-bold text-black-600 mb-5">Welcome to our Food Ordering System!</p>
            <p class="text-center text-xl font-bold text-black-600 mt-2">Here is where you can place your food orders and keep track</p>
            <p class="text-center text-xl font-bold text-black-600 mt-2">of every delicious dish, so you don't miss out!</p>
            <p class="text-center text-xl font-bold text-blue-600 mt-5 mb-5">Start exploring our menu now!</p>
            <div class="button-container">
                <Link v-if="canRegister" :href="route('register')" class="route-link">Register</Link>
                <Link v-if="canLogin" :href="route('login')" class="route-link">Log in</Link>
            </div>
        </div>
    </div>
</template>

<style>
.home {
    background-image: url('https://img.freepik.com/free-photo/street-chinese-food-with-copy-space_23-2148242502.jpg?size=626&ext=jpg&ga=GA1.1.2082370165.1716422400&semt=ais_user');
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

img {
    max-width: 100%;
    height: auto;
    border-radius: 200px;
    box-shadow: 0 5px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 50px; 
    margin-left: 140px;

}

.content {
    text-align: center;
}

.button-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.route-link {
    font-weight: 600;
    margin: 0 10px;
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    transition: all 0.3s ease;
    background-color: #7ee970;
    color: #000000;
    text-decoration: none;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    transform: translateY(0);
}

.route-link:hover {
    background-color: #b3e791;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    transform: translateY(2px);
}

.route-link:active {
    background-color: #3674c6;
    box-shadow: none;
    transform: translateY(0);
}

</style>
