<script setup lang="ts">

import Task from "./Task.vue";
</script>

<template>
    <div class="column">
        <span class="column__name">Название</span>
        <ul class="column__task-stash">
            <Task></Task>
        </ul>
        <button class="column__new-task-button">Новая задача +</button>
    </div>
</template>

<style scoped lang="scss">
@import "/resources/scss/mixins.scss";

.column {
    min-width: 260px;
    margin: 0 5px 0 5px;
    width: 25%;
    height: 98%;
    background: #718096;
    border-radius: 20px;
    @include centering-block-column;
    justify-content: normal;

    &__name {
        margin-top: 20px;
        @include font-stack;
    }

    &__task-stash {
        height: 90%;
        width: 100%;
        @include centering-block-column;
        justify-content: normal;
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    &__new-task-button {
        @include button;
        height: 5%;
    }

    &__new-task-button:hover {
        @include btn-hover-style;
    }
}

</style>
