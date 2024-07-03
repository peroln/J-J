<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        @foreach($reviews as $review)
            @if($loop->first)
                <button class="nav-link active" id="nav-{{$review->id}}-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#nav-{{$review->id}}" type="button"
                        role="tab"
                        aria-controls="nav-{{$review->id}}"
                        aria-selected="true">{{$review->name}}
                </button>
            @else
                <button class="nav-link" id="nav-{{$review->id}}-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#nav-{{$review->id}}" type="button"
                        role="tab"
                        aria-controls="nav-{{$review->id}}"
                        aria-selected="true">{{$review->name}}
                </button>
            @endif
        @endforeach
    </div>
</nav>

<div class="tab-content" id="nav-tabContent">
    @foreach($reviews as $review)
        @if($loop->first)
            <div class="tab-pane fade show active" id="nav-{{$review->id}}" role="tabpanel"
                 aria-labelledby="nav-{{$review->id}}-tab">
        @else
            <div class="tab-pane fade" id="nav-{{$review->id}}" role="tabpanel"
                 aria-labelledby="nav-{{$review->id}}-tab">
        @endif

            <p class="accordion-body text-white pt-0 px-0">
                 <img src="{{asset('storage/'.$review->src)}}" class="img-thumbnail float-end  ms-3 my-3 shadow-lg"
                   alt="{{$review->alt}}">
                 <figure>
                        <blockquote class="blockquote">
                             <p>"{{$review->text}}"</p>
                        </blockquote>
                        <figcaption class="blockquote-footer text-end">
                            client
                            <cite title="Source Title">{{$review->name}}</cite>
                        </figcaption>
                 </figure>
            </p>
        </div>
    @endforeach
</div>
