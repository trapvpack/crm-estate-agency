<script setup>

</script>

<template>
    <div class="task">
        <span>Задача</span>
        <span class="task__deadline">01.05.24</span>
    </div>

</template>

<style scoped lang="scss">
@import "/resources/scss/mixins.scss";

.task {
    @include centering-block-row;
    justify-content: space-around;
    margin-top: 20px;
    height: 80px;
    width: 90%;
    background: #1a202c;
    border-radius: 15px;
    @include font-stack;
    color: #e2e8f0;

    &__deadline {
        color: chartreuse;
        font-size: small;
    }
}

.task:hover {
    cursor: pointer;
    border: 1px solid #cbd5e0;
    background-color: #1a253c;
}
</style>
