<script setup lang="ts">
import LeftBarElement from ".//LeftBarElement.vue";
import {ref} from "vue";
import ModalWindow from "../Layouts/ModalWindow.vue";

let overlayVisibility = ref<boolean>(false);


</script>


<template>
    <ModalWindow class="new-board" v-if="overlayVisibility" @closeButtonIsClicked="overlayVisibility = false">
        <span class="new-board__name">Название доски</span>
        <input type="text" class="new-board__name-area">
    </ModalWindow>
    <div class="left-bar">
        <input type="search" class="left-bar__search">
        <ul class="left-bar__bar-elements">
            <LeftBarElement></LeftBarElement>
            <LeftBarElement></LeftBarElement>
        </ul>
        <div class="left-bar__bar-element-new" @click="overlayVisibility = true ">Добавить доску</div>
    </div>
</template>

<style scoped lang="scss">
@import "/resources/scss/mixins.scss";

.left-bar {
    margin: 0;
    @include background-color;
    height: 88vh;
    width: 20%;
    min-width: 250px;
    border: 3px solid #34343a;
    border-radius: 10px;
    @include centering-block-column;

    &__search {
        margin-top: 20px;
        display: block;
        border-style: hidden;
        height: 40px;
        width: 90%;
        @include background-color;
        background: #101012;
        border-bottom: 1px solid #ffffff;
        @include font-stack;
        color: white;
    }

    &__bar-elements {
        margin: 50px 0 0 0;
        padding: 0;
        @include background-color;
        height: 95%;
        width: 100%;
        @include centering-block-column;
        justify-content: normal;
        overflow-y: auto;

    }

    &__bar-element-new {
        @include bar-element;
        background-color: #232329;
        color: #cbd5e0;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
    }

    &__search:focus {
        outline: none;
    }

    &__search:focus:hover {
        outline: none;
    }

    &__bar-element-new:hover {
        cursor: pointer;
        background-color: #34343a;
    }

    &__search::-webkit-search-cancel-button {
        @include input-search-closer;
    }

    &__bar-elements::-webkit-scrollbar {
        border-radius: 20px;
        background-color: #1a202c;
    }

    &__bar-elements::-webkit-scrollbar-thumb {
        border-radius: 20px;
        background-color: #718096;
    }
}

.new-board {
    &__name {
        @include font-stack;
    }

    &__name-area {
        @include input-stack;
        background-color: #718096;
        width: 80%;
        margin-top: 20px;
    }

    &__name-area:focus {
        outline: none;
    }

    &__name-area:focus:hover {
        outline: none;
    }

}
</style>
