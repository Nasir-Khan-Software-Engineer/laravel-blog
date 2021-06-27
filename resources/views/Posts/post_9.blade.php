@extends('Layouts.Single-Post.Single-Post')
@section('SEO')
<title>Parent and child table in SQL with code example</title>
<meta name="description" content="In MySQL to make an entity unique, we need to use a primary key also to make a relationship between two entity, that means to table we need to use a foreign key. so in this post, we will learn how can we create a table with a primary and foreign key..">

<meta name="keywords" content="Parent and child table in SQL,Primary key,Foreign key,What is a child table,What is a parent table,Code example of parent and child in SQL">


<meta property="og:title" content="Parent and child table in SQL with code example" />

<meta property="og:description" content="In MySQL to make an entity unique, we need to use a primary key also to make a relationship between two entity, that means to table we need to use a foreign key. so in this post, we will learn how can we create a table with a primary and foreign key.." />


<meta property="og:url" content="{{route('Single_Post_9')}}" />

<meta property="og:image" content="https://www.admin.insidethediv.com/assets/img/post/post_11-26-06-2021-12-24-20am.gif" />
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
<h1 data-id="3" id="post-title">Parent and child table in SQL with code example</h1>
<ul class="post-info">
   <li>Last Updated : 26/06/2021</li>
</ul>
<p class="first-paragraph">
   In MySQL to make an entity unique, we need to use a primary key also to make a relationship between two entity, that means to table we need to use a foreign key. so in this post, we will learn how can we create a table with a primary and foreign key.
</p>
<div class="py-3 text-center">
   <img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_11-26-06-2021-12-24-20am.gif" alt="Parent and child table in SQL">
</div>
<div class="pt-3">
   <p>Before going to the coding example and let's learn fast what is the primary key? and what is the foreign key?</p>
   <h2>Primary key</h2>
   <p>
      A primary key is an attribute that uniquely identifies an entity.
   </p>
   <h3>Rules of the primary key</h3>
   <ul>
      <li>✅ A primary key must be unique</li>
      <li>✅ A primary key cannot be null</li>
      <li>✅ A table can have only ONE primary key</li>
   </ul>


   <h2>Foreign key</h2>
   <p>A table’s primary key is the foreign key in another table.</p>


   <h2>SQL Parent-Child Relationship</h2>

   <h3>Child table</h3>
   <p>If the table contains a foreign key then this table will be called a child table.</p>

   <h3>Parent table</h3>
   <p>If a table contains the primary key then it will be called a parent table for reference table.</p>

   <div class="py-3 text-center">
      <img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_11_2-26-06-2021-12-30-05am.jpg" alt="SQL Parent-Child Relationship">
   </div>
   <p>
      Here we see the books table contains the author table’s primary key(A_ID) so in this case, the author table is our parent table and the books table is our child table.
   </p>



   <h2>Code example of parent-child table in SQL</h2>
   <pre class="bg-dark text-light p-2 mt-2">
CREATE TABLE author(
    A_ID int NOT NULL,
    Name varchar(100),
    PRIMARY KEY(A_ID )
)

CREATE TABLE books(
   B_ID int NOT NULL PRIMARY KEY,
   Name varchar(100),
   Price int NOT NULL,
   A_ID int FOREIGN KEY REFERENCES author(A_ID)
);
</pre>
<small>Here A_ID used as foreign key in the books table, which is the primary key in the author table.</small>

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