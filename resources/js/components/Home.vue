<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">    
                    <div class="card-body">
                        <input type="text" class="form-control" placeholder="text someting" v-model="post_content" ><br>
                        <a class="btn btn-success rb" v-on:click="post_con()">Post</a>
                    </div>       
                </div>

                <div v-for="item_post of posts" :key="item_post.id">
                    <div class="card">    
                        <div class="card-body">
                            <div v-for="item_user of user" :key="item_user.id">
                                <div v-if="item_user.id == item_post.user_id">
                                    <h2>{{item_user.name}}</h2>
                                </div>
                            </div>
                            <div>
                                <label>{{item_post.content}}</label>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div v-for="item_comment of comment" :key="item_comment.id">
                                        <div v-if="item_comment.post_id == item_post.id">

                                            <div v-for="item_user of user" :key="item_user.id">
                                                <div v-if="item_user.id == item_comment.user_id">
                                                    <label>{{item_user.name}} :</label> <label>{{item_comment.content}}</label>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    
                                    <label >{{item_post.id}}</label>
                                    <input type="text" :id="item_post.id" class="from-control w-75" v-model="item_post.comment">
                                    <a class="btn btn-success rb" v-on:click="comment_con(item_post)">comment</a>
                                </div>
                            </div>
                        </div>       
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
                post_content:'',
                comment_content:'',
                posts:[],
                item_post:{
                    id:'',
                    user_id:'',
                    content:'',
                },
                comment:[],
                item_comment:{
                    id:'',
                    user_id:'',
                    post_id:'',
                    content:'',
                },
                user:[],
                item_user:{
                    id:'',
                    name:''
                },
            }
        },
        methods:{
            getpost(){
                axios.get('api/v_post').then(response=>{
                    console.log(this.posts=response.data.post)
                    console.log(this.comment=response.data.comment)
                    console.log(this.user=response.data.user)
                    });
            },
            post_con(){
                axios.post('api/post',{
                    user_id:localStorage.getItem('us_id'),
                    post_content:this.post_content
                }).
                then((data) => {
                console.log(data)
    
                console.log(this.posts)
                this.getpost()
                }).
                catch((error) => {
                    return error;
                })
            },
            comment_con(obj){
                
                axios.post('api/com',{
                    comment:obj.comment,
                    user_id:localStorage.getItem('us_id'),
                    post_id:obj.id
                }).
                then((data) => {
                console.log(data)
    
                console.log(this.posts)
                this.getpost()
                }).
                catch((error) => {
                    return error;
                })
            },
        
        },
        mounted(){
            this.getpost();
            console.log(localStorage.getItem('us_id'))
            console.log(localStorage.getItem('us_name'))
        }
    }
</script>
