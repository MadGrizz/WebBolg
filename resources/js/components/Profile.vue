<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><label>Edit Profile</label></div>
                    <div class="card-body bgc">
                        <form>
                            <div class="form-group">
                                <label>Name :</label>
                                <input type="text" class="form-control" v-model="name">
                            </div>
                            <div class="form-group">
                                <label>Email :</label>
                                <input type="text" class="form-control" v-model="email">
                            </div>
                            <div class="form-group">
                                <label>Password :</label>
                                <input type="text" class="form-control" v-model="password">
                            </div>
                            <div class="form-group">
                                
                                    <a class="btn btn-primary" v-on:click="updateProfile()">Edit</a>
                               
                            </div>
                        </form>
                    </div>
                </div><br>
                <a class="btn btn-danger" v-on:click="deleteProfile()">Delete Acc</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            name:'',
            email:'',
            password:'',
        }
    },
    methods:{
        updateProfile(){
            axios.put('/api/profile_update/'+localStorage.getItem('us_id'),{
                name:this.name,
                email:this.email,
                password:this.password
            });
        },
        deleteProfile(){
            axios.delete('/api/deleteprofile/'+localStorage.getItem('us_id'))
            .then(()=>{ 
                localStorage.removeItem('us_id');
                localStorage.removeItem('us_name');
                window.location.href = '/';
            });
        }
    },mounted(){
        axios.get('/api/profile_show/'+localStorage.getItem('us_id')).then(response=>{ 
            var pf=response.data;
            console.log(pf);
                this.name=pf.name;
                this.email=pf.email;
                this.password=pf.password;
        });
    },
}
</script>

<style lang="css">

</style>