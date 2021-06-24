@extends('Layouts.Single-Post.Single-Post')
@section('SEO')
<title>Important MySQL short notes PDF for beginners 2021</title>
<meta name="description" content="Learning SQL (Structured Query Language) is so easy for beginners if they use short note pdf. In this post, we will learn some important MySQL short notes with pdf.">
<meta name="keywords" content="SQL notes for beginners,MySQL basics,mysql tutorial pdf,sql short notes pdf for interview and Exam">
<meta property="og:title" content="Important MySQL short notes pdf for beginners 2021" />
<meta property="og:description" content="Learning SQL (Structured Query Language) is so easy for beginners if they use short note pdf. In this post, we will learn some important MySQL short notes with pdf." />
<meta property="og:url" content="{{route('Single_Post_7')}}" />
<meta property="og:image" content="https://www.admin.insidethediv.com/assets/img/post/post_9-23-06-2021-11-33-54pm.gif" />
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
<h1 data-id="3" id="post-title">Important MySQL short notes PDF for beginners 2021</h1>
<ul class="post-info">
   <li>Last Updated : 24/06/2021</li>
</ul>
<p class="first-paragraph">
   Learning SQL (Structured Query Language) is so easy for beginners if they use short note pdf. In this post, we will learn some important MySQL short notes with pdf.
</p>
<div class="py-3 text-center">
   <img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_9-23-06-2021-11-33-54pm.gif" alt="MySQL short notes PDF">
   <br>
   <br>
   <a class="btn btn-danger" href="{{route('Download.Page',['id'=>9,'title'=>'important-MySQL-short-notes-PDF-for-beginners'])}}" class="btn btn-danger">Download MySQL short notes PDF</a>
</div>
<div class="pt-3">
   <h2>Some Important MySQL Topic For Interview.</h2>
   <p>
      In this MySQL tutorial, we will learn some most important topics for interviews. For beginners the basic topic of MySQL is important. That's why we will focus on the basic topic.
   </p>
   <br>
   <div class="row">
      <div class="col-lg-6 col-12">
         <ul class="pl-3">
            <li>✅ MySQL Create</li>
            <li>✅ MySQL Insert</li>
            <li>✅ MySQL Select</li>
            <li>✅ MySQL Where</li>
            <li>✅ MySQL Update</li>
            <li>✅ MySQL Delete</li>
            <li>✅ MySQL Limit</li>
            <li>✅ MySQL AND, OR, NOT</li>
            <li>✅ MySQL Aggregate Function</li>
            <li>✅ MySQL Like</li>
            <li>✅ MySQL IN</li>
         </ul>
      </div>
      <div class="col-lg-6 col-12">
         <ul class="pl-3">
            <li>✅ MySQL BETWEEN</li>
            <li>✅ MySQL Order By</li>
            <li>✅ MySQL NULL Value</li>
            <li>✅ MySQL Group By</li>
            <li>✅ MySQL Having</li>
            <li>✅ MySQL EXISTS</li>
            <li>✅ MySQL Aliases</li>
            <li>✅ MySQL Case</li>
            <li>✅ MySQL Join</li>
            <li>✅ MySQL Union</li>
            <li>✅ MySQL INSERT INTO SELECT</li>
            <li>✅ MySQL Comment</li>
         </ul>
      </div>
   </div>
</div>
{{-- end div --}}
<div class="pt-3">
   <h3>Is MySQL keywords are case sensitive?</h3>
   <p class="pl-4">
      <small>✍</small>  No, MySQL keywords are not case-sensitive. <b>insert</b> and <b>INSERT</b> are the same. <br>
      <small>✍</small>  But writing Upper-case is best practice.
   </p>
   <div class="pl-4">
      <pre class="bg-dark text-light p-2 mt-2">
INSERT INTO students(id,name,age,phone) VALUES(6,'Noman',16,'016349823xx') 

insert into students(id,name,age,phone) values(6,'Noman',16,'016349823xx')
</pre>
      <small>Both queries are the same and valid.</small>
   </div>
</div>
{{-- end div --}}


