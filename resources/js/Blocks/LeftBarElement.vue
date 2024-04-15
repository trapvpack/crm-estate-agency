<script setup lang="ts">

</script>

<template>
    <div class="bar-element">Доска</div>
</template>

<style scoped lang="scss">
@import "/resources/scss/mixins.scss";

.bar-element {
    @include bar-element;
    background-color: #1a202c;
    color: #cbd5e0;
}

.bar-element:hover {
    cursor: pointer;
    border: 1px solid #cbd5e0;
    background-color: #1a253c;
}

</style>
