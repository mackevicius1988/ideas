<img id = 'spinner' style="display:none; width: 200px; position: absolute; left: 50%;transform: translateX(-50%); top: 50px; z-index: 100000;" src="img/loading_circle.gif"/>

<ul id="og-grid" class="og-grid">

@foreach($posts as $post)
    <li style="width: 275px; height: 275px; overflow: hidden" class="gridItem">
        <a target="_blank" href="{{$post->url}}" data-id="{{$post->id}}" data-price="{{$post->price}}" data-largesrc="{{$post->url}}" data-title="{{$post->name}}" data-description="{{$post->desc}}">

            <div class="item" style="background: url('{{$post->url}}');
                    background-position: top center;
                    background-size:80% auto; width: 275px; height: 275px;  background-repeat: no-repeat;">
            </div>
            <div class="details">
                <div class="row">
                    <div class="col-sm-8">
                        <p style="margin : 0;     font-weight: 400;font-style: normal; font-size : 15px"   >{{$post->name }}</p>
                        <span style="font-size: 10px"> {{$post->votes}} saves</span>
                    </div>
                    <div class="col-sm-4" style="border-left : 1px solid #ccc; text-align: center">
                        <span class = 'itemPrice' style="font-size: 18px">{{$post->price}}$</span>
                          <!--img  data-id="{{$post->id}}" class = 'rememberMe' src="http://www.iconsdb.com/icons/preview/dark-gray/save-xxl.png" width="20px"-->


                    </div>
                </div>


            </div>
        </a>
    </li>
@endforeach

</ul>
{{$posts->links()}}




