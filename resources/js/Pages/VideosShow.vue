<script setup lang="ts">
import StarRating from 'vue-star-rating'
import InputError from '@/Components/InputError.vue'
const props = defineProps<{
  video: any
  ratings: any[]
}>()
const form = useForm({
  comment: '',
  rating: 0,

})

function postComment() {
  form.transform(
    data => ({
      ...data,
      video_id: props.video.id,
    }),
  )
    .post(route('video-review.store'), {
      errorBag: 'addReview',
      preserveScroll: true,
      onSuccess: () => form.reset(),
      onError: () => {
        if (form.errors.comment)
          form.reset('comment')
      },
    })
}
</script>

<template>
  <Head title="GrapicX Tutorials" />

  <!-- <div>
        {{ videos }}
    </div> -->
  <div class="center-screen grid-container">
    <figure>
      <!-- <img src="https://picsum.photos/600/200" alt="Thumbnail" /> -->

      <!-- {{ video }} -->
      <Image :src="video.thumbnail_photo_path" alt="Image" width="50" preview />
    </figure>
    <div class="grid-item bg-indigo-6 card w-180 bg-base-100 shadow-xl">
      <!-- <textarea v-model="form.comment" placeholder="Bio" style="color:black;" class="textarea textarea-bordered textarea-xs w-full max-w-xs" /> -->
      <input v-model="form.comment" placeholder="Comment" mb-5 style="color:black;width:650px;" width="500" class="comment">
      <InputError class="mt-2" :message="form.errors.comment" />

      <StarRating v-model:rating="form.rating" :star-size="25" active-color="#ffdb19" />
      <InputError class="mt-2" :message="form.errors.rating" />
      <div class=" justify-end">
        <button class="btn btn-primary mt-5" @click="postComment">
          Publish your review
        </button>
      </div>
    </div>

    <div v-for="rating in ratings" :key="rating.id" class="grid-item bg-indigo-6 card w-180 bg-base-100 shadow-xl">
      <StarRating v-model:rating="rating.rating" :star-size="25" active-color="#ffdb19" read-only="true" />
      <div>
        <strong>{{ rating.user.name }}</strong> said:
        {{ rating.comment }}
      </div>
    </div>
  </div>
</template>

<style>
.grid-container {
  display: grid;
  /* grid-template-columns: repeat(4, minmax(56px, 80px)); */
  grid-gap: 50px;
  /* position: fixed; */
  width: 100%;
  box-shadow: 0 0 2px rgba(0, 0, 0, 0.12), 0 2px 4px rgba(0, 0, 0, 0.24);
  justify-content: space-between;
  grid-template-columns: auto auto auto;
  padding: 10px;
  flex-wrap: wrap;
    gap: 1rem;

}
.comment {
        width: 40%;
        height: 100px;
        padding: 10px;
        background-color: #ffffff;
        border-style: solid;
      border-width: 1px;
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
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
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
