import Home from "@/pages/Home.vue";
import Users from "@/pages/Users.vue";
import Login from "@/pages/Login.vue";
import Registration from "@/pages/Registration.vue";

const routes = [
    {
        path: '/',
        component: Home,
        props: true
    },
    {
        path: '/users',
        component: Users,
        props: true
    },
    {
        path: '/login',
        component: Login
    },
    {
        path: '/registration',
        component: Registration
    }
];

export default routes;
