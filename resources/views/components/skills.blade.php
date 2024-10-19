
<div class="row align-items-center justify-content-center gy-3">
    @foreach ($skills as $item)
        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <div class="card rounded-4 bg-orange text-white">
                <img class="img-fluid rounded-4" src="{{$item['icon']}}" alt="{{$item['title']}}" style="height: 100px; width: 100%"/>
                <div class="card-body text-center p-1">
                    <p class="m-0 text-nowrap">{{$item['title']}}</p>
                    {{-- <span class="mb-2 badge rounded-pill text-bg-primary">
                        <h6 class="m-0">{{$item['width']}}</h6>
                    </span> --}}
                    {{-- <div class="progress" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 25px">
                        <div class="progress-bar bg-dark-blue progress-bar-striped progress-bar-animated" style="width: {{$item['width']}}">
                            <h6 class="m-0">{{$item['width']}}</h6>    
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    @endforeach
</div>