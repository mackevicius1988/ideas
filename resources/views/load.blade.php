<img id = 'spinner' style="display:none; width: 200px; position: absolute; left: 50%;transform: translateX(-50%); top: 50px; z-index: 100000;" src="http://img71.laughinggif.com/pic/HTTP3NtYXJ0bW8udW5sLmVkdS9wb3J0YWxfaW5jbHVkZXMvaW1hZ2VzL2xvYWRpbmdfY2lyY2xlLmdpZgloglog.gif" />

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
                    <div class="col-sm-9">
                        <span>{{$post->name }}</span>
                        <p>{{$post->price}} $</p>
                    </div>
                    <div class="col-sm-3" style="border-left : 1px solid #ccc">
                        <span data-id="{{$post->id}}" class = 'rememberMe' href='#'><i class="fa fa-bookmark"></i></span>
                          <!--img  data-id="{{$post->id}}" class = 'rememberMe' src="http://www.iconsdb.com/icons/preview/dark-gray/save-xxl.png" width="20px"-->
                        <span style="font-size: 10px"> {{$post->votes}} save</span>

                    </div>
                </div>


            </div>
        </a>
    </li>
@endforeach

</ul>
{{$posts->links()}}




