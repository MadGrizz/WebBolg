<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Register</div>
                    
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="user" >name</label>
                                    <input type="text" class="form-control" v-model="name" >
                                </div>
                                <div class="form-group">
                                    <label for="password"  >email</label>
                                    <input type="text" class="form-control" v-model="email">
                                </div>
                                <div class="form-group">
                                    <label for="password"  >password</label>
                                    <input type="text" class="form-control" v-model="password"><br>
                                </div>
                                <div class="form-group">
                                    <a class="btn btn-danger rb" href="/">Back</a>
                                    <a class="btn btn-success rb" v-on:click="register()" href="/">Register</a>
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
            name:'',
            email:'',
            password:''
        }
    },
    methods:{
        register(){
        console.log(this.name);
            axios.post('api/register',{
                name:this.name,
                email:this.email,
                password:this.password
            }).then(item => {}).catch(e => {console.log(e)});
        },
    },
}
</script>
