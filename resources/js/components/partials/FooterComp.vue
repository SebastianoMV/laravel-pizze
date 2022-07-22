<template>
    <footer>
        <div class="container " :class="flag ? 'color-white' : 'color-black'">
            <h1>ciao sono un footer</h1>
        </div>
    </footer>
</template>

<script>
    export default {
        name: 'FooterComp',
        props:{
            flag: Boolean,
        },
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
