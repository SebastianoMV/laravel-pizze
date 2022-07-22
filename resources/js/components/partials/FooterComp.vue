<template>
    <footer>
        <div class="container " :class="$route.path == '/' ? 'color-white' : 'color-black'">
            <h1>ciao sono un footer</h1>
        </div>
    </footer>
</template>

<script>
    export default {
        name: 'FooterComp',
    }
</script>

<style lang="scss" scoped>
footer{
    height: 150px;
    .color-white{
        color: white;
    }
    .color-black{
        color: black;
    }
}
</style>
