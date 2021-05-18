<template>
    <div>
        <div id="slider" class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slideshow="autoplay: true">
            <ul class="uk-slideshow-items">
                <li v-for="item in sliders">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center">
                        <h2 class="uk-margin-remove">{{ item.title }}</h2>
                        <p class="uk-margin-remove uk-visible@s">{{ item.text }}</p>
                    </div>
                </li>
            </ul>
            <div class="uk-light">
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SlideComponent",
    data: () => ({
        sliders:[
            {
                'title':'Электропроводка',
                'text':'Выполнение работ по замене, монтажу, диагностике электропроводки в домах, квартирах и офисах. Все работы производятся в соответсвии с ПУЭ. Гарантия качества 5 лет'
            },
            {
                'title':'Установка и замена',
                'text':'Заменим, установим не дорого, быстро и качествено источники электропитания, счетчики учета электроэнергии, пробки и автоматику.'
            },
            {
                'title':'Освещение',
                'text':'Правильная освещенность залог здоровья ваших глаз. Выполним рассчет минимально допустимой освещенности и правильного расположения световых приборов.'
            },
            {
                'title':'Теплый пол',
                'text':'Электрический теплые пол. Обогрев напольных покрытий для повышения комфорта в вашем доме.'
            },
            {
                'title':'Обогрев кровли',
                'text':'Защита кровли и водостоков. Автономная система обеспечивает сток талой воды в зимний период времени передотврощая образования наледи на крыше и в водостоках.'
            },
            {
                'title':'Вызов электрика',
                'text':'Бесплатный вызов электрика. Выезд в день обращения, оплата только по факту выполненых работ.'
            }
        ]
    })
}
</script>

<style scoped>

</style>
