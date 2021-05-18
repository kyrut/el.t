<template>
    <div>
        <!-- footer -->
        <div class="footer" id="footer">
            <div class="container">
                <div class="uk-flex uk-flex-column uk-padding-small">
                    <h2 class="wthree_head">Вызвать Электрика</h2>
                    <p class="agileits_w3layouts_para w3_agile_para">Отправьте заявку наш специалист свяжется с вами, чтобы уточнить адрес и удобное для вас время.</p>
                    <div class="news-w3l">
                        <div class="uk-alert-success" uk-alert v-if="msgLoad">
                            <a class="uk-alert-close" uk-close @click="formShow"></a>
                            <p>{{ msg }}</p>
                        </div>
                        <form @submit.prevent="sendMail" v-else>
                            <div class="uk-flex uk-flex-wrap uk-child-width-1-3@s">
                                <div class="uk-padding-small">
                                    <input type="text" v-model.trim="form.name" placeholder="Имя">
                                    <div v-if="this.$v.form.name.$dirty && !this.$v.form.name.required" class="uk-text-danger uk-text-small">
                                        Поле имя должно быть заполнено.
                                    </div>
                                    <div v-if="this.$v.form.name.$dirty && !this.$v.form.name.nameValid" class="uk-text-danger uk-text-small">
                                        Поле имя не должно содержать цифр
                                    </div>
                                    <div v-if="this.$v.form.name.$dirty && !this.$v.form.name.minLength" class="uk-text-danger uk-text-small">
                                        Поле имя должно содержать минимум 3 символа
                                    </div>
                                </div>
                                <div class="uk-padding-small">
                                    <input type="text" v-model.trim="form.phone" placeholder="Телефон">
                                    <div v-if="this.$v.form.phone.$dirty && !this.$v.form.phone.required" class="uk-text-danger uk-text-small">
                                        Поле телефон должно быть заполнено.
                                    </div>
                                    <div v-if="this.$v.form.phone.$dirty && !this.$v.form.phone.phoneValid" class="uk-text-danger uk-text-small">
                                        Неверный формат номера телефона.
                                    </div>
                                </div>
                                <div class="uk-hidden">
                                    <input type="hidden" v-model.trim="form.thema">
                                </div>
                                <div class="uk-padding-small">
                                    <button type="submit" id="submitForm">
                                        <button-spin-component v-if="spinLoad"></button-spin-component>
                                        <span v-else>Отправить</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="uk-padding-small">
                    <div class="w3agile_footer_grids uk-flex uk-flex-wrap uk-child-width-1-2@s">

                        <div class="w3agile_footer_grid">
                            <h3 class="uk-text-center">Контакты</h3>
                            <ul>
                                <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><span>Невинномысск</span></li>
                                <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:ctc-kavkaz@yandex.ru">ctc-kavkaz@yandex.ru</a></li>
                                <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="tel:+79288171250">+7 928 817 12 50</a></li>
                            </ul>
                        </div>

                        <div class="w3agile_footer_grid">
                            <h3 class="uk-text-center">О нас</h3>
                            <p class="uk-text-small" style="text-indent: 10px; text-align: justify">Главное для нас, качественно выполнить работу с учетом всех пожеланий клиента, внесением рациональных предложений.</p>
                            <p class="uk-text-small" style="text-indent: 10px; text-align: justify">Мы рассчитаем нагрузку на электросеть, подберем необходимые материалы и автоматику для безопасной эксплуатации проводки и электроприборов.</p>
                        </div>

                    </div>
                    <div class="w3agile_footer_grids uk-flex uk-flex-wrap uk-child-width-1-2 uk-child-width-1-4@s uk-margin-large-top">
                        <div class="w3agile_footer_grid">
                            <ul class="uk-nav uk-text-small">
                                <li v-for="link in links"  v-if="link.children">
                                    <router-link :to="link.href">{{ link.title }}</router-link>
                                </li>
                                <li v-for="page in pages">
                                    <router-link :to="page.href">{{ page.title }}</router-link>
                                </li>
                            </ul>
                        </div>
                        <div class="w3agile_footer_grid">
                            <ul class="uk-nav uk-text-small">
                                <li v-for="link in links"  v-if="!link.children">
                                    <router-link :to="link.href">{{ link.title }}</router-link>
                                </li>
                            </ul>
                        </div>
                        <div class="w3agile_footer_grid">
                            <div v-for="link in links" v-if="link.children && link.title === 'Электропроводка'">
                                <ul  class="uk-nav uk-text-small">
                                    <li v-for="itemChild in link.children ">
                                        <router-link :to="itemChild.href">{{ itemChild.title }}</router-link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="w3agile_footer_grid">
                            <div v-for="link in links"  v-if="link.children && link.title === 'Установка и замена'">
                                <ul  class="uk-nav uk-text-small">
                                    <li v-for="itemChild in link.children ">
                                        <router-link :to="itemChild.href">{{ itemChild.title }}</router-link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- //footer -->
        <!-- copy-right -->
        <div class="copy_right_social">
            <div class="container">
                <div class="uk-grid uk-flex uk-flex-center uk-flex-middle">
                    <div class="uk-width-1-2@s flex">
                        <p class="uk-text-center" style="width: 100%">© 2020 Nev-Electric</p>
                    </div>
                    <div class="uk-width-1-2@s">
                        <div class="social_icons">
                            <div class="border-social border-social-twitter"><a href="https://wa.me/79288171250" class="uk-icon-link whatsapp" uk-icon="whatsapp"></a></div>
                            <div class="border-social border-social-facebook"><a href="#" class="uk-icon-link facebook" uk-icon="facebook"></a></div>
                            <div class="border-social border-social-instagram"><a href="#" class="uk-icon-link instagram" uk-icon="instagram"></a></div>
                            <div class="border-social border-social-receiver"><a href="tel:+79288171250" class="uk-icon-link receiver" uk-icon="receiver"></a></div>
                        </div>
                    </div>
                </div>

                <!-- /.uk-grid -->
            </div>
        </div>
        <!-- //copy-right -->
    </div>
