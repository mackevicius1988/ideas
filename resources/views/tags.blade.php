<div class="searchWrapper " style="background-color: white">

    {!! Form::open(array('url' => 'find', 'method' => 'get' ,'class' => 'form', 'id'=>'searchForm')) !!}
    <div class="row ">
        @foreach($tags as $tag)
            <div class="col-xs-12 col-sm-6 col-md-3 categoryBlock">
                <a class="categoryItem" data-id='{{$tag->id}}'>
                    <img src="{{$tag->image}}" style="    display: inline-block;
    height: auto;
    max-width: 100%;" class="{{$tag->class}}"/>
                    <div class="nameBlock">
                        <h5>{{$tag->name}}</h5>
                        <span class="catDesc">{{$tag->desc}}</span>
                    </div>
                </a>

            </div>
        @endforeach
        {!! Form::hidden('addTag', null, array( 'id' => 'addTag')) !!}
    </div>
    <div class="container">
    <div class="row ">
        <div class="col-sm-12"  style="text-align: left; padding:20px; padding-left: 120px;padding-top: 40px">

            <h1 style="color: black ; font-size: 1.25em">{{$catName}}</h1>
            <span class="catDesc">{{$catDesc}}</span>

        </div>
        <div class="col-sm-6" style="text-align: center; padding-top: 20px">

        </div>
        <div class="col-sm-3" style="text-align: center; padding-top: 20px">

        </div>
        <div class="col-sm-3"  style="text-align: center">
            <div style="margin-bottom: 20px">
                <a data-id="saves" class="sortItem {{$savesClass}}" style="border-radius: 10px">POPULARITY</a>
                <a data-id="priceDesc" class="sortItem {{$priceDescClass}}" style="border-radius: 10px">$ HIGH to LOW</a>
                <a data-id="priceAsc" class="sortItem {{$priceAscClass}}"  style="border-radius: 10px">$ LOW to HIGH</a>

                {{ Form::hidden('order', 'saves', array('id' => 'sort_id')) }}
            </div>
        </div>
    </div>
    </div>
    {!! Form::close() !!}
</div>