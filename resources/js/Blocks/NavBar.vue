<script setup lang="ts">

</script>

<template>
    <nav class="navbar">
        <a href="http://127.0.0.1:8000/home" class="navbar__button">
            <button class="navbar__button">Доски и задачи</button>
        </a>
        <button class="navbar__button">Сделки</button>
        <button class="navbar__button">Заявки</button>
        <button class="navbar__button">Недвижимость</button>
        <a href="http://127.0.0.1:8000/clients" class="navbar__button">
            <button class="navbar__button">Клиенты</button>
        </a>

    </nav>
</template>

<style scoped lang="scss">
@import "/resources/scss/mixins.scss";

.navbar {
    box-shadow: 0 0 25px rgb(200, 200, 200, 0.13);
    margin: 15px 15px 15px 15px;
    height: 6vh;
    @include background-color;
    min-width: 865px;
    @include centering-block-row;
    border-radius: 5px;

    &__button {
        transition: background-color 0.3s;
        height: 100%;
        @include background-color;
        color: #cbd5e0;
        border: none;
        @include font-stack;
    }

    &__button:hover {
        cursor: pointer;
        background-color: #34343a;
    }
}
</style>
