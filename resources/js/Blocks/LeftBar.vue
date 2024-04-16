<script setup lang="ts">
import LeftBarElement from ".//LeftBarElement.vue";
import Overlay from "../Layouts/ModalWindow.vue";
import {ref} from "vue";
import ModalWindow from "../Layouts/ModalWindow.vue";

let overlayVisibility = ref<boolean>(false);

const buttonIsClicked = (visibility: boolean) => {
    overlayVisibility.value = visibility;
}

</script>


<template>
    <ModalWindow v-if="overlayVisibility" @closeButtonIsClicked="buttonIsClicked(false)">
        <span class="new-element-name">Название доски</span>
        <input type="text" class="new-element-name-area">
    </ModalWindow>
    <div class="left-bar">
        <input type="search" class="left-bar__search">
        <ul class="left-bar__bar-elements">
            <LeftBarElement></LeftBarElement>
            <LeftBarElement></LeftBarElement>
            <li class="left-bar__bar-element-new" @click="buttonIsClicked(true)">Добавить доску</li>
        </ul>
    </div>
</template>

<style scoped lang="scss">
@import "/resources/scss/mixins.scss";

.left-bar {
    margin: 0;
    background: #a0aec0;
    height: 88vh;
    width: 20%;
    min-width: 250px;
    border-radius: 20px;
    @include centering-block-column;

    &__search {
        margin-top: 20px;
        display: block;
        border-style: hidden;
        height: 40px;
        width: 85%;
        @include font-stack;
        background: #a0aec0;
        border-bottom: 2px solid #1a202c;
    }

    &__bar-elements {
        margin: 0;
        padding: 0;
        background: #a0aec0;
        height: 95%;
        width: 90%;
        border-radius: 20px;
        @include centering-block-column;
        justify-content: normal;
        overflow-y: auto;
    }


    &__bar-element-new {
        @include bar-element;
        background-color: #2d3748;
        color: #cbd5e0;
    }

    &__search:focus {
        outline: none;
    }

    &__search:focus:hover {
        outline: none;
    }

    &__bar-element-new:hover {
        cursor: pointer;
        border: 2px solid #cbd5e0;
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

.new-element-name {
    @include font-stack;
}

.new-element-name-area {
    @include input-stack;
    background-color: #718096;
    width: 80%;
    margin-top: 20px;
}

.new-element-name-area:focus {
    outline: none;
}

.new-element-name-area:focus:hover {
    outline: none;
}

</style>
