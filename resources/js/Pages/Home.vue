<script setup lang="ts">
import {Link} from "@inertiajs/vue3";

</script>

<template>
    <nav class="navbar">
        <button class="navbar__button">Доски и задачи</button>
        <button class="navbar__button">Сделки</button>
        <button class="navbar__button">Заявки</button>
        <button class="navbar__button">Недвижимость</button>
        <button class="navbar__button">Клиенты</button>
    </nav>
    <div class="home">
        <div class="home__left-bar">
            <input type="search" class="home__left-bar-search">
            <ul class="home__bar-elements">
                <li class="home__bar-element">Доска1</li>
                <li class="home__bar-element">Доска2</li>
                <li class="home__bar-element-new">Добавить доску</li>
            </ul>
        </div>
        <div class="home__line"></div>
        <div class="home__board">
            <div class="home__board-collection">
                <nav class="home__board-navbar">
                    <span class="home__board-name">Доска1</span>
                    <input class="home__board-search" type="search">
                    <button class="home__board-add-button">+</button>
                </nav>

                <div class="home__board-elements"></div>
            </div>
            <button class="home__board-show-button">Показать</button>
        </div>
    </div>

</template>

<style scoped lang="scss">
.navbar {
    margin: 15px 15px 15px 15px;
    height: 6vh;
    background-color: #cbd5e0;
    width: 98%;
    border-radius: 20px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;

    &__button {
        margin: 0 5px 0 0;
        height: 5vh;
        border: none;
        border-radius: 13px;
        background-color: #1a202c;
        font-family: Cantarell, serif;
        color: #cbd5e0;
        font-weight: bolder;
        font-size: large;

    }

    &__button:hover {
        cursor: pointer;
        border: 2px solid #cbd5e0;
        background-color: #1a253c;
    }
}

