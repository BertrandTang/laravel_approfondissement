<h1>Produits</h1>

@foreach ($products as $product)
    <div>
        <span>{{ $product->name }}</span>

        @can('view', $product)
            <a href="{{ route('products.show', $product) }}">Voir</a>
        @endcan

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
    </div>
@endforeach
