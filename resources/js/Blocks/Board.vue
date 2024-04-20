<script setup lang="ts">
import Column from "./Column.vue";
import ModalWindow from "../Layouts/ModalWindow.vue";
import {ref} from "vue";

let overlayVisibility = ref<boolean>(false);

</script>

<template>
    <ModalWindow class="new-column" v-if="overlayVisibility" @closeButtonIsClicked="overlayVisibility = false">
        <span class="new-column__name">Название колонки</span>
        <input type="text" class="new-column__name-area">
        <select class="new-column__color">
            <option disabled value="">Выберите цвет</option>
            <option value="red">Красный</option>
            <option value="blue">Синий</option>
            <option value="green">Зелёный</option>
        </select>
    </ModalWindow>
    <div class="board">
        <div class="board__collection">
            <nav class="board__navbar">
                <span class="board__name">Доска1</span>
                <input class="board__search" type="search">
                <button class="board__add-button" @click="overlayVisibility = true">+</button>
            </nav>
            <div class="board__columns">
                <Column></Column>
                <Column></Column>
                <Column></Column>
            </div>
        </div>
        <div class="board__closed-tasks">
            <button class="board__show-button">Показать завершённые</button>
        </div>
    </div>
</template>

<style scoped lang="scss">

@import "/resources/scss/mixins.scss";

.board {
    margin: 0;
    @include background-color;
    height: 85vh;
    width: 80%;
    min-width: 600px;
    border: 3px solid #34343a;
    border-radius: 10px;
    @include centering-block-row;
    justify-content: left;

    &__collection {
        border-radius: 10px;
        @include background-color;
        height: 85vh;
        width: 80%;
    }

    &__navbar {
        width: 100%;
        height: 7vh;
        @include centering-block-row;
    }

    &__name {
        @include font-stack;
        font-size: xx-large;
        color: #a0aec0;
        min-width: 150px;
        width: 15%;
        text-align: center;
    }

    &__search {
        display: block;
        border-style: hidden;
        height: 40%;
        width: 90%;
        @include font-stack;
        @include background-color;
        color: #a0aec0;
        border-bottom: 1px solid #a0aec0;
        margin-right: 30px;
    }

    &__add-button {
        background-color: #a0aec0;
        border-radius: 10px;
        min-width: 30px;
        min-height: 30px;
        width: 4%;
        height: 62%;
        border: none;
        @include font-stack;
        text-align: center;
    }

    &__columns {
        margin-left: 10px;
        border-right: 2px solid #718096;
        border-bottom-left-radius: 20px;
        overflow-x: auto;
        width: 100%;
        height: ((812.59px - 76.91px) / 812.59px) * 100%;
        @include background-color;
        @include centering-block-row;
        justify-content: normal;
    }

    &__columns::-webkit-scrollbar {
        border-radius: 20px;
        background-color: #1a202c;
    }

    &__columns::-webkit-scrollbar-thumb {
        border-radius: 20px;
        background-color: #718096;
    }

    &__closed-tasks {
        width: 25%;
        height: 100%;
        @include centering-block-column;
        justify-content: end;
    }

    &__show-button {
        @include button;
    }

    &__search::-webkit-search-cancel-button {
        @include input-search-closer;
    }

    &__search:focus {
        outline: none;
    }

    &__search:focus:hover {
        outline: none;
    }

    &__add-button:hover {
        @include btn-hover-style;
    }

    &__show-button:hover {
        @include btn-hover-style;
    }
}

.new-column {

    &__name {
        @include font-stack;
    }

    &__name-area {
        @include input-stack;
        background-color: #718096;
        width: 80%;
        margin-top: 20px;
    }

    &__color {
        @include selector;
    }

    &__name-area:focus {
        outline: none;
    }

    &__name-area:focus:hover {
        outline: none;
    }

}
</style>
