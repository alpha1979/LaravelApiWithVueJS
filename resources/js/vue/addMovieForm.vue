<template>
    <div class="mb-4">
            <form @submit.prevent="addMovie">
            <div class="form-group">
                <label for="title">Movie Title</label>
                <input type="text" class="form-control" id="title" v-model="movies.title" >
                
            </div>
            <div class="form-group">
                <label for="quote">Movie Quote</label>
                <textarea class="form-control" id="quote" v-model="movies.quote" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
        
</div>
</template>
<script>


export default {
    data(){
        return {
            movies:{
                title:null,
                quote:null

             }
        }
    },
    methods:{
        addMovie(){
           
            
            if(this.movies.title==null && this.movies.quote ==null){
                return;
            }
            // console.warn(this.movies);
            // // e.preventDefault();
            this.axios.post('/api/movies',this.movies)
            .then(response=>{
                if(response.status == 201){
                    this.movies = "";
                    this.$swal("You have added new movie successfully");
                }else{
                    this.$swal("Sorry something went wrong");
                }
            })
            .catch(error => console.log(error));
        }
    }
}
</script>