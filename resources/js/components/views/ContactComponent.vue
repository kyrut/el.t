<template>
    <div>
        <spin-component v-if="isActive"/>
        <div id="lip" class="uk-padding-small" v-else>

        </div>
    </div>
</template>

<script>
export default {
    name: "ContactComponent",
    data:()=>({
        isActive:true
    }),
    mounted(){
        window.scrollTo(0,0)
        this.isActive = false
    }
}
</script>

<style scoped>

</style>
