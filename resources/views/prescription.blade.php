@extends('layout')


@section('content')
    <div class="bg-light p-3 w-100">

        <div class="container rounded p-3 border-greenish border-thick border-rounded-smooth text-dark">
            <img src="/images/bocal.png" class="float-right" style="width: 32px"/>
            <span class="h2 text-greenish">Prescription for:</span><br/>
            <div class="row p-3">
                <div class="col-8 text-left">
                    <span class="h3 text-black">{{ $pet->getName() }}</span>
                </div>
                <div class="col-4 pr-0">
                    <span class="h3 text-black">{{ $prescription->getDailyAmount() }}g</span> / day
                </div>
                <div class="col-12 text-center pr-0 pt-3">
                    <span class="h3 text-black">CHF {{ $prescription->getMonthlyPrice() }} / mois</span>
                </div>
            </div>
        </div>
    </div>
@endsection