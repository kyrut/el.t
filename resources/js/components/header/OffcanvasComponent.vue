<template>
    <div id="offcanvas-nav" uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar">
            <ul class="uk-nav uk-nav-default uk-nav-header">
                <li>
                    <router-link to="/" class="uk-offcanvas-close uk-padding-remove">Главная</router-link>
                </li>
            </ul>
            <ul class="uk-nav uk-nav-default">
                <li class="uk-parent"  v-for="links in categories" v-if="links.published === 1">
                    <div class="uk-nav-header uk-padding-remove">
                        <router-link :to="`/categories/`+links.id" class="uk-offcanvas-close" style="color: #757575; text-decoration: none">{{ links.title }}</router-link>
                        <ul class="uk-nav-sub">
                            <li v-for="item in links.posts">
                                <router-link :to="`/post/`+item.id" class="uk-offcanvas-close">{{ item.title }}</router-link>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul class="uk-nav uk-nav-default" v-for="links in categories"  v-if="links.published === 0">
                <li class="uk-parent" v-for="item in links.posts">
                    <div class="uk-nav-header uk-padding-remove">
                        <ul class="uk-nav uk-nav-default">
                            <li>
                                <router-link :to="`/post/`+item.id" class="uk-offcanvas-close">{{ item.title }}</router-link>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul class="uk-nav uk-nav-default">
                <li v-for="page in pages" class="uk-nav-header uk-margin-remove-top uk-padding-remove">
                    <router-link :to="page.href" class="uk-offcanvas-close">{{ page.title }}</router-link>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: "OffcanvasComponent",
    props: [
        'categories',
    ],
    data: ()=>({
        pages : [
            {
                title: 'Прайс лист',
                href: '/price'
            },
            {
                title: "Контакты",
                href: '/contact'
            }
        ]
    }),
}
</script>

<style scoped>

</style>
