<template>
    <h1>Hello, {{ username }}!</h1>
</template>

<script>
import {defineComponent} from "vue";

export default defineComponent({
    components: {},
    setup() {
        return {
            username: 'DiMoN'
        };
    },
});

</script>

<style scoped>

</style>
