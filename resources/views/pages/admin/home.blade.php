@extends("layouts.admin")

@section("admin-content")
    <div class="welcoming m-3">
        <h1 class="c-greyD mb-4">Welcome to your dashboard</h1>
    </div>
    <div class="mb-3">
        <x-features.statistiquesPonctual :Statistiques="$dashboard"/>
    </div>
    <div class="d-flex mb-0 p-3 justify-content-between" style="height:480px;" >
        <div class=" pr-3 h-100" style="width:450px;">
            <x-features.statistiqueRevenue />
        </div>
        <div class=" h-100" style="width:calc(100% - 450px);">
            <x-features.statistiqueActivity />
        </div>
    </div>
    <div class="d-flex mb-0 px-3 pb-0 pt-0 justify-content-between" style="height:300px" >
        <div class=" pr-3 h-100" style="width:calc(100% - 350px);">
            <x-features.historiqueCells />
        </div>
        <div class=" h-100" style="width:350px;">
            <x-features.statistiqueProducts />
        </div>
    </div>


@endsection
