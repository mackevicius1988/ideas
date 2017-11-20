<ul style="list-style-type: none">
@foreach($posts as $post)
    <li class = 'catalogueItem' >

        <a class="animsition-link" href="{{$post->id}}" data-id="{{$post->id}}" data-price="{{$post->price}}" data-largesrc="{{$post->imageUrl}}" data-title="{{$post->name}}" data-description="{{$post->desc}}">

            <div class="catalogueItemInner" style="background: url('{{$post->imageUrl}}');background-position: center center;
                    background-size: 75% auto;   background-repeat: no-repeat;">
            </div>
        </a>
        <div class="details" style="border-top:1px solid #ccc; text-align: center !important; ">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <p class="listName" style="margin : 5px 0;font-weight: 300;font-style: normal; "   >
                        {{ str_limit($post->name, 30) }}</p>
                    <b class="listPrice"> {{$post->price}} </b>
                </div>
            </div>
        </div>
    </li>

@endforeach

</ul>
{{$posts->links()}}






