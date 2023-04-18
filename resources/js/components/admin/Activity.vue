<template>
    <div class="py-3 pr-3 w-100 h-100">
        <apexchart  type="line" :options="options" :series="series" :responsive="responsiveOptions" height="100%"></apexchart>
    </div>
  </template>

<style scoped>

</style>
<script>


import VueApexCharts from 'vue3-apexcharts'
  export default {
    name:'Activity',
    components: {
      apexchart: VueApexCharts,
    },
    data() {
    return {
      options: {
        chart: {
          id: 'vuechart-example',
          stacked: false //si les donne doivent etre empiler ou pas

        },
        xaxis: {
        type: 'datetime'
        },
        markers: {
            size: 10,//la taille du marker
        },
        stroke: {
            curve: 'straight',//smooth,stepline,straight
        }
      },
      series: [
      {
          name: 'vente',
          type: 'line',
          data: [
            {x: new Date('2018-02-12').getTime(),y: 36},
            {x: new Date('2018-02-13').getTime(),y: 16},
            {x: new Date('2018-02-14').getTime(),y: 12},
            {x: new Date('2018-02-15').getTime(),y: 45},
            {x: new Date('2018-02-16').getTime(),y: 66},
            {x: new Date('2018-02-17').getTime(),y: 65},
            {x: new Date('2018-02-18').getTime(),y: 68},
            {x: new Date('2018-02-19').getTime(),y: 76},
            ]
        },
        {
          name: 'visite',
          type: 'bar',
          data: [
            {x: new Date('2018-02-12').getTime(),y: 56},
            {x: new Date('2018-02-13').getTime(),y: 59},
            {x: new Date('2018-02-14').getTime(),y: 71},
            {x: new Date('2018-02-15').getTime(),y: 75},
            {x: new Date('2018-02-16').getTime(),y: 79},
            {x: new Date('2018-02-17').getTime(),y: 66},
            {x: new Date('2018-02-18').getTime(),y: 78},
            {x: new Date('2018-02-19').getTime(),y: 80}
            ]
        },
      ],
    }
  },
}
</script>
