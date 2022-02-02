---
{"category_name":"medium","problem_code":"MDIST","problem_name":"Devu and Manhattan Distance","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"amitpandeykgp","problem_tester":"xcwgf666","date_added":"21-04-2015","tags":{"0":"amitpandeykgp","1":"easy","2":"ltime24","3":"segment"},"editorial_url":"http://discuss.codechef.com/problems/MDIST","time":{"view_start_date":1433061000,"submit_start_date":1433061000,"visible_start_date":1433061000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME24/mandarin/MDIST.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME24/russian/MDIST.pdf">Russian</a>.</h3>
<p>
Devu has taken the course of computational geometry in the university of Coderpur. He liked this course very much. Today, he got to know about the Manhattan distance and got an assignment for the same topic. Manhattan distance between two points <b>(x<sub>1</sub>,y<sub>1</sub>)</b> and <b>(x<sub>2</sub>,y<sub>2</sub>)</b> can be defined as:
</p>
<p>
<b><br />
Manhattan Distance = abs(x<sub>1</sub>-x<sub>2</sub>) + abs(y<sub>1</sub>-y<sub>2</sub>)<br />
</b>
</p>
<p>
Devu has N points in the Co-ordinate plane. Co-ordinate of <b>i<sup>th</sup></b> point is <b>(x<sub>i</sub>,y<sub>i</sub>)</b>. Points are indexed from <b>0</b> to <b>(N-1)</b>(both inclusive).
</p>
<p>
He has <b>Q</b> updates or queries, for each update <b>U[i, x,y]</b>, change the co-ordinate of <b>i<sup>th</sup></b> point to <b>(x,y)</b>.
</p>
<p>
For each query <b>[L,R]</b>, find pair of points whose indices are between <b>L</b> and <b>R</b>(both inclusive) , such that Manhattan distance between them is maximized. Report the maximum Manhattan distance for each of the query. </p>
<p>
Devu has to submit the assignment on the Monday, so help him in solving the problem.
</p>
<h3>Input</h3>
<ul>
<li>First line of the input will contain an integer <b>N</b> denoting the number of the points in Cartesian plane.  </li>
<li>Next <b>N</b> lines will be containing the co-ordinates of the <b>N</b> points.</li>
<li>Next line will contain an integer <b>Q</b> denoting the number of the queries.  </li>
<li>Next <b>Q</b> lines will be containing character <b>'Q'</b>  followed by pair of indices for each of the query or  <b>'U'</b> followed by value of <b>i,x</b> and <b>y</b> for the update. </li>
</ul>
<h3>Output</h3>
<p>For each query, print a single integer representing the answer of that query.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>0 ≤  L  ≤  R  ≤  N-1 </b></li>
<li><b>-10<sup>9</sup> ≤  x,y  ≤  10<sup>9</sup> </b></li>
</ul>
</p>
<p>
<b>Subtask #1: 20 points</b></p>
<ul>
<li><b> 1 ≤ N,Q ≤1000.</b></li>
</ul>

<p>
<b>Subtask #3: 80 points</b></p>
<ul>
<li><b>1 ≤ N,Q  ≤ 10<sup>5</sup> </b></li>
</ul>

<h3>Example</h3>
<p><pre><b>Input:</b>
4
10 10
10 20
20 20
20 10
2
U 1 20 20
Q 0 3

<b>Output:</b>
20
</pre></p>
<h3>Explanation</h3>
<p>
After first updates points will be:<br /><br />
10 10<br /><br />
20 20<br /><br />
20 20<br /><br />
20 10<br /><br />
So, maximum Manhattan distance will be between points <b>(10,10)</b> and <b>(20,20)</b>, which will be <b>20</b>.
</p>
