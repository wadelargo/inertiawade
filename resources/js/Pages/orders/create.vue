<template>
  <div class="flex justify-center items-center h-screen bg-cover bg-center" style="background-image: url('https://png.pngtree.com/thumb_back/fh260/back_our/20190620/ourmid/pngtree-simple-food-delivery-meal-fashion-poster-background-yellow-back-image_158378.jpg');">
    <div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-lg transform transition-transform hover:scale-105 hover:shadow-xl">
      <h1 class="text-3xl text-gray-800 border-b border-gray-300 pb-2 mb-6">Create Order</h1>
      <form @submit.prevent="submit">
        <div class="mb-4">
          <label for="user_id" class="block text-gray-700 font-bold mb-2">User ID</label>
          <input type="number" id="user_id" class="w-full px-3 py-2 border rounded-md shadow-inner focus:outline-none focus:border-blue-500" v-model="form.user_id" required>
        </div>
        <div class="mb-4">
          <label for="total_amount" class="block text-gray-700 font-bold mb-2">Total Amount</label>
          <input type="number" step="0.01" id="total_amount" class="w-full px-3 py-2 border rounded-md shadow-inner focus:outline-none focus:border-blue-500" v-model="form.total_amount" required>
        </div>
        <div class="mb-4">
          <label for="status" class="block text-gray-700 font-bold mb-2">Status</label>
          <select id="status" class="w-full px-3 py-2 border rounded-md shadow-inner focus:outline-none focus:border-blue-500" v-model="form.status" required>
            <option value="pending">Pending</option>
            <option value="completed">Completed</option>
            <option value="cancelled">Cancelled</option>
          </select>
        </div>
        <div class="flex justify-between"> 
          <button onclick="window.history.back()" class="btn btn-primary bg-green-700">Back</button>
          <button type="submit" class="btn btn-primary bg-blue-500">Save Order</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';
import Homelayout from '@/Layouts/Homelayout.vue';

defineOptions({
    layout: Homelayout
});

const form = useForm({
  user_id: '',
  total_amount: '',
  status: 'pending'  
});

const submit = () => {
  form.submit('post', '/orders');
};
</script>

<style scoped>
.flex {
  display: flex;
}
.justify-center {
  justify-content: center;
}
.items-center {
  align-items: center;
}
.h-screen {
  height: 100vh;
}

.bg-cover {
  background-size: cover;
}

.bg-center {
  background-position: center;
}

.bg-white {
  background-color: #fff;
}
.rounded-lg {
  border-radius: 0.5rem;
}
.shadow-lg {
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}
.transition-transform {
  transition: transform 0.3s ease-in-out;
}
.hover\:scale-105:hover {
  transform: scale(1.05);
}
.hover\:shadow-xl:hover {
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}


.text-3xl {
  font-size: 1.875rem;
  line-height: 2.25rem;
}
.text-gray-800 {
  color: #2d3748;
}
.border-b {
  border-bottom-width: 1px;
}
.border-gray-300 {
  border-color: #d2d6dc;
}
.pb-2 {
  padding-bottom: 0.5rem;
}
.mb-6 {
  margin-bottom: 1.5rem;
}


.mb-4 {
  margin-bottom: 1rem;
}
.block {
  display: block;
}
.text-gray-700 {
  color: #4a5568;
}
.font-bold {
  font-weight: 700;
}
.mb-2 {
  margin-bottom: 0.5rem;
}
.w-full {
  width: 100%;
}
.px-3 {
  padding-left: 0.75rem;
  padding-right: 0.75rem;
}
.py-2 {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}
.border {
  border-width: 1px;
}
.rounded-md {
  border-radius: 0.375rem;
}
.shadow-inner {
  box-shadow: inset 2px 2px 4px rgba(0, 0, 0, 0.1), inset -2px -2px 4px rgba(255, 255, 255, 0.7);
}
.focus\:outline-none:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
}
.focus\:border-blue-500:focus {
  border-color: #4299e1;
}

/* Button */
.btn {
  display: inline-block;
  padding: 0.5rem 1rem;
  border: none;
  border-radius: 0.375rem;
  cursor: pointer;
  text-decoration: none;
  text-align: center;
}

.btn-primary {
  color: #fff;
}

.bg-green-700 {
  background-color: #48bb78;
}

.bg-blue-500 {
  background-color: #4299e1;
}

.btn-primary:hover {
  opacity: 0.9; 
}

.btn-primary:focus {
  outline: none; 
}


.mr-2 {
  margin-right: 0.5rem;
}

.ml-2 {
  margin-left: 0.5rem;
}
</style>
