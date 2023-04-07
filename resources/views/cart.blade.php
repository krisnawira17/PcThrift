<x-header>
    @if(isset($cart) && is_array($cart) && count($cart))
    @foreach($cart as $item)
        <div>
            <p>{{ $item['image'] }}</p>
            <p>{{ $item['price'] }}</p>
        </div>
    @endforeach
    @else
        <p>Cart is empty.</p>
    @endif
</x-header>
