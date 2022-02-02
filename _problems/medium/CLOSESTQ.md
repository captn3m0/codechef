---
{"category_name":"medium","problem_code":"CLOSESTQ","problem_name":"Closest points queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"gainullinildar","problem_tester":"lg5293","date_added":"29-04-2017","tags":{"0":"divide","1":"gainullinildar","2":"ltime47","3":"medium","4":"sets","5":"sqrt"},"time":{"view_start_date":1493485200,"submit_start_date":1493485200,"visible_start_date":1493485200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME47/mandarin/CLOSESTQ.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME47/russian/CLOSESTQ.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME47/vietnamese/CLOSESTQ.pdf">Vietnamese</a> as well.</h3>

<p>Consider a set of points in 2D which is initially empty.
You need to process queries which insert and remove points from it.</p>

<p>After each query, you should also print the square of the distance between two closest points in the set.
If there are fewer than 2 points in the set, print 0 instead.</p>
 
<p> It is guaranteed that all the queries are valid — there will be no query of adding a point that is already present in the set or
removing a point which does not exist in the set.</p>


<h3>Input</h3>
 
<p>The first line of the input contains an integer <b>Q</b> denoting the number of queries. </p>

<p>Each of the next <b>Q</b> lines contains one query, which will be one of the following two types:</p>

<ul>
<li>+ x y — add the point (x, y) to the set</li>
<li>- x y — remove the point (x, y) from the set</li>
</ul>
 
<h3>Output</h3>
 
<p>For each query, output a single line containing one integer — the square of the distance between two closest points in the set.</p>
 
 
<h3>Constraints</h3>
 
<ul>
<li>1 ≤ <b>Q</b> ≤ 75,000</li>
<li>1 ≤ <b>x, y</b> ≤ 500</li>
</ul>
 
 
 
<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (10 points): 1 ≤ <b>Q</b> ≤ 100</li>
<li>Subtask #2 (30 points): 1 ≤ <b>Q</b> ≤ 2500 </li>
<li>Subtask #3 (60 points): Original constraints.</li>
</ul>
 
 
 
 
<h3>Example</h3>
 
<pre><b>Input:</b>
6
+ 1 1
+ 2 2
+ 3 3
- 2 2
+ 400 400
- 1 1


<b>Output:</b>
0
2
2
8
8
315218
</pre>
 
 
<h3>Explanation</h3>
 
<p><b>Query 1.</b> There is only 1 point, so the answer is 0 </p>
<p><b>Query 2.</b> There are only 2 points, (1, 1) and (2, 2), so answer is (1 - 2)<sup>2</sup> + (1 - 2)<sup>2</sup>, which equals to 2 </p>
<p><b>Query 3.</b> The points (1, 1) and (2, 2) are one of the closest pairs, and so the answer is still 2 </p>
<p><b>Query 4.</b> There are only 2 points, (1, 1) and (3, 3), and so answer is (1 - 3)<sup>2</sup> + (1 - 3)<sup>2</sup> which equals to 8 </p>
<p><b>Query 5.</b> Points (1, 1) and (3, 3) are still closest, and so answer is 8 </p> 
<p><b>Query 6.</b> There are only 2 points, (3, 3) and (400, 400), and so answer is (3 - 400)<sup>2</sup> + (3 - 400)<sup>2</sup> equals to 
315218 </p>
