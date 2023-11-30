<template>

    <MenuTop></MenuTop>

    <div class="uk-section uk-section-muted uk-section-small" style="height: 100vh;">
        <div class="uk-container uk-container-large">
            <!--<h1>Hello, {{ username }}!</h1>-->
            <router-view></router-view>
        </div>
    </div>

</template>

<script>
import {defineComponent} from "vue";
import MenuTop from "../src/components/MenuTop.vue";

export default defineComponent({
    components: {
        MenuTop,
    },
    setup() {
        return {
            username: 'DiMoN'
        };
    },
});
</script>

<style scoped>

</style>
