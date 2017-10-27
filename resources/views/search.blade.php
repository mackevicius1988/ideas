<ul id="og-grid" class="og-grid">

    @foreach($posts as $post)
        <li style="width: 275px; height: 275px; overflow: hidden" class="gridItem">
            <a target="_blank" href="{{$post->url}}" data-price="{{$post->price}}" data-largesrc="{{$post->url}}" data-title="{{$post->name}}" data-description="{{$post->desc}}">

                <div class="item" style="background: url('{{$post->url}}');
                        background-position: top center;
                        background-size:80% auto; width: 275px; height: 275px;  background-repeat: no-repeat;">
                </div>
                <div class="details">
                    <span>{{$post->name }}</span>
                    <p>{{$post->price}} $</p>
                </div>
            </a>
        </li>
    @endforeach

</ul>
{{$posts->links()}}




