<div class="grid">
@foreach($posts as $post)
        <div class="grid-sizer"></div>
    <div class = 'grid-item' style="border: 1px solid #ccc">
        <div style="overflow: hidden;">

        <a class="animsition-link" href="{{$post->id}}" data-id="{{$post->id}}" data-price="{{$post->price}}" data-largesrc="{{$post->imageUrl}}" data-title="{{$post->name}}" data-description="{{$post->desc}}">

            <img src="{{$post->imageUrl}}" width="100%"/>

        </a>
        </div>

        <div class="details" style="text-align: center ">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <p class="listName" style="margin : 5px 0;font-weight: 300;font-style: normal; "   >
                        {{ $post->name}}</p>

                    <b class="listPrice"> {{$post->price}} </b>
                    <span style="color: #ccc;
    font-size: 0.75em;" > {{$post->savings}} </span> <br />
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
    </div>

@endforeach

</div>
{{ $posts->appends(request()->query())->links() }}







