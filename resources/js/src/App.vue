<template>

    <!--<MenuTop></MenuTop>-->

    <router-view :username="username"></router-view>

</template>

<script>
import {defineComponent} from "vue";
//import MenuTop from "../src/components/MenuTop.vue";

export default defineComponent({
    components: {
        //MenuTop,
    },
    setup() {
        return {
            username: 'DiMoN'
        };
    },
    created() {
        console.log('created');
    },
});
</script>

<style scoped>

</style>
