<template>
    <div class="container">

        <div v-if="isLoading">
            <LoaderComp />
        </div>

        <div v-else>
            <NavComp
            :ingredients="ingredients"
            />
            <div class="d-flex justify-content-between flex-wrap pt-3" >
                <PizzaComp
                    v-for="pizza in pizzas"
                    :key="`pizza${pizza.id}`"
                    :pizza="pizza"
                />
            </div>
        </div>
        <div id="pagination" class="d-flex justify-content-center">

            <button
                @click="getApi(1)"
                :disabled="pagination.current === 1"
                class="btn btn-dark mr-2">
                <i class="fa-solid fa-angles-left"></i>
            </button>

            <button
                @click="getApi(pagination.current - 1)"
                :disabled="pagination.current === 1"
                class="btn btn-dark mr-2">
                <i class="fa-solid fa-angle-left"></i>
            </button>

            <button
                v-for="i in pagination.last"
                :key="i"
                @click="getApi(i)"
                :disabled="pagination.current === i"
                class="btn">{{i}}
            </button>

            <button
                @click="getApi(pagination.current + 1)"
                :disabled="pagination.current === pagination.last"
                class="btn btn-dark mx-2">
                <i class="fa-solid fa-angle-right"></i>
            </button>

            <button
                @click="getApi(pagination.last)"
                :disabled="pagination.current === pagination.last"
                class="btn btn-dark">
                <i class="fa-solid fa-angles-right"></i>
            </button>

        </div>

    </div>
</template>

<script>
import PizzaComp from '../partials/PizzaComp.vue';
import LoaderComp from '../partials/LoaderComp.vue';
import { apiUrl } from '../../data/config';
import NavComp from '../partials/NavComp.vue';
    export default {
    name: "ProductsComp",
    components: { PizzaComp, LoaderComp, NavComp },
    data() {
        return {
            apiUrl,
            pizzas: [],
            ingredients: [],
            pagination: {
                current : null,
                last : null
            },
            isLoading: false
        }
    },
    mounted() {
        this.getApi(1)
    },
    methods: {
        getApi(page){
            axios.get(this.apiUrl + '?page=' + page)
            .then(r => {
                this.pizzas = r.data.pizzas.data;
                this.ingredients = r.data.ingredients;
                this.pagination = {
                    current : r.data.pizzas.current_page,
                    last : r.data.pizzas.last_page,
                }
                console.log(this.ingredients)
            })
        }
    },
}
</script>

<style lang="scss" scoped>

</style>
