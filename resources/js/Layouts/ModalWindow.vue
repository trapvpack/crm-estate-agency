<script setup lang="ts">

const props = defineProps({
    buttonsVisibility: Boolean
});

</script>

<template>
    <div class="overlay">
        <form class="modal"
              :style="{ width: props.buttonsVisibility ? '35%' : '30%', height: props.buttonsVisibility ? '50%' : '40%'}">
            <button class="modal__close" @click="$emit('closeButtonIsClicked')">
                <img src="/resources/assets/SvgElements/CloseButton.svg" alt="">
            </button>
            <slot>
            </slot>
            <div class="modal__button-container">
                <button v-if="!props.buttonsVisibility" class="modal__submit">Создать</button>
                <button v-if="props.buttonsVisibility" class="modal__close-task">Закрыть задачу</button>
                <button v-if="props.buttonsVisibility" class="modal__edit-task">Редактировать задачу</button>
            </div>
        </form>
    </div>
</template>

<style scoped lang="scss">
@import "/resources/scss/mixins.scss";

.overlay {
    position: fixed;
    inset: 0;
    @include centering-block-column;
    background-color: rgba(0, 0, 0, 0.9);
}

.modal {
    box-shadow: 0 0 40px rgb(150, 150, 150, 0.1);
    width: 30%;
    height: 40%;
    min-width: 450px;
    min-height: 200px;
    border-radius: 15px;
    @include background-color;
    @include centering-block-column;
    justify-content: space-between;

    &__button-container {
        min-width: 100%;
        min-height: 20%;
        @include centering-block-row;
        justify-content: space-between;
    }

    &__close {
        align-self: flex-end;
        @include background-color;
        border-radius: 20px;
        border: none;
        cursor: pointer;
        margin: 10px 10px 0 0;
    }

    &__submit {
        color: white;
        box-shadow: 0 0 7px rgb(255, 255, 255, 0.1);
        cursor: pointer;
        margin-top: 10px;
        align-self: center;
        @include button;
        height: 50px;
        width: 200px;
    }

    &__close-task {
        color: white;
        box-shadow: 0 0 7px rgb(255, 255, 255, 0.1);
        cursor: pointer;
        margin-top: 30px;
        margin-left: 10px;
        align-self: flex-start;
        @include button;
        background-color: green;
        height: 40px;
        width: 180px;
    }

    &__edit-task {
        color: white;
        box-shadow: 0 0 7px rgb(255, 255, 255, 0.1);
        cursor: pointer;
        margin-top: 30px;
        margin-right: 10px;
        align-self: flex-end;
        @include button;
        background-color: orangered;
        height: 40px;
        width: 180px;
    }

    &__submit:hover {
        box-shadow: 0 0 7px rgb(0, 0, 0, 0.1);
        @include btn-hover-style;
    }

    &__close-task:hover {
        box-shadow: 0 0 7px rgb(0, 0, 0, 0.1);
        @include btn-hover-style;
        background-color: #1b321b;
    }

    &__edit-task:hover {
        box-shadow: 0 0 7px rgb(0, 0, 0, 0.1);
        @include btn-hover-style;
        background-color: #402117;
    }
}
</style>
