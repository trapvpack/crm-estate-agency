<script setup lang="ts">
import Authorization from "./Authorization.vue";
import {Link} from "@inertiajs/vue3";

</script>

<template>
    <nav class="navbar">
        <button class="navbar__button">Доски и задачи</button>
        <button class="navbar__button">Сделки</button>
        <button class="navbar__button">Заявки</button>
        <button class="navbar__button">Недвижимость</button>
        <button class="navbar__button">Клиенты</button>
    </nav>
    <div class="home">
        <div class="home__left-bar">
            <input type="search" class="home__left-bar-search">
            <ul class="home__bar-elements">
                <li class="home__bar-element">Доска1</li>
                <li class="home__bar-element">Доска2</li>
                <li class="home__bar-element-new">Добавить доску</li>
            </ul>
        </div>
        <div class="home__line"></div>
        <div class="home__board">
            <div class="home__board-collection">
                <nav class="home__board-navbar">
                    <span class="home__board-name">Доска1</span>
                    <input class="home__board-search" type="search">
                    <button class="home__board-add-button">+</button>
                </nav>

                <div class="home__board-elements"></div>
            </div>
            <button class="home__board-show-button">Показать</button>
        </div>
    </div>

</template>

<style scoped lang="scss">
@import "/resources/scss/mixins.scss";

@mixin bar-element {
    margin-top: 5px;
    width: 95%;
    height: 10vh;
    border-radius: 20px;
    @include centering-block-column;
    @include font-stack;
}

.navbar {
    margin: 15px 15px 15px 15px;
    height: 6vh;
    background-color: #cbd5e0;
    width: 98%;
    border-radius: 20px;
    @include centering-block-row;

    &__button {
        margin: 0 5px 0 0;
        height: 5vh;
        border: none;
        border-radius: 13px;
        background-color: #1a202c;
        color: #cbd5e0;
        @include font-stack;
    }

    &__button:hover {
        cursor: pointer;
        border: 2px solid #cbd5e0;
        background-color: #1a253c;
    }
}

.home {
    height: 100%;
    padding: 0 15px 10px 15px;
    @include centering-block-row;

    &__left-bar {
        margin: 0;
        background: #a0aec0;
        height: 88vh;
        width: 20%;
        border-radius: 20px;
        @include centering-block-column;
    }

    &__line {
        margin: 0;
        color: #cbd5e0;
        width: 1%;
    }

    &__board {
        margin: 0;
        background: #1a202c;
        height: 85vh;
        width: 80%;
        border-radius: 20px;
    }

    &__bar-elements {
        margin: 0;
        padding: 0;
        background: #a0aec0;
        height: 927px;
        width: 90%;
        border-radius: 20px;
        list-style-type: none;
        @include centering-block-column;
        justify-content: normal;
    }

    &__bar-element {
        @include bar-element;
        background-color: #1a202c;
        color: #cbd5e0;

    }

    &__bar-element-new {
        @include bar-element;
        background-color: #2d3748;
        color: #cbd5e0;

    }

    &__left-bar-search {
        margin-top: 20px;
        display: block;
        border-style: hidden;
        height: 40px;
        width: 85%;
        @include font-stack;
        background: #a0aec0;
        border-bottom: 2px solid #1a202c;
    }

    &__board {
        @include centering-block-row;
        justify-content: left;
    }

    &__board-collection {
        background: #1a202c;
        height: 85vh;
        width: 80%;
        border-radius: 20px;
    }

    &__board-navbar {
        width: 100%;
        height: 7vh;
        border-radius: 20px;
        @include centering-block-row;
    }

    &__board-name {
        @include font-stack;
        font-size: xx-large;
        color: #a0aec0;
        border-radius: 10px;
        width: 15%;
        text-align: center;
    }

    &__board-search {
        display: block;
        border-style: hidden;
        height: 30px;
        width: 100%;
        @include font-stack;
        color: #a0aec0;
        background-color: #1a202c;
        border-bottom: 1px solid #a0aec0;
    }


    &__left-bar-search:focus {
        outline: none;
    }

    &__left-bar-search:focus:hover {
        outline: none;
    }

    &__bar-element:hover {
        cursor: pointer;
        border: 1px solid #cbd5e0;
        background-color: #1a253c;
    }

    &__bar-element-new:hover {
        cursor: pointer;
        border: 2px solid #cbd5e0;
    }

    &__left-bar-search::-webkit-search-cancel-button {
        @include input-search-closer;
    }

    &__board-search::-webkit-search-cancel-button {
        @include input-search-closer;
    }

    &__board-search:focus {
        outline: none;
    }

    &__board-search:focus:hover {
        outline: none;
    }

}
</style>
