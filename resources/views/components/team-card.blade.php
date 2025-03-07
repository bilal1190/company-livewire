<div>
    <div class="card bg-transparent border-0 text-center">
        <div class="card-img">
            @if ($member->image != '')
            <img loading="lazy" decoding="async" src="{{ asset('storage/'. $member->image) }}" alt="{{ $member->name }}" class="rounded w-100" width="300" height="332">
            @endif
           
                @if ($member->in_url != '')
                <ul class="card-social list-inline">
                @if ($member->in_url != '')
                <li class="list-inline-item"><a class="facebook" target="_blank" href="{{ $member->in_url }}"><i class="fab fa-linkedin"></i></a></li>          
                @endif
            </ul>
            @endif
        </div>
        <div class="card-body">
            <h3>{{ $member->name }}</h3>
            <p>{{ $member->designation  }}</p>
        </div>
    </div>
</div>  