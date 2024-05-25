<script setup lang="ts">
import NavBar from "../Blocks/NavBar.vue";
import ModalWindow from "../Layouts/ModalWindow.vue";
import {ref} from "vue";

let addOverlayVisibility = ref<boolean>(false);
let editOverlayVisibility = ref<boolean>(false);

const properties = ref([
    {
        id: 1,
        price: "10,000,000",
        area: "120 м²",
        type: "Квартира",
        address: "ул. Ленина, 1",
        description: "Просторная квартира с видом на море",
        rooms: 3,
        newBuilding: true,
        seller: "Иван Иванов"
    },
    {
        id: 2,
        price: "8,500,000",
        area: "100 м²",
        type: "Дом",
        address: "ул. Пушкина, 2",
        description: "Уютный дом в центре города",
        rooms: 4,
        newBuilding: false,
        seller: "Петр Петров"
    },
    // Add other properties as needed
]);

</script>

<template>
    <ModalWindow class="modal-estate" v-if="addOverlayVisibility" @closeButtonIsClicked="addOverlayVisibility = false"
                 :addOverlayVisibility=addOverlayVisibility>
        <label class="modal-estate__label">Стоимость</label>
        <input class="modal-estate__input" type="number">
        <label class="modal-estate__label">Тип</label>
        <select class="modal-estate__selector">
            <option>Квартира</option>
            <option>Дом</option>
            <option>Гараж</option>
        </select>
        <label class="modal-estate__label">Площадь</label>
        <input class="modal-estate__input" type="number">
        <label class="modal-estate__label">Адрес</label>
        <input class="modal-estate__input" type="text">
        <label class="modal-estate__label">Описание</label>
        <textarea class="modal-estate__description"></textarea>
        <label class="modal-estate__label">Кол-во комнат</label>
        <input class="modal-estate__input" type="number">
        <label class="modal-estate__label">Новостройка</label>
        <select class="modal-estate__selector">
            <option>Да</option>
            <option>Нет</option>
        </select>
        <label class="modal-estate__label">Продавец</label>
        <input class="modal-estate__input" type="text">
    </ModalWindow>
    <ModalWindow v-if="editOverlayVisibility" @closeButtonIsClicked="editOverlayVisibility = false"
                 :editOverlayVisibility=editOverlayVisibility>
        <label class="modal-estate__label">Стоимость</label>
        <input class="modal-estate__input" type="number">
        <label class="modal-estate__label">Тип</label>
        <select class="modal-estate__selector">
            <option>Квартира</option>
            <option>Дом</option>
            <option>Гараж</option>
        </select>
        <label class="modal-estate__label">Площадь</label>
        <input class="modal-estate__input" type="number">
        <label class="modal-estate__label">Адрес</label>
        <input class="modal-estate__input" type="text">
        <label class="modal-estate__label">Описание</label>
        <textarea class="modal-estate__description"></textarea>
        <label class="modal-estate__label">Кол-во комнат</label>
        <input class="modal-estate__input" type="number">
        <label class="modal-estate__label">Новостройка</label>
        <select class="modal-estate__selector">
            <option>Да</option>
            <option>Нет</option>
        </select>
        <label class="modal-estate__label">Продавец</label>
        <input class="modal-estate__input" type="text">
    </ModalWindow>
    <NavBar></NavBar>
    <div class="properties">
        <button @click="addOverlayVisibility = true">Добавить объект недвижимости</button>
        <table>
            <thead>
            <tr>
                <th>Фото</th>
                <th>Цена</th>
                <th>Площадь</th>
                <th>Тип</th>
                <th>Адрес</th>
                <th>Описание</th>
                <th>Комнаты</th>
                <th>Новостройка</th>
                <th>Продавец</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(property) in properties" :key="property.id">
                <td><img src="."></td>
                <td>{{ property.price }}</td>
                <td>{{ property.area }}</td>
                <td>{{ property.type }}</td>
                <td>{{ property.address }}</td>
                <td>{{ property.description }}</td>
                <td>{{ property.rooms }}</td>
                <td>{{ property.newBuilding ? 'Да' : 'Нет' }}</td>
                <td>{{ property.seller }}</td>
                <td>
                    <button @click="editOverlayVisibility = true">Редактировать</button>
                    <button @click="">Удалить</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<style scoped lang="scss">
@import "/resources/scss/mixins.scss";

.modal-estate {
    &__input {
        @include input-stack;
        @include background-color;
        width: 80%;
        margin-top: 20px;
    }

    &__label {
        color: white;
        @include font-stack;
    }

    &__selector {
        @include selector;
        margin-top: 10px;
    }

    &__description {
        @include input-stack;
        @include background-color;
        width: 80%;
        height: 80px;
        margin-top: 20px;
        resize: none;
    }
}

.properties {
    @include font-stack;
    box-shadow: 0 0 25px rgba(200, 200, 200, 0.13);
    margin: 15px;
    padding: 20px;
    background-color: #1a1a1a;
    min-width: 865px;
    border-radius: 5px;
    color: #d4d4d4;

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        margin-bottom: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;

        &:hover {
            background-color: #45a049;
        }
    }

    table {
        width: 100%;
        border-collapse: collapse;

        thead {
            tr {
                background-color: #2b2b2b;

                th {
                    padding: 10px;
                    text-align: left;
                    font-weight: 600;
                    color: #d4d4d4;
                    border-bottom: 2px solid #3c3c3c;
                }
            }
        }

        tbody {
            tr {
                &:nth-child(odd) {
                    background-color: #2a2a2a;
                }

                &:nth-child(even) {
                    background-color: #242424;
                }

                &:hover {
                    background-color: #333;
                }

                td {
                    padding: 10px;
                    border-bottom: 1px solid #3c3c3c;

                    button {
                        margin-right: 5px;
                        padding: 5px 10px;
                        border: none;
                        border-radius: 5px;
                        cursor: pointer;

                        &:first-of-type {
                            background-color: #2196F3;
                            color: white;
                        }

                        &:last-of-type {
                            background-color: #f44336;
                            color: white;
                        }

                        &:hover {
                            opacity: 0.8;
                        }
                    }
                }
            }
        }
    }
}
</style>
