@php
$breadcrumbs_items = explode(".", $currentRoute);
$breadcrumbs = [];
$path = "";
foreach($breadcrumbs_items as $index=>$item) {
    $item = trim($item);
    if (!in_array($item, ['/', 'index'])) {
        $path .=  '/';
        $path .= (string)$item;
        $path = trim($path, ' /');
        array_push($breadcrumbs, [$path => $item]);
    }
}
@endphp

<nav aria-label="breadcrumb" dir="ltr" style="--bs-breadcrumb-divider: '>';" class="text-primary">
    <ol class="breadcrumb mx-3">
        <li class="breadcrumb-item"></li>
        @forelse ($breadcrumbs as $breadcrumb)
            @php
                $route = array_keys($breadcrumb)[0];
                $title = array_values($breadcrumb)[0];
            @endphp
            <li class="breadcrumb-item">
                <a href="{{ url($route) }}">
                    {{ $title }}
                </a>
            </li>
        @empty
        @endforelse
        </ol>
    </nav>
<!-- <li class="breadcrumb-item active" aria-current="page">Category</li> -->