<template>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Filtra per ingredienti
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div
                            class="dropdown-item"
                            v-for="(ingredient, key) in ingredients"
                            :key="`ingredient${ingredient.id}`">
                                <input
                                name="ingredients[]"
                                :id="`ingredient${key}`"
                                :value="ingredient.id"
                                type="checkbox"
                                >
                                <label :for="`ingredient${key}`">{{ingredient.name}}</label>
                            </div>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
</template>

<script>
    export default {
        name: 'NavComp',
        props: {
            ingredients: Array
        }
    }
</script>

<style lang="scss" scoped>
footer{
    height: 150px;
}
</style>
