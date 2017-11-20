<ul style="list-style-type: none">
@foreach($posts as $post)
    <li class = 'catalogueItem' >

        <a class="animsition-link" href="{{$post->id}}" data-id="{{$post->id}}" data-price="{{$post->price}}" data-largesrc="{{$post->imageUrl}}" data-title="{{$post->name}}" data-description="{{$post->desc}}">
            <div style="position: absolute; top: 0px; left: 0px; padding: 10px; z-index: 999; background: #551313; color: white; opacity: 0.9">SALE</div>
            <div class="catalogueItemInner" style="background: url('{{$post->imageUrl}}');background-position: center center;
                    background-size: 75% auto;   background-repeat: no-repeat;">
            </div>
        </a>
        <div class="details" style="border-right:1px solid #ccc ">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <span class="listName" style="margin : 0;font-weight: 300;font-style: normal;"   >
                        {{ str_limit($post->name, 30) }}</span><br/>
                    <b class="listPrice" style="color: #333;"> {{$post->price}} </b>
                </div>
                <!--div  class="col-sm-3  col-xs-2" style="text-align: center;">
                    <i data-id = '{{$post->id}}' style="font-size: 24px; color : #ccc; margin: 0 auto; cursor: pointer" class="fa fa-heart heart"></i>
                    <br />
                    <span  style="font-size: 11px" > {{$post->saves}}</span>
                </div-->
            </div>
        </div>
    </li>

@endforeach

</ul>
{{$posts->links()}}






