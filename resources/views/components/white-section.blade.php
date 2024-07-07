@props([ 
    'thetitle'=>'theTitle', 
    'subtitle'=>'this is a subtitle', 
    'buttontext',
    'buttonroute', 
    ])
<!-- $thetitle, $subtitle, $button are available in below  -->

<section class="m-3 p-3 bg-white rounded-3">
    <!-- header -->
    <article class="d-flex justify-content-between align-items-center gap-2 mb-5">
        <div>
            <h5 class="fw-bold">
                {{ $thetitle }} 
            </h5>
            <p class="text-secondary small">
                {{ $subtitle }}
            </p>
        </div>
        <div>
            @if (!empty($buttontext))
            <a href="{{ route($buttonroute) }}" class="btn btn-warning btn-sm">
                {{ $buttontext }}
            </a>
            @endif
        </div>
    </article>

    {{ $slot }}

</section>