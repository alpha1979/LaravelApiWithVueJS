<!--this component is not in use for future references-->
<template>
    <div class="container">
        <p id="success"></p>
       <a @click="upVote" class="btn btn-success">Upvote{{ totalvote }}</a>
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
                axios.post('api/upvote/'+this.movie,{movie:this.movie})
                .then(response =>{
                    // console.log(response)
                    if(response.status == 200 ){
                        this.getUpvote();
                        this.$emit('viewChanged');
                    }
                    
                    
                })
                .catch()
            },
            getUpvote(){
                axios.post('api/upvote',{movie:this.movie})
                .then(response =>{
                    // console.log(response.data.upvote)
                    this.totalvote = response.data.upvote
                })
            }
        },
        created() {
            this.getUpvote()
        }
    }
</script> 