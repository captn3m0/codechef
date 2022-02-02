---
{"category_name":"medium","problem_code":"POINPOLY","problem_name":"Points Inside A Polygon","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"r_64","date_added":"24-01-2018","tags":{"0":"admin2","1":"constructive","2":"convex","3":"feb18","4":"medium"},"editorial_url":"https://discuss.codechef.com/problems/POINPOLY","time":{"view_start_date":1518427800,"submit_start_date":1518427800,"visible_start_date":1518427800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/mandarin/POINPOLY.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/russian/POINPOLY.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/vietnamese/POINPOLY.pdf">Vietnamese</a> as well.</h3>

<p>You are given a <a href="https://en.wikipedia.org/wiki/Convex_polygon">convex polygon</a> with <b>N</b> vertices.</p>

<p>You have to find any ⌊<b>N</b>/10⌋ distinct points with integer coordinates that lie <b>strictly inside</b> the polygon, or determine that such a set of points doesn't exist.</p>

<p><i>Note:</i> ⌊⌋ denotes the <a href="https://en.wikipedia.org/wiki/Floor_and_ceiling_functions">floor function</a>, typically used in integer division.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of vertices of the polygon.</li>
<li>The following <b>N</b> lines describe the vertices of the polygon in <a href="https://en.wikipedia.org/wiki/Clockwise">anticlockwise order</a>. Each of these lines contains two space-separated integers <b>x</b> and <b>y</b> denoting the coordinates of one vertex.</li>
</ul>

<h3>Output</h3>
<p>For each test case, if a valid set of points doesn't exist, print a single line containing the integer -1. Otherwise, print ⌊<b>N</b>/10⌋ lines. Each of these lines should contain two space-separated integers denoting the coordinates of one point.</p>

<p>The coordinates of all points should be integers with absolute value not exceeding 10<sup>9</sup>. If there are multiple solutions, you may print any one.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10<sup>5</sup></li>
<li>10 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>sum of <b>N</b> over all test cases ≤ 5 · 10<sup>5</sup></li>
<li><b>|x|</b>, <b>|y|</b> ≤ 10<sup>9</sup></li>
<li>no three vertices of the polygon will be collinear</li>
</ul>

<h3>Subtasks</h3>

<p><b>Subtask #1 (30 points)</b>: 1 ≤ <b>T</b> ≤ 100, 10 ≤
 <b>N</b> ≤ 100</p>

<p><b>Subtask #2 (70 points)</b>: original constraints</p>

<h3>Example</h3>
<pre>
<b>Input</b>

1
11
0 0
1 1
2 3
2 5
0 10
-2 10
-5 9
-8 7
-8 4
-6 1
-2 0

<b>Output</b>

0 1
</pre>

<h3>Explanation</h3>

<p><b>Example case 1:</b> The polygon is shown in the picture:

<img src="https://discuss.codechef.com/upfiles/poinpoly_axUFPiA.png" height="300"/></p>

<p>You are required to output exactly ⌊<b>N</b>/10⌋ = ⌊11/10⌋ = 1 point.</p>

<p>One possible point that you can output is (0, 1). You can also output (0, 2), (-1, 3) or (1, 3).</p>

<p>However, (0, 0) is a wrong answer, because this point lies on the border of the convex polygon.</p>

<p>If you output (-1, -1), that's also a wrong answer, because this point lies outside the convex polygon. You can't output (1.1, 1.5) either, because it doesn't have integer coordinates, though it lies strictly inside the polygon.</p>
