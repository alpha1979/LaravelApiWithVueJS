<!--this component is not in use for future references-->
<template>
    <div class="container">
        <p id="success"></p>
       <a @click="downVote" class="btn btn-danger">Downvote{{ totalDownvote }}</a>
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
                axios.post('api/downvote/'+this.movie,{movie:this.movie})
                .then(response =>{
                   if(response.status == 200 ){
                        this.getDownvote();
                        this.$emit('viewChanged');
                    }
                })
                .catch()
            },
            getDownvote(){
                axios.post('api/downvote',{movie:this.movie})
                .then(response =>{
                    // console.log(response.data.downvote)
                    this.totalDownvote = response.data.downvote;
                })
            }
        },
        created() {
            this.getDownvote()
        }
    }
</script> 