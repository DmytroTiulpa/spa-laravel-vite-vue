<template>

    <MenuTop></MenuTop>

    <div class="uk-section uk-section-muted uk-section-small" style="min-height: 100vh;">
        <div class="uk-container uk-container-large">

            <div class="uk-card uk-card-default uk-card-small uk-card-body">
                <h3 class="uk-card-title">HOME</h3>
                <h4>Hello, {{ username }}!</h4>
            </div>

        </div>
    </div>

</template>

<script>
import {defineComponent} from "vue";
import MenuTop from "@/components/MenuTop.vue";

export default defineComponent({
    components: {MenuTop},
    props: ['username'], // Определение props
    setup() {
        return {};
    },
    mounted() {
        console.log('mounted home');
    },
});
</script>

<style scoped>
</style>
