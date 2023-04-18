<template>
    <div class="w-100 h-100" style="overflow:scroll;">
        <div class="">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Nom du produit</th>
                    <th>Date</th>
                    <th>Prix</th>
                    <th>client</th>
                    <th>avis client</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="achat in Achats_">
                    <td>{{ achat.nom }}</td>
                    <td>{{ achat.date }} a {{ achat.heure }}</td>
                    <td>{{ achat.prix }}</td>
                    <td>{{ achat.pseudo }}</td>
                    <td class="progressBar">
                        <ProgressBar :fillPercentage="achat.note" />
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import ProgressBar from '../cellule/progressBar.vue'
export default {
    name:'HistoriqueCells',
    components:{ProgressBar},
    data(){
        return{

        }
    },
    props:{
        Achats_:{
            type: Array,
                default:[
                    {nom:"Peperoni",date:"10 mars 2022",heure:"08:23",prix:"25$",pseudo:"Toto",note:28},
                    {nom:"Peperoni",date:"1 aout 2022",heure:"08:23" ,prix:"34$",pseudo:"nuell",note:41},
                    {nom:"Peperoni",date:"12 juin 2022",heure:"08:23",prix:"65$",pseudo:"Alexander",note:42},
                    {nom:"Peperoni",date:"10 sept 2022",heure:"08:23",prix:"16$",pseudo:"VanDel",note:68},
                    {nom:"Peperoni",date:"10 sept 2022",heure:"08:23",prix:"86$",pseudo:"Keras",note:32},
                    {nom:"Peperoni",date:"10 sept 2022",heure:"08:23",prix:"23$",pseudo:"MadaJr",note:62},
                    {nom:"Peperoni",date:"10 fev 2022",heure:"08:23" ,prix:"43$",pseudo:"Sisi",note:22},
                    {nom:"Peperoni",date:"10 sept 2022",heure:"08:23",prix:"59$",pseudo:"Michou",note:39},
                    {nom:"Peperoni",date:"10 sept 2022",heure:"08:23",prix:"29$",pseudo:"Loulou",note:54},
                    {nom:"Peperoni",date:"10 sept 2022",heure:"08:23",prix:"17$",pseudo:"Alex",note:60},
                ]
        }
    },
    mounted(){
        console.log(this.Achats_)
    }
}
</script>
