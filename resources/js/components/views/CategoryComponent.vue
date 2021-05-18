<template>
    <div>
        <spin-component v-if="isActive"/>
        <div v-else class="uk-flex uk-flex-wrap">
            <div class="uk-width-1-2@s uk-padding-small" v-for="post in posts">
                <div class="uk-card uk-card-default">
                    <router-link :to="`/post/${post.id}`" class="uk-h4 uk-card-title uk-text-uppercase">
                        <div class="uk-card-media-top">
                            <img :src="`/storage/images/${post.images}`" alt="">
                        </div>
                    </router-link>
                    <div class="uk-card-body">
                        <router-link :to="`/post/${post.id}`" class="uk-h4 uk-card-title uk-text-uppercase">{{ post.title }}</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "CategoryComponent",
    data:()=>({
        $posts:null,
        isActive:true,
        status:null
    }),
    mounted() {
        window.scrollTo(0,0)
        this.loadPost(this.$route.params.id)
    },
    methods:{
        loadPost(id){
            axios.get('/api/showPost/'+id)
            .then(res=>{
                this.status = res.status
                if(this.status === 404){

                }
                this.posts = res.data
                //console.log(this.posts)
                this.isActive = false
            })
        }
    }
}
</script>

<style scoped>

</style>
