@extends('Layouts.master')
@section('SEO')
<title>How many ways we can create object in javaScript</title>
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
                                    <img src="{{asset('assets/image/posts/four-ways-of-js-object.jpg')}}" alt="How many ways we can create object in javaScript">
                                </div>
                                <div class="down-content">
                                    <h1>How many ways we can create object in javaScript</h1>
                                    <ul class="post-info">
                                        <li>January 10, 2021</li>
                                        <li><a href="https://nasir-khan.com" target="_blank">Nasir Khan</a></li>
                                    </ul>



                                    <p class="first-paragraph">
                                        
                                        In JavaScript, we can create an object in different ways. The most used way of creating an object in JavaScript is the ‘object literals’, but the updated and useful way is creating the class-based object. <br>
                                        In this post, we will learn 4 different ways of creating an object in javaScript with examples.
                                    </p>

                                    <h2>The four ways of creating JavaScript Object</h2>
                                    <ol>
                                        <li><a href="#literals">Object literals</a></li>
                                        <li><a href="#function">Constructor function</a></li>
                                        <li><a href="#create">Object.create function</a></li>
                                        <li><a href="#class-based">JavaScript class-based object</a></li>
                                    </ol>
                                        
                                        
                                        
                                    <div id="literals">
                                        <h2>Creating a JavaScript Object using the ‘Object literals’</h2>
                                        <p>
                                            Object Literals way is the most common and used way, at the very initial stage, every javaScript developer learns and used this way.
                                        </p>
                                        <h3>How to create a JavaScript object in object literals way</h3>
                                        <p>
                                            Inside the curly bracket, we need to store data in key-value pairs. We can also store methods in key-value pairs as property. But the best practice of store methods as a prototype. <br>

                                            <b>Way of accessing property of an object</b> <br>
                                            <code>object_name.key</code><br>
                                            <b>Wary of accessing methods of an object</b> <br>
                                           <code>object.function_key()</code>
                                        </p>
                                        <h3>
                                            Example of JavaScript Object literals
                                        </h3>
                                        
                                        <pre class="prettyprint lang-js">
let Person = {
    f_name: "Nasir",
    l_name: "Khan",
    email:  "nasirkhan@gmail.com",
    fullName: function(){
        return `${this.f_name} ${this.l_name}`;
    }
}
console.log(Person.f_name) // output: Nasir
console.log(Person.l_name) // output: Khan
console.log(Person.fullName()) // output: Nasir Khan

console.log(Person) 
//see the output image, method stored as a property not prototype.

                                        </pre>
                                        <p><b>Note: </b> Here we store methods as a property.</p>
                                        <div class="row py-2">
                                            <div class="col-lg-6 col-12">
                                                <img class="img-fluid" src="{{asset('assets/image/posts/sub/object-litarel-1.png')}}" alt="Object literals">
                                            </div>
                                        </div>        

                                        <p><b>Note: </b> Learn <a target="_blank" href="" class="text-primary">How to store methods as a prototype.</a></p>
                                        
                                        <h2>Advantage of object literals</h2>
                                        <ol>
                                            <li>Easy to create</li>
                                            <li>Easy to understand</li>
                                            <li>Useful when we need a single object</li>
                                        </ol>
                                        
                                        <h2>Disadvantage of object literals</h2>
                                        <ol>
                                            <li>Need to repeat the same code again and again if we need the same type of multiple objects.</li>
                                            <li>Need to assigned prototype separately.</li>
                                        </ol>
                                        
                                    </div>


                                    <div id="function">
                                        <h2>Creating a JavaScript Object using the ‘Constructor function’</h2>
                                        <p>
                                            One of the useful ways to create an object in JavaScript is to use a constructor function because using the constructor function we can create the same types of multiple objects in less code. Like object literal, if you want to <a target="_blank" href="" class="text-primary">store methods as prototype</a> you need to store separately, <b>remember</b> storing methods as a prototype is the best practice.
                                        </p>
                                        <h3>
                                            How to create a JavaScript object using the constructor function.
                                        </h3>
                                        <p>
                                            To create an object using the constructor function you just need a normal function, if you need to pass the dynamic value for every object you can take the value as a parameter. Also, you can store the method as a property by just creating another function inside the main function. Finally, create an object using a new keyword just like every other programming language.
                                        </p>
                                        <h3>
                                            Example of JavaScript constructor function
                                        </h3>
                                        <pre class="prettyprint lang-js">
function Person(f_name,l_name,email){
    this.f_name  = f_name;
    this.l_name  = l_name;
    this.email   = email;
    this.fullName = function(){
        return this.f_name + ' ' + this.l_name;
    }
}
let Person1 = new Person('Nasir','khan','nasir@gmail.com');
console.log(Person1.email);      // output: nasir@gmail.com
console.log(Person1.fullName()); // output: Nasir Khan

let Person2 = new Person('Lalon','khan','lalon@gmail.com');
console.log(Person2.email);      // output: lalon@gmail.com
console.log(Person2.fullName()); // output: Lalon Khan

