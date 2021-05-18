<template>
    <div>
        <div class="services">
            <div class="container uk-padding-small">
                <div class="agileits_heading_section">
                    <h3 class="wthree_head">Основные направления деятельности</h3>
                </div>
                <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-3@l" uk-grid>
                    <div class="uk-text-center" v-for="item in items">
                        <router-link :to="item.href">
                            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                <img :src="`/images/` + item.img" alt="">
                                <div class="uk-overlay uk-overlay-primary uk-position-bottom">
                                    <h4>{{ item.title }}</h4>
                                </div>
                                <div class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                                    <p class="uk-h4 uk-margin-remove">Подробнее...</p>
                                </div>
                            </div>
                        </router-link>
                    </div>
                </div>
<!--                <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-3@l" uk-grid>
                    <div class="uk-text-center" v-for="item in posts">
                        <router-link :to="`/post/`+ item.id">
                            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                <img :src="`/images/` + item.slug" alt="">
                                <div class="uk-overlay uk-overlay-primary uk-position-bottom">
                                    <h4>{{ item.title }}</h4>
                                </div>
                                <div class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                                    <p class="uk-h4 uk-margin-remove">Подробнее...</p>
                                </div>
                            </div>
                        </router-link>
                    </div>
                </div>-->
            </div>
        </div>
        <!-- //services -->
    </div>
</template>

<script>
export default {
    name: "ServicesComponent",
    props:[

    ],
    data: ()=>({
        items:[
            {title:'Монтаж электропроводки',href:'/category/2',img:'g7.jpg'},
            {title:'Освещение',href:'/post/5',img:'g9.jpg'},
            {title:'Теплый пол',href:'/post/6',img:'g10.jpg'},
            {title:'Обогрев кровли',href:'/post/7',img:'g11.jpg'},
            {title:'Вызов электрика',href:'/post/8',img:'g2.1.jpg'},
            {title:'Установка и замена',href:'/category/3',img:'g3.1.jpg'}
        ],
        posts:{}
    }),
    mounted() {
        this.servicesUpload()

    },
    methods:{
        servicesUpload(){
            axios.get('/api/categories',{
                headers:{
                    'Content-type':'application/json'
                }
            })
            .then(res=> {
                this.posts = res.data.data;
                //console.log(this.posts)
            })
        }
    }
}
</script>

<style scoped>


</style>
