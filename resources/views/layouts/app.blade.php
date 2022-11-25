<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    <div class="animate__animated animate__fadeIn overflow-hidden">
    @php do_action('get_header') @endphp
    @include('partials.header')
    {!! $header_scripts !!}
    <div class="wrap container" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
    </div>
    {!! $footer_scripts !!}
  </body>
</html>
