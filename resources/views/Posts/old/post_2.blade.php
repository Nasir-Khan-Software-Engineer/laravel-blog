@extends('Layouts.master')
@section('SEO')
<title>Difference Between javaScript Array map and filter</title>
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
                                    <img src="{{asset('assets/image/posts/js-array-map-vs-filter.jpg')}}" alt="Difference Between javaScript Array map and filter">
                                </div>
                                <div class="down-content">
                                    <h1>Difference Between javaScript Array map and filter</h1>
                                    <ul class="post-info">
                                        <li>January 10, 2021</li>
                                        <li><a href="https://nasir-khan.com" target="_blank">Nasir Khan</a></li>
                                    </ul>
                                    <p class="first-paragraph">
                                        Before Start the Explanation with an example let's find out some similarities and dissimilarities between them. <br> <br>


                                       <b>Similarities:</b>
                                        Filter and Map both are create new arrays but do not change or modify the main array.
                                        Both are called a function for every single item of the array. <br>

                                        <b>Dissimilarities:</b>
                                        For every item of an array, the filter method returns only true or false, no matter what you return it will convert the value between true or false, but the Map method returns all kind of value that means using the map method you can return boolean value or modified value of the single item if you want. <br>

                                        There is no modified value inside the new filtered array of the main array, which means if your main array contains 1,2,3,4 your filtered new array may contain 2,3,4 or 1,2,4 or any combination of 1,2,3,4. Where your mapped new array may contain a modified value of your main array.
                                    </p>



                                    

                                    <br>
                                    <p><b>Example</b></p>

                                    <pre class="prettyprint lang-js">
let ages = [30,15,17,20,13,40];

let filteredAges = ages.filter(filterAllAge);

function filterAllAge(age){
    if(age>18){
    return true;
  }else{
    return false;
  }
}
console.log(filteredAges);
//output: [30, 20, 40]
                                    </pre>

                                    <p >
                                        <b>Output explanation:</b> <br>
                                        Our new array contain 30,20,40 because for them the filterAllAge function return ture.
                                        Note: instade of true or false if you return any value the it will convert to the boolien value and based on boolien value new array will crate.
                                    </p> 
                                    <br>
                                    <b>Example</b>
                                    <br>
                                    <pre class="prettyprint lang-js">
let ages = [30,15,17,20,13,40];
let mappedAges = ages.map(mapAllAge);

function mapAllAge(age){
    if(age>18){
    return true;
  }else{
    return false;
  }
}
console.log(mappedAges);
//Output: [true, false, false, true, false, true]
                                    </pre>

                                    <p >
                                        <b>Output explanation:</b> <br>
                                        Our new array contain exact same returning value, that means based on every single age you can insert a modified value to the new Mapped array.
                                    </p>
                                    <br>
                                    <b>Example</b>
                                    <br>
                                    <pre class="prettyprint lang-js">
let ages = [30,15,17,20,13,40];
filteredAges = ages.filter(filterAllAge);
function filterAllAge(age){
if(age>18){
    return age - 10;
  }else{
    return age + 10;
  }
}
console.log(filteredAges);
//Output: [30, 15, 17, 20, 13, 40]
                                    </pre>

                              


                                    <p >
                                        <b>Output explanation:</b> <br>
                                        Your main array and new array is exact same because filterAllAge function return true for every single age, that means your return value converted to the boolien value. <br>
                                        <b>Note:</b> if returning value will be zero that means it is false.
                                    </p>


                                    <br>
                                    <b>Example</b>
                                    <br>
                                   <pre class="prettyprint lang-js">
let ages = [30,15,17,20,13,40];
mapedAges = ages.map(mapAllAge);
function mapAllAge(age){
   if(age>18){
   return age - 10;
 }else{
   return age + 10;
 }
}
console.log(mapedAges);
//Output: [20, 25, 27, 10, 23, 30]
                                   </pre>

                                    <p >
                                        <b>Output explanation:</b> <br>
                                        Your main array and new array are not same because we know map method create new array using exact same returning value.

                                        <br>
                                        <br>

                                        <b>Note:</b> 
                                        Map and filter do not modified the main array.
                                    </p>
                                    
                                    <b>Example</b>
                                    <br>
                                    <pre class="prettyprint lang-js">
console.log(ages);
//Output: [30,15,17,20,13,40]
                                    </pre>

                                    <h2>
                                         When Should Use javascript map and filter
                                    </h2>
                                    <p class="last-paragraph">
                                        <b>Filter:</b> Create new array without some value of the main array, that means for your delete operation. <br>
                                        <b>Map:</b> Create new array where all of the items of your main array will contain in an updated form.
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