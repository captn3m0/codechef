---
{"category_name":"medium","problem_code":"KTHCON","problem_name":"The potato problem","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xellos0","problem_tester":"antoniuk1","date_added":"1-03-2016","tags":{"0":"convex","1":"cook68","2":"geometry","3":"medium","4":"two","5":"xellos0"},"editorial_url":"http://discuss.codechef.com/problems/KTHCON","time":{"view_start_date":1458498600,"submit_start_date":1458498600,"visible_start_date":1458498600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK68/mandarin/KTHCON.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK68/russian/KTHCON.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK68/vietnamese/KTHCON.pdf">Vietnamese</a> as well.</h3>
<p>A <i>1-concave</i> polygon is a <a href="https://en.wikipedia.org/wiki/Simple_polygon">simple polygon</a> (its sides don't intersect or touch) which has at least 1 concave interior angle.</p>
<p>There are <b>N</b> points on a plane. Let <b>S</b> be the maximum area of a 1-concave polygon with vertices in those points. Compute <b>2S</b>. Note that if there is no such (1-concave) polygon, you should print -1.</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> - the number of test cases.</li>
<li>The first line of each test case contains <b>N</b> - the number of points.</li>
<li>Each of the following <b>N</b> lines contains two integers <b>x</b> and <b>y</b> - the coordinates of a point.</li>
</ul>
<h3>Output</h3>
<p>If there's no 1-concave polygon, print -1. Otherwise, print one integer: twice the area of the largest one (it's guaranteed to be an integer under these constraints).</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 100</b></li>
<li><b>3 ≤ N ≤ 10<sup>5</sup></b></li>
<li>No two points coincide (have identical both <b>x</b> and <b>y</b> coordinates).</li>
<li>No three points are collinear.</li>
<li>The sum of <b>N</b> over all test cases won't exceed <b>5·10<sup>5</sup></b>.</li>
<li><b>|x|,|y| ≤ 10<sup>9</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
5
2 2
-2 -2
2 -2
-2 2
0 1
3
0 0
1 0
0 1

<b>Output:</b>
28
-1
</pre>