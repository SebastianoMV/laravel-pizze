<template>
    <div>
        <HeaderComp />

        <div>
            <main class="">
                <router-view></router-view>
            </main>
        </div>

        <FooterComp  />
    </div>
</template>

<script>
import HeaderComp from './components/partials/HeaderComp.vue';
import FooterComp from './components/partials/FooterComp.vue';

    export default {
    name: "App",
    components: { HeaderComp, FooterComp },
    data() {
        return {

        }
    },
    methods: {
    },
}
</script>

<style lang="scss" scoped>
main{
    min-height: calc(100vh - 245px) ;
}
</style>