<div class="pt-3">
   <h3>Is semicolon mandatory after the MySQL statement?</h3>
   <p class="pl-4">
      <small>✍</small>  The semicolon is not mandatory after the MySQL statement.<br>
      <small>✍</small>  But to run multiple queries at the same time we need to use semicolons to separate each of them.
   </p>
   <div class="pl-4">
      <pre class="bg-dark text-light p-2 mt-2">
INSERT INTO students(id,name,age,phone) VALUES(6,'Noman',16,'016349823xx')
</pre>
      <small>No need semicolon(;) because we run only a single query.</small>
      <pre class="bg-dark text-light p-2 mt-2">
INSERT INTO students(id,name,age,phone) VALUES(6,'Noman',16,'016348823xx');
INSERT INTO students(id,name,age,phone) VALUES(7,'Arafat',20,'016339823xx');
INSERT INTO students(id,name,age,phone) VALUES(8,'Kamrul',19,'016345823xx');
INSERT INTO students(id,name,age,phone) VALUES(9,'Monju',17,'014345823xx')
</pre>
      <small>We need a semicolon(;) because we run multiple queries at the same time.</small>
   </div>
</div>
{{-- end div --}}


<div class="pt-3">
   <h3>MySQL CREATE Statement.</h3>
   <p class="pl-4">
      <small>✍</small> SQL CREATE Statement is used to create a Database.<br>
      <small>✍</small> SQL CREATE Statement is used to create a Table.<br>
   </p>
   <div class="pl-4">
      <pre class="bg-dark text-light p-2 mt-2">
CREATE DATABASE student_db
</pre>
      <small>This query will create a database(name: student_db).</small>
      <pre class="bg-dark text-light p-2 mt-2">
CREATE TABLE students (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
age INT(6),
phone VARCHAR(30) NOT NULL
)
</pre>
      <small>This query will create a table(name: students).</small>
      <p>😍 Learn More<a class="text-primary" href="#">The Best way of creating a table in MySQL.</a></p>
   </div>
</div>
{{-- end div --}}




<div class="pt-3">
   <h3>MySQL INSERT Statement.</h3>
   <div class="pl-4">
      <p>
         <small>✍</small> The SQL INSERT statement is used to insert data into the database.<br>
         <small>✍</small> We don't need to use column name when we INSERT data, if Table columns order and given data order are the same and We provide all columns value.<br>
         <small>✍</small> Insert query return true or false. If data INSERT success it will return true, Else it will return false.<br>
      <div class="table-responsive-sm">
         <b>Suppose we have a students table.</b>
         <table class="table table-bordered">
            <thead>
               <tr align="center">
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Age</th>
                  <th scope="col">Phone</th>
               </tr>
            </thead>
            <tbody>
               <tr align="center">
                  <td>1</td>
                  <td>Nasir</td>
                  <td>20</td>
                  <td>01637019XX</td>
               </tr>
               <tr align="center">
                  <td>2</td>
                  <td>MIM</td>
                  <td>17</td>
                  <td>01637069XX</td>
               </tr>
               <tr align="center">
                  <td>3</td>
                  <td>SAJIB</td>
                  <td>19</td>
                  <td>01633019XX</td>
               </tr>
               <tr align="center">
                  <td>4</td>
                  <td>Imam</td>
                  <td>20</td>
                  <td>01437019XX</td>
               </tr>
               <tr align="center">
                  <td>5</td>
                  <td>Arafat</td>
                  <td>18</td>
                  <td>01237019XX</td>
               </tr>
            </tbody>
         </table>
      </div>
      <pre class="bg-dark text-light p-2 mt-2">
INSERT INTO students(id,name,age,phone) VALUES (6,'Noman',16,'016349823xx');
</pre>
      <small>This query will insert a new student.</small> <br>
      <pre class="bg-dark text-light p-2 mt-2">
INSERT INTO students VALUES(6,'Noman',16,'016349823xx');
</pre>
      <small>This query will insert a new student.</small> <br>
      </p>
   </div>
</div>
{{-- end div --}}



