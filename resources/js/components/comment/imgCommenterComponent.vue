<template class="img-comment">
    <div class="uk-width-auto">
            <img class="uk-comment-avatar" :src="`https://www.gravatar.com/avatar/${ hashMd5(email) }.jpg?s=64`" width="80" height="80" alt="">
    </div>
</template>

<script>
var md5 = require('md5');
export default {
    name: "imgCommenterComponent",
    props:{
        commenter:{}
    },
    data:()=>({
        name:'',
        email:''
    }),
    mounted() {
         for (var item in this.commenter){
             if(item == 'email'){
                 this.email = this.commenter[item]
             }
         }
    },
    methods:{
        hashMd5(name){
            var res
            if(name) {
                res = name
            }else{
                res = 'ctc-kavkaz@yandex.ru'
            }
            return md5(res);
        },
    },
}
</script>

<style scoped>

</style>
