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
@mixin font-stack {
    font-family: Cantarell, serif;
    font-weight: bolder;
    font-size: large;
}

@mixin centering-block-column {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

@mixin input-stack {
    border-style: hidden;
    height: 30px;
    width: 100%;
    @include font-stack;
    background: #a0aec0;
    border-bottom: 3px solid #1a202c;
}

.auth-main {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    height: 50%;
    min-height: 450px;
    width: 20%;
    min-width: 400px;
    background: #a0aec0;
    border-radius: 20px;
    @include centering-block-column;

    &__heading {
        @include centering-block-column;
        margin-top: 20px;
        width: 95%;
        height: 50px;
        @include font-stack;
        color: #a0aec0;
        background: #1a202c;
        border-radius: 18px;
    }

    &__login {
        color: #1a202c;
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
        margin-top: 30px;
        @include font-stack;
        width: 70%;
        height: 60px;
        color: #a0aec0;
        background: #1a202c;
        border: #1a202c;
        border-radius: 18px;
    }

    &__btn:hover {
        border: 2px solid #1a254c;
        background: #1a253c;
        cursor: pointer;
        color: #e2e8f0;
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
