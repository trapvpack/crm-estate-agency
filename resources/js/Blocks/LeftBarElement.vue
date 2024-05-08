<script setup lang="ts">

</script>

<template>
    <div class="bar-element">Доска</div>
</template>

<style scoped lang="scss">
@import "/resources/scss/mixins.scss";

.bar-element {
    transition: background-color 0.4s;
    @include bar-element;
    @include background-color;
    color: #cbd5e0;
}

.bar-element:hover {
    cursor: pointer;
    background-color: #34343a;
}

</style>
