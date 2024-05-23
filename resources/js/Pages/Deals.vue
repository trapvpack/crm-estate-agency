<script setup lang="ts">
import NavBar from "../Blocks/NavBar.vue";
import ModalWindow from "../Layouts/ModalWindow.vue";
import {ref} from "vue";

let addOverlayVisibility = ref<boolean>(false);
let editOverlayVisibility = ref<boolean>(false);

const deals = ref([
    {
        id: 1,
        agent: "Агент 1",
        client: "Клиент 1",
        request: "Заявка 1",
        property: "Недвижимость 1"
    },
    {
        id: 2,
        agent: "Агент 2",
        client: "Клиент 2",
        request: "Заявка 2",
        property: "Недвижимость 2"
    },
    // Add other deals as needed
]);

</script>

<template>
    <ModalWindow v-if="addOverlayVisibility" @closeButtonIsClicked="addOverlayVisibility = false">
        <!-- Add deal form content -->
    </ModalWindow>
    <ModalWindow v-if="editOverlayVisibility" @closeButtonIsClicked="editOverlayVisibility = false">
        <!-- Edit deal form content -->
    </ModalWindow>
    <NavBar></NavBar>
    <div class="deals">
        <button @click="addOverlayVisibility = true">Добавить сделку</button>
        <table>
            <thead>
            <tr>
                <th>Агент</th>
                <th>Клиент</th>
                <th>Заявка</th>
                <th>Недвижимость</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(deal, index) in deals" :key="deal.id">
                <td>{{ deal.agent }}</td>
                <td>{{ deal.client }}</td>
                <td>{{ deal.request }}</td>
                <td>{{ deal.property }}</td>
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

.deals {
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
