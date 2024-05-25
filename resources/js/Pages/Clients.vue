<script setup lang="ts">
import NavBar from "../Blocks/NavBar.vue";
import ModalWindow from "../Layouts/ModalWindow.vue";
import {ref} from "vue";

let addOverlayVisibility = ref<boolean>(false);
let editOverlayVisibility = ref<boolean>(false);

const clients = ref([
    {
        id: 1,
        fullName: "Иван Иванов",
        phone: "+7 (123) 456-7890",
        email: "ivan@example.com",
        request: "Заявка 1",
        deal: "Сделка 1",
        status: "Активный"
    },
    {
        id: 2,
        fullName: "Петр Петров",
        phone: "+7 (234) 567-8901",
        email: "petr@example.com",
        request: "Заявка 2",
        deal: "Сделка 2",
        status: "Активный"
    },
    // Add other clients as needed
]);

const deleteClient = (index: number) => {
};
</script>

<template>
    <ModalWindow v-if="addOverlayVisibility" @closeButtonIsClicked="addOverlayVisibility = false"
                 :addOverlayVisibility="addOverlayVisibility">
        <label class="modal-estate__label">ФИО</label>
        <input class="modal-estate__input" type="text">
        <label class="modal-estate__label">Телефон</label>
        <input class="modal-estate__input" type="number">
        <label class="modal-estate__label">Email</label>
        <input class="modal-estate__input" type="email">
        <label class="modal-estate__label">Заявка</label>
        <select class="modal-estate__selector">
            <option>Заявка1</option>
            <option>Заявка2</option>
            <option>Заявка3</option>
        </select>
        <label class="modal-estate__label">Сделка</label>
        <select class="modal-estate__selector">
            <option>Сделка1</option>
            <option>Сделка2</option>
            <option>Сделка3</option>
        </select>
        <label class="modal-estate__label">Статус</label>
        <select class="modal-estate__selector">
            <option>Статус1</option>
            <option>Статус2</option>
            <option>Статус3</option>
        </select>
    </ModalWindow>
    <ModalWindow v-if="editOverlayVisibility" @closeButtonIsClicked="editOverlayVisibility = false"
                 :editOverlayVisibility="editOverlayVisibility">
        <label class="modal-estate__label">ФИО</label>
        <input class="modal-estate__input" type="text">
        <label class="modal-estate__label">Телефон</label>
        <input class="modal-estate__input" type="number">
        <label class="modal-estate__label">Email</label>
        <input class="modal-estate__input" type="email">
        <label class="modal-estate__label">Заявка</label>
        <select class="modal-estate__selector">
            <option>Заявка1</option>
            <option>Заявка2</option>
            <option>Заявка3</option>
        </select>
        <label class="modal-estate__label">Сделка</label>
        <select class="modal-estate__selector">
            <option>Сделка1</option>
            <option>Сделка2</option>
            <option>Сделка3</option>
        </select>
        <label class="modal-estate__label">Статус</label>
        <select class="modal-estate__selector">
            <option>Статус1</option>
            <option>Статус2</option>
            <option>Статус3</option>
        </select>
    </ModalWindow>
    <NavBar></NavBar>
    <div class="clients">
        <button @click="addOverlayVisibility = true">Добавить клиента</button>
        <table>
            <thead>
            <tr>
                <th>ФИО</th>
                <th>Телефон</th>
                <th>Email</th>
                <th>Заявка</th>
                <th>Сделка</th>
                <th>Статус</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(client, index) in clients" :key="client.id">
                <td>{{ client.fullName }}</td>
                <td>{{ client.phone }}</td>
                <td>{{ client.email }}</td>
                <td>{{ client.request }}</td>
                <td>{{ client.deal }}</td>
                <td>{{ client.status }}</td>
                <td>
                    <button @click="editOverlayVisibility = true">Редактировать</button>
                    <button @click="deleteClient(index)">Удалить</button>
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

.clients {
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
