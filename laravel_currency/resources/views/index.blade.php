@extends("app")

@section('content')
<div style="background-color: gainsboro">
<div class="text-center font-bold text-2xl text-blue-600">
    <h2>
    <i class="fab fa-gg"></i>
        Exchange Currency 
    </h2>

    <form action="/convert" method="POST">
        @csrf

        <div>
            <label for="amount" class="mb-3 text-black">Amount</label>
            <input 
            type="text"
            name="amount"
            placeholder="1.00"
            >
        </div>

        <div>
            <label for="from" class="mb-3 text-black">From</label>
            <select 
            name="from"
            >
            <option>
                EUR
            </option>
        </select>
        </div>
        <div>
            <label for="to" class="mb-3 text-black">TO</label>
            <select 
            name="to"
            >
            <option>
                USD
            </option>
        </select>
        </div>
        <div style="float: right text-align">
            <input class="btn btn-primary" type="submit" value="Convert">
            

        </div>

    </form>
</div>
</div>
@endsection