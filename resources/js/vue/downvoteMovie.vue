<!--this component is not in use for future references-->
<template>
    <div class="container">
        <p id="success"></p>
       <a href="http://"><font-awesome-icon @click.prevent="downVote" icon="faThumbsDown" />({{ totalDownvote }})</a>
    </div>
</template>
 
<script>
    export default {
        props:['movie'],
        data(){
            return {
                totalDownvote:'',
            }
        },
        methods:{
            downVote(){
                axios.post('/api/movies/downvote/'+this.movie,{movie:this.movie})
                .then(response =>{
                    this.getDownvote()
                    $('#success').html(response.data.message)
                })
                .catch()
            },
            getDownvote(){
                axios.post('/api/movies/downvote/',{movie:this.movie})
                .then(response =>{
                    console.log(response.data.data.downvote)
                    this.totalDownvote = response.data.data.downvote
                })
            }
        },
        mounted() {
            this.getDownvote()
        }
    }
</script> 