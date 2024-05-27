<script setup>
import { Link } from '@inertiajs/vue3';
import Homelayout from '@/Layouts/Homelayout.vue';

defineOptions({
    layout: Homelayout
});
</script>

<template>
  <main id="page-trans" class="home-container">
    <div class="info">
      <img src="https://media0.giphy.com/media/iiaXlIRcDWjTJqbYja/giphy.gif?cid=6c09b952xzrn8n6m2qahjr0abkr9ggdrc8rejv2ao7wuogko&ep=v1_internal_gif_by_id&rid=giphy.gif&ct=g" alt="Food Icon" class="icon">
      <h1 class="title">Food Ordering System</h1>
      <p class="description">Welcome to our Food Ordering System. Choose from a variety of delicious meals and place your order easily.</p>
      <Link href="/menu" class="explore-button">Explore Menu</Link>
    </div>
  </main>
</template>

<style scoped>
.home-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
  perspective: 1000px;
}

.info {
  background-color: rgba(0, 0, 0, 0.8);
  color: white;
  padding: 40px;
  border-radius: 20px;
  text-align: center;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
  transform: rotateY(-15deg) rotateX(10deg);
  transition: transform 0.5s ease, box-shadow 0.5s ease;
}

.info:hover {
  transform: rotateY(0deg) rotateX(0deg);
  box-shadow: 0 30px 60px rgba(0, 0, 0, 0.5);
}

.icon {
  height: 120px;
  width: 120px;
  border-radius: 50%;
  margin-bottom: 20px;
  box-shadow: 0 0 15px rgba(255, 255, 255, 0.3);
  transition: transform 0.5s ease, box-shadow 0.5s ease;
}

.icon:hover {
  transform: scale(1.1);
  box-shadow: 0 0 25px rgba(255, 255, 255, 0.6);
}

.title {
  font-size: 2.5rem;
  font-weight: bold;
  margin-bottom: 10px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.description {
  font-size: 1.2rem;
  margin-bottom: 20px;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
}

.explore-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #1e90ff;
  color: white;
  font-weight: bold;
  border-radius: 50px;
  text-decoration: none;
  transition: background-color 0.3s, transform 0.3s;
}

.explore-button:hover {
  background-color: #1c86ee;
  transform: translateY(-3px);
}
</style>
