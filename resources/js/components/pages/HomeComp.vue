<template>
    <div>
        <video autoplay loop muted plays-inline>
          <source :src="'/video/pexels-rene-strgar-10583345.mp4'">
        </video>
        <div class="layer-video">

        </div>
        <div class="container">
            <h1 class="text-center py-3">Pizzeria di Mario</h1>
        </div>

    </div>
</template>

<script>
    export default {
        name: 'HomeComp'
    }
</script>

<style lang="scss" scoped>

video{
    bottom: 0;
    left: 0;
    max-width: 100%;
    position: absolute;
    z-index: -1;

}
.layer-video{
    top: 0;
    left: 0;
    max-width: 100%;
    position: absolute;
    right: 0;
    bottom:0;
    z-index: -1;
    background-color: rgba($color: #000000, $alpha: 0.6);
}

h1{
    color: white;
    font-size: 60px
}


</style>
