<div class="card p-3">

    <form action="{{route('SearchPost')}}" method="post">
        @csrf
        <label for="search_post"><b>Search Post</b></label>
        <input required name="keyword" id="search_post" type="text" minlength="3" maxlength="100" class="form-control">

        <input type="submit" value="Search" class="form-control btn btn-outline-dark mt-3">
    </form>


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