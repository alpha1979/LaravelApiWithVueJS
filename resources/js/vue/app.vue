
<template>
 <div class="container">
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1">Movie Quote Api Test</span>
        </nav>
    <main class="p-4">
        <h1 class="display-4">Movie Quest Vote Now</h1>
        
            <!-- <add-movie-form /> -->
            <addMovieForm/>
        
        <div class="row">
            <listMoviesView :movies="movies" v-on:reloadAppView="getMovies()" />
        </div>
    </main>
</div>
</template>

<script>
import addMovieForm from "./addMovieForm.vue"

import listMoviesView from "./listMoviesView.vue"

export default {
    
    components :{
        addMovieForm,
        listMoviesView
        
    },
    data(){
        return {
            movies:[]
        }
    },
    methods:{
        getMovies(){
            axios.get('/api/movies')
            .then(response =>{
                this.movies = response.data.data;
               
            })
            .catch(error=>{
                console.log(error);
            });
        }
    },
    created(){
        this.getMovies();
    }
}
</script>

