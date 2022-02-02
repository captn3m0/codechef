---
{"category_name":"medium","problem_code":"CHEFPOLY","problem_name":"Chef and Polygons","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"6-02-2016","tags":{"0":"geometry","1":"ltime33","2":"medium","3":"mgch"},"editorial_url":"http://discuss.codechef.com/problems/CHEFPOLY","time":{"view_start_date":1456592400,"submit_start_date":1456592400,"visible_start_date":1456592400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/mandarin/CHEFPOLY.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/russian/CHEFPOLY.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/vietnamese/CHEFPOLY.pdf">Vietnamese</a> as well.</h3>
<p>Chef is not very good with geometric problems, and he, therefore, asks you to solve one of them. He has <b>N</b> red points and <b>M</b> black points, and <b>Q</b> queries on them. In each query, he will give you a subset of red points, you have to find out number of black points lying strictly inside the convex polygon formed by using the given subset as vertices.
</p>
<h3>Input</h3>
<p>The first line of input contains two integers — <b>N</b> and <b>M</b> — denoting the number of red and black points, respectively. The next <b>N</b> lines contain two space-separated integers each denoting the coordinates of red points, with the <b>i</b><sup>th</sup> line describing the <b>i</b><sup>th</sup> point. Analogously, the next <b>M</b> lines contain two space-separated integers each denoting the coordinates of the black points. The next line contain one integer <b>Q</b> denoting the number of polygons. Each of the next <b>Q</b> lines contains a polygon in the form <b>k</b> <b>i<sub>1</sub></b> <b>i<sub>2</sub></b> … <b>i<sub>k</sub></b>. Here, <b>k</b> is the number of vertices of the polygon, and <b>i<sub>1</sub></b>, <b>i<sub>2</sub></b>, …, <b>i<sub>k</sub></b> are the indices of red points which form the polygon, in a clockwise order.
</p>
<h3>Output</h3>
<p>For each query, output a new line containing the answer to it.</p>
<h3>Constraints</h3>
<ul>
<li><b>3</b> ≤ <b>N</b> ≤ <b>10<sup>2</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>3 × 10<sup>3</sup></b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>3</b> ≤ <b>k</b> ≤ <b>N</b></li>
<li>Sum of <b>k</b> over all queries is at most <b>10<sup>6</sup></b></li>
<li>Absolute value of a coordinate of any point is at most <b>10<sup>4</sup></b></li>
<li>No three points lie on the same line</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4 2
0 0
2 0
2 3
0 3
1 1
1 2
3
4 4 3 2 1
3 1 4 2
3 1 3 2

<b>Output:</b>
2
1
1

<b>Input:</b>
9 9
62 73
-66 -27
-14 85
82 19
-42 42
-38 85
-38 44
-11 -55
-46 -9
44 -6
-98 13
-3 97
-61 -34
-70 17
-11 -13
-95 -25
-52 60
12 3
8
4 9 6 3 1
5 2 5 7 1 4
4 2 6 3 4
5 5 6 1 4 8
5 2 5 7 1 8
4 2 6 3 4
3 2 6 8
5 9 5 7 4 8

<b>Output:</b>
0
1
1
3
2
1
0
3

</pre><h3>Subtasks</h3>
<ul>
<li><b>Subtask 1:</b> <b> N </b> = 3. <b>Points - 10</b></li>
<li><b>Subtask 2:</b> <b> N, M </b>≤ 100. <b>Points - 20</b></li>
<li><b>Subtask 3:</b> Sum of <b>k</b> over all queries not be greater than <b>10<sup>5</sup></b>,  <b> M </b>≤ 1000<b> Points - 30</b></li>
<li><b>Subtask 4:</b> Original constraints. <b>Points - 40</b></li>
</ul>
<h3>Explanation</h3>
<ul>
<p>Test #1:<br/><br />
Polygon 1: (0, 0)-(0, 3)-(2, 3)-(2, 0), two black points inside it: (1, 1), (1, 2).<br/><br />
Polygon 2: (0, 0)-(0, 3)-(2, 0), contains one black point inside: (1, 1).<br/><br />
Polygon 3: (0, 0)-(2, 3)-(2, 0), encloses one black point: (1, 1).</br/></br/></br/></p>
</ul>
