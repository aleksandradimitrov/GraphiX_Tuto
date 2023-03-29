<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
// defineProps({
//     user: Object
// });
</script>

<template>
    <AppLayout title="About">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                About
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    Welcome to GraphiX Tuto our totally free graphic design tutorials website ! Our platform is dedicated to learning graphic design techniques for all levels, from beginners to advanced users. 
                    Share your tutorials for free and let those who need your help learn.
                </div>
            </div>
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    Our mission is to provide quality content to help people interested in graphic design improve their skills and create great designs.
                </div>
            </div>
        </div>
    </AppLayout>
</template>
