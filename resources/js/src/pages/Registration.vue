<template>

    <div class="uk-section uk-section-muted uk-section-small" style="height: 100vh;">
        <div class="uk-container uk-container-large uk-height-1-1 uk-flex uk-flex-center uk-flex-middle">

            <div class="uk-card uk-card-default uk-card-small uk-card-body" style="">
                <h3 class="uk-text-center">Registration</h3>
                <form method="post" action="">
                    <div class="uk-margin-small">
                        <div class="uk-inline uk-width-1-1">
                            <span class="uk-form-icon uk-icon" data-uk-icon="icon: user"></span>
                            <label for="name"></label>
                            <input id="name" name="name" type="text" placeholder="user name" required
                                   class="uk-input"
                                   value="" >
                        </div>
                    </div>
                    <div class="uk-margin-small">
                        <div class="uk-inline uk-width-1-1">
                            <span class="uk-form-icon uk-icon" data-uk-icon="icon: mail"></span>
                            <label for="email"></label>
                            <input id="email" name="email" type="email" placeholder="email" required
                                   class="uk-input"
                                   value="" >
                        </div>
                    </div>
                    <div class="uk-margin-small">
                        <div class="uk-inline uk-width-1-1">
                            <span class="uk-form-icon uk-icon" data-uk-icon="icon: lock"></span>
                            <label for="password"></label>
                            <input id="password" name="password" class="uk-input" type="password" placeholder="password" required>
                        </div>
                    </div>
                    <div class="uk-margin-small">
                        <div class="uk-inline uk-width-1-1">
                            <span class="uk-form-icon uk-icon" data-uk-icon="icon: lock"></span>
                            <label for="password-confirm"></label>
                            <input id="password-confirm" name="password_confirmation" class="uk-input" type="password" placeholder="confirm password" required>
                        </div>
                    </div>
                    <div class="uk-margin-small">
                        <button class="uk-button uk-button-primary uk-button-large uk-width-1-1">Register</button>
                    </div>
                    <div class="uk-text-small uk-text-center">
                        Already registered? <router-link to="/login">Login</router-link><br>
                        Return to <router-link to="/">Home page</router-link>
                    </div>
                </form>
            </div>

        </div>
    </div>

</template>

<script>
import {defineComponent} from "vue";

export default defineComponent({
    components: {},
    setup() {
        return {};
    },
});
</script>

<style scoped>
</style>
