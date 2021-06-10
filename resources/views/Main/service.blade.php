@extends('Layouts.master')

@section('SEO')
<title>Our Service</title>
<meta name="description" content="Our Service">
<meta name="keywords" content="Our Service">
@endsection


@section('CSS')
<style>
  h1{
    font-size: 25px
  }
  p{
    font-size: 17px; 
    text-align: justify;
  }
</style>
@endsection




@section('main-container')

<section class=" contact-me contact-version-two">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-12">
        
          
        <div class=" p-3">
          <h1 class="text-center py-3">Our Service</h1>
          <p class="p-3"><b>we believe in relation, a good relationship is more powerful than money.</b></p>

          <table class="table table-bordered">
            <thead>
              <tr align="middle">
                <th scope="">Title</th>
                <th scope="">Short Description</th>
                <th scope="">💰</th>
                <th scope="">Order</th>
              </tr>
            </thead>
            <tbody>
              
              <tr >
                <td><b>Web Desing</b></td>
                <td>Pixel perfect responsive Design, Using the latest technology</td>
                <td align="middle">💲 10.0</td>
                <td align="middle">
                  <a class="btn btn-outline-dark" href="/contact">Order Now</a>
                </td>
              </tr>

              <tr>
                <td><b>Single Page Application</b></td>
                <td>Responsive Single Page App, Using the latest technology (vue, react, angular, etc)</td>
                <td align="middle">💲 20.0</td>
                <td align="middle">
                  <a class="btn btn-outline-dark" href="/contact">Order Now</a>
                </td>
              </tr>

              <tr>
                <td><b>CMS Wordpress</b></td>
                <td>Responsive, SEO Friendly content management system</td>
                <td align="middle">💲 10.0</td>
                <td align="middle">
                  <a class="btn btn-outline-dark" href="/contact">Order Now</a>
                </td>
              </tr>

              <tr>
                <td><b>Ecommerce</b></td>
                <td>Single and multi-vendor Ecommerce with advance data management system</td>
                <td align="middle">💲 100.0</td>
                <td align="middle">
                  <a class="btn btn-outline-dark" href="/contact">Order Now</a>
                </td>
              </tr>

              <tr>
                <td><b>Point of Sale(POS)</b></td>
                <td>User friendly management system</td>
                <td align="middle">💲 100.0</td>
                <td align="middle">
                  <a class="btn btn-outline-dark" href="/contact">Order Now</a>
                </td>
              </tr>

              <tr>
                <td><b>API</b></td>
                <td>REST API</td>
                <td align="middle">💲 50.0</td>
                <td align="middle">
                  <a class="btn btn-outline-dark" href="/contact">Order Now</a>
                </td>
              </tr>

              <tr>
                <td><b>Search Engine Optimization(SEO)</b></td>
                <td>We will take care of you long time</td>
                <td align="middle">💲 35.0</td>
                <td align="middle">
                  <a class="btn btn-outline-dark" href="/contact">Order Now</a>
                </td>
              </tr>

              <tr>
                <td><b> Graphic Design</b></td>
                <td>Eye catching design</td>
                <td align="middle">💲 35.0</td>
                <td align="middle">
                  <a class="btn btn-outline-dark" href="/contact">Order Now</a>
                </td>
              </tr>
              
            
            </tbody>
          </table>

          <p>
            <b>Note: </b> All packages are customizable, so feel free to <a href="/contact">contact</a> with us.
          </p>
        </div>
          
          

        


      </div>
    </div>
  </div>
</section>

@endsection

@section('js')
  
@endsection