<div class="card p-3">
    {{-- top sidebar ad --}}
    @include('Layouts.ad.side-bar-top')

    <h2>Releted Post</h2>

    @yield('releted-post')


    {{-- bottom sidebar ad --}}
    @include('Layouts.ad.side-bar-bottom')

    {{-- bottom sidebar ad --}}
    @include('Layouts.ad.side-bar-bottom')

    {{-- bottom sidebar ad --}}
    @include('Layouts.ad.side-bar-bottom')

</div>