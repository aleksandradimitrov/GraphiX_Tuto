<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    videos: Object
});
</script>

<template>

    <!-- <Head title="GrapicX Tutorials" /> -->
    <AppLayout title="Tutorials">
    <!-- <div>
        {{ videos }}
    </div> -->
    <div class="center-screen grid-container">
      <div v-for="video in videos" class="grid-item card w-96 bg-base-100 shadow-xl">
  <figure>
    <img src="https://picsum.photos/600/200" alt="Thumbnail" />
</figure>
  <div class="card-body">
    <h2 class="card-title">{{ video.title }}</h2>
    <p>{{ video.description }}</p>
    
  </div>
  <div class="rating">
  <input type="radio" name="rating-4" class="mask mask-star-2 bg-green-500" />
  <input type="radio" name="rating-4" class="mask mask-star-2 bg-green-500" checked />
  <input type="radio" name="rating-4" class="mask mask-star-2 bg-green-500" />
  <input type="radio" name="rating-4" class="mask mask-star-2 bg-green-500" />
  <input type="radio" name="rating-4" class="mask mask-star-2 bg-green-500" />
</div>
<div class="card-actions justify-end">
      <button class="btn btn-primary mt-5">Watch Now</button>
    </div>
      </div>
    </div>
</AppLayout>
</template>

<style>
.grid-container {
  display: grid;
  grid-template-columns: repeat(4, minmax(56px, 80px));
  grid-gap: 50px;
  position: fixed;
  /* bottom: 0;
  left: 0; */
  width: 100%;
  box-shadow: 0 0 2px rgba(0, 0, 0, 0.12), 0 2px 4px rgba(0, 0, 0, 0.24);
  justify-content: space-between;
}
.center-screen {
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  min-height: 100vh;
  left: 10%;
  margin-right: -50%;
}
.grid-item {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  min-height: 40px;
  font-size: 14px;
  text-decoration: none;
}
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
