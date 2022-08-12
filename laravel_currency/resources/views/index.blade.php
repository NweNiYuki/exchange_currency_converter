    @extends("app")

    @section('content')
    <div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">
            <i class="fab fa-gg"></i>
            Exchange Currency 
            </h2>
        </div>
        <div class="card-body">
        <form action="/convert" method="POST">
            @csrf

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="amount" class="mb-3 text-black">Amount</label>
                    <input class="form-control"
                    value="{{ @session('amount')}}"
                    type="text"
                    name="amount"
                    placeholder="1.00"
                    >
                </div>

                <div class="col-md-4">
                    <label for="from" class="mb-3 text-black">From</label>
                    <select 
                    name="from" class="form-select"
                    >
                    @foreach ($codes as $code=> $value)
                    <option {{ $code == @session('from') || $code == 'EUR' ? 'selected': '' }}>
                        {{ $code }}
                    </option>
                    @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="to" class="mb-3 text-black">TO</label>
                    <select 
                    name="to" class="form-select"
                    >
                    @foreach ($codes as $code => $value)
                    <option {{ $code == @session('to') || $code == 'USD' ? 'selected': '' }}>
                        {{ $code }}
                    </option>
                        
                    @endforeach
                    </select>
                </div>
        </div>
            <div class="row" style="float: right text-align">
                <input class="btn btn-primary" type="submit" value="Convert">
                

            </div>

        </form>
    </div>

        @if (session('conversion'))

            <div class="card">
                <div class="card-footer" style="font-weight: bold">
                    {{ session('conversion') }}
                
            
                @elseif ($errors->any())
                @foreach ($errors->all() as $error)
                    <div style="align-content: center">
                        {{ $error }}

                    </div>
                @endforeach
                
                @endif
            </div>
            </div>
    </div>
    </div>
    </div>
    @endsection