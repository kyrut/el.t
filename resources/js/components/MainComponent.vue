<template>
    <div>
        <div class="uk-content">
            <div class="uk-flex uk-flex-stretch">
                <div class="uk-width-medium uk-visible@m">
                    <div id="nav-menu" class="uk-section-muted uk-padding" uk-sticky="offset: 80">
                        <ul class="uk-nav uk-nav-default">
                            <li class="uk-parent"  v-for="links in categories" v-if="links.published === 1">
                                <div class="uk-nav-header">
                                    <router-link :to="`/categories/`+links.id" class="uk-text-muted">{{ links.title }}</router-link>
                                    <ul class="uk-nav-sub">
                                        <li v-for="item in links.posts">
                                            <router-link :to="`/post/`+item.id">{{ item.title }}</router-link>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <ul class="uk-nav uk-nav-default" v-for="links in categories"  v-if="links.published === 0">
                            <li class="uk-parent" v-for="item in links.posts">
                                <div class="uk-nav-header">
                                    <ul class="uk-nav uk-nav-default">
                                        <li>
                                            <router-link :to="`/post/`+item.id">{{ item.title }}</router-link>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-section uk-padding-remove-top uk-padding-remove-bottom">
                        <router-view></router-view>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: "MainComponent",
    components:{

    },
    props:[
        'categories'
    ],
    data:()=>({

    }),
    computed:{

    },
    mounted() {
        this.isActive = false

    },
    methods:{

    },
}
</script>

<style scoped>

</style>
