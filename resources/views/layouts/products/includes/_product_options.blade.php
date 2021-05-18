@foreach($categories as $category)

    <option value="{{$category->id ?? ''}}"

        @isset($shopProduct->id)
            @foreach($shopProduct->categories as $category_product)
                @if($category->id == $category_product->id)
                    selected
                @endif
            @endforeach
        @endisset
    >
        {!! $delimiter ?? '' !!}{{$category->title ?? ''}}
    </option>
    @if(count($category->children) > 0)
        @include('layouts.products.includes._product_options', [
            'categories' => $category->children,
            'delimiter'      => '- '. $delimiter
        ])
    @endif
@endforeach
