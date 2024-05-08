<script setup lang="ts">
import ModalWindow from "../Layouts/ModalWindow.vue";
import {ref} from "vue";

let overlayVisibility = ref<boolean>(false);
let buttonsVisibility = ref<boolean>(false);
</script>

<template>
    <ModalWindow class="modal-task" v-if="overlayVisibility"
                 @closeButtonIsClicked="overlayVisibility = false;  buttonsVisibility = false"
                 :buttonsVisibility=buttonsVisibility>
        <div class="modal-task__header">
            <span class="modal-task__header-name">Название задачи</span>
            <div class="modal-task__header-status">в работе</div>
        </div>
        <div class="modal-task__body">
            <textarea readonly class="modal-task__body-description">Описание задачи</textarea>
            <div class="modal-task__body-deal">
                <span class="modal-task__body-deal-name">Сделка</span>
                <div class="modal-task__body-deal-client">клиент</div>
                <div class="modal-task__body-deal-estate">недвижимость</div>
            </div>
            <div class="modal-task__body-request">заявка</div>
        </div>
        <div class="modal-task__footer">
            <div class="modal-task__footer-date"></div>
            <button class="modal-task__footer-previous-tasks">предзадачи</button>
        </div>
    </ModalWindow>
    <div class="task" @click="overlayVisibility = true; buttonsVisibility = true">
        <span>Задача</span>
        <span class="task__deadline">01.05.24</span>
    </div>
</template>

<style scoped lang="scss">
@import "/resources/scss/mixins.scss";

.modal-task {
    @include centering-block-column;
    @include font-stack;

    &__header {
        color: white;
        width: 95%;
        height: 8%;
        @include centering-block-row;
        justify-content: space-between;
        border-bottom: 0.1em solid rgb(255, 255, 255, 0.1);
    }

    &__header-name {
        margin-left: 30px;
    }

    &__header-status {
        margin-right: 20px;
    }

    &__body {
        width: 100%;
        height: 60%;
        @include centering-block-column;
        justify-content: space-between;
    }

    &__body-description {
        resize: none;
        color: white;
        border-radius: 15px;
        margin-top: 10px;
        width: 94%;
        height: 35%;
        background-color: #34343a;
        border: 1px solid rgb(255, 255, 255, 0.1);
    }

    &__body-deal {
        background-color: #34343a;
        border-radius: 15px;
        border: 1px solid rgb(255, 255, 255, 0.1);
        width: 95%;
        height: 35%;
        color: white;
        @include centering-block-row;
        justify-content: space-between;
    }

    &__body-deal-name {
        margin-left: 10px;
    }

    &__body-deal-client {
        @include centering-block-row;
        width: 40%;
        height: 90%;
        border-radius: 15px;
        border: 1px solid rgb(255, 255, 255, 0.1);
    }

    &__body-deal-estate {
        @include centering-block-row;
        width: 40%;
        height: 90%;
        border-radius: 15px;
        border: 1px solid rgb(255, 255, 255, 0.1);
        margin-right: 10px;
    }

    &__body-description:focus {
        outline: none;
    }

    &__body-description:focus:hover {
        outline: none;
    }


    &__footer {
        width: 100%;
        height: 15%;
        @include centering-block-row;
        justify-content: space-between;
        background-color: blue;
    }
}

.task {
    transition: background-color 300ms;
    box-shadow: 0 0 10px rgb(0, 0, 0, 0.6);
    @include centering-block-row;
    justify-content: space-around;
    margin-top: 20px;
    height: 80px;
    width: 90%;
    background: #34343a;
    border-radius: 15px;
    @include font-stack;
    color: #e2e8f0;

    &__deadline {
        color: chartreuse;
        font-size: small;
    }
}

.task:hover {
    cursor: pointer;
    background-color: #2f2d32;
}
</style>
