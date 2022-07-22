<template>
    <header>
        <nav class="container navbar navbar-expand-lg " :class="flag ? 'navbar-dark' : 'navbar-light'">
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
                <img :src="'/image/pizza-logo-42816D88BE-seeklogo.com.png'" alt="logo">
                <ul class="navbar-nav">
                    <li class="nav-item mx-3">
                        <router-link class="nav-link" :to="{name: 'home'}" @click.native="$emit('lightNav')">Home</router-link>
                    </li>
                    <li class="nav-item mx-3">
                        <router-link class="nav-link" :to="{name: 'pizzas'}" @click.native="$emit('darkNav')" >Pizze</router-link>
                    </li>
                    <li class="nav-item mx-3">
                        <router-link class="nav-link" :to="{name: 'about'}" @click.native="$emit('darkNav')" >About</router-link>
                    </li>
                    <li class="nav-item mx-3">
                        <router-link class="nav-link" :to="{name: 'contacts'}" @click.native="$emit('darkNav')" >Contatti</router-link>
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
        props:{
            flag: Boolean,
        },

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
