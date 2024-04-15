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
    background-color: #cbd5e0;
    min-width: 865px;
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
</style>
