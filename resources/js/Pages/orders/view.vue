<template>
  <div class="container mx-auto p-8 bg-cover bg-center">
    <div class="card border border-gray-300 rounded-lg bg-gray-200 shadow-lg">
      <h1 class="card-header text-2xl text-primary font-weight-bold p-4 bg-gradient-to-r from-blue-500 to-purple-500 text-white rounded-t-lg">Order Details</h1>
      <div class="card-body p-6">
        <div v-if="showEdit">
          <form @submit.prevent="submit" class="space-y-4">
            <div class="mb-3">
              <label for="user_id" class="form-label block text-gray-700">User ID</label>
              <input type="number" id="user_id" class="form-control p-2 border rounded-md w-full shadow-inner" v-model="form.user_id" required>
            </div>
            <div class="mb-3">
              <label for="total_amount" class="form-label block text-gray-700">Total Amount</label>
              <input type="number" step="0.01" id="total_amount" class="form-control p-2 border rounded-md w-full shadow-inner" v-model="form.total_amount" required>
            </div>
            <div class="mb-3">
              <label for="status" class="form-label block text-gray-700">Status</label>
              <select id="status" class="form-select w-50 p-2 border rounded-md shadow-inner" v-model="form.status" required>
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
                <option value="cancelled">Cancelled</option>
              </select>
            </div>
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded shadow-md hover:bg-blue-700">Save</button>
          </form>
        </div>
        <div class="row" v-else>
          <table class="col-md-6 table-auto w-full text-left">
            <tr><th class="p-2">User ID:</th><td class="p-2">{{ order.user_id }}</td></tr>
            <tr><th class="p-2">Total Amount:</th><td class="p-2">{{ order.total_amount }}</td></tr>
            <tr><th class="p-2">Status:</th><td class="p-2">{{ order.status }}</td></tr>
            <tr><th class="p-2">Created At:</th><td class="p-2">{{ order.created_at }}</td></tr>
            <tr><th class="p-2">Updated At:</th><td class="p-2">{{ order.updated_at }}</td></tr>
          </table>
        </div>
        <div class="col-12 flex mt-4 space-x-2">
          <button onclick="window.history.back()" class="btn btn-primary bg-green-700 py-2 px-4 rounded shadow-md hover:bg-green-800">Back</button>
          <button class="px-4 py-2 bg-blue-700 text-white rounded shadow-md hover:bg-blue-800" @click="toggleEdit">{{ showEdit ? 'Cancel' : 'Edit' }}</button>
          <button class="px-4 py-2 bg-red-700 text-white rounded shadow-md hover:bg-red-800" @click="delOrder">Delete</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { defineProps } from 'vue';
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import Homelayout from '@/Layouts/Homelayout.vue';

defineOptions({
    layout: Homelayout
});

const props = defineProps({
  order: Object
});

const showEdit = ref(false);

const form = useForm({
  user_id: props.order.user_id,
  total_amount: props.order.total_amount,
  status: props.order.status
});

const submit = async () => {
  await form.put('/orders/' + props.order.id);
};

const toggleEdit = () => {
  showEdit.value = !showEdit.value;
};

const delOrder = () => {
  const del = confirm('Are you sure you want to delete this order?');
  if (del) {
    form.delete('/orders/' + props.order.id);
  }
};
</script>

<style scoped>
.container {
  background-image: url('https://i.pinimg.com/736x/26/57/8b/26578b71057a20da5ba93d03954dc107.jpg');
  background-size: cover;
  height: 100vh;
  background-position: center;
  
}
label {
  margin-bottom: 0.5rem;
  font-weight: 600;
}

.card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
}

.card-header {
  text-align: center;
}

.card-body {
  background: linear-gradient(145deg, #e2e8f0, #ffffff);
  border-radius: 0 0 10px 10px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.form-control, .form-select {
  box-shadow: inset 3px 3px 6px #d1d9e6, inset -3px -3px 6px #ffffff;
}

button {
  transition: background 0.3s ease, transform 0.3s ease;
}

button:hover {
  transform: translateY(-2px);
}

p {
  margin-top: 0.25rem;
}
</style>