<div class="pt-3">
   <h3>MySQL SELECT Statement.</h3>
   <div class="pl-4">
      <p>
         <small>✍</small> SELECT Statement is used to fetch data from the database.<br>
         <small>✍</small> To Fetch all columns we need to yous * sign. (* = All).<br>
         <small>✍</small> We can also specify which column we want to fetch.<br>
      <pre class="bg-dark text-light p-2 mt-2">
SELECT * FROM students
</pre>
      <small>This query will fetch all columns from the 'students' table.</small>
      <pre class="bg-dark text-light p-2 mt-2">
SELECT name,email,phone FROM students
</pre>
      <small>This query will fetch only name, email, and phone columns from the 'students' table.</small>
      </p>
   </div>
</div>
{{-- end div --}}



<div class="pt-3">
   <h3>MySQL WHERE Statement.</h3>
   <div class="pl-4">
      <p>
         <small>✍</small> Where close use to define the condition in SQL statement.<br>
         <small>✍</small> We can fetch data Conditionally.<br>
         <small>✍</small> It works like the "if" condition.<br>
      <pre class="bg-dark text-light p-2 mt-2">
SELECT * FROM students WHERE age > 18
</pre>
      <small>This query will fetch all students whose age is greater than 18.</small>
      </p>
   </div>
</div>
{{-- end div --}}


<div class="pt-3">
   <h3>MySQL UPDATE Statement.</h3>
   <div class="pl-4">
      <p>
         <small>✍</small> UPDATE Statement used to update record.<br>
         <small>✍</small> When we use update statements we need to use conditions with where close.<br>
         <small>✍</small> If we don’t use where close properly all records will update automatically.<br>
         <small><b>Don't do like this</b></small>
      <pre class="bg-dark text-light p-2 mt-2">
UPDATE students SET age = 19
</pre>
      <small>This query will update all student's records.</small> <br>
      <small><b>Do like this</b></small>
      <pre class="bg-dark text-light p-2 mt-2">
UPDATE students SET age = 19 WHERE id = 5
</pre>
      <small>This query will update only the 5th id's student.</small>
      </p>
   </div>
</div>
{{-- end div --}}



<div class="pt-3">
   <h3>MySQL DELETE Statement.</h3>
   <div class="pl-4">
      <p>
         <small>✍</small> UPDATE Statement used to Delete record.<br>
         <small>✍</small> When we use delete statements we need to use conditions with where clause.<br>
         <small>✍</small> If we don't use the where clause properly all records will delete automatically.<br>
         <small><b>Don't do like this</b></small>
      <pre class="bg-dark text-light p-2 mt-2">
DELETE FROM students;
</pre>
      <small>This query will Delete all student's records.</small> <br>
      <small><b>Do like this</b></small>
      <pre class="bg-dark text-light p-2 mt-2">
DELETE FROM students WHERE id = 5
</pre>
      <small>This query will delete only the 5th id's student.</small>
      </p>
   </div>
</div>
{{-- end div --}}



<div class="pt-3">
   <h3>MySQL LIMIT Statement.</h3>
   <div class="pl-4">
      <p>
         <small>✍</small> We can use the LIMIT statement to specify how many records we want to fetch from the table.<br>
         <small>✍</small> Also, we can specify FROM which record fetching will start.<br>
      <pre class="bg-dark text-light p-2 mt-2">
SELECT * FROM students LIMIT 5;
</pre>
      <small>This query return 5 records.</small> <br>
      <pre class="bg-dark text-light p-2 mt-2">
SELECT * FROM students LIMIT 3, 8;
</pre>
      <small>This query will fetch 8 records FROM the 4th row to the 11th row.</small>
      </p>
   </div>
</div>
{{-- end div --}}



<div class="pt-3">
   <h3>MySQL AND, OR, NOT Statement.</h3>
   <div class="pl-4">
      <p>
         <small>✍</small> we can use MySQL AND, OR, NOT conditions with WHERE clause like this.<br>
      <pre class="bg-dark text-light p-2 mt-2">
SELECT * FROM students WHERE age > 18 AND age < 21
</pre>
      <small>This query returns all students whose age is greater than 18 and less than 21.</small> <br>
      <pre class="bg-dark text-light p-2 mt-2">
