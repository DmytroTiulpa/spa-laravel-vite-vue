<script setup>

</script>

<template>
    <nav class="uk-navbar-container uk-sticky"
         data-uk-sticky="top: 50vh; animation: uk-animation-slide-top;"
         style="background: #fff; box-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 8%) !important;">
        <div class="uk-container">
            <div data-uk-navbar>

                <div class="uk-navbar-left">

                    <a class="uk-navbar-item uk-logo" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="34" viewBox="0 0 28 34"
                             class="uk-margin-small-right uk-svg">
                            <polygon points="19.1 4.1 13.75 1 8.17 4.45 13.6 7.44 19.1 4.1" fill="#fff"></polygon>
                            <path
                                d="M21.67,5.43,16.14,8.77,22.4,12.4v9.52l-8.44,4.76L5.6,21.93V14.55L0,11.7V25.21l13.75,8.08L28,25.21V9.07Z"
                                fill="#fff"></path>
                        </svg>
                        Logo
                    </a>

                    <ul class="uk-navbar-nav">
                        <li>
                            <!--<a href="#">Home</a>-->
                            <router-link to="/">Home</router-link>
                        </li>
                        <li>
                            <!--<a href="#">Users</a>-->
                            <router-link to="/users">Users</router-link>
                        </li>
                    </ul>

                </div>

                <div class="uk-navbar-right">

                    <ul class="uk-navbar-nav">
                        <li>
                            <router-link to="#">Login</router-link>
                        </li>
                        <li>
                            <router-link to="#">Registration</router-link>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </nav>
</template>

<style scoped>

</style>
