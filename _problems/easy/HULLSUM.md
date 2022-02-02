---
{"category_name":"easy","problem_code":"HULLSUM","problem_name":"Hull Sum","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":null,"date_added":"20-06-2017","tags":{"0":"errichto"},"time":{"view_start_date":1498908900,"submit_start_date":1498908900,"visible_start_date":1498908900,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKFL17/mandarin/HULLSUM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL17/russian/HULLSUM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL17/vietnamese/HULLSUM.pdf">Vietnamese</a> as well.</h3>

<p>Chef prepares the following problem for a programming contest:</p>

<p><i>You are given <b>N</b> points with integer coordinates (-1000 ≤ x<sub>i</sub>, y<sub>i</sub> ≤ 1000).
No two points collide and no three points are collinear.
For each of the 2<sup><b>N</b></sup>-1 non-empty subsets of points, find the size (the number of points) of its convex hull.
Print the sum of those sizes.</i></p>

<p>Chef has already prepared some tests for his problem, including a test with the maximum possible answer.
He now needs a test with a quite small answer (but not necessarily the minimum possible one).
For given <b>N</b>, your task is to find any valid set of <b>N</b> points for which the answer doesn't exceed 4 * 10<sup>15</sup> (4,000,000,000,000,000).</p>

<h3>Input</h3>

<p>The only line of the input contains a single integer <b>N</b>, denoting the number of points.</p>

<h3>Output</h3>

<p>Print exactly <b>N</b> lines.
The i-th line should contain two integers x<sub>i</sub> and y<sub>i</sub>, denoting coordinates of the i-th point.</p>

<p>The printed set of points must satisfy all the given conditions. At least one such set exists for every <b>N</b> allowed by the constraints given below.</p>

<p>Note: Remember that you don't print <b>N</b> in the first line.</p>


<h3>Constraints</h3>
<ul>
<li>2 ≤ <b>N</b> ≤ 50</b>
</ul>



<h3>Example</h3>

<pre>
<b>Input:</b>
5

<b>Output:</b>
-150 150
150 150
-150 -150
150 -150
11 13
</pre>



<h3>Explanation</h3>

<p>Let's analyze sizes of convex hulls for the provided output.
There are 2<sup>5</sup>-1 non-empty sets of points.</p>

<ul>
<li>There are 5 sets of points that consist of only 1 point each.
The convex hull of each of those sets has size 1.</li>
<li>Similarly, 10 sets of points consist of 2 points each, and the size of each of their convex hulls is 2.</li>
<li>Similarly, there are 10 sets with 3 points each, and the size of each of their convex hulls is 3.</li>
<li>The set with points (-150, -150), (-150, 150), (150, 150), (11, 13) has a convex hull of size 3. You can note that the point (11, 13) is inside the triangle formed by the other three points.</li>
<li>The set with points (-150, 150), (150, 150), (150, -150), (11, 13) has a convex hull of size 3 as well.</li>
<li>There are 3 other sets with 4 points, and for each of them the convex hull has size 4.</li>
<li>Finally, the set with all 5 points has a convex hull of size 4.</li>
</ul>

<p>The sum of sizes of convex hulls is (5 * 1) + (10 * 2) + (10 * 3) + 3 + 3 + (3 * 4) + 4 = 5 + 20 + 30 + 6 + 12 + 4 = 77, which obviously doesn't exceed 4 * 10<sup>15</sup>.</p>