.home {
    height: 100%;
    padding: 0 15px 10px 15px;
    display: flex;
    flex-direction: row;
    align-items: center;

    &__left-bar {
        margin: 0;
        background: #a0aec0;
        height: 88vh;
        width: 20%;
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    &__line {
        margin: 0;
        color: #cbd5e0;
        width: 1%;
    }

    &__board {
        margin: 0;
        background: #1a202c;
        height: 85vh;
        width: 80%;
        border-radius: 20px;
    }

    &__bar-elements {
        margin: 0;
        padding: 0;
        background: #a0aec0;
        height: 927px;
        width: 90%;
        border-radius: 20px;
        list-style-type: none;
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    &__bar-element {
        margin-top: 5px;
        background-color: #1a202c;
        width: 95%;
        height: 10vh;
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: Cantarell, serif;
        color: #cbd5e0;
        font-weight: bolder;
        font-size: large;
    }

    &__bar-element-new {
        margin-top: 5px;
        background-color: #2d3748;
        width: 95%;
        height: 10vh;
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: Cantarell, serif;
        color: #cbd5e0;
        font-weight: bolder;
        font-size: large;
    }

    &__left-bar-search {
        margin-top: 20px;
        display: block;
        border-style: hidden;
        height: 40px;
        width: 85%;
        font-family: Cantarell, serif;
        font-size: larger;
        background: #a0aec0;
        border-bottom: 2px solid #1a202c;

    }


    &__board {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: left;
    }

    &__board-collection {
        background: #1a202c;
        height: 85vh;
        width: 80%;
        border-radius: 20px;
    }

    &__board-navbar {
        width: 100%;
        height: 7vh;
        border-radius: 20px;
        display: flex;
        align-items: center;
    }

    &__board-name {
        font-family: Cantarell, serif;
        color: #a0aec0;
        border-radius: 10px;
        font-weight: bolder;
        font-size: xx-large;
        width: 15%;
        text-align: center;
    }

    &__board-search {
        display: block;
        border-style: hidden;
        height: 30px;
        width: 100%;
        font-family: Cantarell, serif;
        color: #a0aec0;
        font-size: large;
        background-color: #1a202c;
        border-bottom: 1px solid #a0aec0;
    }

    &__left-bar-search:focus {
        outline: none;
    }

    &__left-bar-search:focus:hover {
        outline: none;
    }

    &__bar-element:hover {
        cursor: pointer;
        border: 1px solid #cbd5e0;
        background-color: #1a253c;
    }

    &__bar-element-new:hover {
        cursor: pointer;
        border: 2px solid #cbd5e0;
    }

    &__left-bar-search::-webkit-search-cancel-button {
        -webkit-appearance: none;
        appearance: none;
        height: 10px;
        width: 10px;
        background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjEyMy4wNXB4IiBoZWlnaHQ9IjEyMy4wNXB4IiB2aWV3Qm94PSIwIDAgMTIzLjA1IDEyMy4wNSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMTIzLjA1IDEyMy4wNTsiDQoJIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPHBhdGggZD0iTTEyMS4zMjUsMTAuOTI1bC04LjUtOC4zOTljLTIuMy0yLjMtNi4xLTIuMy04LjUsMGwtNDIuNCw0Mi4zOTlMMTguNzI2LDEuNzI2Yy0yLjMwMS0yLjMwMS02LjEwMS0yLjMwMS04LjUsMGwtOC41LDguNQ0KCQljLTIuMzAxLDIuMy0yLjMwMSw2LjEsMCw4LjVsNDMuMSw0My4xbC00Mi4zLDQyLjVjLTIuMywyLjMtMi4zLDYuMSwwLDguNWw4LjUsOC41YzIuMywyLjMsNi4xLDIuMyw4LjUsMGw0Mi4zOTktNDIuNGw0Mi40LDQyLjQNCgkJYzIuMywyLjMsNi4xLDIuMyw4LjUsMGw4LjUtOC41YzIuMy0yLjMsMi4zLTYuMSwwLTguNWwtNDIuNS00Mi40bDQyLjQtNDIuMzk5QzEyMy42MjUsMTcuMTI1LDEyMy42MjUsMTMuMzI1LDEyMS4zMjUsMTAuOTI1eiIvPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=);
        background-size: 10px 10px;
    }

    &__board-search::-webkit-search-cancel-button {
        -webkit-appearance: none;
        appearance: none;
        height: 10px;
        width: 10px;
        background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjEyMy4wNXB4IiBoZWlnaHQ9IjEyMy4wNXB4IiB2aWV3Qm94PSIwIDAgMTIzLjA1IDEyMy4wNSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMTIzLjA1IDEyMy4wNTsiDQoJIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPHBhdGggZD0iTTEyMS4zMjUsMTAuOTI1bC04LjUtOC4zOTljLTIuMy0yLjMtNi4xLTIuMy04LjUsMGwtNDIuNCw0Mi4zOTlMMTguNzI2LDEuNzI2Yy0yLjMwMS0yLjMwMS02LjEwMS0yLjMwMS04LjUsMGwtOC41LDguNQ0KCQljLTIuMzAxLDIuMy0yLjMwMSw2LjEsMCw4LjVsNDMuMSw0My4xbC00Mi4zLDQyLjVjLTIuMywyLjMtMi4zLDYuMSwwLDguNWw4LjUsOC41YzIuMywyLjMsNi4xLDIuMyw4LjUsMGw0Mi4zOTktNDIuNGw0Mi40LDQyLjQNCgkJYzIuMywyLjMsNi4xLDIuMyw4LjUsMGw4LjUtOC41YzIuMy0yLjMsMi4zLTYuMSwwLTguNWwtNDIuNS00Mi40bDQyLjQtNDIuMzk5QzEyMy42MjUsMTcuMTI1LDEyMy42MjUsMTMuMzI1LDEyMS4zMjUsMTAuOTI1eiIvPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=);
        background-size: 10px 10px;
    }

    &__board-search:focus {
        outline: none;
    }

    &__board-search:focus:hover {
        outline: none;
    }

}
</style>
