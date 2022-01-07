<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">LOGIN</div>

                    <div class="card-body">
                        <label for="user" >Username</label>
                        <input type="text" class="form-control" v-model="email" >
                        <label for="password"  >Password</label>
                        <input type="text" class="form-control" v-model="password" ><br>
                        <a  class="btn btn-success rb" v-on:click="login()" >Login</a>
                        <a href="/register" class="btn btn-info rb">Register</a>
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
            email:'',
            password:''
        }
    },
    methods:{
        login(){
            axios.post('api/login',{
                email:this.email,
                password:this.password
            }).
            then((data) => {
                console.log(data)
                localStorage.setItem('us_id',data.data.id)
                localStorage.setItem('us_name',data.data.name)
                window.location.href = '/home'
            }).
            catch((error) => {
                return error;
            })
        },
    },
    }
</script>