SELECT * FROM students WHERE age > 18 OR size > 6
</pre>
      <small>This query returns all students whose age is greater than 18 and size greater than 6.</small>
      <pre class="bg-dark text-light p-2 mt-2">
SELECT * FROM students WHERE NOT class = 10 
</pre>
      <small>This query returns all students whose class not 10.</small>>
      </p>
   </div>
</div>
{{-- end div --}}



<div class="pt-3">
   <h3>MySQL MySQL Aggregate functions.</h3>
   <div class="pl-4">
      <p>
         <small>✍</small> MySQL Aggregate functions are so important topic.<br>
         <small>✍</small> In general, we have five Aggregate functions.<br>
      <ul class="pl-4">
         <li><small>📌 1.</small> COUNT() <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small>⬆</small>This function will count all
            rows.
         </li>
         <li><small>📌 2.</small> MAX() <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small>⬆</small>This function will return the maximum value from all rows.</li>
         <li><small>📌 3.</small> MIN() <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small>⬆</small>This function will return the maximum value from all rows.</li>
         <li><small>📌 4.</small> AVG() <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small>⬆</small>This function will return the average value from all rows.</li>
         <li><small>📌 5.</small> SUM() <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small>⬆</small>This function will return the summation value from all rows.</li>
      </ul>
      </p>
      <p>😍 Learn <a class="text-primary" href="#">MySQL Aggregate functions with example.</a></p>
   </div>
</div>
{{-- end div --}}



<div class="pt-3">
	<h3>MySQL LIKE Statement.</h3>
	<div class="pl-4">
	   <p>
	      <small>✍</small> To create search features we can use MySQL LIKE statement.<br>
	      <small>✍</small> For pattern matching, we need to use MySQL LIKE Statement.<br>
	      <small>✍</small> The SQL LIKE statements is so important topic in the database. you can do so many different things using this LIKE statement.<br>
	      <small>✍</small> SQL LIKE statement is so important for Interview and EXAM.<br>
<pre class="bg-dark text-light p-2 mt-2">
SELECT * FROM students WHERE name LIKE "%keyword%"
</pre>
<small>This query will return all records if in the name our keyword is present at any place.</small> <br>
	   </p>
	   <p>😍 Learn <a class="text-primary" href="#">MySQL LIKE statement with a real-life example.</a></p>
	</div>
</div>
{{-- end div --}}


<div class="pt-3">
   <h3>MySQL Wildcard Characters.</h3>
   <div class="pl-4">
      <p>
         <small>✍</small> We use Wildcard Characters with LIKE statements.<br>
         <small>✍</small> MySQL has 2 wildcard Characters percentages and underscores ( % and _ ).<br>
         <small>✍</small> Percentage(%) represents zero or more characters.<br>
         <small>✍</small> Underscores( _ ) represents a single character.<br>
      </p>
      <p>😍 Learn <a class="text-primary" href="#">Use of MySQL wildcard characters with an example.</a></p>
   </div>
</div>
{{-- end div --}}


<div class="pt-3">
	<h3>MySQL IN Statement.</h3>
	<div class="pl-4">
	   <p>
	      <small>✍</small> Using MySQL IN operator we can use multiple values in where close condition. It works like this OR operator.<br>
	      <small>✍</small> MySQL IN operator works like PHP in_array() function.<br>
<pre class="bg-dark text-light p-2 mt-2">
SELECT * FROM students WHERE age IN (17,18,19,20);
</pre>
<small>This query will return all records if the age is 17,18,19, or 20.</small> <br>
	   </p>
	</div>
</div>
{{-- end div --}}



<div class="pt-3">
	<h3>MySQL BETWEEN Statement.</h3>
	<div class="pl-4">
	   <p>
	      <small>✍</small> TO select data FROM a range we can use MySQL BETWEEN operator.<br>
	      <small>✍</small> MySQL BETWEEN operator works like >= and <=. That means it includes the condition values.<br>
<pre class="bg-dark text-light p-2 mt-2">
SELECT * FROM students WHERE age BETWEEN 18 AND 20
</pre>
<small>This query will return all records if the age is 18,19, or 20.</small> <br>
	   </p>
	</div>
