<button id="searchOpener" class="w3-button w3-teal w3-xlarge" style="top: 60px; background-color: white !important; color : black !important;">
    <i class="fa fa-search"></i>
</button>


<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
    
    <button id="searchCloser" class="w3-bar-item w3-large">Close &times;</button>

    <div style="padding: 10px;">

        <div class="search-wrap">
            <button class="search-button" title="Start Search">
                <i class="fa fa-search"></i>
            </button>
            <input id='searchQuery' type="text" class="input-field " placeholder="Search...">
        </div>

        <h2 class="hs-text-6"; style="margin-top: 15px">Tags:</h2>
        <div class="tags" style="text-align: center">
            @foreach($tags as $tag)
                <a class="categoryItem" data-id='{{$tag->id}}'>#{{$tag->name}}</a>
            @endforeach
        </div>


        <h2 class="hs-text-6"; style="margin-top: 15px">Price:</h2>
        <div class="row">
            <div class="col-xs-6" style="padding: 10px">
                <div class="search-wrap input--filled">
                    <button class="search-button" title="Start Search">
                        <i class="fa fa-usd"></i>
                    </button>
                    <input id="searchQuery" type="number" class="input-field " placeholder="Min" _vkenabled="true"
                           _originaltype="text">
                </div>
            </div>
            <div class="col-xs-6" style="padding: 10px">
                <div class="search-wrap input--filled">
                    <button class="search-button" title="Start Search">
                        <i class="fa fa-usd"></i>
                    </button>
                    <input id="searchQuery" type="number" class="input-field " placeholder="Max" _vkenabled="true"
                           _originaltype="text">
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

</div>