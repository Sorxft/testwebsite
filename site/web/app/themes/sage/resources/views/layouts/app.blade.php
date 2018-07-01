<!doctype html>
<html @php language_attributes() @endphp>

  {{-- Head section --}}
  @include('partials.head')
  {{-- End of Head section --}}

  {{-- Body section --}}
  <body @php body_class() @endphp>

    {{-- Header --}}
    @php do_action('get_header') @endphp
    @include('partials.header')
    {{-- End of Header --}}

    {{-- Content --}}
    <div class="wrap" role="document">
      <div class="content">

        {{-- Main content --}}
        <main class="main">
          @yield('content')
        </main>
        {{-- End of Main content --}}

        {{-- Sidebar --}}
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
        {{-- End of Sidebar --}}

      </div>
    </div>
    {{-- End of Content --}}

    {{-- Footer --}}
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
    {{-- End of Footer --}}

  </body>
  {{-- End of Body section --}}

</html>
