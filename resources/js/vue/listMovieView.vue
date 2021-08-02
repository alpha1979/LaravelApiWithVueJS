<template>
    <div class="card" style="width:58rem;">
    <div class="card-body">
        <h5 class="card-title">Movie Title : {{movie.title}}</h5>
        
        <p class="card-text">Movie Quote: {{movie.quote}}</p>
       
            <upvote-movie :movie="movie.id" />
            
           
            <downvote-movie :movie="movie.id" />
            
    </div>
</div>
</template>
<script>

import upvoteMovie from './upvoteMovie.vue';
import downvoteMovie from './downvoteMovie.vue';
export default {
  components: { upvoteMovie,downvoteMovie },
    props:['movie','movie'],
    
   

    
    
}
</script>