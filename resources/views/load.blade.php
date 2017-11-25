<ul style="list-style-type: none">
@foreach($posts as $post)
    <li class = 'catalogueItem' >
        <div style="overflow: hidden;">
        <a class="animsition-link" href="{{$post->id}}" data-id="{{$post->id}}" data-price="{{$post->price}}" data-largesrc="{{$post->imageUrl}}" data-title="{{$post->name}}" data-description="{{$post->desc}}">
            <div class="catalogueItemInner" style="background: url('{{$post->imageUrl}}');background-position: center center; background-size: 85% auto;   background-repeat: no-repeat;"></div>
        </a>
        </div>

        <div class="details" style="border-top:1px solid #ccc; ">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <p class="listName" style="margin : 5px 0;font-weight: 300;font-style: normal; "   >
                        {{ str_limit($post->name, 30) }}</p>

                    <b class="listPrice"> {{$post->price}} </b>
                    <span style="color: #ccc;
    font-size: 0.75em;" > {{$post->savings}} </span>
                </div>
            </div>
        </div>
    </li>

@endforeach

</ul>
{{ $posts->appends(request()->query())->links() }}







