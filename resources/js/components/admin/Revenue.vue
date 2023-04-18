<template>
    <div class="h-100 d-flex flex-column">
        <div class="">
            <p class="textLabel">TOTAL REVENUE</p>
            <div class=" w-100 d-flex justify-content-center p-3">
                <vue3-circle-progress
                class="price"
                  :thickness="130" :size="220"
                :transition="800"
                :showPercent="true"
                :percent="percent"
                :gradient="gradient"
                :stroke-width="10"
                :text="progressText"
                :text-size="24"
                :text-color="textColor"
                ></vue3-circle-progress>
            </div>
            <div class="w-100 d-flex justify-content-center ">
                <div class="d-flex flex-column justify-content-center">
                    <p class="text-center mb-0 textLabel">Total sale made today</p>
                    <span class="text-center price">$37</span>
                </div>
            </div>
        </div>
        <div class="d-flex align-item-end" style="flex-grow: 1;">
            <div class=" w-100 row m-0">
                <div class="d-flex flex-column justify-content-center col-sm">
                    <p class="text-center mb-0 textLabel">Target</p>
                    <span class="text-center price">$30</span>
                </div>
                <div class="d-flex flex-column justify-content-center col-sm">
                    <p class="text-center mb-0 textLabel">Last week</p>
                    <span class="text-center price">$120</span>
                </div>
                <div class="d-flex flex-column justify-content-center col-sm">
                    <p class="text-center mb-0 textLabel">Last month</p>
                    <span class="text-center price">$233</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import "vue3-circle-progress/dist/circle-progress.css";
import Vue3CircleProgress from "vue3-circle-progress";

export default {
    components: {Vue3CircleProgress},
    name : 'Revenue',
    props: {
        revenu: {
            type: Number,
            // required :true,
            default:1500
        },
        test :{
            type :String,
            default :"marius"
        },
        pourcentage: {
            default:60
        }
    },
    data(){
        return {
            // emptyColor:"#323031",
            // fillColor:"#7D787A",
            percent: 0,
            progressText: '',
            gradient: ['#323031', '#7D787A'],
            textColor: '#000'
        }
    },
    mounted(){
        this.initPercent()
    },
    methods: {
        initPercent(percent){
            setTimeout(()=>{
                this.percent = this.pourcentage
                this.progressText = `${this.percent}%`
            },600)
        }
    }

}
</script>

<style scoped>
.price{
    font-size: 1.5rem;
font-weight: bold;
}
.vue3-circle-progress-enter-active,
.vue3-circle-progress-leave-active {
  transition: transform 3s;
}

.vue3-circle-progress-enter,
.vue3-circle-progress-leave-to {
  transform: rotate(0);
}

.vue3-circle-progress-enter-to,
.vue3-circle-progress-leave {
  transform: rotate(360deg);
}

</style>
