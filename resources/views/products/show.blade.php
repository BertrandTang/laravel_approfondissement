<h1>{{ $product->name }}</h1>

<p>{{ $product->description }}</p>

@can('update', $product)
    <a href="{{ route('products.edit', $product) }}">Modifier</a>
@endcan

@can('delete', $product)
    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>
@endcan
