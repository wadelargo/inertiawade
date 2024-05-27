<script setup>
import { Link } from '@inertiajs/vue3';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
</script>

<template>
  <div class="flex">
    <div class="navbar w-[200px] bg-gray-800 text-white">
      <img src="https://media0.giphy.com/media/iiaXlIRcDWjTJqbYja/giphy.gif?cid=6c09b952xzrn8n6m2qahjr0abkr9ggdrc8rejv2ao7wuogko&ep=v1_internal_gif_by_id&rid=giphy.gif&ct=g" alt="Profile Image" class="profile-image">
      <nav class="nav-items">
        <h1 class="text-center text-2xl">Food Ordering System</h1>
        <p class="text-center mt-5">Order Delivery & Take-out</p>
        <Link href="/home" class="nav-link">Home</Link>
        <Link href="/orders" class="nav-link">Order</Link>
        <Link href="/menu" class="nav-link">Menu</Link>
      </nav>
    </div>
    <div class="content flex-grow">
      <div class="min-h-screen bg-gray-100">
        <nav class="bg-white border-b border-gray-100">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
              <div class="flex">
                <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                  Dashboard
                </NavLink>
              </div>
              <div class="hidden sm:flex sm:items-center sm:ml-6">
                <div class="ml-3 relative">
                  <Dropdown align="right" width="48">
                    <template #trigger>
                      <span class="inline-flex rounded-md">
                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                          {{ $page.props.auth.user.name }}
                          <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                        </button>
                      </span>
                    </template>
                    <template #content>
                      <DropdownLink :href="route('logout')" method="post" as="button">
                        Log Out
                      </DropdownLink>
                    </template>
                  </Dropdown>
                </div>
              </div>
              <div class="-mr-2 flex items-center sm:hidden">
                <button @click="showingNavigationDropdown = !showingNavigationDropdown" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                  <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{ 'hidden': showingNavigationDropdown, 'inline-flex': !showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{ 'hidden': !showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div :class="{ 'block': showingNavigationDropdown, 'hidden': !showingNavigationDropdown }" class="sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
              <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                Dashboard
              </ResponsiveNavLink>
            </div>
            <div class="pt-4 pb-1 border-t border-gray-200">
              <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ $page.props.auth.user.name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ $page.props.auth.user.email }}</div>
              </div>
              <div class="mt-3 space-y-1">
                <ResponsiveNavLink :href="route('logout')" method="post" as="button">
                  Log Out
                </ResponsiveNavLink>
              </div>
            </div>
          </div>
        </nav>
        <header class="bg-white shadow" v-if="$slots.header">
          <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <slot name="header" />
          </div>
        </header>
        <main>
          <Transition name="page-trans" mode="out-in">
            <slot />
          </Transition>
        </main>
      </div>
    </div>
  </div>
</template>

<style scoped>
.logo {
  height: 40px;
  width: 40px;
}
.profile-image {
  margin-top: 15px;
  height: 100px;
  width: 100px;
  border-radius: 50%;
  margin-left: 80px;
}
.nav-items {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 20px;
}
.nav-link {
  display: block;
  background-color: #1e1e1e;
  color: white;
  text-align: center;
  padding: 10px 20px;
  margin: 10px 0;
  border-radius: 15px;
  text-decoration: none;
  transition: all 0.3s ease;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}
.nav-link:hover {
  background-color: #383838;
  transform: translateY(-5px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
}
h1 {
  text-shadow: 
    0 0 5px #4a4a4a, 
    0 0 10px #4a4a4a,
    0 0 15px #4a4a4a,
    0 0 20px #4a4a4a,
    0 0 25px #4a4a4a,
    0 0 30px #4a4a4a,
    0 0 35px #4a4a4a;
}
.navbar {
  width: 300px;
  max-height: 100%;
  padding: 20px;
  background: linear-gradient(145deg, #3b3b3b, #212121);
  box-shadow: 5px 5px 10px #1a1a1a, -5px -5px 10px #404040;
}
.navbar img {
  border: 3px solid #1e1e1e;
}
.content {
  flex-grow: 1;
}
</style>
