<script setup lang="ts">
import NavBar from "../Blocks/NavBar.vue";
import ModalWindow from "../Layouts/ModalWindow.vue";
import {ref} from "vue";

let addOverlayVisibility = ref<boolean>(false);
let editOverlayVisibility = ref<boolean>(false);

const requests = ref([
    {
        id: 1,
        client: "Клиент 1",
        description: "Ищет квартиру с видом на море",
        property: {
            price: "до 10,000,000",
            area: "120 м²",
            type: "Квартира",
            address: "Новый район",
            rooms: 3,
            newBuilding: true
        }
    },
    {
        id: 2,
        client: "Клиент 2",
        description: "Ищет дом в центре города",
        property: {
            price: "до 8,500,000",
            area: "100 м²",
            type: "Дом",
            address: "Центральный район",
            rooms: 4,
            newBuilding: false
        }
    },
    // Add other requests as needed
]);

</script>

<template>
    <ModalWindow v-if="addOverlayVisibility" @closeButtonIsClicked="addOverlayVisibility = false">
        <!-- Add request form content -->
    </ModalWindow>
    <ModalWindow v-if="editOverlayVisibility" @closeButtonIsClicked="editOverlayVisibility = false">
        <!-- Edit request form content -->
    </ModalWindow>
    <NavBar></NavBar>
    <div class="requests">
        <button @click="addOverlayVisibility = true">Добавить заявку</button>
        <table>
            <thead>
            <tr>
                <th>Клиент</th>
                <th>Описание</th>
                <th>Цена</th>
                <th>Площадь</th>
                <th>Тип</th>
                <th>Адрес</th>
                <th>Комнаты</th>
                <th>Новостройка</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(request, index) in requests" :key="request.id">
                <td>{{ request.client }}</td>
                <td>{{ request.description }}</td>
                <td>{{ request.property.price }}</td>
                <td>{{ request.property.area }}</td>
                <td>{{ request.property.type }}</td>
                <td>{{ request.property.address }}</td>
                <td>{{ request.property.rooms }}</td>
                <td>{{ request.property.newBuilding ? 'Да' : 'Нет' }}</td>
                <td>
                    <button @click="editOverlayVisibility = true">Редактировать</button>
                    <button>Удалить</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<style scoped lang="scss">
@import "/resources/scss/mixins.scss";

.requests {
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
