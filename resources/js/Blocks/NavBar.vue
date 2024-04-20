<script setup lang="ts">

</script>

<template>
    <nav class="navbar">
        <button class="navbar__button">Доски и задачи</button>
        <button class="navbar__button">Сделки</button>
        <button class="navbar__button">Заявки</button>
        <button class="navbar__button">Недвижимость</button>
        <button class="navbar__button">Клиенты</button>
    </nav>
</template>

<style scoped lang="scss">
@import "/resources/scss/mixins.scss";

.navbar {
    margin: 15px 15px 15px 15px;
    height: 6vh;
    @include background-color;
    min-width: 865px;
    @include centering-block-row;
    border: 3px solid #34343a;
    border-radius: 10px;

    &__button {
        margin: 0 5px 0 0;
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
