<template>
    <div class="card" style="width:58rem;">
    <div class="card-body">
        <h5 class="card-title">Movie Title : {{movie.title}}</h5>
        
        <p class="card-text">Movie Quote: {{movie.quote}}</p>
        <span data-type="upvote"  class="btn btn-success">
        <!-- <span data-type="upvote" @click="updateVote()"  class="btn btn-success"> -->
            <!-- <input type="hidden" :value="upvote"> -->
            Upvote
            <span>{{movie.upvote}}</span>
        </span>
        <span data-type="downvote"  class="btn btn-danger">
        <!-- <span data-type="downvote" @click="updateVote()" class="btn btn-danger"> -->
            <!-- <input type="hidden" :value="downvote"> -->
            DownVote
            <span>{{movie.downvote}}</span>
        </span>
    </div>
</div>
</template>
<script>
export default {
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