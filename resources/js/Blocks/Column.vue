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
        <input class="new-task__description-area">
        <select class="new-task__choose-deal">
            <option disabled value="">Выберите сделку</option>
        </select>
        <select class="new-task__choose-request">
            <option disabled value="">Выберите заявку</option>
        </select>
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

.new-task {
    &__name {
        @include font-stack;
    }

    &__name-area {
        @include input-stack;
        background-color: #718096;
        width: 80%;
        margin-top: 20px;
    }

    &__description {
        @include font-stack;
    }

    &__description-area {
        @include input-stack;
        background-color: #718096;
        width: 80%;
        margin-top: 20px;
    }

    &__choose-deal {
        @include selector;
    }

    &__choose-request {
        @include selector;
    }
}

</style>
