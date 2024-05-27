<template>
  <div class="menu-container">
    <h1 class="menu-title">Menu Items</h1>
    <ul class="menu-list">
      <li v-for="item in menuItems" :key="item.id" class="menu-item">
        <h2 class="item-name">{{ item.name }}</h2>
        <p class="item-description">{{ item.description }}</p>
        <p class="item-price">Price: ${{ item.price }}</p>
      </li>
    </ul>
  </div>
</template>

<script setup>
import { defineProps } from 'vue';
import Homelayout from '@/Layouts/Homelayout.vue';

defineOptions({
    layout: Homelayout
});

defineProps({
  menuItems: Array
});

</script>

<style scoped>
.menu-container {
  font-family: Arial, sans-serif;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
  background-image: url('https://png.pngtree.com/thumb_back/fh260/back_our/20190620/ourmid/pngtree-simple-food-delivery-meal-fashion-poster-background-yellow-back-image_158377.jpg');
  background-size: cover;
  background-repeat: repeat;
  background-position: center;
}

.menu-title {
  text-align: center;
  font-size: 2.5em;
  color: #333;
  margin-bottom: 20px;
}

.menu-list {
  list-style: none;
  padding: 0;
}

.menu-item {
  background: #f8f8f8;
  border: 1px solid #ddd;
  border-radius: 8px;
  margin-bottom: 20px;
  padding: 20px;
  transition: box-shadow 0.3s ease-in-out;
}

.menu-item:hover {
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.item-name {
  font-size: 1.8em;
  color: #444;
  margin: 0 0 10px;
}

.item-description {
  font-size: 1.2em;
  color: #666;
  margin: 0 0 10px;
}

.item-price {
  font-size: 1.2em;
  color: #333;
  font-weight: bold;
}
</style>
