<script setup lang="ts">

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
</div>

</template>

<style scoped lang="scss">
.auth-main{
    position: fixed;
    top:  50%;
    left: 50%;
    transform: translate(-50%,-50%);
    height: 450px;
    width: 400px;
    background: #a0aec0;
    border-radius: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;

    &__heading{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
        width: 360px;
        height: 50px;
        font-family: Cantarell,serif;
        color: #cbd5e0;
        background: #1a202c;
        border-radius: 10px;
        font-weight: bolder;
        font-size: large;
    }

    &__login{
        color: #1a202c;
        font-family: Cantarell,serif;
        font-weight: bolder;
        font-size: large;
        padding: 30px 0 0 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    &__login-input{
        display: block;
        border-style: hidden;
        height: 30px;
        width: 300px;
        font-size: large;
        background: #a0aec0;
        border-bottom: 3px solid #1a202c;
    }

    &__password-input{
        display: block;
        border-style: hidden;
        height: 30px;
        width: 300px;
        font-size: large;
        background: #a0aec0;
        border-bottom: 3px solid #1a202c;
    }

    &__btn{
        margin-top: 30px;
        font-family: Cantarell,serif;
        width: 250px;
        height: 60px;
        color: #cbd5e0;
        background: #1a202c;
        border: #1a202c;
        border-radius: 18px;
        font-weight: bolder;
        font-size: large;
    }

    &__btn:hover{
        border: 1px solid #1a254c;
        background: #1a253c;
        cursor: pointer;
    }

    &__login-input:focus{
        outline: none;
    }
    &__login-input:focus:hover{
        outline: none;
    }
    &__password-input:focus{
        outline: none;
    }
    &__password-input:focus:hover{
        outline: none;
    }
}
</style>
