<li data-id="{{$product->id}}" data-type="{{$product->category->slug}}">
    <div class="view view-one">
        <img src="{!! url('images/backgrounds/medicine-placeholder-1.png') !!}" alt="" />
        {{--<p>Name of the medicine</p>--}}
        <div class="mask">
            {!! $product->benefits!!}
        </div>
    </div>
    <a href="{!! url('/product/'.$product->slug) !!}">
        <div class="project-info">
            <h3>{{$product->name}}</h3>
            <p>{{$product->category->name}}, {{$product->presentation}}</p>
        </div>
    </a>
</li>