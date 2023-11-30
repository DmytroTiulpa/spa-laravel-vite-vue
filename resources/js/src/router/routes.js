import Home from "@/pages/Home.vue";
import Users from "@/pages/Users.vue";

const routes = [
    {
        path: '/',
        component: Home
    },
    {
        path: '/users',
        component: Users
    },
    {
        path: '/login',
        component: Home
    },
    {
        path: '/registration',
        component: Home
    }
];

export default routes;
