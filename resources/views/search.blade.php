<button id="searchOpener" class="w3-button w3-teal w3-xlarge" style="top: 60px; background-color: white !important; color : black !important;">
    <i class="fa fa-search"></i>
</button>


<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">



    <button id="searchCloser" class="w3-bar-item w3-large">Close &times;</button>

    {!! Form::open(array('url' => 'find', 'method' => 'get' ,'class' => 'form')) !!}

    <div style="padding: 20px;">

        <div class="search-wrap">
            <button class="search-button" title="Start Search">
                <i class="fa fa-search"></i>
            </button>

            {!! Form::text('query', null,
                array(
                    'class'=>'input-field',
                    'id' => 'searchField',
                    'placeholder'=>'Search...')) !!}

        </div>

        <h2 class="hs-text-6"; style="margin-top: 15px">Tags:</h2>
        <div class="tags" style="text-align: center">
            @foreach($tags as $tag)
                <a class="categoryItem" data-id='{{$tag->id}}'>#{{$tag->name}}</a>
            @endforeach

                {{ Form::hidden('categoryIds', 'secret', array('id' => 'invisible_id')) }}
        </div>


        <h2 class="hs-text-6"; style="margin-top: 15px">Price:</h2>
        <div class="row">
            <div class="col-xs-6" style="padding: 10px">
                <div class="search-wrap input--filled">
                    <button class="search-button" title="Start Search">
                        <i class="fa fa-usd"></i>
                    </button>

                    {!! Form::number('priceMin', null,
                        array(
                            'class'=>'input-field',
                            'id' => 'priceMin',
                               'placeholder'=>'Min')) !!}

                </div>
            </div>
            <div class="col-xs-6" style="padding: 10px">
                <div class="search-wrap input--filled">
                    <button class="search-button" title="Start Search">
                        <i class="fa fa-usd"></i>
                    </button>


                    {!! Form::number('priceMax', null,
                        array(
                            'class'=>'input-field',
                            'id' => 'priceMax',
                               'placeholder'=>'Max')) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6" style="padding: 10px">
                <button style="width: 100%; " class="sortItem">UNDER 20$</button>
            </div>
            <div class="col-xs-6" style="padding: 10px">
                <button style="width: 100%; " class="sortItem">MORE 50$</button>
            </div>
        </div>




        <h2 class="hs-text-6"; style="margin-top: 15px">Sort by:</h2>
        <div>
            <a class="sortItem">POPULARITY</a>
            <a class="sortItem">NEWEST FIRST</a>
            <a class="sortItem">$ HIGH to LOW</a>
            <a class="sortItem">$ LOW to HIGH</a>

            {{ Form::hidden('sort', 'votes', array('id' => 'sort_id')) }}
        </div>
        <div class="row">
            <div class="col-xs-12" style="text-align: center">
                <button id="btn-find" style="background-color: #551313" type="submit"
                        class="btn btn-animated btn-contact ripple-alone" data-text="FIND MY ITEMS"><span
                            class="btn-icon"><span class="loader-parent"><span class="loader2"></span></span>
                                                </span>
                </button>

            </div>
        </div>
    </div>

    {!! Form::close() !!}

</div>