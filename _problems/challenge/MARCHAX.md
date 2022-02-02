---
{"category_name":"challenge","problem_code":"MARCHAX","problem_name":"Place the mines!","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"TCL","41":"kotlin","42":"PERL6","43":"TEXT","44":"SCM chicken","45":"CLOJ","46":"COB","47":"FS"},"max_timelimit":0.434783,"source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"19-03-2009","tags":{"0":"admin"},"time":{"view_start_date":1237966798,"submit_start_date":1237966798,"visible_start_date":1237966798,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p><strong>The following problem appeared in the <a href="http://www.codechef.com/MARCH09/">CodeChef March '09 Challenge.</a></strong></p>

<p><strong>The following a tie breaker problem.  The best answer will receive one point.  All other successful answers will be scored on a curve and receive a fraction of a point based on how close they come to the best answer.</strong></p>

<p>You are given a large square area with an edge length of 2<sup><var>n</var></sup>, subdivided into unit squares (fields). Some mines have already been planted on certain fields, and we would like to plant as few more mines as possible, so as to destroy all of the fields of the area (assuming all the mines explode simultaneously). For each mine, the fields it destroys are given as follows. For any <var> k </var>,  0 <= <var> k </var> <= <var>n</var>, we can partition the considered area into 2<sup><var>n</var></sup> rectangles of size 2<sup><var>k</var></sup> x 2<sup><var>n-k</var></sup>. The mine is assumed to destroy a square if and only if the mine and the square belong to the same rectangle in the considered partition, for some value of <var>k</var>.
<p>For example, if <var>n</var>=3, the mine "*" placed on the square at position (1,1) will destroy all the fields which are not marked with dots below:

<pre><tt>
.#......
.#......
.#......
.#......
##......
##......
#*######
####....
</tt></pre>

<h3>Input</h3>
<p>The first line will contain integer 8<=<var>n</var><=16, (where 2<sup><var>n</var></sup> is the size of the area). The second line will contain 0<=m<2<sup><var>n</var></sup>, the number of already planted mines.
The next <var>m</var> lines will contain the 0-based x and y coordinates of the existing mines.

<h3>Output</h3>
<p>The first line should contain <var>t</var> - the number of mines to be added.
The next <var>t</var> lines should contain the coordinates of the added mines.

<h3>Scoring</h3>
For each test case, you will receive (2<sup><var>n</var></sup>-<var>m</var>)/<var>t</var>-1 points, provided you destroy all the fields of the area.

<h3>Example</h3>

<pre>
<b>Input:</b>
2
1
3 3

<b>Output:</b>
2
0 1
2 2
</pre>
<p>
You will receive (4-1)/2 - 1 = 0.5 pts for such a mine placement.  

<p><b>Note:</b>
There will be some tests with no initially placed mines, and some tests with initial placements covering most of the area pretty well. Good luck!