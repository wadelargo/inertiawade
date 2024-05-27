<script setup>
import { Link } from '@inertiajs/vue3';
import Homelayout from '@/Layouts/Homelayout.vue';

defineOptions({
    layout: Homelayout
});

const props = defineProps({
    orders: Array 
});
</script>

<template>
    <div class="container mx-auto py-8 px-4 bg-cover bg-center">
        <h1 class="text-4xl my-6 text-primary font-bold">Order Management</h1>

        <Link href="orders/create" class="btn inline-block px-4 py-2 font-semibold leading-5 text-white bg-green-500 hover:bg-green-600 rounded-lg mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
            </svg>
        </Link>

        <div class="overflow-x-auto">
            <table class="table-auto w-full bg-white shadow-md rounded-lg">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">User ID</th>
                        <th class="px-4 py-2">Total Amount</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">View</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">
                    <tr v-for="order in orders" :key="order.id" class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="px-4 py-3">{{ order.id }}</td>
                        <td class="px-4 py-3">{{ order.user_id }}</td>
                        <td class="px-4 py-3">{{ order.total_amount }}</td>
                        <td class="px-4 py-3">{{ order.status }}</td>
                        <td class="px-4 py-3">
                            <Link :href="'/orders/' + order.id" class="btn btn-green flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-view-list" viewBox="0 0 16 16">
                                    <path d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2m0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14"/>
                                </svg>
                            </Link>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<style scoped>
.container {
    background-image: url('https://static.vecteezy.com/system/resources/previews/003/690/403/non_2x/food-delivery-online-on-phone-orange-background-illustration-fastfood-design-concept-business-shop-promotion-transport-to-home-free-vector.jpg');
    background-size: cover;
    background-position: center;
}

.btn {
    padding: 8px 12px;
    border-radius: 4px;
    color: white;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.btn-green {
    background-color: #4CAF50;
}

.btn-green:hover {
    background-color: #45a049;
}
</style>
