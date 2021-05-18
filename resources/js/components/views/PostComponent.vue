<template>
    <div>
        <spin-component v-if="isActive"/>
        <div class="uk-flex uk-padding-small uk-flex-wrap" v-else>
            <div class="uk-width-1-1">
                <div class="uk-position-relative" uk-slideshow="animation: fade">
                    <ul class="uk-slideshow-items">
                        <li>
                            <img src="/storage/images/s1.jpg" alt="" uk-cover>
                        </li>
                        <li>
                            <img src="/storage/images/s2.jpg" alt="" uk-cover>
                        </li>
                        <li>
                            <img src="/storage/images/s3.jpg" alt="" uk-cover>
                        </li>
                    </ul>
                    <div class="uk-position-small">
                        <ul class="uk-thumbnav uk-flex-center">
                            <li uk-slideshow-item="0"><a href="#"><img src="/storage/images/s1.jpg" width="100" alt=""></a></li>
                            <li uk-slideshow-item="1"><a href="#"><img src="/storage/images/s2.jpg" width="100" alt=""></a></li>
                            <li uk-slideshow-item="2"><a href="#"><img src="/storage/images/s3.jpg" width="100" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-1">
                <article class="uk-article uk-padding-small">
                    <h1 class="uk-article-title">{{ posts.title }}</h1>
                    <p class="uk-article-meta">Дата публикации:  {{ posts.created_at.slice(0,10) }}</p>
                    <div v-html="posts.description">
                    </div>
                    <br>
                    <div class="uk-grid-small uk-child-width-auto" uk-grid>
                        <div>
                            <a class="uk-button uk-button-text" href="#">оформить заявку</a>
                        </div>
                        <div>
                            <a class="uk-button uk-button-text" @click='toggle = !toggle'>{{ comments.length }} комментариев </a>
                        </div>
                    </div>
                </article>
                <div v-show="toggle">
                    <add-comment-component @addToComment="addToComment"></add-comment-component>
                    <div>
                        <comment-component :comments="comments"></comment-component>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import CommentComponent from "../comment/CommentComponent";
import AddCommentComponent from "../comment/AddCommentComponent";
var moment = require('moment');
moment.locale('ru');
export default {
    name: "PostComponent",
    components:{
        CommentComponent,
        AddCommentComponent
    },
    data:()=>({
        moment:moment,
        title:null,
        posts: {},
        comments: {},
        commenter: {},
        msg:null,
        isActive:true,
        toggle:false

    }),
    mounted() {
        window.scrollTo(0,0)
        this.loadPost(this.$route.params.id, false)
    },
    methods:{
        loadSpin(bool){
            this.isActive = bool
        },
        loadPost(id, bool){
            axios.get('/api/posts/' + id,{
                headers:{
                    'content-type':'application/json'
                }
            })
            .then(response => {
                this.posts = response.data.data
                this.comments = response.data.data.comments.reverse()
                document.title = this.posts.title
                this.loadSpin(bool)
            })
            .catch(err => (this.msg = 'Пост не найден'))
        },

        showComment(){
            this.toggleComments = true
        },
        addToComment(){
            axios.get('/api/posts/' + this.$route.params.id,{
                    headers:{
                        'content-type':'application/json'
                    }
                })
                .then(response => {
                    this.comments = response.data.data.comments.reverse()
                })
                .catch(err => (this.msg = 'Пост не найден'))
        },
    },
    watch: {
        $route(toRoute){
            window.scrollTo(0,0)
            this.isActive = true
            this.toggle = false
            this.loadPost(toRoute.params.id)
        }
    }
}
</script>

<style scoped>

</style>
