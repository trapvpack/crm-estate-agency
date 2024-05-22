<script lang="ts">
import NavBar from "../Blocks/NavBar.vue";
import ModalWindow from "../Layouts/ModalWindow.vue";

export default {
    components: {ModalWindow, NavBar},
    data() {
        return {
            clients: [
                {
                    id: 1,
                    name: "Иванов Иван Иванович",
                    phone: "+7 (123) 456-7890",
                    email: "ivan@example.com",
                    application: "131",
                    deal: "312312",
                    status: "Активный"
                },
                {
                    id: 1,
                    name: "Иванов Иван Иванович",
                    phone: "+7 (123) 456-7890",
                    email: "ivan@example.com",
                    application: "131",
                    deal: "312312",
                    status: "Активный"
                },
                // Добавьте других клиентов при необходимости
            ]
        };
    }
};
</script>

<template>
    <NavBar></NavBar>
    <ModalWindow></ModalWindow>
    <div class="clients">
        <table>
            <thead>
            <tr>
                <th>ФИО</th>
                <th>Телефон</th>
                <th>Email</th>
                <th>Заявка</th>
                <th>Сделка</th>
                <th>Статус</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="client in clients" :key="client.id">
                <td>{{ client.name }}</td>
                <td>{{ client.phone }}</td>
                <td>{{ client.email }}</td>
                <td>{{ client.application }}</td>
                <td>{{ client.deal }}</td>
                <td>{{ client.status }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>


<style scoped lang="scss">
@import "/resources/scss/mixins.scss";

.clients {
    @include font-stack;
    box-shadow: 0 0 25px rgb(200, 200, 200, 0.13);
    margin: 15px 15px 15px 15px;
    height: 6vh;
    @include background-color;
    min-width: 865px;
    border-radius: 5px;

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
                cursor: pointer;

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
                }
            }
        }
    }
}

</style>

