@extends('Layouts.master')
@section('SEO')
<title>Upload an image with validation using PHP</title>
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
                                    <img src="{{asset('assets/image/posts/image-upload-php.jpg')}}" alt="Upload an image with validation using PHP">
                                </div>
                                <div class="down-content">
                                    <h1>Upload an image with validation using PHP</h1>
                                    <ul class="post-info">
                                        <li>January 10, 2021</li>
                                        <li><a href="https://nasir-khan.com" target="_blank">Nasir Khan</a></li>
                                    </ul>
                                    <p class="first-paragraph">
                                        
                                        Uploading an image using PHP is quite easy but proper validation like image type is tricky and you need to follow the actual way. In this post I will share with you, how can you upload an image with proper validation.
                                    </p>

                                    <ul>
                                        <li><a href="">Basic Idea of uploading an image using PHP</a></li>
                                        <li><a href="">Image type validation using PHP</a></li>
                                        <li><a href="">Image width & height validation using PHP</a></li>
                                        <li><a href="">Image size validation using PHP</a></li>
                                        
                                    </ul>
                                        
                                        
                                        
                                        

                                        <h2>Basic Idea of uploading an image using PHP</h2>
                                        <p class="first-pargraph">
                                            First of all, if you want to upload an image using HTML form you need to use the  action="your-script-link",  the enctype="multipart/form-data" and method="post" as and form attribute. Make sure you give a proper name to your input filed.
                                        </p>

                                        <b>Example:</b> <br>

                                        <pre  class="prettyprint lang-html">
&lt;form action="script/upload.php" method="post" enctype="multipart/form-data">
    &lt;label>Upload File</label>
    &lt;input required  type="file" name="my_file">
    &lt;input type="submit" name="upload_btn">
&lt;/form>
                                        </pre>
                                        

                                        <p class="first-pargraph">
                                            Inside your uploading script, you need to catch the file using PHP superglobal variable $_FILES.
                                            So first of all get the file and form the file get the temporary path and actual name of the file.
                                        </p>

                                        <b>Example:</b> <br>
                                        <pre class="prettyprint lang-php">
$file           = $_FILES['my_file'];
$name           = $file['name'];
$temporary_file = $file['tmp_name']; // temporary path
                                        </pre>

                                        <p class="first-pargraph">
                                            Then to upload the image use the PHP built-in move_uploaded_file() function, this function will take two parameters one this the temporary path of your image and another one is the location(with file name) where you want to upload.
                                        </p>






                                        <b>Example:</b> <br>

                                        <pre class="prettyprint lang-php">
$upload_location            = "../upload/"; // targeted location
$location_with_name         = $upload_location.$name; 
// full path of uploading image
// like upload/images/my-image.jpg
move_uploaded_file($temporary_file, $location_with_name);
                                        </pre>

                                        <b>Note:</b>  <br>
                                        <p class="first-pargraph">
                                            If you want to make a unique name of your uploading image you can use the PHP time() function when rename.
                                        </p>

                                        Example:
                                        <pre class="prettyprint lang-php">
$str_to_arry            = explode('.',$name);
$extension              = end($str_to_arry) // get extension of the file.
$upload_location        = "../upload/"; // targeted location
$new_name               = "upload-image-".time().".".$extension; // new name
$location_with_name     = $upload_location.$new_name; // finel new file
move_uploaded_file($temporary_file, $location_with_name);
                                        </pre>

                                        <b>Use php string explode() function to get the file extension.</b>

                                        <h2>Image type validation using PHP</h2>
                                        <p class="first-pargraph">
                                            To validate image type you may find file type checking technique on the internet but don’t follow this technique checking file type is not the proper way to validate file type or image type.
                                             <br>
                                            Suppose you are trying to validate an image using only file type checking and someone upload another type(.md) of the file (virus or hacking) just renaming the file type from .md to .jpg, in this case, your validation will be failed. So don’t apply only file type checking.
                                        </p>

                                       <b><mark> Example (Don’t follow):</mark></b>
<pre class="prettyprint lang-php">
    
$file_type = $file['type'];
if($file_type != “jpg” || $file_type != “jpeg”){
    echo  “Not accepted”;
}
</pre>

                                        <p class="first-pargraph">
                                            So the actual way to validate your file or an image using PHP is by checking file MIME-type.
                                            PHP provides a default function to check the file MIME Type.
                                        </p>

                                        <b><mark>Example(Do Follow):</mark></b>
                                       <pre class="prettyprint lang-php">
$finfo      = finfo_open(FILEINFO_MIME_TYPE);
$file_type  = finfo_file($finfo, $temporary_file);

if($file_type != “image/jpeg” || $file_type != “image/png”){
   echo  “Not accepted”;
}
                                       </pre>

                                        <b>Note:</b><a href="">Download</a> the complete source code for better understanding.


                                        <h2>Image width & height validation using PHP</h2>
                                        <p class="first-pargraph">
                                            Validate image width and height using PHP is so easy, using the default PHP function getimagesize() we can easily get the width and height of the image, this method will take the temporary path of the image.
                                        </p>

                                        <b>Example:</b> <br>
                                        <pre class="prettyprint lang-php">
$data     = getimagesize($temporary_file);
$width    = $data[0]; // in pixel
$height  = $data[1];  // in pixel
                                        </pre>

                                        <b>Now you can validate your condition.</b>

                                        <h2>Image size validation using PHP</h2>
                                        <p class="first-pargraph">Validate the size(MB, kb, byte) of an image using PHP is also so easy task. Just get the size form the file(array) as bytes than apply your conditons.</p>

                                        <b>Example:</b> <br>
                                        <pre class="prettyprint lang-php">
$size = $file['size']; // size in byte
$mb_2 = 2000000; // your accepted size 2MB

if($size > $mb_2){
    echo  “File is too large, Upload less than or equal 2MB”;
}
                                        </pre>


                                        <b>Note:</b> Download the complete source code for better understanding.


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