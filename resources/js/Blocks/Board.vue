<script setup>

import Column from "./Column.vue";
</script>

<template>
    <div class="board">
        <div class="board__collection">
            <nav class="board__navbar">
                <span class="board__name">Доска1</span>
                <input class="board__search" type="search">
                <button class="board__add-button">+</button>
            </nav>
            <div class="board__columns">
                <Column></Column>
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
    background: #1a202c;
    height: 85vh;
    width: 80%;
    border-radius: 20px;
    min-width: 600px;
    @include centering-block-row;
    justify-content: left;

    &__collection {
        background: #1a202c;
        height: 85vh;
        width: 80%;
        border-radius: 20px;
    }

    &__navbar {
        width: 100%;
        height: 7vh;
        border-radius: 20px;
        @include centering-block-row;
    }

    &__name {
        @include font-stack;
        font-size: xx-large;
        color: #a0aec0;
        border-radius: 10px;
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
        color: #a0aec0;
        background-color: #1a202c;
        border-bottom: 1px solid #a0aec0;
        margin-right: 30px;
    }

    &__add-button {
        background-color: #a0aec0;
        border-radius: 14px;
        min-width: 30px;
        min-height: 30px;
        width: 4%;
        height: 62%;
        border: none;
        @include font-stack;
        text-align: center;
    }

    &__columns {

        overflow-x: scroll;
        border-radius: 20px;
        width: 100%;
        height: ((812.59px - 76.91px) / 812.59px) * 100%;
        background: #1a202c;
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


</style>
