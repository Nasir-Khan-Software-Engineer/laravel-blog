@extends('Layouts.master')
@section('SEO')
<title>How to increase Laravel App Performance</title>
<meta name="description" content="Filter and Map both are create new arrays but do not change or modify the main array.
                                        Both are called a function for every single item of the array.">
<meta name="keywords" content="HTML, CSS, JavaScript, php">

@endsection
@section('main-container')
<section class="medium-gap single-post">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-posts">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single-post">
                                <div class="post-image">
                                    <img src="{{asset('assets/image/posts/laravel-app.jpg')}}" alt="Difference Between javaScript Array map and filter">
                                </div>
                                <div class="down-content">
                                    <h1>How to increase Laravel App Performance</h1>
                                    <ul class="post-info">
                                        <li>January 10, 2021</li>
                                        <li><a href="https://nasir-khan.com" target="_blank">Nasir Khan</a></li>
                                    </ul>
                                    


                                    <p class="first-paragraph">
                                        It's true when you came from row PHP to Laravel you will feel Laravel is slow or take more time to respond than Raw PHP, I also felt that. But when I applyed some tricks or technology it improves its performance and satisfied me a lot.
                                        So in this post, I will share with you some tricks and suggestions to improve your Laravel app Performance.
                                    </p>


                                    <br>
                                    <h2>List of Tricks:</h2>
                                    <ol>
                                        <li>
                                            <a href="#route-cache">Route Performance / Cache</a>
                                            
                                        </li>
                                        <li><a href="#config-cache">Config Cache</a></li>
                                        <li><a href="#data-cache">Data Cache</a></li>
                                        <li><a href="#egger-loading">N+1 Problem Solve / Eager Loading</a></li>
                                        <li>
                                            <a href="#general-tricks">General Tricks
                                                <ol>
                                                    <li><a href="#remove-code">Remove Unnseeary code</a></li>
                                                    <li><a href="#database-design">Database Design</a></li>
                                                    <li><a href="#user-of-query-builder">Use of query builder or Eloquent</a></li>
                                                    <li><a href="#file-size"> File Size</a></li>
                                                    <li><a href="#resource-link"> Resource Link</a></li>
                                                </ol>
                                            </a>
                                        </li>
                                        
                                    </ol>
                                    
                                    
                                    <div id="route-cache">                          
        
                                    <h2>Route Performance / Cache:</h2>
                                     <p>
                                        Route Caching is one of the best ways to increase our project performance.
                                        In raw PHP to go one page to another page is so easy and first because it goes direct to our targeted page, but in Laravel, it is not direct it check lots of file like Controller, View, Middleware, etc and that's why it is slow. <br>
                                        So if we cache our routes, it will make a single file with all of the routes and boost up our project.
                                    </p>

                                    <h3>How to do Route Cache</h3>

                                    First of all run help command for better understanding. <br>
                                    <i class="command">php artisan route:cache -h </i>
                                    You will find a Message Like<br>
                                    <b>Description:</b> Create a route cache file for faster route registration. <br><br>

                                     <p>
                                        Now to create a route cache file run artisan command <b>without</b> -h flag
                                    </p>
                                    <i class="command">php artisan route:cache</i>
                                     

                                     <p>
                                        It will generate a route cache file. Check the <b>bootstrap/cache</b> folder you will find a file called routes-v7.php, and inside the file, you will see a large array with all of your routes.

                                        To know how the Laravel route cache file generates go to the <b>RouteCacheCommand.php</b> file which is inside 
                                        
                                            <b>vendor\laravel\framework\src\Illuminate\Foundation\Console</b>
                                       
                                         folder and under 
                                       
                                            <b>Illuminate\Foundation\Console </b>namespace.<br><br>
                                        

                                        <b>Note:</b>
                                        
                                        After creating the route cache file your app will check cached file always not web.php or api.php so If you create a new route after creating the route cache file please update your cache file by running the <b>php artisan route:cache </b>command again.
                                        Every time when you run PHP artisan route:cache first it will clear your previous cached file then create a <b>new cached file</b>, check the <b>RouteCacheCommand.php </b>file for more details. <br><br>

                                        <b>
                                             Note:
                                        </b>
                                        
                                        Older version(<8) of Laravel do not support closer routing system that means
                                        to create a route cache file you can not make a route like this.

                                        <pre class="prettyprint lang-php">
