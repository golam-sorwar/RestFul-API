@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @php
                        $product=App\Product::paginate(8);
                    @endphp
                    {{-- You are logged in! <br> --}}
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                           <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Discount</th>
                                <th>Star</th>
                            </tr> 
                        </thead>
                        <tbody>
                            @foreach ($product as $element)
                                <tr>
                                    <td>{{ $element->name }}</td>
                                    <td>{{ $element->price }}</td>
                                    <td>{{ $element->discount }}</td>
                                    <td>
                                            @foreach ($element->reviews as $elements)
                                                {{ $elements->star }} &nbsp 
                                            @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $product->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
