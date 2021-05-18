<template>
    <div>
        <spin-component v-if="isActive" />
        <div v-else>
            <slider-component />
            <benefit-component />
            <jobs-component />
            <service-component/>
            <group-component />
        </div>
    </div>
</template>

<script>
import BenefitComponent from './index/BenefitComponent';
import SliderComponent from './index/SliderComponent';
import ServiceComponent from "./index/ServiceComponent";
import GroupComponent from "./index/GroupComponent";
import JobsComponent from "./index/JobsComponent";
export default {
name: "IndexComponent",
    components:{
        SliderComponent,
        BenefitComponent,
        JobsComponent,
        ServiceComponent,
        GroupComponent
    },
    props:[

    ],
    data:()=>({
        isActive: true,
        posts:null
    }),
    mounted() {
        window.scrollTo(0,0)
        this.isActive = false
    }
}
</script>

<style scoped>

</style>
