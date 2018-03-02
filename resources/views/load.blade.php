<div class="grid">
@foreach($posts as $post)
        <div class="grid-sizer"></div>
    <div class = 'grid-item' style="">

        <div style="overflow: hidden;">

        <a class="animsition-link" href="{{$post->id}}" data-id="{{$post->id}}" data-price="{{$post->price}}" data-largesrc="{{$post->imageUrl}}" data-title="{{$post->name}}" data-description="{{$post->desc}}">

            <img src="{{$post->imageUrl}}" width="70%"/>

        </a>
        </div>

        <div class="details" style="text-align: center ">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <p class="listName"> {{ str_limit($post->name, 40) }}</p>

                    <span class="money">{{$post->price}} USD</span>
                  
                    <div class="detailed">
                    <span style="color: #ccc;
    font-size: 0.75em;" > {{$post->savings}} </span> <br />
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star  checked"></span>
                    <br />
                    <span style="letter-spacing: 3px;font-family: 'Futura'; color: #999; font-size: 0.75em">{{$post->rating}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endforeach

</div>
{{ $posts->appends(request()->query())->links() }}







