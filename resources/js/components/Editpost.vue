<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><label>Edit Profile</label></div>
                    <div class="card-body bgc">
                        <form>
                            <div class="form-group">
                                <label>Content :</label>
                                <input type="text" class="form-control" v-model="content">
                            </div>
            
                            <div class="form-group">
                                    <a class="btn btn-primary" v-on:click="updatePost()">Save</a>
                            </div>
                        </form>
                    </div>
                </div>
        
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            content:'',
        }
    },
    methods:{
        updatePost(){
            axios.put('/api/updatepost/'+localStorage.getItem('post_id'),{
                content:this.content,
            }).
            then((data) => {
                localStorage.removeItem('post_id')
                window.location.href = '/home'
            }).
            catch((error) => {
                return error;
            })
        },
    },mounted(){
        axios.get('/api/get_post/'+localStorage.getItem('post_id')).then(response=>{ 
            var pf=response.data;
            console.log(pf);
                this.content=pf.content;
        });
    },
}
</script>

<style lang="css">

</style>