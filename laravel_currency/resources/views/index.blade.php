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
            value="{{ @session('amount')}}"
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
            @foreach ($codes as $code=> $value)
            <option {{ $code == @session('from') || $code == 'EUR' ? 'selected': '' }}>
                {{ $code }}
            </option>
            @endforeach
        </select>
        </div>
        <div>
            <label for="to" class="mb-3 text-black">TO</label>
            <select 
            name="to"
            >
            @foreach ($codes as $code => $value)
            <option {{ $code == @session('to') || $code == 'USD' ? 'selected': '' }}>
                {{ $code }}
            </option>
                
            @endforeach
        </select>
        </div>
        <div style="float: right text-align">
            <input class="btn btn-primary" type="submit" value="Convert">
            

        </div>

    </form>
</div>

    @if (session('conversion'))

    <div style="float: right text-align">
        {{ session('conversion') }}
    </div>
    @elseif ($errors->any())
     @foreach ($errors->all() as $error)
         <div style="align-content: center">
            {{ $error }}

         </div>
     @endforeach
    
    @endif
</div>
@endsection