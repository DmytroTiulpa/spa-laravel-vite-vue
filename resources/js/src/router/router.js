import { createRouter, createWebHashHistory } from "vue-router";
import Routes from "@/router/routes.js";

const router = createRouter({
    history: createWebHashHistory(),
    linkActiveClass: 'uk-active',
    routes: Routes
});

export default router;