console.log(Person1); // output: see the output image


                                        </pre>
                                        <p>
                                            <b>Note:</b> <br>
                                            Again, we see the ‘fullName’ Methos store as property, not as a prototype.
                                        </p>
                                        <div class="row py-2">
                                            <div class="col-lg-6 col-12">
                                                <img class="img-fluid" src="{{asset('assets/image/posts/sub/function-1.png')}}" alt="constructor function">
                                            </div>
                                        </div>  

                                        <h2>The Advantage of constructor function object creation</h2>
                                        <ol>
                                            <li>Easy to create multiple objects</li>
                                            <li>Easy to understand</li>
                                        </ol>
                                        

                                        <h2>The disadvantage of constructor function object creation</h2>
                                        <ol>
                                            <li>Need to assigned prototype separately.</li>
                                        </ol>

                                    </div>

                                    <div id="create">
                                        <h2>Creating a JavaScript Object using the ‘Object.create’ method.</h2>
                                        <p>
                                            We can create an object using the Object.create method but to create an object using the object.create method we need another object. Because the “object.create” method takes another object as parameters and store this object as the prototype of the new object. Let’s check example
                                        </p>
                                        <h3>
                                            Example of JavaScript Object.create methods
                                        </h3>
                                        <pre class="prettyprint lang-js">
// initial object
let prototype_object = {
    fullName: function(){
        return this.f_name + ' ' + this.l_name;
    },
    age: 20
}

let Person = Object.create(prototype_object) // take an object and assign as prototype
Person.f_name = "Nasir"; // assign property
Person.l_name = "Khan"; // assign property

console.log(Person); // see the output image

                                        </pre>

                                        <p>
                                            <b>Note: </b>Try to store only methods as prototypes and store variables as property.
                                        </p>
                                        <div class="row py-2">
                                            <div class="col-lg-6 col-12">
                                                <img class="img-fluid" src="{{asset('assets/image/posts/sub/object-1.png')}}" alt="Object.create methods">
                                            </div>
                                        </div>

                                        <h2>The Advantage of the “object.create” approach</h2>
                                        <ol>
                                            <li>Do not need to assigned prototypes separately</li>
                                        </ol>

                                        <h2>
                                            The disadvantage of the “object.create” approach
                                        </h2>
                                        <ol>
                                            <li>Need an initial object.</li>
                                            <li>Need to assigned properties separately.</li>
                                        </ol>
                                        
                                        
                                    </div>


                                    <div id="class-based">
                                        <h2>Creating a JavaScript class-based object just like other OOP language</h2>
                                        <p>
                                            Javascript class-based object is an ES6 feature, overall it is the most easiest and useful way to create an object. Specially front-end development framework used this feature most. We can create and inherit class just tile other oop language.
                                        </p>
                                        <h3>
                                            Example of JavaScript class-based object
                                        </h3>
                                        <pre class="prettyprint lang-js">
class Animal{
    constructor(name,color){
        this.name  = name;
        this.color =  color;
    };
    getDetails(){
        return 'Color of the ' + this.name + ' is ' + this.color;
    }
}

let animal_1 = new Animal("cat","black"); // create object
console.log(animal_1.getDetails()); // output: Color of the cat is black


class Dog extends Animal{
    constructor(name,color, age, size){
        super(name,color);
        this.age  = age;
        this.size =  size;
    }

    getFullDetails(){
        return this.getDetails()+ `. Its age and size is ${this.age} & ${this.size}.` ;
    }
}

let animal_2 = new Dog("Dog","black","5 Years", "Small");

console.log(animal_2.getDetails()); // output: Color of the Dog is black
console.log(animal_2.getFullDetails()); // output:  Color of the Dog is black. Its age and size is 5 Years & Small.

console.log(animal_1); // see the output image, variable assign as properties, and methods store as a prototype

                                        </pre>

                                        <div class="row py-2">
                                            <div class="col-lg-6 col-12">
                                                <img class="img-fluid" src="{{asset('assets/image/posts/sub/class-1.jpg')}}" alt="class-based object">
                                            </div>
                                        </div>

                                        <pre class="prettyprint lang-js">
console.log(animal_2); // see the output image
                                        </pre>
                                        <p>
                                            Here variable assign as properties, and methods store as a prototype,  easily inherit parent class properties and prototype
                                        </p>
                                        <div class="row py-2">
                                            <div class="col-lg-6 col-12">
                                                <img class="img-fluid" src="{{asset('assets/image/posts/sub/class-2.jpg')}}" alt="class-based object">
                                            </div>
                                        </div>

                                    </div>

                                    <h3>See More</h3>
                                    <ol>
                                        <li><a class="text-primary" href="">store  methods as a prototype in JavaScript object</a></li>
                                        <li><a class="text-primary" href="">Get all keys of a javaScript object</a></li>
                                        <li><a class="text-primary" href="">Get all keys of a javaScript object</a></li>
                                    </ol>


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