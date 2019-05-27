<template>
    <button class="outline-none" @click="toggleLike">

        <i class="fa-heart text-red-400 animated"
           :class="isLiked?'far':'fas'"
        >
        </i>

    </button>
</template>

<script>
    export default {
        data(){
            return {
                isLiked: true,
            }
        },


        methods: {
            toggleLike(){
                this.isLiked = !this.isLiked
            }
        }
    }
</script>
<style>
    .animated {
        transition: all .3s;
    }
</style>