</div>
{{-- end div --}}



<div class="pt-3">
	<h3>MySQL ORDER BY Statement.</h3>
	<div class="pl-4">
	   <p>
	      <small>✍</small> TO sort data we can use ORDER BY and ASC(ascending), DSC (descending)keyword.<br>
	      <small>✍</small> Using this ODER BY keyword you can <a class="text-primary" href="#">nth maximum</a> or  <a class="text-primary" href="#">nth minimum</a> records easily.<br>
	   <pre class="bg-dark text-light p-2 mt-2">
	SELECT * FROM students ORDER BY age ASC
	</pre>
	   <small>This query will return all records in ascending order according to age.</small> <br>
	   <pre class="bg-dark text-light p-2 mt-2">
	SELECT * FROM students ORDER BY age DSC
	</pre>
	   <small>This query will return all records in descending order according to age.</small> <br>
	   </p>
	</div>
</div>
{{-- end div --}}




<div class="pt-3">
	<h3>MySQL NULL Value</h3>
	<div class="pl-4">
	   <p>
	      <small>✍</small> A NULL value means no value.<br>
	      <small>✍</small> NULL value and zero(0) value are not the same.<br>
	      <small>✍</small> We can not use conditional operator(<,<,=,!) to check NULL value.<br>
	      <small>✍</small> TO check NULL value we need to use IS NULL or IS NOT a NULL statement.<br>
<pre class="bg-dark text-light p-2 mt-2">
SELECT * FROM students where name IS NOT NULL
</pre>
<small>This query will return true or false.</small>
	   </p>
	</div>
</div>
{{-- end div --}}


<div class="pt-3">
	<h3>MySQL GROUP BY Statement.</h3>
	<div class="pl-4">
	   <p>
	      <small>✍</small> Using MySQL Group BY statement we can fetch row BY Group-wise.<br>
	      <small>✍</small> Most of the time we use MySQL Group Statement with our Aggregate functions.<br>
	      <small>✍</small> We can use multiple column names in the MySQL Group BY Statement.<br>
<pre class="bg-dark text-light p-2 mt-2">
SELECT count(*) AS total, name, age
FROM students 
GROUP BY name, age;
</pre>
<small>This query will return students name and age Group-wise.</small>
		</p>
	</div>
</div>
{{-- end div --}}



<div class="pt-3">
	<h3>MySQL HAVING Statement.</h3>
	<div class="pl-4">
	   <p>
	      <small>✍</small> Technically the MySQL WHERE and HAVING is the same but We can not use WHERE statements with the Aggregate function that’s why we need to use HAVING close.<br>
<pre class="bg-dark text-light p-2 mt-2">
SELECT COUNT(age) AS Total, Name
FROM Students
GROUP BY age
HAVING COUNT(age) > 17;
</pre>
<small>This query will return total students age name Group-wise age where total age greater than 17</small>
	   </p>
	</div>
</div>
{{-- end div --}}
<div class="pt-3">
	<h3>MySQL EXISTS Statement.</h3>
	<div class="pl-4">
	   <p>
	      <small>✍</small> MySQL EXISTS Operator used with a subquery.<br>
	      <small>✍</small> It returns true or false, if data exists it returns true of not return false.<br>
	      <small>✍</small> MySQL EXISTS is so powerful when we need to run complex queries.<br>
	   </p>
	</div>
</div>
{{-- end div --}}



<div class="pt-3">
	<h3>MySQL Aliases Statement.</h3>
	<div class="pl-4">
	   <p>
	      <small>✍</small> Using MySQL Aliases we can create a temporary name of our table and columns.<br>
	      <small>✍</small> To create Aliase we need to use MySQL AS Statement.<br>
	      <small>✍</small> To run complex query we need to use Aliases.<br>
<pre class="bg-dark text-light p-2 mt-2">
SELECT SUM(age) AS Total_AGE FROM students;
</pre>
<small>This query will return the total age as the Total_Age column name.</small>
	   </p>
	   <p>😍 Learn <a class="text-primary" href="#">MySQL Aliases with an example.</a></p>
	</div>
