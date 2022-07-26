@php
$DcComicsLinks = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Video', 'News'];
$DcLinks = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us'];
$sitesLinks = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa'];
$shopLinks = ['Shop DC', 'Shop DC Collectibles'];
@endphp


<div class="footer-bg">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-5 py-5">
                <ul class="d-flex flex-wrap list-unstyled gap-5">
                    <li class="m-height">
                        <h3>DC Comics</h3>
                        <ul class="list-unstyled">
                            @foreach ($DcComicsLinks as $link)
                                <li>
                                    <a href="#">{{ $link }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="m-height">
                        <h3>DC</h3>
                        <ul class="list-unstyled">
                            @foreach ($DcLinks as $link)
                                <li>
                                    <a href="#">{{ $link }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="m-height">
                        <h3>Sites</h3>
                        <ul class="list-unstyled">
                            @foreach ($sitesLinks as $link)
                                <li>
                                    <a href="#">{{ $link }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="m-height">
                        <h3>Shop</h3>
                        <ul class="list-unstyled">
                            @foreach ($shopLinks as $link)
                                <li>
                                    <a href="#">{{ $link }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-6 footer-logo">
                <img src="{{ asset('images/dc-logo.png') }}" alt="">
            </div>
        </div>
    </div>
</div>