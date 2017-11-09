<ul style="list-style-type: none">
@foreach($posts as $post)
    <li style="width: 275px; float:left" >

        <a class="animsition-link" href="{{$post->id}}" data-id="{{$post->id}}" data-price="{{$post->price}}" data-largesrc="{{$post->imageUrl}}" data-title="{{$post->name}}" data-description="{{$post->desc}}">
            <div style="position: absolute; top: 0px; left: 0px; padding: 10px; z-index: 999; background: #551313; color: white; opacity: 0.9">SALE</div>
            <div class="item" style="background: url('{{$post->imageUrl}}');
                    background-position: center center;
                    background-size:65% auto; width: 275px; height: 275px;  background-repeat: no-repeat;">
            </div>

        </a>
        <div class="details">
            <div class="row">
                <div class="col-sm-10 col-xs-10">
                    <p style="margin : 0;     font-weight: 400;font-style: normal; font-size : 15px"   >
                        {{ str_limit($post->name, 25) }}</p>
                    <span style="font-size: 10px; color: #333"> {{$post->price}} </span>
                </div>
                <div class="col-sm-2  col-xs-2" style="border-left : 1px solid #ccc; text-align: center;">
                    <i style="font-size: 16px" class="fa fa-heart"></i>
                    <span style="font-size: 9px" >1161 saves</span>
                </div>
            </div>
        </div>
    </li>

@endforeach

</ul>

<script>



        $(function () {
            $(".item").hover(
                function () {
                    $(this).parent().find('.details').addClass("active");
                }, function () {
                    $(this).parent().find('.details').removeClass("active");
                }
            );




            $('.in').click(
                function (e) {
                    e.preventDefault();

                    console.log(e);
                }
            );

        })

</script>




