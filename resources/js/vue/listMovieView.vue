<template>
    <div class="card" style="width:58rem;">
    <div class="card-body">
        <h5 class="card-title">Movie Title : {{movie.title}}</h5>
        
        <p class="card-text">Movie Quote: {{movie.quote}}</p>
        <span data-type="upvote"  class="btn btn-success">
        <upvote-movie :movie="movie.id" />
            Upvote
            <span>{{movie.upvote}}</span>
        </span>
        <span data-type="downvote"  class="btn btn-danger">
            <downvote-movie :movie="movie.id" />
            DownVote
            <span>{{movie.downvote}}</span>
        </span>
    </div>
</div>
</template>
<script>

import upvoteMovie from './upvoteMovie.vue';
import downvoteMovie from './downvoteMovie.vue';
export default {
  components: { upvoteMovie,downvoteMovie },
    props:['movie'],
    
   
    // methods:{
       
    //     updateVote(e){
             
    //         this.axios.put('/api/movies',+this.movie.id+"/?/type=",'upvote')
    //         .then(response =>{
    //             if(response.status == 200){
    //                 // this.$emit('listChanged')
    //                 console.log("success");
    //             }
    //         })
    //         .catch(error =>{
    //             console.log(error);
    //         })
    //     }
    // }
    
    
    
}
</script>