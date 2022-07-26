@php
$headLinks = [
    [
        'name' => 'Characters',
        'href' => '#',
    ],
    [
        'name' => 'Comics',
        'href' => '#',
    ],
    [
        'name' => 'Movies',
        'href' => '#',
    ],
    [
        'name' => 'TV',
        'href' => '#',
    ],
    [
        'name' => 'Games',
        'href' => '#',
    ],
    [
        'name' => 'Collectibles',
        'href' => '#',
    ],
    [
        'name' => 'Videos',
        'href' => '#',
    ],
    [
        'name' => 'Fans',
        'href' => '#',
    ],
    [
        'name' => 'News',
        'href' => '#',
    ],
    [
        'name' => 'Shop',
        'href' => '#',
    ],
];
@endphp


<div class="container py-3">
    <div class="d-flex justify-content-between align-items-center">
        <div class="header-logo d-flex justify-content-start align-items-center">
            <img src="{{ asset("images/dc-logo.png") }}" alt="">
        </div>
        <div class="">
            <ul class="d-flex list-unstyled justify-content-end gap-4">
                @foreach ($headLinks as $link)
                    
                    <li>
                        <a class="head-link" href="{{ $link['href'] }}">{{ $link['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>