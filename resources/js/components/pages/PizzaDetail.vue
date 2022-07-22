<template>
    <div class="container">
        <h1>Dettaglio pizza</h1>
        <div class="card" style="min-width: 250px;">
                <img :src="pizza.immagine ? '/image/' + pizza.immagine : '/image/scatola_pizza.png' " class="card-img-top" alt="">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title">{{pizza.nome}}</h5>
                    <p class="text-right">{{pizza.prezzo}} &euro;</p>
                </div>
                <p class="card-text">{{pizza.descrizione}}</p>
            </div>
            <ul class="list-group list-group-flush list-unstyled pl-3 py-2">
                <li>
                    <h4>Ingredienti :</h4>
                </li>
                <li
                v-for="ingredient in pizza.ingredients"
                :key="`ingredient${ingredient.slug}`"
                class="pl-3"
                >{{ingredient.name}}</li>
            </ul>
            <div class="card-body ">
                <a href="#" class="btn btn-success">Aggiungi al carrello</a>
                <a href="#" class="btn btn-danger">Compra ora</a>
            </div>
        </div>
        <div class="btn btn-dark">
            <router-link :to="{name: 'pizzas'}"><i class="fa-solid fa-circle-arrow-left"></i></router-link>
        </div>
    </div>
</template>

<script>
import { apiUrl } from '../../data/config'
    export default {
        name: 'PizzaDetail',
        data() {
            return {
                apiUrl,
                pizza: {}
            }
        },
        mounted() {
            this.getApi()
        },
        methods: {
            getApi(){
                axios.get(this.apiUrl +  '/' + this.$route.params.slug)
                .then(r => {
                    this.pizza = r.data;
                    console.log(this.pizza);
                })
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>
