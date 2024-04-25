<script setup lang="ts">
import {Link} from "@inertiajs/vue3";

</script>

<template>
    <div class="auth-main">
        <div class="auth-main__heading">
            <p>Авторизуйтесь перед началом работы</p>
        </div>
        <div class="auth-main__login">
            <p>Введите логин</p>
            <input class="auth-main__login-input">
        </div>
        <div class="auth-main__login">
            <p>Введите пароль</p>
            <input type="password" class="auth-main__password-input">
        </div>
        <button class="auth-main__btn">Авторизоваться</button>
        <Link :href="'/home'">Home</Link>
    </div>

</template>

<style scoped lang="scss">
@import "/resources/scss/mixins.scss";

.auth-main {
    box-shadow: 0 0 30px rgb(255, 255, 255, 0.1);
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    height: 50%;
    min-height: 450px;
    width: 20%;
    min-width: 400px;
    @include background-color;
    border-radius: 20px;
    @include centering-block-column;

    &__heading {
        text-align: center;
        @include centering-block-column;
        margin-top: 20px;
        width: 95%;
        height: 50px;
        @include font-stack;
        color: white;
        border-radius: 18px;
    }

    &__login {
        color: white;
        width: 80%;
        @include font-stack;
        padding: 30px 0 0 0;
        @include centering-block-column;
    }

    &__login-input {
        @include input-stack;
    }

    &__password-input {
        @include input-stack;
    }

    &__btn {
        box-shadow: 0 0 10px rgb(255, 255, 255, 0.1);
        margin-top: 30px;
        @include font-stack;
        width: 70%;
        height: 60px;
        color: white;
        @include button;
        border-radius: 18px;
    }

    &__btn:hover {
        box-shadow: 0 0 10px rgb(0, 0, 0, 0.1);
        @include btn-hover-style;
        cursor: pointer;
    }

    &__login-input:focus {
        outline: none;
    }

    &__login-input:focus:hover {
        outline: none;
    }

    &__password-input:focus {
        outline: none;
    }

    &__password-input:focus:hover {
        outline: none;
    }
}
</style>
