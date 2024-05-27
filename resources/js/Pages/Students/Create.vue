<script setup>
import { useForm } from '@inertiajs/vue3';
import Homelayout from '@/Layouts/Homelayout.vue';

defineOptions({
    layout: Homelayout
})

const form =  useForm({
    id_num: '',
    name:    '',
    course:    '',
    year: '',
    subject: ''
})

const submit = () => {
    form.submit('post', '/Record')
}
</script>

<template>
    <main id="page-trans">
        <h1 class="text-4xl fw-bold my-2 mx-4 text-primary text-center">Add Student</h1>

<div style="max-width: 400px; margin-left: 30%;" class="p-4">
    <form @submit.prevent="submit">
        <div class="mb-3">
            <label for="id_num">Student ID:</label>
            <input type="number" id="id_num" class="w-full" v-model="form.id_num">
        </div>
        <div class="mb-3">
            <label for="name">Student Name:</label>
            <input type="text" id="name" class="w-full" v-model="form.name">
        </div>
        <div class="mb-3">
            <label for="course">Course:</label>
            <input type="text" id="course" class="w-full" v-model="form.course">
        </div>
        <div class="mb-3">
            <label for="year">Year:</label>
            <input type="number" id="year" class="w-full" v-model="form.year">
        </div>
        <div class="mb-3">
            <label for="subject">Subject:</label>
            <input type="text" id="subject" class="w-full" v-model="form.subject">
        </div>
        <button type="submit" class="link bg-gray-600 fw-bold text-white py-2 px-4 rounded">Save</button>
    </form>
</div>
    </main>
</template>

<style scoped>
.link:hover {
    background-color: rgb(46, 99, 247);
}
</style>