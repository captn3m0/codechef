---
{"category_name":"medium","problem_code":"CHEFHOME","problem_name":"A Home for Chef","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"rosyish","problem_tester":"subra","date_added":"9-04-2012","tags":{"0":"may12","1":"medium","2":"rosyish"},"editorial_url":"http://discuss.codechef.com/problems/CHEFHOME","time":{"view_start_date":1336723732,"submit_start_date":1336723732,"visible_start_date":1336728600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Our hardworking chef is bored of sleeping in his restaurants. He has decided to settle down. The first thing he must do is to find a suitable location to build a palatial home.
</p>
<p>
Think of the city as a two-dimensional grid. There are <b> N </b> restaurants in the city. Each of the chef's restaurant is a point denoted by (<b>X</b> , <b>Y</b>). A <b>house</b> can be located at a grid point (<b>R</b>, <b>S</b>)  if the sum of the distances between this point and each of the restaurants is as small as possible. Find the number of possible house locations in the city to help out chef build a home.
</p>
<p>
More than one restaurant can be located at the same point. <br />
Houses and restaurants can be located at the same point. <br />
Every house must have integer co-ordinates. In other words, <b>R</b> and <b>S</b> are integers. <br />
The distance between two points (A,B) and (C,D)  is |A-C| + |B-D|. Here |X| is the absolute function. 
</p>
<h3>Input</h3>
<p>
First line in the input contains <b>T</b>, number of test cases. <br />
First line of each test case contains <b>N</b>, number of restaurants.<br />
Each of the next <b>N</b> lines contain two integers <b>X</b> and <b>Y</b> separated by a space.
</p>
<p>
<b>T</b> &lt;= 100 <br />
<b> N </b> &lt;= 10^3 <br />
-10^8 &lt;= <b>X</b> &lt;=10^8 <br />
-10^8 &lt;= <b>Y</b> &lt;=10^8 
</p>
<h3>Output</h3>
<p>
The number of possible locations (grid points) where houses can be built.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
5
0 0
-1 0
1 0
0 1
0 -1
5
31 11
30 -41
20 14
25 18
25 38
2
0 0
1 1

<b>Output:</b>
1
1
4
</pre>