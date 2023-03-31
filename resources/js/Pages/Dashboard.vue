<script setup>
defineProps({
  user: Object,
})
</script>

<template>
  <div>
    <div class="best-ratings-week">
      <h1>Best ratings of the week</h1>
      <div class="first-ratings-week">
        <figure>
          <a href=""><img src="/images/video.png" alt=""></a>
          <figcaption>How to do a Cyberpunk style on PS !</figcaption>
        </figure>
        <div class="user-description">
          <figure>
            <a href=""><img src="/images/user1.png" alt="User Profil"></a>
          </figure>
          <a href=""><h3>AlexDesigner</h3></a>
          <p class="date">
            23/03/2023
          </p>
        </div>
      </div>
      <div class="grid-scroller">
        <div class="grid-scroller-item">
          <figure>
            <a href=""><img src="/images/video2.png" alt=""></a>
            <figcaption>How to use the feather on...</figcaption>
          </figure>
        </div>
        <div class="grid-scroller-item">
          <figure>
            <a href=""><img src="/images/video3.png" alt=""></a>
            <figcaption>Photoshop Advanced Level..</figcaption>
          </figure>
        </div>
        <div class="grid-scroller-item">
          <figure>
            <a href=""><img src="/images/video4.png" alt=""></a>
            <figcaption>Illustrator Beginner Level T...</figcaption>
          </figure>
        </div>
        <div class="grid-scroller-item">
          <figure>
            <a href=""><img src="/images/video4.png" alt=""></a>
            <figcaption>Illustrator Beginner Level T...</figcaption>
          </figure>
        </div>
      </div>
    </div>
    <div class="about-scroll overflow-x-auto oveflow-y-hidden">
      <div class="about-scroll-items">
        <h2>What is this ?</h2>
        <p>GraphX is a <span>website</span> that lists <span>graphic design tutorials</span>.</p>
      </div>
      <div class="about-scroll-items">
        <h2>Who can do it ?</h2>
        <p>Everyone can <span>post and vote</span> and become <span>certified if they are professional</span>.</p>
      </div>
      <div class="about-scroll-items">
        <h2>How to do it ?</h2>
        <p><span>Post your videos</span> with the <span><a href="">creator tab</a></span> or vote for the collaborators' creations under <span><a href="">all posts</a></span>.</p>
      </div>
      <div class="about-scroll-items">
        <h2>Become certified...</h2>
        <p>Post <span>quality content</span> in <span>large quantities</span> and be <span>validated</span> by collaborators </p>
      </div>
      <div class="about-scroll-items">
        <h2>Try it now !</h2>
        <div>
          <a href="">Try<img src="/images/Arrow.png" alt=""></a>
        </div>
      </div>
    </div>
    <div class="scroller">
      <div>
        <h1>Photoshop tutorials</h1>
        <a href="">Show more</a>
      </div>
      <div class="grid-scroller">
        <div class="grid-scroller-item">
          <figure>
            <a href=""><img src="/images/video2.png" alt=""></a>
            <figcaption>How to use the feather on...</figcaption>
          </figure>
        </div>
        <div class="grid-scroller-item">
          <figure>
            <a href=""><img src="/images/video3.png" alt=""></a>
            <figcaption>Photoshop Advanced Level..</figcaption>
          </figure>
        </div>
        <div class="grid-scroller-item">
          <figure>
            <a href=""><img src="/images/video4.png" alt=""></a>
            <figcaption>Illustrator Beginner Level T...</figcaption>
          </figure>
        </div>
        <div class="grid-scroller-item">
          <figure>
            <a href=""><img src="/images/video4.png" alt=""></a>
            <figcaption>Illustrator Beginner Level T...</figcaption>
          </figure>
        </div>
      </div>
    </div>
  </div>
</template>
