---
{"category_name":"medium","problem_code":"AX","problem_name":"Place the mines!","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"FORT","15":"FS","16":"GO","17":"HASK","18":"ICK","19":"ICON","20":"JAVA","21":"JS","22":"LISP clisp","23":"LISP sbcl","24":"LUA","25":"NEM","26":"NICE","27":"NODEJS","28":"PAS fpc","29":"PAS gpc","30":"PERL","31":"PHP","32":"PIKE","33":"PRLG","34":"PYTH","35":"PYTH 3.4","36":"RUBY","37":"SCALA","38":"SCM guile","39":"SCM qobi","40":"ST","41":"TCL","42":"TEXT","43":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"1-12-2008","tags":{"0":"admin"},"time":{"view_start_date":1367924921,"submit_start_date":1367924921,"visible_start_date":1367924777,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p><strong>The following a tie breaker problem.  The best answer will receive one point.  All other successful answers will be scored on a curve and receive a fraction of a point based on how close they come to the best answer.</strong></p>

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