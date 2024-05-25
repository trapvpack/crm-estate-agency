<script setup lang="ts">
import ModalWindow from "../Layouts/ModalWindow.vue";
import {ref} from "vue";

let overlayVisibility = ref<boolean>(false);
let buttonsVisibility = ref<boolean>(false);
let editVisibility = ref<boolean>(false);
let editButtonsVisibility = ref<boolean>(false);
let previousTasksVisibility = ref<boolean>(false);

</script>

<template>
    <ModalWindow class="modal-task" v-if="overlayVisibility && !editVisibility"
                 @editButtonIsClicked="editVisibility = true; editButtonsVisibility = true; buttonsVisibility = false"
                 @closeButtonIsClicked="overlayVisibility = false;  buttonsVisibility = false; editButtonsVisibility = false"
                 :buttonsVisibility=buttonsVisibility>
        <div class="modal-task__header">
            <span class="modal-task__header-name">Название задачи</span>
            <div class="modal-task__header-status">в работе</div>
        </div>
        <div class="modal-task__body">
            <textarea readonly class="modal-task__body-description">Описание задачи</textarea>
            <div class="modal-task__body-deal">
                <span class="modal-task__body-deal-name">Сделка</span>
                <button class="modal-task__body-deal-client">Клиент</button>
                <button class="modal-task__body-deal-estate">Недвижимость</button>
            </div>
            <div class="modal-task__body-request">Заявка</div>
        </div>
        <div class="modal-task__footer">
            <div class="modal-task__footer-date">До 16.05.24</div>
            <button class="modal-task__footer-previous-tasks" @click="previousTasksVisibility = true">Предзадачи
            </button>
        </div>
    </ModalWindow>
    <ModalWindow class="modal-task" v-if="editVisibility"
                 @closeButtonIsClicked="buttonsVisibility = false; overlayVisibility = false; editVisibility = false; editButtonsVisibility = false"
                 :buttonsVisibility=buttonsVisibility
                 :editButtonsVisibility=editButtonsVisibility>
        <div class="modal-task__header">
            <input type="text" value="Название задачи" class="modal-task__header-name"
                   style="background-color: #101012; resize: none; color: white; border: 1px solid white; border-radius: 4px;  height: 45%;">
            <button style="background: none; border: none; color: white; cursor: pointer; margin-right: 30px;"
                    @click="overlayVisibility = true; editVisibility = false; buttonsVisibility = true; editButtonsVisibility = false">
                Назад
            </button>
        </div>
        <div class="modal-task__body">
            <textarea class="modal-task__body-description" style="background-color: #101012; border: 1px solid white;">Описание задачи</textarea>
            <label>Выберите сделку</label>
            <select class="modal-task__body-deal"
                    style="width: 30%; height: 40px; border-radius: 10px; border: white; color: white;">
                <option>Сделка1</option>
                <option>Сделка2</option>
            </select>
            <label>Выберите заявку</label>
            <select class="modal-task__body-deal"
                    style="width: 30%; height: 40px; border-radius: 10px; border: white; color: white; margin-bottom: 10px">
                <option>Заявка1</option>
                <option>Заявка2</option>
            </select>
        </div>
        <div class="modal-task__footer" style="background-color: #101012">
            <div class="modal-task__footer-date">До
                <input class="modal-task__deadline-time" type="date" :min="new Date().toISOString().split('T')[0]"
                       required></div>
        </div>
    </ModalWindow>
    <ModalWindow class="modal-previous" v-if="previousTasksVisibility"
                 @closeButtonIsClicked="previousTasksVisibility = false"
                 :previousTasksVisibility=previousTasksVisibility>
        <div class="modal-previous__collection">
            <div class="modal-previous__task">
                <span class="modal-previous__task-name" style="text-align: center">Название задачи</span>
                <textarea class="modal-previous__task-description" readonly>Описание задачи</textarea>
                <div class="modal-previous__task-deal">Сделка</div>
                <div class="modal-previous__task-request">Заявка</div>
                <div class="modal-previous__task-end-date">Закрыто 05.05.2024</div>
            </div>
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
    color: white;

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
        margin-right: 30px;
    }

    &__body {
        width: 100%;
        height: 60%;
        @include centering-block-column;
        justify-content: space-between;
    }

    &__body-description {
        box-shadow: 0 0 15px rgb(255, 255, 255, 0.05);
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
        box-shadow: 0 0 15px rgb(255, 255, 255, 0.05);
        background-color: #34343a;
        border-radius: 15px;
        border: 1px solid rgb(255, 255, 255, 0.1);
        width: 95%;
        height: 40%;
        color: white;
        @include centering-block-row;
        justify-content: space-between;
    }

    &__body-deal-name {
        margin-left: 10px;
    }

    &__body-deal-client {
        transition: background-color 300ms;
        @include centering-block-row;
        width: 40%;
        height: 90%;
        border-radius: 15px;
        border: 1px solid rgb(255, 255, 255, 0.1);
        @include background-color;
        margin-left: 15px;
        color: white;
        box-shadow: 0 0 15px rgb(255, 255, 255, 0.15);

    }

    &__body-deal-estate {
        transition: background-color 300ms;
        @include centering-block-row;
        width: 40%;
        height: 90%;
        border-radius: 15px;
        border: 1px solid rgb(255, 255, 255, 0.1);
        margin-right: 10px;
        @include background-color;
        color: white;
        box-shadow: 0 0 15px rgb(255, 255, 255, 0.15);
    }

    &__body-request {
        box-shadow: 0 0 15px rgb(255, 255, 255, 0.05);
        width: 95%;
        height: 10%;
        background-color: #34343a;
        border-radius: 10px;
        border: 1px solid rgb(255, 255, 255, 0.1);
        color: white;
        @include centering-block-column;
        margin-bottom: 5px;
        transition: background-color 300ms, box-shadow 300ms, height 100ms;
    }

    &__footer {
        color: white;
        background-color: #34343a;
        border-radius: 10px;
        border: 1px solid rgb(255, 255, 255, 0.1);
        width: 95%;
        height: 15%;
        @include centering-block-row;
        justify-content: space-around;
    }

    &__footer-date {
        margin-left: 55px;
    }

    &__footer-previous-tasks {
        @include button;
        @include background-color;
        width: 30%;
        height: 90%;
        margin-bottom: 0;
        margin-left: 100px;
        color: white;
        box-shadow: 0 0 15px rgb(255, 255, 255, 0.15);
        transition: box-shadow 300ms, width 300ms, height 300ms, background-color 300ms;
    }

    &__body-description:focus {
        outline: none;
    }

    &__body-description:focus:hover {
        outline: none;
    }

    &__body-deal-client:hover {
        @include btn-hover-style;
    }

    &__body-deal-estate:hover {
        @include btn-hover-style;
    }

    &__footer-previous-tasks:hover {
        @include btn-hover-style;
    }

    &__body-request:hover {
        box-shadow: 0 0 15px rgb(0, 0, 0, 0.2);
        height: 11%;
        @include btn-hover-style;
    }

}

.modal-previous {
    @include centering-block-column;
    @include font-stack;

    &__collection {
        @include centering-block-row;
        @include font-stack;
        justify-content: start;
        width: 100%;
        height: 90%;
    }

    &__task {
        color: white;
        border-radius: 10px;
        margin: 20px 0 30px 20px;
        @include centering-block-column;
        justify-content: space-around;
        width: 30%;
        height: 90%;
        background-color: #34343a;
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 0 15px rgba(255, 255, 255, 0.1);
    }

    &__task-description {
        @include background-color;
        width: 90%;
        border-radius: 10px;
        height: 20%;
        border: none;
        color: white;
        resize: none;
        text-align: center;
    }

    &__task-deal {
        @include background-color;
        width: 90%;
        border-radius: 10px;
        height: 20%;
        border: none;
        color: white;
        resize: none;
        text-align: center;
    }

    &__task-request {
        @include background-color;
        width: 90%;
        border-radius: 10px;
        height: 20%;
        border: none;
        color: white;
        resize: none;
        text-align: center;
    }

    &__task-end-date {
        @include centering-block-column;
        justify-content: end;
        width: 90%;
        border-radius: 10px;
        height: 20%;
        border: none;
        color: white;
        resize: none;
        text-align: center;
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
