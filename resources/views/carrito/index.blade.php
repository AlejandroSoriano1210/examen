@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Carrito de Compras</h1>

    @foreach ($cartItems as $item)
        <div class="d-flex justify-content-between align-items-center border p-2 mb-2">
            <div>
                <h5>{{ $item->product->name }}</h5>
                <p>Precio: ${{ $item->product->price }}</p>
                <p>Cantidad: {{ $item->quantity }}</p>
            </div>
            <div>
                <form action="{{ route('cart.update', $item) }}" method="POST" class="d-inline">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="action" value="increase">
                    <button class="btn btn-success">+</button>
                </form>

                <form action="{{ route('cart.update', $item) }}" method="POST" class="d-inline">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="action" value="decrease">
                    <button class="btn btn-warning">-</button>
                </form>

                <form action="{{ route('cart.remove', $item) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
