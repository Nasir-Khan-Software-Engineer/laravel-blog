@extends('Layouts.Single-Post.Single-Post')

@section('SEO')
<title>php get all files in directory with extension</title>

<meta name="description" content="Getting all files from a directory with an extension is not so hard things. In this post, we will learn how can we fetch all files from a folder in PHP.">

<meta name="keywords" content="php get all files in directory with extension, php get all files in directory and subdirectories, php script to list files in directory, php list files in directory as links, php glob, php glob multiple extensions, php glob get file date, php get file extension, php get latest file in directory">

<meta property="og:title" content="php get all files in directory with extension" />

<meta property="og:description" content="Getting all files from a directory with an extension is not so hard things. In this post, we will learn how can we fetch all files from a folder in PHP." />
<meta property="og:url" content="{{route('Single_Post_17')}}" />

<meta property="og:image" content="https://www.admin.insidethediv.com/assets/img/post/post_19-28-07-2021-04-53-07pm.gif" />


@endsection


@section('top-ad')
{{-- <div  class="pb-3 ad-image">
    <img  src="https://via.placeholder.com/1020x100" alt="Bottom ad">
</div> --}}
@endsection

@section('cover-image')
{{-- <img src="{{asset('assets/image/posts/css-pseudo-element-in-javascript.jpg')}}" alt="How to catch CSS pseudo element using javaScript"> --}}
{{-- <img src="https://via.placeholder.com/1020x400" alt=""> --}}
@endsection



{{-- start post content --}}
@section('main-content')
<h1 data-id="3" id="post-title">PHP get all files in directory with extension</h1>
<ul class="post-info">
    <li>Last Updated : 28/07/2021</li>
</ul>


<p class="first-paragraph">
   Getting all files from a directory with an extension is not so hard things. In this post, we will learn how can we fetch all files from a folder in PHP.
</p>
<div class="py-3 text-center">
	<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_19-28-07-2021-04-53-07pm.gif" alt="get all files in directory">
</div>
<p>
	Fetch all files or display all files in HTML tag from a folder using PHP is so easy. We just need to open the folder using PHP the "opendir()" function and then read the directory until the end using the "readdir()" function. <br>

	In this post, I will provide you the complete guideline to fetch or display all files from a folder to HTML using PHP. Also, I will provide you the source code so that you can understand it better.
</p>

<h2>Algorithm of getting all files from a folder using PHP</h2>
<ul>
	<li>✅  Open the folder using  the “opendir()” function.</li>
	<li>✅  Read the folder using the “readdir()” function.</li>
	<li>✅  Check is it file on not.</li>
	<li>✅  Read until files end.</li>
	<li>✅  Understand the file type.</li>
	<li>✅  Ecco with HTML tag.</li>
</ul>

<h3>Open a directory using PHP</h3>
<p>
	To open a folder using PHP you need to use the “opendir()” function this function will take the location of your folder as a string and return the opened folder.
</p>

<pre class="prettyprint lang-php">
$location = "./upload";
$folder = opendir($location);
</pre>
<small>
	<p><b>Note:</b> here we open the ‘upload’ folder.</p>
</small>

<h3>Read a folder using PHP</h3>
<p>
	To read a folder using PHP we need to use the "readdir()" function. This function will take an opened folder. That means a folder that is already opened using PHP "opendir()" function.
</p>

<pre class="prettyprint lang-php">
$files = readdir($folder)
</pre>
<small>
	<p><b>Note:</b> here we open the ‘upload’ folder.</p>
</small>

<h2>A loop through on directory  until file reading end using PHP</h2>
<p>
	To loop until file read end we can use while loop, and inside the while loop’s condition, we need to use file read function.
</p>

<pre class="prettyprint lang-php">
while (false != ($files = readdir($folder))) {
    // now echo $file variable if it is actull file
	if($file != '.' && $file != '..'){
		// actual file path
	}
}
</pre>
<small>
	<p><b>Note:</b> we know in every folder there is a single and double dot has defaulted, that’s why we need to skip through using the if condition.</p>
</small>

<p>
	<b>Note:</b> if your directory has multiple types of files you can check the file type just getting the extension of the file from the file path.
</p>

<h2>Getting all files with extension</h2>

<pre class="prettyprint lang-php">
$str_to_arry = explode('.',$file);
$extension   = end($str_to_arry);
if($extension == ‘jpg’){
	echo "it is image";
}
</pre>

<h2>Getting all image from a directory and display in the website with HTML tag</h2>

<pre class="prettyprint lang-php">
$location = "./upload";
$folder = opendir($location); // open folder

if($folder){
$index = 0;
  while (false != ($image = readdir($folder))) { // read until end
    if($image != '.' && $image != '..'){ // remove . and ..
        $image_path = "upload/".$image;
        echo '&lt;img width="30px" src="'.$image_path.'"> ';   // echo image with tag
    }
  }
}
</pre>

@endsection
{{-- end post content --}}





@section('code')
	{{-- <br>
	<br>
	<a class="btn btn-danger" href="{{route('Download.Page',['id'=>18,'title'=>'javascript-digital-clock'])}}" class="btn btn-danger">Download Main Code</a> --}}
@endsection

@section('video')
   {{--  <iframe id="video_show" class="my-2" width="100%" height="400" title="Simple javascript project 😮😱 Digital clock 😍 With Source Code" src="https://www.youtube.com/embed/y2wduI7DFf8">
     </iframe> --}}
@endsection



@section('bottom-ad')
{{-- <div  class="pb-3 ad-image">
    <img  src="https://via.placeholder.com/1020x100" alt="Bottom ad">
</div> --}}
@endsection



@section('author')
    @include('Layouts.Author.Author-Nasir')
@endsection

@section('comment')
    @include('Layouts.comment')
@endsection


@section('releted-post')
<ul class="m-0 p-0">
  <li class="mb-1"><a class="text-primary" href="{{route('Single_Post_9')}}">Parent and child table in SQL with code example</a></li>
  <li class="mb-1"><a class="text-primary" href="{{route('Single_Post_8')}}">How to create a table in MySQL with example code</a></li>
  <li class="mb-1"><a class="text-primary" href="{{route('Single_Post_7')}}">Important MySQL short notes PDF for beginners 2021</a></li>
  <li class="mb-1"><a class="text-primary" href="{{route('Single_Post_4')}}">solve laravel route not found exception</a></li>
</ul>
@endsection
