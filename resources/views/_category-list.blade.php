<div class="category-menu-list">
    <ul>
        @foreach($categories as $category)
        <li>
            <a href="{{route('products.index', ['category_id' => $category->id])}}">{{$category->name}}<i
                    class="pe-7s-angle-right"></i></a>

            @php
            $children = $category->children;
            @endphp

          
        </li>

        @endforeach

    </ul>
</div>
