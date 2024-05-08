<script setup lang="ts">
import LeftBar from "../Blocks/LeftBar.vue";
import NavBar from '../Blocks/NavBar.vue';
import Board from "../Blocks/Board.vue";

</script>

<template>
    <NavBar></NavBar>
    <div class="home">
        <LeftBar></LeftBar>
        <div class="home__line"></div>
        <Board></Board>
    </div>
</template>

<style scoped lang="scss">
@import "/resources/scss/mixins.scss";

.home {
    height: 100%;
    padding: 0 15px 10px 15px;
    @include centering-block-row;

    &__line {
        margin: 0;
        color: #cbd5e0;
        width: 1%;
        min-width: 15px;
    }
}


</style>
