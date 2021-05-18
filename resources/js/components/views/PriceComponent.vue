<template>
    <div>
        <spin-component v-if="isActive"/>
        <div id="lip" class="uk-padding-small" v-else>
            <h1 class="uk-text-center">Прайс на оказание услуг электрика</h1>
            <table class="uk-table uk-table-hover uk-table-middle uk-table-divider uk-table-small uk-display-block uk-position-relative">
                <thead  uk-sticky="offset:80; bottom: #lip" class="uk-display-block uk-width-1-1 uk-position-z-index" style="background: #fff">
                    <tr>
                        <th style="width: 65.5%" rowspan="2" :style="tabWidth">Виды работ</th>
                        <th rowspan="2" class="uk-table-shrink">Ед. изм</th>
                        <th rowspan="2" class="uk-table-shrink"></th>
                        <th colspan="2" style="padding: 0;text-align: center">Стоимость</th>
                    </tr>
                    <tr>
                        <th class="uk-text-small" style="padding-top: 0">Монтаж</th>
                        <th class="uk-text-small" style="padding-top: 0">Демонтаж</th>
                    </tr>
                </thead>
                <tbody class="uk-position-relative uk-overflow-auto">
                <tr v-for="price in info">
                    <td v-if="price.installation" class="uk-table-expand">{{ price.title }}</td>
                    <th v-else colspan="5" class="uk-text-center">{{ price.title }}</th>
                    <td v-if="price.unit" class="uk-table-shrink">{{ price.unit }}</td>
                    <td class="uk-table-shrink">{{ price.from }}</td>
                    <td v-if="price.installation">{{ price.installation }}</td>
                    <td v-if="price.dismantling">{{ price.dismantling }}</td>
                </tr>
                </tbody>
                <tfoot>
                    <a class="uk-button uk-button-primary" href="document/Price.xlsx" download>Скачать прайс</a>
                </tfoot>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    name: "PriceComponent",
    data() {
        return {
            info: {},
            message:null,
            isActive:true,
            tabWidth:0
        };
    },
    mounted() {
        window.scrollTo(0,0)
        this.priceUpload()
    },
    methods:{
        priceUpload(){
            axios.get('/api/price',{
                headers:{
                    'content-type':'json'
                }
            })
                .then(response => {
                    this.info = response.data.data
                    this.isActive = false
                })
                .catch(err => (this.message = 'Проверти интернет соединение!'))
        }
    }


}
</script>

<style scoped>

</style>
