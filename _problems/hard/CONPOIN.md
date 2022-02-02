---
{"category_name":"hard","problem_code":"CONPOIN","problem_name":"Connect Points","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":null,"date_added":"9-05-2015","tags":{"0":"graph","1":"hard","2":"june15","3":"pavel1996"},"editorial_url":"http://discuss.codechef.com/problems/CONPOIN","time":{"view_start_date":1434360600,"submit_start_date":1434360600,"visible_start_date":1434360600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE15/mandarin/CONPOIN.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE15/russian/CONPOIN.pdf">Russian</a>.</h3>
<p> </p>
<p>One day Leha got bored during his geometry class. But his teacher was very careful so the boy had to pretend that he was solving some geometry problem. At first glance he started drawing some senseless stuff. He marked <b>N</b> pairwise different points on the plane and then connected <b>M</b> pairs of these points by <b>straight-line</b> segments. <b>No 3 points lie on the same line.</b> None of these segments intersect(maybe except at the initial <b>N</b> points). Then Leha tried to draw the <b>M+1-th</b> segment but surprisingly it turned out that it was impossible to connect any pair of points by <b>straight-line</b> segment which wouldn't intersect with any of the previous segments. </p>
<p>Let's enumerate points from <b>1</b> to <b>N</b>. You are given <b>M</b> pairs of integers - numbers of points which are connected by the each straight-line segment. The question is: whether it's possible to choose <b>N</b> points on the Euclidean plane <b>in any way</b> such that they will <b>always</b> fit the situation described above. That is, try to place the given <b>N</b> points and <b>M</b> non-intersecting segments that are given, you will never be able to place <b>M+1</b>th segment.</p>
<p> </p>
<h3>Input</h3>
<p>The first line contains one integer <b>T</b> - the number of test cases. Each test case starts with a line containing two integers <b>N</b> and <b>M</b>. <b>M</b> lines containing a pair of integers each follow describing pairs of points connected by <b>straight-line</b> segments</p>
<h3>Output</h3>
<p>For each test case output a single line containing<b>1</b> if it's possible to find points which will satisfy the problem statement and <b>0</b> otherwise</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>6000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>7*10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>3*10<sup>5</sup></b></li>
<li>sum of all <b>N</b> in one test file doesn't exceed <b>7*10<sup>5</sup></b></li>
<li>no segment connects a point with itself</li>
<li>each pair of points is connected no more than by one segment</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask 1 : 1 ≤ N ≤ 5 : ( 20 pts )</b></li>
<li><b>Subtask 2 : no additional constraints: ( 80 pts )</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 3
1 2
2 3
1 3
3 2
1 3
2 3
4 6
1 2
1 3
1 4
2 3
2 4
3 4

<b>Output:</b>
1
0
1
</pre><p> </p>
<h3>Explanation</h3>
<p> In the first test case we can draw triangle on the plane. Obviously no pair of segments will intersect and we can't add any more straight-line segment(and even not straight-line) so the answer is <b>1</b> </p>
<p>In the second test case we can draw 3 points and connect 1 and 3 and 2 and 3. But we can add one more(1 and 3) so the answer is <b>0</b></p>
<p>In the last test case we can draw a triangle and a point inside it connected to 3 vertexes of the triangle. As in the first test case we can't connect some new pair so the answer is <b>1</b> too.</p>
