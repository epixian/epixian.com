<template>
    <div class="flex flex-wrap items-center justify-around mx-24 my-24 portfolio">
        <slot></slot>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Portfolio mounted.')
        }
    }
</script>
