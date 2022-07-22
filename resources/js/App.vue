<template>
    <div>
        <HeaderComp @lightNav="lightNav" @darkNav="darkNav" :flag="flag"/>

        <div>
            <main class="">
                <router-view></router-view>
            </main>
        </div>

        <FooterComp :flag="flag" />
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
            flag: true,
        }
    },
    methods: {
        lightNav(){
            this.flag = true;
            console.log(this.flag);
        },
        darkNav(){
            this.flag = false;
            console.log(this.flag);
        }
    },
}
</script>

<style lang="scss" scoped>
main{
    min-height: calc(100vh - 230px) ;
}
</style>
