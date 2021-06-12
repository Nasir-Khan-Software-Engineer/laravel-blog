<div class="card p-3">

   
       
        <label for="search_post"><b>Search Post</b></label>
        <input required name="keyword" id="search_post" type="text" minlength="3" maxlength="100" class="form-control">

        <a target="_blank" id="search_post_link"  class="form-control btn btn-dark mt-3" href="">Search</a>
    


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