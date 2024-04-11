<script setup lang="ts">
    import {Link} from "@inertiajs/vue3";

</script>

<template>
<div class="home">
    <div class="home__left-bar">
        <ul class="home__board-elements">
            <li class="home__board-element"></li>
        </ul>
    </div>
    <div class="home__line"></div>
    <div class="home__board"></div>
</div>

</template>

<style scoped lang="scss">
.home{
    display: flex;
    flex-direction: row;
    align-items: center;

    &__left-bar{
        margin-top: 15px;
        margin-left: 15px;
        background: #a0aec0;
        height: 97vh;
        width: 330px;
        border-radius: 20px;
    }

    &__line{
        color: #cbd5e0;
        width: 15px;
    }

    &__board{
        margin-top: 15px;
        margin-right: 15px;
        background: #1a202c;
        height: 97vh;
        width: 1590px;
        border-radius: 20px;
    }

    &__board-elements{
        margin-left: 11px;
        width: 260px;
        background-color: #1a202c;
        height: 895px;
        border-radius: 20px;
         display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
    }
    &__board-element{

        list-style-type: none;
        background-color: #cbd5e0;
        border-radius: 15px;
        width: 280px;
        height: 50px;
    }
}
</style>
