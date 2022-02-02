---
{"category_name":"medium","problem_code":"BALANPOL","problem_name":"Chef and Balanced Polygons","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"animesh_f","date_added":"25-11-2016","tags":{"0":"admin2","1":"dynamic","2":"geometry","3":"ltime42"},"editorial_url":"https://discuss.codechef.com/problems/BALANPOL","time":{"view_start_date":1480181400,"submit_start_date":1480181400,"visible_start_date":1480181400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME42/mandarin/BALANPOL.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME42/russian/BALANPOL.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME42/vietnamese/BALANPOL.pdf">Vietnamese</a> as well.</h3>

<p>You are given a <a href="https://en.wikipedia.org/wiki/Convex_polygon">convex polygon</a> consisting of <b>n</b> vertices in 2-D plane. You are also given <b>m</b> points, each colored in either red or blue.</p>

<p>A convex polygon is called <i>w00t</i>, if the number of red and blue colored points inside this (inside or on the boundary) are equal.</p>

<p>You want to find number of <i>w00t</i> convex polygons whose vertices are a subset of the vertices of the given convex polygon.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of the test cases.</p>
<p>The first line of each test case will contain two space separated integers <b>n, m</b> denoting the number of points on the convex polygon, and number of the colored points, respectively.</p>
<p>In the next <b>n</b> lines, each line contains two space separated integers <b>x, y</b> denoting the x and y coordinates of the points of convex polygon. The points of the convex polygon are given to you in anticlockwise order. It is guaranteed that no three points on the convex polygon are collinear.</p>
<p>In the next <b>m</b> lines, each line contains three space separated integers <b>x, y, c</b>, where <b>x, y</b> denotes the x and y coordinates of the colored points, and <b>c</b> denotes the color of the point. If <b>c = 0</b>, the point is red colored, where if <b>c = 1</b>, point is blue colored..</p>

<h3>Output</h3>
<p>For each test case, output a single integer corresponding to the number of <i>w00t</i> convex polygons whose vertices are subset of the given convex polygon.</p>

<h3>Constraints </h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
<li><b>1</b> ≤ <b>n, m</b> ≤ <b>50</b></li>
<li><b>n</b> ≥ <b>3</b></li>
<li><b>-10<sup>6</sup></b> ≤ <b>|x<sub>i</sub>, y<sub>i</sub>|</b> ≤ <b>-10<sup>6</sup></b></li>
<li>In the given <b>m</b> points, two or more points might coincide.</li>
</ul>

<h3>Subtasks</h3>

<p>
<b>Subtask #1: (15 points)</b>
<ul>
<li><b>1</b> ≤ <b>n, m</b> ≤ <b>12</b></li>
</ul>
</p>

<p>
<b>Subtask #2: (20 points)</b>
<ul>
<li>Each of the <b>m</b> points has same coordinates as that of some vertices of the convex polygon.</li>
<li>All the colored points have different coordinates.</li>
</ul>
</p>

<p>
<b>Subtask #3: (25 points)</b>
<ul>
<li>Each of the <b>m</b> points has same coordinates as that of some vertices of the convex polygon.</li>
</ul>
</p>

<p>
<b>Subtask #4: (40 points)</b>
<ul>
<li>Original Constraints</li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
2
4 4
0 0
1 0
1 1
0 1
0 0 0
1 0 1
1 1 0
0 1 1
6 6
-1 1
0 0
1 0
2 1
1 2
0 2
-1 1 0
0 0 1
1 0 0
2 1 1
1 2 0 
0 2 1

<b>Output:</b>
1
10
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> The entire rectangle is <i>w00t</i>.</p>