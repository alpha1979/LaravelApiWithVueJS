<!--this component is not in use for future references-->
<template>
    <div class="container">
        <p id="success"></p>
       <a  @click.prevent="upVote">{{ totalvote }}</a>
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
                    console.log(response)
                    this.getlike()
                    $('#success').html(response.data.message)
                })
                .catch()
            },
            getUpvote(){
                axios.post('api/upvote',{movie:this.movie})
                .then(response =>{
                    console.log(response.data.upvote)
                    this.totalvote = response.data.upvote
                })
            }
        },
        created() {
            this.getUpvote()
        }
    }
</script> 