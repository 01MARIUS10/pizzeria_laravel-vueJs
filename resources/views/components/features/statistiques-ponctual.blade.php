<div id="PonctualStatistiqueBoard" class="px-3  w-100 d-flex justify-content-between">

    <x-cellule.statistiquePonctual text="Total's revenue" :stat="$statRevenue" icon="{{ asset('/image/money.png') }}"/>
    <x-cellule.statistiquePonctual text="Total's sales" :stat="$statSales" icon="{{ asset('/image/panier2.jpg') }}"/>
    <x-cellule.statistiquePonctual text="Total's activity" :stat="$statActivity" icon="{{ asset('/image/activity2.jpg') }}"/>
    <x-cellule.statistiquePonctual text="Total's visit" :stat="$statVisit" icon="{{ asset('/image/oeuil3.png') }}"/>

    {{-- <x-cellule.statistiquePonctual text="Total's revenue" :stat="$Statistiques["revenu"]["stat"] " icon="{{ asset('/image/money.png') }}"/>
    <x-cellule.statistiquePonctual text="Total's sales" :stat="$Statistiques["sales"]["stat"] " icon="{{ asset('/image/panier2.jpg') }}"/>
    <x-cellule.statistiquePonctual text="Total's activity" :stat="$Statistiques["activity"]["stat"]" icon="{{ asset('/image/activity2.jpg') }}"/>
    <x-cellule.statistiquePonctual text="Total's visit" :stat="$Statistiques["visit"]["stat"]" icon="{{ asset('/image/oeuil3.png') }}"/> --}}
</div>
