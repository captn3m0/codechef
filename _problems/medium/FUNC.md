---
{"category_name":"medium","problem_code":"FUNC","problem_name":"Chef and Functions","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"viv001","problem_tester":"shiplu","date_added":"8-01-2014","tags":{"0":"binary","1":"june14","2":"medium","3":"number","4":"viv001"},"editorial_url":"http://discuss.codechef.com/problems/FUNC","time":{"view_start_date":1402911000,"submit_start_date":1402911000,"visible_start_date":1402911000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/mandarin/FUNC.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/russian/FUNC.pdf">Russian</a>.</h3>
<p> Chef has just been introduced to functions and he has been experimenting a lot with the different kinds of functions. In the process, the chef has come up with an interesting problem for you. </p>
<p> Chef defines a function <b> root(i, x) </b> which gives the greatest integer less than or equal to the <b> i <sup>th</sup> </b> root of a positive integer <b> x </b>. For example, <b> root(2, 4) </b> is  <b> 2 </b> and <b> root(2, 2) </b> is <b> 1 </b>.  </p>
<p> Now the chef defines another function <b> val(x, A, N) </b> as follows : <br/> <br/></br/></br/></p>
<p><b> val(x, A, N) =  root(1, x)*A[1]  +  root(2, x)*A[2] +  ...  + root(N, x)*A[N] </b> <br/> <br/></br/></br/></p>
<p>where <b> A </b> is an array of integers of size <b> N </b> (indexed from 1 onwards)  and <b> x </b> is a positive integer.
</p>
<p> You are given the array <b> A </b> and its size <b> N </b>. You need to find out the value of <b> val(x, A, N) </b> for several values of <b> x </b>. Since this number can be very large, print the result modulo <b> 10<sup>9</sup> + 7 </b>.
</p>
<h3>Input</h3>
<p> The first line contains an integer <b>T</b> denoting the number of test cases. Each test case begins with a line containing two integers <b>N</b> and <b> Q </b> denoting the size of array <b>A</b> and the number of queries. The second line of each test case consists of <b>N</b> space separated integers where the <b>i<sup>th</sup></b> integer represents <b>A[i]</b>. The third line of each test case consists of <b>Q</b> space separated integers denoting the value of <b> x </b> for the <b>i<sup>th</sup></b> query.
</p>
<h3>Output</h3>
<p> For each test case, print in a single line <b> Q </b> integers, where the <b>i<sup>th</sup></b> integer represents the answer to the <b>i<sup>th</sup></b>  query. ( i.e <b> val(x, A, N) % ( 10<sup>9</sup> + 7 ) </b> )
</p>
<h3>Constraints</h3>
<ul>
<li><b> 1 </b>≤  <b>T</b> ≤ <b>  10 </b></li>
<li><b> 1 </b> ≤ <b> N</b>  ≤ <b> 10<sup>4</sup> </b></li>
<li><b> 1 </b> ≤ <b> Q</b>  ≤ <b> 15000</b></li>
<li><b> -10<sup>9</sup> </b> ≤ <b> A[i] </b>  ≤ <b> 10<sup>9</sup> </b></li>
<li><b> 1 </b> ≤ <b> x </b>  ≤ <b> 10<sup>18</sup> </b>  for each number in the query. </li>
</ul>
<p><br/></br/></p>
<h3>Example</h3>
<pre><b>Input:</b>
1
3 2
4 5 6
8 30
<br/>
<b>Output:</b>
54 163
<br/>
</br/></br/></pre><h3>Explanation</h3>
<p><b>Query 1.</b><br/><br />
<b> (root(1,8)*4 + root(2,8)*5 + root(3,8)*6) % 1000000007 = (8*4 + 2*5 + 2*6) % 1000000007 = 54 % 1000000007 = 54 <br/><br />
 </br/></b>
 </br/></p>
<p><b>Query 2.</b><br/><br />
<b> (root(1,30)*4 + root(2,30)*5 + root(3,30)*6) % 1000000007 = (30*4 + 5*5 + 3*6) % 1000000007 = 163 % 1000000007 = 163 <br/><br />
 </br/></b>
</br/></p>
