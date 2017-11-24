<div class="searchWrapper " style="background-color: white">

    {!! Form::open(array('url' => 'find', 'method' => 'get' ,'class' => 'form', 'id'=>'searchForm')) !!}
    <div class="row ">
        <div class="col-sm-8">
            <div class="tags" style="text-align: center">
                @foreach($tags as $tag)
                    <a style="padding: 10px; border-radius: 15px;" class="categoryItem {{$tag->class}}"
                       data-id='{{$tag->id}}'>#{{$tag->name}}

                    </a>
              @endforeach
              <a style="padding: 10px; border-radius: 15px;" class="priceItem {{$price20}}" id="price20">Under 20$</a>
              <a style="padding: 10px; border-radius: 15px;" class="priceItem {{$price50}}" id="price50">More 50$</a>
                    {!! Form::text('tagsIds', null, array( 'id' => 'tagIds')) !!}
                    {!! Form::hidden('addTag', null, array( 'id' => 'addTag')) !!}

                {!! Form::hidden('priceMin', null,
                          array(
                              'id' => 'priceMin',
                                 )) !!}
                {!! Form::hidden('priceMax', null,
                          array(
                              'id' => 'priceMax',
                               )) !!}
            </div>
        </div>
        <div class="col-sm-4">
            <h2 class="hs-text-6" ; style="margin-top: 15px">Sort by:</h2>
            <div style="margin-bottom: 20px">
                <a data-id="saves" class="sortItem {{$savesClass}}" style="border-radius: 10px">POPULARITY</a>
                <a data-id="priceDesc" class="sortItem {{$priceAscClass}}" style="border-radius: 10px">$ HIGH to LOW</a>
                <a data-id="priceAsc" class="sortItem {{$priceDescClass}}"  style="border-radius: 10px">$ LOW to HIGH</a>

                {{ Form::hidden('order', 'saves', array('id' => 'sort_id')) }}
            </div>
        </div>
    </div>

    {!! Form::close() !!}
</div>