</div>
{{-- end div --}}



<div class="pt-3">
	<h3>MySQL CASE Statement.</h3>
	<div class="pl-4">
	   <p>
	      <small>✍</small> To select data based on multiple conditions we can use MySQL CASE statement.<br>
	      <small>✍</small> MySQL CASE Statement work like an if-else condition.<br>
	      <small>✍</small> MySQL CASE Statement works like a switch case.<br>
	      <small>✍</small> MySQL CASE Statement is so useful topic for Interviews.<br>
	   </p>
	   <p>😍 Learn <a class="text-primary" href="#">MySQL Case Statement with an Example.</a></p>
	</div>
</div>
{{-- end div --}}


<div class="pt-3">
	<h3>MySQL JOIN Query</h3>
	<div class="pl-4">
	   <p>
	      <small>✍</small> MySQL joins are used to fetch data FROM multiple tables.<br>
	      <small>✍</small> MySQL joins is one of the main topics in relational databases.<br>
	      <small>✍</small> MySQL CASE Statement works like a switch case.<br>
	      <small>✍</small> In general, there are four types of joins present in MySQL.<br>
	   <ul class="pl-4">
	      <li>📌 INNER JOIN</li>
	      <li>📌 LEFT JOIN</li>
	      <li>📌 RIGHT JOIN</li>
	      <li>📌 CROSS JOIN</li>
	   </ul>
	   </p>
	   <p>😍 Must Learn <a class="text-primary" href="#">How MySQL JOIN statements work.</a></p>
	</div>
</div>
{{-- end div --}}


<div class="pt-3">
	<h3>MySQL UNION Operator</h3>
	<div class="pl-4">
	   <p>
	      <small>✍</small> In general, the MySQL UNION Statement works like the union of mathematics.<br>
	      <small>✍</small> MySQL Union is one of the important topics for interviews and exams.<br>
	   </p>
	   <p>😍 Must Learn <a class="text-primary" href="#">How MySQL Union Statement work?</a></p>
	</div>
</div>
{{-- end div --}}


<div class="pt-3">
	<h3>MySQL INSERT INTO SELECT Statement</h3>
	<div class="pl-4">
	   <p>
	      <small>✍</small> To create a table based on another table we can use MySQL INSERT INTO SELECT statement.<br>
	      <small>✍</small> INSERT INTO SELECT is so important for Interview and EXAM.<br>
	   </p>
	   <p>😍 Must Learn <a class="text-primary" href="#">MySQL INSERT INTO SELECT statement with an example.</a></p>
	</div>
</div>
{{-- end div --}}


<div class="pt-3">
	<h3>MySQL Comments</h3>
	<div class="pl-4">
	   <p>
	      <small>✍</small> Like other programming languages, MySQL has also comment features.<br>
	      <small>✍</small> MySQL Comments is so useful and important for exam and interview.<br>
	      <small>✍</small> Single line comment -- this is a comment.<br>
	      <small>✍</small> Multi-line comment /* this is multi-line comment */.<br>
	      <small>✍</small> We can please comments inside the MySQL Query. <br>
	   </p>
<pre class="bg-dark text-light p-2 mt-2">
SELECT name, phone FROM students; --this is a single-line comment
</pre>
<small>This is an example of a single-line comment.</small>
<pre class="bg-dark text-light p-2 mt-2">
SELECT name, phone FROM students;
/*
This is 
multi-line comment
*/
</pre>
<small>This is an example of a multi-line comment.</small>
<pre class="bg-dark text-light p-2 mt-2">
SELECT name, /*age,*/ phone FROM students;
</pre>
<small>This query will return only the name and phone from the students table.</small>
	</div>
</div>
{{-- end div --}}
@endsection
{{-- end post content --}}
@section('code')
<br>
<br>
 <a class="btn btn-danger" href="{{route('Download.Page',['id'=>9,'title'=>'important-MySQL-short-notes-PDF-for-beginners'])}}" class="btn btn-danger">Download MySQL short notes PDF</a>
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