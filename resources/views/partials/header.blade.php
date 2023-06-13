{{-- Off Canvas Navigation --}}
<div class="offcanvas {!! $canvasdirection !!} {!! $canvaswidth !!} {!! $canvasheight !!}" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
  <div class="offcanvas-header">
    {{--<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>--}}
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <nav class="nav-primary d-flex align-items-center justify-content-end">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu($primarymenu) !!}
      @endif
    </nav>

    {{--
    <form class="d-flex mt-3" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    --}}
  </div>
</div>

@if( class_exists( 'WooCommerce' ) )
<a class="cart-contents basket" href="{!! wc_get_cart_url() !!}" title="{!! _e( 'View your shopping cart' ) !!}">
  <span class="hidden-xs">{!! sprintf ( _n( '%d</span>' . ' <span class="item-count"> item</span>', '%d</span>' . ' <span class="item-count"> items</span>', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ) !!} - </span>
  <span class="basket-total">{!! WC()->cart->get_cart_total() !!}</span>
</a>
@endif

{{-- Main header --}}
<header class="banner py-4 {!! $header_style !!}">
  <div class="container d-flex align-items-center justify-content-between">
    <a class="brand p-4 p-lg-5" href="{{ home_url('/') }}" style="background: url({!! $logo['url'] !!});">
      <span class="visually-hidden">{{ get_bloginfo('name', 'display') }}</span>
    </a>
    <nav class="nav-primary d-flex align-items-center justify-content-end">
      <div class="{!! $primarymenu !!}">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu($primarymenu) !!}
      @endif
      </div>
      <button class="navbar-toggler hamburger p-0 {!! $hamburger_style !!} {!! $hamburger_breakpoint !!} " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
    </nav>
  </div>
</header>
