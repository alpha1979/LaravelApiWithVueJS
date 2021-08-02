<!--this component is not in use for future references-->
<template>
    <div class="container">
        <p id="success"></p>
       <a href="http://"><font-awesome-icon @click.prevent="upVote" icon="faThumbsUp" />({{ totalvote }})</a>
    </div>
</template>
 
<script>
    export default {
        props:['movie'],
        data(){
            return {
                totalvote:'',
            }
        },
        methods:{
            upVote(){
                axios.post('/api/movies/upvote/'+this.movie,{movie:this.movie})
                .then(response =>{
                    this.getlike()
                    $('#success').html(response.data.message)
                })
                .catch()
            },
            getUpvote(){
                axios.post('/api/movies/upvote/',{movie:this.movie})
                .then(response =>{
                    console.log(response.data.data.upvote)
                    this.totalvote = response.data.data.upvote
                })
            }
        },
        mounted() {
            this.getUpvote()
        }
    }
</script> 