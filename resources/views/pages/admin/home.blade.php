@extends("layouts.admin")

@section("admin-content")
    <div class="welcoming m-3">
        <h1 class="c-greyD mb-4">Welcome to your dashboard</h1>
    </div>
    <div class="mb-3">
        <x-features.statistiquesPonctual :Statistiques="$dashboard"/>
    </div>
    <div class="mb-3 border border-danger" class="height:400px;">
        <div class="border border-warning" style="width:600px;">
            <x-features.statistiqueRevenue />
        </div>
        <div class="border border-warning"></div>
    </div>

@endsection