Route::get('/anithing', function () {
   return view('view-file');
});
                                        </pre>
                                    </p>
                                    </div> 

                                    <div id="data-cache">
                                        
                                    

                                        <h2 class="mt-4">Cache Data</h2>
                                    <p>
                                        Suppose you have 100 products in your database now if you want to see your all product every time you need to run a database query. But if you cache your data you do not need to run a database query every time and this will increase your project performance a lot. <br>

                                        <b>Example:</b>
                                        <pre class="prettyprint lang-php">
$a_variable= Cache::rememberForever('your-key', function () {
   your database query
});

$products = Cache::rememberForever('all-products', function () {
   return Product::all();
});
                                        </pre>

                                        <h3>How Laravel Data Cache Work</h3>
                                        Every time it will check your cache key(you are defined) present or not if the key does not present then it will run a database query (closer function) and store your data to cache so that next time you do not need to run a database query. <br><br>

                                        Check Laravel <a target="_blank" href="https://laravel.com/docs/8.x/cache#configuration"><b>Documentation</b></a> For More<br>

                                        <br>
                                       <b>Note:</b>
                                        To update your cached data run 
                                                     
                                        <i class="command">
                                            php artisan cache:clear
                                        </i>
                                        it will delete all cache data and store again for the first time.
                                        If you use a <b>powerful</b> cache drive(Redis) your performance will increase more. 

                                    </p>
                                    </div>

                                    <div id="egger-loading">
                                        
                                   

                                    <h2>N+1 / Eager Loading:</h2>
                                     <p>
                                        Suppose you have two tables Products and Admin now you want to show all products and for every product, you also want to show the name of the admin. This is so easy in Laravel because you can make relations between product and admin so easily in Laravel.
                                    </p>

                                    <b>Your code maybe like this</b>

                                    <pre class="prettyprint lang-php">
//Product.php // model
public function admin(){
return $this->belongsTo('App\Admin');
}

// Controller
//ProductController.php
Public function index(){
    $products = Product::all();
    Return view(‘show-all’,compact(‘products’));
}

// view
//show-all.blade.php
foreach($products as $product){
    &lt;li>
        &#123;{$product->name}}
        &#123;{$product->admin->name}}
           
    &lt;/li>
}

                                    </pre>




                                    <p>
                                        If your code like this(controller code) your project will be slow because this code will run N+1 database queries which means for 100 products it will run 100 + 1 queries, where you can do the same thing using only two database queries
                                    </p>




                                    <h3>N+1 Queries Will be like this</h3>

                                    <pre class="prettyprint lang-sql">
select * from `products`;
select * from `admins` where `admins`.`id` = ? limit 1;
select * from `admins` where `admins`.`id` = ? limit 1;
select * from `admins` where `admins`.`id` = ? limit 1;
                                    </pre>


                                     <p>
                                        But if you use egger loading or solve the N+1 problem your queries will be like this
                                    </p>

                                    <pre class="prettyprint lang-sql">
select * from `products`;
select * from `admins` where `admins`.`id` in (?, ?, ?, ?, ?);
                                    </pre>

                                     <p>
                                        Which will improve your project performance a lot.
                                    </p>



                                    <h3>Solve N+1 problem or use Eager Loading in Laravel</h3>
                                     <p>
                                        Just change a piece of code in your controller file. Instead of using <b>Product::all() </b>
                                        use  <b>Product::with(‘admin’)->get();</b>
                                    </p>

                                    <br>
                                    <b>Example:</b>
                                    <pre class="prettyprint lang-php">
// Controller
ProductController.php
Public function index(){
    $products = Product::with(‘admin’)->get();
    Return view(‘show-all’,compact(‘products’));
}

For multiple relations use an array like this.
Public function index(){
    $products = Product::with([‘admin’,’reviews’,’categories’])->get();
    Return view(‘show-all’,compact(‘products’));
}
                                    </pre>


                                    <br>
                                    <p>
                                        For more details Read Laravel <a target="_blank" href="https://laravel.com/docs/8.x/eloquent-relationships#eager-loading"><b>Documentation</b></a>
                                    </p>  <br>
                                    

                                     </div>

                                     <div id="config-cache">
                                         
                                    
                                    <h2>Config Cache</h2>

                                     <p>
                                        Config cache and route cache are almost the same. Run config:cache command with help flag you will find a description like this “Create a cache file for faster configuration loading”.
                                        That means if cache your all configuration your project performance will increase.
                                    </p>

                                    <h3>
                                        Artisan command for cache config:
                                    </h3>
                                    <i class="command">php artisan config:cache;</i>

                                    <h3>How Laravel config cache work:</h3>

                                    <p>
                                        Inside your config folder, you will see lots of files and when you run the config cache command Laravel makes an array containing all of the configurations of your project which presents inside your config folder.

                                        You will find your cached config file inside the <b>bootstrap/cache</b> folder. <br>

                                        For more details check the <b>ConfigCacheCommand.php</b> file in the  
                                        <b>vendor\laravel\framework\src\Illuminate\Foundation\Console\ folder</b>
                                    </p>
                                    

                                    

                                    <br>
                                    <b>Note:</b>
                                    <p>
                                        Every time when you add a new configuration or want to update your configuration run Php artisan config:cache again it will delete the previous cached configuration and will create a new one.
                                        If you cached your configuration your <b>env()</b> function will not work anymore to echo anything inside the blade file so instead of using the <b>env()</b> function use the <b>config()</b> function
                                    </p>

                                    <br>
                                    <b>Example:</b>
                                    <pre class="prettyprint lang-php">
