<template>
<div>
    <div v-for="(movie) in movies" :key="movie.id">
        <listMovieView
            :movie="movie"
            v-on:reloadMoviesView = "$emit('reloadAppView')"
            />
        
    </div>
    
</div>
</template>
<script>
import listMovieView from "./listMovieView.vue"

export default {
    props:['movies'],
    components:{
        listMovieView,
        
    }
}
</script>