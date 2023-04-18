<template>
    <div class="h-100 w-100 d-flex align-items-center ">
        <apexchart type="polarArea" :options="options" :series="series"  ></apexchart>
    </div>
</template>

<script>
import VueApexCharts from 'vue3-apexcharts'
 export default {
    name:"ProductsChart",
   components: {
    apexchart: VueApexCharts,
   },
   data() {
  return {
    options: {
      chart: {
        id: 'vuechart-example',
        // height:300
    },
      labels: ['Product A', 'Product B', 'Product C', 'Product D','Product E','Product F','Product G'],
      responsive: [{
        breakpoint: 480,
        options: {
          chart: {
            // width: 300,
            // height:300
          },
          legend: {
            position: 'bottom'
          }
        }
      }]
    },
    series: [44, 55, 13, 43, 12, 27, 43]
  }
}

 }

</script>
