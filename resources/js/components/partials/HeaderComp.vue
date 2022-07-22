<template>
    <header>
        <nav class="container navbar navbar-expand-lg " :class="$route.path == '/' ? 'navbar-dark' : 'navbar-light'">
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
                <img :src="'/image/pizza-logo-42816D88BE-seeklogo.com.png'" alt="logo">
                <ul class="navbar-nav">
                    <li class="nav-item mx-3">
                        <router-link class="nav-link" :to="{name: 'home'}">Home</router-link>
                    </li>
                    <li class="nav-item mx-3">
                        <router-link class="nav-link" :to="{name: 'pizzas'}" >Pizze</router-link>
                    </li>
                    <li class="nav-item mx-3">
                        <router-link class="nav-link" :to="{name: 'about'}" >About</router-link>
                    </li>
                    <li class="nav-item mx-3">
                        <router-link class="nav-link" :to="{name: 'contacts'}" >Contatti</router-link>
                    </li>
                </ul>
                <div>social</div>
            </div>
        </nav>
    </header>
</template>

<script>
    export default {
        name: 'HeaderComp',

        data() {
            return {

            }
        },

    }

</script>

<style lang="scss" scoped>
header{
    height: 80px;
    color: white;

    img{
        height: 60px;
    }

}
</style>
