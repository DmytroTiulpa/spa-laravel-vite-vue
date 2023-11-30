<template>

    <MenuTop></MenuTop>

    <div class="uk-section uk-section-muted uk-section-small" style="min-height: 100vh;">
        <div class="uk-container uk-container-large">

            <div class="uk-card uk-card-default uk-card-small uk-card-body">
                <h3 class="uk-card-title">USERS</h3>
            </div>

        </div>
    </div>

</template>

<script>
import {defineComponent} from "vue";
import MenuTop from "@/components/MenuTop.vue";

export default defineComponent({
    components: {
        MenuTop
    },
    props: ['username'], // Определение props
    setup() {
        return {};
    },
    created: async function(){
        console.log('created user');
        // Получаем список пользователей
        try {
            this.users = await this.getAllUsers();
            //console.log(">>>>>", this.users);
        } catch (error) {
            console.error(error);
        }
    },
    mounted() {
        console.log('mounted users');
    },
    methods: {
        getAllUsers(){
            return axios.get('/users')
                .then(response => {
                    console.log('>>>', response.data);
                    return response.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        async confirmDelete(userId, userName) {
            const isConfirmed = window.confirm(`Are you sure you want to delete ${userName}?`);
            if (isConfirmed) {
                try {
                    // Отправка запроса на удаление
                    let response = await axios.delete(`/users_vue/${userId}`);
                    console.log(response);
                    // Обновление списка пользователей после успешного удаления
                    this.users = this.users.filter(user => user.id !== userId);
                } catch (error) {
                    console.error('Error deleting user:', error);
                }
            }
        },
        formatDate(dateString) {
            const date = new Date(dateString);
            const options = {
                year: 'numeric',
                month: '2-digit',
                day: '2-digit',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                timeZoneName: 'short',
            };
            return date.toLocaleString('en-US', options);
        },
    }
});
</script>

<style scoped>
</style>
