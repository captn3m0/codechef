---
{"category_name":"easy","problem_code":"CHPLGNS","problem_name":"Chef and Polygons","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":null,"date_added":"27-02-2015","tags":{"0":"antoniuk1","1":"cakewalk","2":"geometry","3":"june15","4":"sorting"},"editorial_url":"http://discuss.codechef.com/problems/CHPLGNS","time":{"view_start_date":1434360600,"submit_start_date":1434360600,"visible_start_date":1434360600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE15/mandarin/CHPLGNS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE15/russian/CHPLGNS.pdf">Russian</a>.</h3>
<p>Chef has <b>N</b> <a href="http://en.wikipedia.org/wiki/Simple_polygon">simple polygons</a> (non self intersecting polygons) in which no two of them intersect with each other. For any two polygons <b>P<sub>1</sub>, P<sub>2</sub></b>, either <b>P<sub>1</sub></b> lies inside <b>P<sub>2</sub></b> or vice versa. </p>
<p>Chef wants you to count number of polygons lying strictly inside each of the polygons.</p>
<h3>Input</h3>
<p>First line of the input contains an integer <b>T</b> denoting the number of test cases. First line of each test case contains a single integer <b>N</b> denoting the number of polygons.</p>
<p>The description of <b>N</b> polygons is as follows:
<ul>
<li>The first line contains an integer <b>M<sub>i</sub></b> denoting the number of vertices in the <b>i<sup>th</sup></b> polygon</li>
<li>The second line contains <b>M<sub>i</sub></b> pairs of integers <b>X<sub>i, j</sub>, Y<sub>i, j</sub></b> representing coordinates of vertices of <b>i<sup>th</sup> </b> polygon in clockwise or counterclockwise order</li>
</ul>
</p>
<h3>Output</h3>
<p>For each test case, output a single line containing <b>N</b> space-separated integers such that <b>i<sup>th</sup></b> of them represents number of polygons lying inside the <b>i<sup>th</sup></b> polygon.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5<sup></sup></sup></b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>10<sup>5<sup></sup></sup></b></li>
<li><b>3</b> ≤ <b>M<sub>i</sub></b> ≤ <b>10<sup>5</sup></b></li>
<li>The sum of <b>M<sub>i</sub></b> (or total amount of given points) over all test cases in one test file does not exceed <b>2*10<sup>5</sup></b></li>
<li>Absolute value of each coordinate doesn't exceed <b>10<sup>9</sup></b></li>
</ul>
<p><br/><br />
<b>Subtask 1: (10 points)</b></br/></p>
<ul>
<li><b>T</b> ≤ <b>6</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>10</b></li>
<li><b>3</b> ≤ <b>M<sub>i</sub></b> ≤ <b>10</b></li>
<li>Absolute value of each coordinate doesn't exceed <b>30</b></li>
</ul>
<p> <br />
<b>Subtask 2: (20 points)</b></p>
<ul>
<li>All polygons are <a href="http://en.wikipedia.org/wiki/Convex_polygon" > convex polygons </a>.</li>
</ul>
<p> <br />
<b>Subtask 3: (70 points)</b></p>
<ul>
<li>Original constraints</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
3
6
-2 2 -1 1 2 2 2 -1 1 -2 -2 -2
3
-1 -1 1 -1 1 1
4
3 3 -3 3 -3 -3 3 -3
<b>Output:</b>
1 0 2
</pre><h3>Explanation</h3>
<p>
In the picture the first polygon is marked in <font color="green">green</font>, second - in <font color="red">red</font> and third in <font color="blue">blue</font> color.
</p>
<p><img src="http://www.codechef.com/download/JUNE15/CHPLGNS.jpg" width="500" height="500" alt="explanation" /> </p>
