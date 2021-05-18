<template>
    <div>
        <article class="uk-comment uk-comment-primary uk-margin-small-bottom" v-for="comment in comments">
            <header class="uk-comment-header">
                <div class="uk-grid-medium uk-flex-middle" uk-grid>
                    <div v-if="comment.commenter">
                        <img-commenter-component :commenter="comment.commenter"></img-commenter-component>
                    </div>
                    <div v-else>
                        <div class="uk-width-auto">
                            <img class="uk-comment-avatar" :src="`https://www.gravatar.com/avatar/${ hashMd5(comment.guest_email) }.jpg?s=64`" width="80" height="80" alt="">
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <div v-if="comment.commenter">
                            <name-commenter-component :commenter="comment.commenter"></name-commenter-component>
                        </div>
                        <div v-else>
                            <h4 class="uk-comment-title uk-margin-remove"><p class="uk-link-reset">{{ comment.guest_name }}</p></h4>
                        </div>
                        <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                        <li class="uk-text-uppercase">{{ formDateMoment(comment.created_at) }}</li>
                        </ul>
                    </div>
                </div>
            </header>
            <div class="uk-comment-body">
                <p>{{ comment.comment }}</p>
            </div>
        </article>
        <br>
    </div>
</template>
<script>
import imgCommenterComponent from "./imgCommenterComponent";
import nameCommenterComponent from "./nameCommenterComponent";
var md5 = require('md5');
var moment = require('moment');
moment.locale('ru');
export default {
    name: "CommentComponent",
    components:{
        imgCommenterComponent,
        nameCommenterComponent
    },
    props: {
        comments:{}
    },
    data:()=>({
        //comments:{}
    }),
    mounted() {
        /*axios.get('/api/posts/'+this.$route.params.id+'/comments',{
            headers:{'content-type':'json'}
        })
            .then(res=>{
                this.comments = res.data
            })*/
    },
    methods:{
        hashMd5(name1){
            var res
            if(name1) {
                res = name1
            }else{
                res = 'ctc-kavkaz@yandex.ru'
            }
            return md5(res);
        },
        formDateMoment(value){
            return moment(value).fromNow()
        }
    }
}
</script>

<style scoped>

</style>
