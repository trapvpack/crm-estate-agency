<script setup lang="ts">

import Task from "./Task.vue";
import ModalWindow from "../Layouts/ModalWindow.vue";
import {ref} from "vue";

let overlayVisibility = ref<boolean>(false);
</script>

<template>
    <ModalWindow class="new-task" v-if="overlayVisibility" @closeButtonIsClicked="overlayVisibility = false">
        <span class="new-task__name">Название задачи</span>
        <input class="new-task__name-area">
        <span class="new-task__description">Описание задачи</span>
        <textarea class="new-task__description-area"></textarea>
        <select class="new-task__choose-deal">
            <option disabled value="">Выберите сделку</option>
        </select>
        <select class="new-task__choose-request">
            <option disabled value="">Выберите заявку</option>
        </select>
        <input class="new-task__deadline-time" type="date" value="2024-05-16">
    </ModalWindow>
    <div class="column">
        <span class="column__name">Название</span>
        <ul class="column__task-stash">
            <Task></Task>
        </ul>
        <button class="column__new-task-button" @click="overlayVisibility = true">Новая задача +</button>
    </div>
</template>

<style scoped lang="scss">
@import "/resources/scss/mixins.scss";

.column {
    box-shadow: 0 0 10px rgb(0, 0, 0, 0.6);
    min-width: 260px;
    margin: 0 5px 0 5px;
    width: 23%;
    height: 98%;
    background: #1b1b1e;
    border-radius: 20px;
    @include centering-block-column;
    justify-content: normal;

    &__name {
        margin-top: 20px;
        @include font-stack;
        color: #cbd5e0;
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
        transition: background-color 0.3s;
        color: #cbd5e0;
        @include button;
        height: 5%;
        box-shadow: 0 0 7px rgb(255, 255, 255, 0.1);
    }

    &__new-task-button:hover {
        box-shadow: 0 0 7px rgb(0, 0, 0, 0.1);
        @include btn-hover-style;
    }
}

.new-task {
    &__name {
        @include font-stack;
        color: white;
    }

    &__name-area {
        @include input-stack;
        @include background-color;
        width: 80%;
        margin-top: 20px;
    }

    &__description {
        margin-top: 10px;
        @include font-stack;
        color: white;
    }

    &__description-area {
        @include input-stack;
        @include background-color;
        width: 80%;
        height: 80px;
        margin-top: 20px;
        resize: none;
    }

    &__choose-deal {
        @include selector;
        margin-top: 10px;
    }

    &__choose-request {
        margin-top: 10px;
        @include selector;
    }

    &__deadline-time {
        margin-top: 20px;
        border-radius: 5px;
        border: 1px solid white;
        color: white;
        @include background-color;
    }

    &__description-area::-webkit-scrollbar {
        border-radius: 20px;
        @include background-color;
    }

    &__description-area::-webkit-scrollbar-thumb {
        border-radius: 20px;
        background-color: #34343a;
    }

    &__description-area::-webkit-search-cancel-button {
        @include input-search-closer;
    }

    &__name-area:focus {
        outline: none;
    }

    &__name-area:focus:hover {
        outline: none;
    }

    &__description-area:focus {
        outline: none;
    }

    &__description-area:focus:hover {
        outline: none;
    }
}

</style>
