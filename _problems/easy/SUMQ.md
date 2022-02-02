---
{"category_name":"easy","problem_code":"SUMQ","problem_name":"Triplets","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vipsharmavip","problem_tester":null,"date_added":"17-05-2017","tags":{"0":"vipsharmavip"},"time":{"view_start_date":1497259800,"submit_start_date":1497259800,"visible_start_date":1497259800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/mandarin/SUMQ.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/russian/SUMQ.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/vietnamese/SUMQ.pdf">Vietnamese</a> as well.</h3>

<p>Given a triplet of integers (X , Y , Z), such that X ≤ Y and Y ≥ Z, we define f(X , Y , Z) to be (X + Y) * (Y + Z). If either X > Y or Y &lt; Z, or both, then f(X , Y , Z) is defined to be 0.</p>

<p>You are provided three arrays <b> A , B</b> and <b>C </b>  of any length (their lengths may or may not be equal).  </p>
<p>Your task is to find the sum of f(X , Y , Z) over all triplets (X, Y , Z) where  <b> X, Y</b> and <b>Z </b> belong to <b> A</b>, <b>B</b> and <b>C</b> respectively.</p>
<p> Output your sum for each test case modulo <b>1000000007</b>.</p> 

<h3>Input</h3>
<ul>
<li>The first line contains a single integer, <b>T</b>, which is the number of test cases. The description of each testcase follows:</li>
<li>The first line of each testcase contains <b>3</b> integers: <b>p, q</b> and <b>r</b>. These denote the lengths of <b>A</b>,<b>B</b> and <b>C</b> respectively. </li>
<li>The second line contains <b>p</b> integers, which are the elements of <b>A</b></li>
<li>The third line contains <b>q</b> integers, which are the elements of <b>B</b></li>
<li>The fourth line contains <b>r</b> integers, which are the elements of <b>C</b></li>
</ul>

<h3>Output</h3>
<p> Output the required sum modulo <b> 1000000007 </b> for each test case in a new line.</p>

<h3>Constraints</h3>
<ul>
  <li>1 ≤ <b>T</b> ≤ 10 </li>
  <li>1 ≤ <b>p</b>, <b>q</b>, <b>r</b> ≤ 100000 </li>
  <li>1 ≤ every array element ≤ 1000000000</li>
</ul>

<h3>Subtasks  </h3>
<ul>
  <li>Subtask #1 (30 points): 1 ≤ <b>p</b>,<b>q</b>,<b>r</b>  ≤ 100 </li>
  <li>Subtask #2 (70 points): 1 ≤<b> p</b>,<b>q</b>,<b>r</b>  ≤ 100000 </li>
</ul>

<h3>Example : </h3>
<pre><b>Input:</b>
1 
3 1 3
1 2 3
5
4 5 6

<b>Output:</b>
399
</pre>

<h3>Explanation: </h3>
<p> As there is only one choice for Y which equals to 5, to get a non-zero function value,we can choose any element for X from the set { 1 , 2 , 3 } and for Z from the set { 4  , 5 } </p> 
<p>So triplets which give non-zero function values are: </p> 
<p> { 1 , 5  , 4 } :  ( 1 + 5 ) * ( 5 + 4 )  = 54 </p>
<p>{ 1 , 5  , 5 } :  ( 1 + 5 ) * ( 5 + 5 )  = 60 </p>
<p>{ 2 , 5  , 4 } :  ( 2 + 5 ) * ( 5 + 4 )  = 63 </p>
<p>{ 2 , 5  , 5 } :  ( 2 + 5 ) * ( 5 + 5 )  = 70 </p>
<p>{ 3 , 5  , 4 } :  ( 3 + 5 ) * ( 5 + 4 )  = 72 </p>
<p>{ 3 , 5  , 5 } :  ( 3 + 5 ) * ( 5 + 5 )  = 80 </p>
<p>Final answer : 54 + 60 + 63 + 70 + 72 + 80  = 399 </p>  