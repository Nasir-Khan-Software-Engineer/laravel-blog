@extends('Layouts.Single-Post.Single-Post')
@section('SEO')
<title>How to create a table in MySQL with example code</title>
<meta name="description" content="To create a table in MySQL we need to use CREATE TABLE syntax. in this post, we will learn how can we create a table in MySQL with examples of code.">
<meta name="keywords" content="Syntax of creating a table in MySQL,create a table in MySQL,MySQL Create Table,Create a student table in MySQL,how to create table in sql">
<meta property="og:title" content="How to create a table in MySQL with example code" />
<meta property="og:description" content="To create a table in MySQL we need to use CREATE TABLE syntax. in this post, we will learn how can we create a table in MySQL with examples of code." />
<meta property="og:url" content="{{route('Single_Post_8')}}" />
<meta property="og:image" content="https://www.admin.insidethediv.com/assets/img/post/post_10-26-06-2021-12-09-04am.gif" />
{{-- twitter card description --}}
<meta name="twitter:card" content="">
</meta>
@endsection
@section('top-ad')
{{-- 
<div  class="pb-3 ad-image">
   <img  src="https://via.placeholder.com/1020x100" alt="Bottom ad">
</div>
--}}
@endsection
@section('cover-image')
{{-- <img src="{{asset('assets/image/posts/css-pseudo-element-in-javascript.jpg')}}" alt="How to catch CSS pseudo element using javaScript"> --}}
{{-- <img src="https://via.placeholder.com/1020x400" alt=""> --}}
@endsection
{{-- start post content --}}
@section('main-content')
<h1 data-id="3" id="post-title">How to create a table in MySQL with example code</h1>
<ul class="post-info">
   <li>Last Updated : 26/06/2021</li>
</ul>
<p class="first-paragraph">
   To create a table in MySQL we need to use CREATE TABLE syntax. in this post, we will learn how can we create a table in MySQL with examples of code.
</p>
<div class="py-3 text-center">
   <img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_10-26-06-2021-12-09-04am.gif" alt="create table in sql">
</div>
<div class="pt-3">
   <h2>Syntax of creating a table in MySQL.</h2>
   <p>
      you already know that to create a table in MySQL we need to use CREATE TABLE syntax but to define the column name we need to use the datatype. Also to define the default value or to define the primary key and foreign keys we need to use some keywords.
   </p>
   <h2>MySQL Create Table</h2>
   <pre class="bg-dark text-light p-2 mt-2">
CREATE TABLE table_name(
   Column_name_1 data_type,
   Column_name_2 data_type,
   Column_name_3 data_type,
   Column_name_4 data_type,
   Column_name_5 data_type
);
</pre>
<small>The basic structure of creating table in MySQL.</small>

</div>
{{-- end div --}}

<div class="pt-3">
   <h2>Create a student table in MySQL.</h2>
   <p>
      Suppose we want to create a student table with name ID email phone number and age attributes. so in this case our.
   </p>

   <ul>
      <li>✅ The table name will be students.</li>
      <li>✅ ID will be the primary key and auto-increment.</li>
      <li>✅ Name is required and varchar data type but not unique.</li>
      <li>✅ Email is required, unique, and varchar data type.</li>
      <li>✅ Phone number is also a varchar data type and unique but not required always.</li>
      <li>✅ Finally, the about column will be text datatype.</li>
   </ul>

   <h3>Example Code</h3>
   <pre class="bg-dark text-light p-2 mt-2">
CREATE TABLE students(
   id INT NOT NULL AUTO_INCREMENT,
   Name  VARCHAR(100) NOT NULL,
   Email VARCHAR(255) UNIQUE NOT NULL,
   Phone VARCHAR(255) UNIQUE NULL,
   About TEXT NULL,
   PRIMARY KEY ( id )
);
</pre>
<small>Here student id is our <a class="text-primary" href="#">primary key</a> and it will increment automatically.</small>

</div>
{{-- end div --}}





@endsection
{{-- end post content --}}
@section('code')

@endsection
@section('video')
{{-- <iframe id="video_show" class="my-2" width="100%" height="400" src="https://www.youtube.com/embed/QyEx6LEUPv8" title="javascript Unit Converter">
</iframe> --}}
@endsection
@section('bottom-ad')
{{-- 
<div  class="pb-3 ad-image">
   <img  src="https://via.placeholder.com/1020x100" alt="Bottom ad">
</div>
--}}
@endsection
@section('author')
@include('Layouts.Author.Author-Nasir')
@endsection
@section('comment')
@include('Layouts.comment')
@endsection
@section('releted-post')
@endsection