&#123;{env(‘APP_NAME’)}} // will not work
&#123;{config(‘APP_NAME’)}} // will work
                                    </pre>
                                    

                                    <h3>
                                        How to clear all cache configuration
                                    </h3>
                                    <p>
                                        Run php config artisan command 
                                        <i class="command">artisan config:clear</i> 
                                    </p>
                                     </div>



                                     <div id="general-tricks">
                                         
                                     

                                    <h2>
                                        Some General Trick to improve Laravel Project Performance 
                                    </h2>

                                    <h3 id="remove-code">Remove Unnecessary Code</h3>

                                     <p>
                                        More code more execution time, it is a very common thing and I think you already know that, But how can you remove unnecessary code? In row PHP everything is in your control but in Laravel everything is not your control it’s true but if you want you can do something to solve this issue, let’s Discous.

                                        Suppose you want to create a blog system and you do not want to keep a sign-in and sign-up system then you can easily remove the authentication system of Laravel.

                                        Suppose you want to create a REST API in this app you actually do not need the blade view so you can easily remove or stop the execution view service provider
                                    </p>

                                    <br>
                                   <b>Example:</b>
                                     <p>
                                        Check the <b>config/app.php</b> file, inside this file you will find an array of providers. Now if you want to stop execution or remove the authentication system you can easily comment on the AuthServiceProvider class. You can also comment on more providers if you do not need this.
                                    </p>
                                    <br>
                                    <b>Note:</b>
                                    Like Provider, you can also remove unnecessary middleware so check the <b>Http/Kernel.php</b> file.




                                    <h3 id="database-design">Database Design</h3>
                                     <p>
                                        A good database design improves your project performance so try to create a clean database.
                                        Some techniques to create the best database.
                                        <ul>
                                            <li>- Normalization</li>
                                            <li>- Relationship</li>
                                            <li>- Primary key</li>
                                            <li>- Indexing</li>
                                            <li>- Proper data type</li>
                                        </ul>
                                    </p>

                                    <h3 id="user-of-query-builder">
                                        Laravel Eloquent vs Query Builder
                                    </h3>
                                     <p>
                                        To execute SQL query Laravel Eloquent is so useful it is easy and clean, but to fetch a large amount of data Laravel eloquent is not the best option, so try to use Laravel DB Query Builder to fetch a large amount of data and for small size data you can use Eloquent.
                                    </p>

                                    <h3 id="file-size">Reduce Resource File Size</h3>
                                     <p>
                                        A large file takes a large amount of time to load so try to keep your file size as much as low.
                                        Use Laravel Page Speed <a target="_blank" href="https://github.com/renatomarinho/laravel-page-speed" class="text-info">package</a> this package will minify to of your resource and optimize your page performance at least 35% 
                                    </p>

                                    <br>
                                    <b>Note:</b> <br>
                                    Image Take more time to load so try to use the SVG file.

                                    <h3 id="resource-link">
                                        Resource Link
                                    </h3>
                                    <p>
                                        <ul>
                                            <li>
                                                Use CDN Link for CSS, JS
                                                
                                            </li>
                                            <li>
                                                Try to load image from another hosts / Image address
                                            </li>

                                        </ul>
                                    </p>

                                    </div>


                                    <h2>Conclusion</h2>
                                    <p class="last-paragraph">
                                        Based on your project requirement try to use every single trick technically I believe the final output will satisfy you.
                                    </p>



                                    


                                    <br>
                                    {{-- // help quate --}}
                                    @include('Layouts.quate')
                                   
                                </div>
                            </div>
                        </div>


                        {{-- // autor card --}}
                        @include('Layouts.author')

                        {{-- <div class="col-12 mt-3">
                            <h2>Comments</h2>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')

@endsection