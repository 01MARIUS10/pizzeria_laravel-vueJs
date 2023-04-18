require('./bootstrap');

// 1. On importe createApp
import { createApp } from "vue"

// 2. On importe AppComponent.vue
import Revenue from "./components/admin/Revenue.vue"
import Activity from "./components/admin/Activity.vue"
import Products from "./components/admin/Products.vue"
import HistoriqueCells from "./components/admin/HistoriqueCells.vue"
import ProgressBar from './components/cellule/progressBar.vue'

// 3. On monte l'application Vue sur l'élément #app
createApp(Revenue).mount("#statistiqueRevenue")
createApp(Activity).mount("#statistiqueActivity")
createApp(Products).mount("#statistiqueProducts")
createApp(HistoriqueCells).mount("#historiqueCells")
// createApp(ProgressBar).mount(".progressBar")

