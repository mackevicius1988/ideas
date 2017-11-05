

<ul id="og-grid" class="og-grid">

@foreach($posts as $post)

    <li style="width: 275px; height: 275px; overflow: hidden" class="gridItem">

        <button class="in" style=" position: absolute; top: 0px; right: 0px; padding: 10px; z-index: 999; background: #551313; color: white; opacity: 0.9; width: 50px; margin: 0">SAVE ME</button>
        <a class="animsition-link" href="{{$post->id}}" data-id="{{$post->id}}" data-price="{{$post->price}}" data-largesrc="{{$post->url}}" data-title="{{$post->name}}" data-description="{{$post->desc}}">
            <div style="position: absolute; top: 0px; left: 0px; padding: 10px; z-index: 999; background: #551313; color: white; opacity: 0.9">SALE</div>




            <div class="item" style="background: url('{{$post->url}}');
                    background-position: top center;
                    background-size:100% auto; width: 275px; height: 275px;  background-repeat: no-repeat;">
            </div>
            <div class="details">
                <div class="row">
                    <div class="col-sm-8">
                        <p style="margin : 0;     font-weight: 400;font-style: normal; font-size : 15px"   >{{$post->name }}</p>
                        <span style="font-size: 10px"> {{$post->votes}} saves</span>
                    </div>
                    <div class="col-sm-4" style="border-left : 1px solid #ccc; text-align: center; padding-top:10px">
                        <span class = 'itemPrice' style="font-size: 18px">{{$post->price}}$</span><br />

                          <!--img  data-id="{{$post->id}}" class = 'rememberMe' src="http://www.iconsdb.com/icons/preview/dark-gray/save-xxl.png" width="20px"-->

                    </div>
                </div>


            </div>
        </a>
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




