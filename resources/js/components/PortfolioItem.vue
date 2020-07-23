<template>
  <div class="inline-block m-4">
    <a :href="url">
      <img class="portfolio-img h-20 w-auto" :src="img" :alt="alt">
    </a>
  </div>
</template>

<script>
  export default {
    props: ['img', 'alt', 'url']
  }
</script>
