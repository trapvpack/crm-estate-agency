<script setup lang="ts">

</script>

<template>
    <div class="overlay">
        <form class="new-element">
            <button class="new-element__close" @click="$emit('closeButtonIsClicked')">
                <img src="/resources/assets/SvgElements/CloseButton.svg">
            </button>
            <slot>
            </slot>
            <button class="new-element__submit">Создать</button>
        </form>
    </div>
</template>

<style scoped lang="scss">
@import "/resources/scss/mixins.scss";

.overlay {
    position: fixed;
    inset: 0;
    @include centering-block-column;
    background-color: rgba(1, 4, 9, 0.8);
}

.new-element {
    width: 30%;
    height: 40%;
    min-width: 450px;
    min-height: 200px;
    border-radius: 20px;
    background: #718096;
    @include centering-block-column;
    justify-content: space-between;


    &__close {
        align-self: flex-end;
        background: #718096;
        border-radius: 20px;
        border: none;
        cursor: pointer;
        margin: 10px 10px 0 0;
    }

    &__submit {
        cursor: pointer;
        margin-top: 30px;
        align-self: auto;
        @include button;
        height: 50px;
        width: 200px;
    }

    &__submit:hover {
        @include btn-hover-style;
    }
}
</style>
