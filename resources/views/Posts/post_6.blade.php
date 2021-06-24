@extends('Layouts.Single-Post.Single-Post')

@section('SEO')
<title>Simple JavaScript project with source code | Unit Converter</title>

<meta name="description" content="Using JavaScript we can create different types of projects. In this tutorial, we will create a simple JavaScript Unit Converter project. You can download source code freely.">

<meta name="keywords" content="Kilometers to Centimiters,Kilometers to meter,meter to Kilometers,meter to Centimeters,Centimiters to Kilometers,Centimeters to meter,length converter javascript,length converte project,unit conversion">

<meta property="og:title" content="Simple JavaScript project with source code | Unit Converter" />

<meta property="og:description" content="Using JavaScript we can create different types of projects. In this tutorial, we will create a simple JavaScript Unit Converter project. You can download source code freely." />
<meta property="og:url" content="{{route('Single_Post_6')}}" />

<meta property="og:image" content="https://www.admin.insidethediv.com/assets/img/post/post_8-20-06-2021-08-18-09pm.gif" />

{{-- twitter card description --}}
<meta name="twitter:card" content=""></meta>

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
<h1 data-id="3" id="post-title">Simple JavaScript project with source code | Unit Converter</h1>
<ul class="post-info">
    <li>Last Updated : 21/06/2021</li>
</ul>


<p class="first-paragraph">
   Javascript is one of the top scripting languages. JavaScript has lots of libraries and frameworks. Beginners can create different types of projects easily using javascript. In this tutorial, we will create a simple javascript Unit Converter project. You can download source code freely.
</p>

<div class="py-3 text-center">
	<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_8-20-06-2021-08-18-09pm.gif" alt="Unit Converter">

	<br>
	<br>
	<a class="btn btn-danger" href="{{route('Download.Page',['id'=>8,'title'=>'simple-javaScript-project-with-source-code-|-unit-converter'])}}" class="btn btn-danger">Unit Converter Download</a>
	
</div>



<div class="pt-4">
	<h2>Some simple javascript project for beginners</h2>
	<p>
		You may already know using javascript we can create different types of projects. And this project can be simple or hard. At is initial stage beginners can build some simple javascript project like
	</p> <br>
	<ul class="pl-3">
		<li>👉 <a class="text-primary" href="{{route('Single_Post_5')}}">Create a responsive menu using javascript</a></li>
		<li>👉 <a class="text-primary" href="{{route('Single_Post_2')}}">Create a popup modal using javascript</a></li>
		<li>👉 <a class="text-primary" href="{{route('Single_Post_3')}}">View image in full-size after click using javascript</a></li>
		<li>👉 <a class="text-primary" href="#">Number base converter using javascript</a></li>
		<li>👉 <a class="text-primary" href="#">Tip calculator using javascript</a></li>
		<li>👉 <a class="text-primary" href="#">Live Data Search from table</a></li>
		<li>👉 <a class="text-primary" href="#">Live Data Search From List using javascript</a></li>
		<li>👉 <a class="text-primary" href="#">Image Zoom using javascript using javascript</a></li>
		<li>👉 <a class="text-primary" href="#">Word Counter using javascript</a></li>
		<li>👉 <a class="text-primary" href="#">Tag Box using javascript</a></li>
	</ul>
</div>
{{-- end div --}}


<div class="pt-4">
	<h2>Unit conversion</h2>
	<p>
		In our real-life, we use different types of length unit kile meter, kilometer, centimeter, etc. Also, we need to convert thous using based on our requirements.
	</p> <br>
	<p>In this project, we will convert</p>
	<ul>
		<li>✔<b>Kilometers to Centimiters</b></li>
		<li>✔<b>Kilometers to meter</b></li>
		<li>✔<b>Meter to Kilometers</b></li>
		<li>✔<b>Meter to Centimeters</b></li>
		<li>✔<b>Centimiters to Kilometers</b></li>
		<li>✔<b>Centimeters to meter</b></li>
	</ul>
	<p>The unit value of kilometers, Centimeters, and meters</p> <br>

	<div class="text-center table-responsive-sm">
		<table class="table table-bordered">
		  
		  <tbody>
		    <tr>
		      <td>1 kilometer</td>
		      <td>100000 Centimiters</td>
		      <td>1000 meter</td>
		    </tr>
		    

		    <tr>
		      <td>100000 Centimiters</td>
		      <td>1 kilometer</td>
		      <td>1000 meter</td>
		    </tr>

		    <tr>
		      <td>1 meter</td>
		      <td>100 Centimiters</td>
		      <td>0.001 kilometer</td>
		    </tr>
		
		  </tbody>
		</table>
		<p>From this table, we can easily convert length units mathematically using pen and paper.</p>
	</div>
</div>
{{-- end div --}}




<div class="pt-4">
	<h2>unit converter using javascript</h2>
	<p>
		On the image, we see two events
	</p>
	
	<ol>
		<li>When we type on this input box result shown in the result box.</li>
		<li>When we change the option from the select box.</li>
	</ol>

	<p>
		So our idea is when type on the input box or change options we will take the value from the input box, and the value of select boxes (from, to). Then based on option value and conversion equation(from the table) we can easily solve this problem. Finally, we will set the value to our result box.
	</p>
	<br>

	<b>Example:</b> <br>

	<p>
		Suppose, <br>
		The input value is 5 <br>
		optoin_from = "meter" <br>
		option_to   =  "centimiters" <br>
		So the answer will be <br>
		answer_value_in_centimiters = 100 x 5 = 500 centimiters 
	</p>

	<pre class="prettyprint lang-js">
if(option_from === "meter" && option_to==="centimeter"){
	//this is meter to Centimeter formula 
	result.value = Number(input.value) * 100; // set answer to the result box
}
</pre>
	<br>
  <b>Similarly if</b> <br>

  <p>
  	optoin_from = "kilometer" <br>
  	option_to   =  "meter" <br>
  </p>

  <pre class="prettyprint lang-js">
if(option_from === "kilometer" && option_to==="meter"){
	//this is kilometer to meter formula 
	result.value = Number(input.value) * 1000; // set answer to the result box
}
</pre>
</div>
{{-- end div --}}


@endsection
{{-- end post content --}}




@section('code')
<br>
<br>
<a class="btn btn-danger" href="{{route('Download.Page',['id'=>8,'title'=>'simple-javaScript-project-with-source-code-|-unit-converter'])}}" class="btn btn-danger">Unit Converter Download</a>
@endsection

@section('video')
    <iframe id="video_show" class="my-2" width="100%" height="400" src="https://www.youtube.com/embed/QyEx6LEUPv8" title="javascript Unit Converter">
     </iframe>
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

@endsection