</template>

<script>
import ButtonSpinComponent from "../ButtonSpinComponent";
import { required, minLength, helpers } from 'vuelidate/lib/validators'
const phoneValid = helpers.regex('phoneValid', /^89\d\d\)?\s?\-?\d\d\d\s?\-?\d\d\s?\-?\d\d$/);
const nameValid = helpers.regex('nameValid', /^[A-zА-я]{1,}$/);
export default {
    name: "FooterComponent",
    components:{
        ButtonSpinComponent
    },
    props: [
        'categories',
        'posts'
    ],
    data: ()=>({
        form:{
            name:'',
            phone:'',
            thema:'Вызов электрика',
        },
        spinLoad:false,
        msg:'',
        msgLoad:false,
        pages : [
            {
                title: 'Прайс лист',
                href: '/price'
            },
            {
                title: "Контакты",
                href: '/contact'
            }
        ],
        links : [
            {
                title:'Электропроводка',
                href:'/category/2',
                children:[
                    {
                        title:'Электропроводка в доме',
                        href:'/post/1'
                    },
                    {
                        title:'Электропроводка в квартире',
                        href:'/post/2'
                    },
                    {
                        title:'Электропроводка в офисе',
                        href:'/post/3'
                    },
                    {
                        title:'Электропроводка под ключ',
                        href:'/post/4'
                    },

                ]
            },
            {
                title:'Установка и замена',
                href:'/category/3',
                children:[
                    {
                        title:'Установка и замена электросчетчика',
                        href:'/post/5'
                    },
                    {
                        title:'Установка и замена выключателя',
                        href:'/post/6'
                    },
                    {
                        title:'Установка и замена розетки',
                        href:'/post/7'
                    },
                    {
                        title:'Установка и замена люстры',
                        href:'/post/8'
                    },

                ]
            },
            {
                title: 'Освещение',
                href:'/post/9'
            },
            {
                title: 'Теплый пол',
                href: '/post/10'
            },
            {
                title: 'Обогрев кровли',
                href: '/post/11'
            },
            {
                title: 'Вызов электрика',
                href: '/post/12'
            }
        ]
    }),
    validations:{
        form:{
            name:{
                nameValid,
                required,
                minLength: minLength(3)
            },
            phone:{
                required,
                phoneValid
            }
        }
    },
    methods: {
        formShow(){
            this.msgLoad = false;
        },
        onReset() {
            this.form.phone = ''
            this.form.name = ''
        },
        sendMail(){
            this.$v.form.$touch()
            if(!this.$v.form.$error){
                this.sendForm()
            }else{
                console.log("не прошла");
            }
        },
        sendForm(){
            axios.post('/api/mySend', this.form, {
                headers:{
                    'Content-type':'application/json'
                }
            })
                .then(
                    this.spinLoad = true
                )
                .then(res => {
                    this.spinLoad = false
                    this.msgLoad = true
                    this.msg = res.data.message
                    this.onReset()
                })
                .catch(err =>{

                })
        }
    }
}
</script>

<style scoped>

</style>
