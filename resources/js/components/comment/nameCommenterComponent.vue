<template>
    <h4 class="uk-comment-title uk-margin-remove"><p class="uk-link-reset">{{ name }}</p></h4>
</template>

<script>
export default {
    name: "nameCommenterComponent",
    props:{
        commenter:{}
    },
    data:()=>({
        name:''
    }),
    mounted() {
        for (var item in this.commenter){
            if(item == 'name'){
                this.name = this.commenter[item]
            }
        }
    },
}
</script>

<style scoped>

</style>
