<template>
    <div class="uk-flex uk-flex-between uk-width-1-1">
        <div>
            <router-link to="/" class="uk-navbar-item uk-logo uk-text-white uk-padding-remove-left">
                <span uk-icon="icon: bolt; ratio: 2"></span>
                NEV-ELECTRIC
            </router-link>
        </div>
        <div class="uk-visible@m">
            <ul class="uk-navbar-nav">
                <li>
                    <router-link to="/" class="uk-text-uppercase">Главная</router-link>
                </li>
                <li v-for="page in pages">
                    <router-link :to="page.href" class="uk-text-uppercase">{{ page.title }}</router-link>
                </li>
            </ul>
        </div>
        <offcanvas-component :categories="categories"></offcanvas-component>
    </div>
</template>

<script>
import OffcanvasComponent from "./OffcanvasComponent";
export default {
name: "HeaderComponent",
    components:{
    OffcanvasComponent
    },
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
    mounted() {

    }
}
</script>

<style scoped>

</style>
