<script setup>
import { computed } from 'vue'
import { Link } from '@inertiajs/vue3'

const props = defineProps({
  href: String,
  active: Boolean,
})

const classes = computed(() => {
  return props.active
    ? ' text-white font-bold'
    : ' text-gray-500 hover:text-white '
})
</script>

<template>
  <Link
    class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out"
    :href="href" :class="classes"
  >
    <slot />
  </Link>
</template>
