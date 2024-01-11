<h1>All Products</h1>

<ul>
   @foreach ($products as $product)
    <a href="/products/{{ $product['id'] }}">
        <li>{{ $product['name'] }} , <strong>{{ $product['price'] }}</strong></li>
    </a>
   @endforeach
</ul>

<a href="/products/create">Add new</a>