<template>
        <div class="card mb-4 pb-3">
            <img :src="pizza.immagine ? '/image/' + pizza.immagine : '/image/scatola_pizza.png' " class="card-img-top h-75" alt="">
            <div class="card-body h-25">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title">{{pizza.nome}}</h5>
                    <p class="text-right">{{pizza.prezzo}} &euro;</p>
                </div>
                <p class="card-text">{{pizza.descrizione ? pizza.descrizione : 'Nessuna descrizione'}}</p>
                <router-link :to="{name: 'details' , params: {slug: pizza.slug}}">Mostra</router-link>
            </div>
        </div>
</template>

<script>
import Axios from 'axios'

    export default {
        name: 'PizzaComp',
        props: {
            pizza: Object
        },

    }
</script>

<style lang="scss" scoped>
.card{
    width: calc(100% / 2 - 30px);
    margin: 10px;
}
</style>
