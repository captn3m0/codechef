---
{"category_name":"hard","problem_code":"SPMATRIX","problem_name":"Count Special Matrices","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":0.666,"source_sizelimit":50000,"problem_author":"anton_lunyov","problem_tester":"tuananh93","date_added":"21-04-2013","tags":{"0":"anton_lunyov","1":"combinatorics","2":"hard","3":"june13"},"editorial_url":"http://discuss.codechef.com/problems/SPMATRIX","time":{"view_start_date":1371462303,"submit_start_date":1371462303,"visible_start_date":1371460885,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Let <b>N ≥ 3</b> be a fixed positive integer.<br/> Further, let <b>A[1..N][1..N]</b> be <b>N × N</b> integer matrix.<br/> The <b>y</b>-th element in the <b>x</b>-th row will be denoted as <b>A[x][y]</b>.<br/> This matrix is called <b><i>special</i></b> if it satisfies the following conditions:</br/></br/></br/></p>
<ul>
<li><b>A[x][x] = 0</b> for <b>1 ≤ x ≤ N</b>.</li>
<li><b>A[x][y] = A[y][x] > 0</b> for <b>1 ≤ x &lt; y ≤ N</b>.</li>
<li><b>A[x][y] ≤ max(A[x][z], A[z][y])</b> for <b>1 ≤ x, y, z ≤ N</b>.</li>
<li><b>A[x][y] ∈ {1, 2, ..., N − 2}</b> for <b>1 ≤ x &lt; y ≤ N</b>.</li>
<li>For each <b>k ∈ {1, 2, ..., N − 2}</b> there exist <b>x, y ∈ {1, 2, ..., N}</b> such that <b>A[x][y] = k</b>.</li>
</ul>

<p>
For example,</p>
<pre><code>0 1 1
1 0 1
1 1 0
</code></pre><p>
</p>
<p>
is the only special matrix of order <b>3</b>.
</p>
<p>
The following matrices of order 3 are not special:</p>
<pre><code>1 1 1    0 1 0    0 1 2
1 0 1    1 0 1    1 0 1
1 1 0    1 1 0    2 1 0
</code></pre><p>
</p>
<p>
The first one violates the first condition, the second one - the second condition, the third one - the third condition (as well as the fourth condition).
</p>
<p>
It can be verified that there are <b>13</b> special matrices of order <b>4</b> in all.<br/> The full list of special matrices of order <b>4</b> looks as follows:</br/></p>
<pre><code>0 1 2 2    0 2 1 2    0 2 2 2    0 1 1 2    0 2 2 1    0 2 2 1    0 2 2 2
1 0 2 2    2 0 2 2    2 0 1 2    1 0 1 2    2 0 2 2    2 0 1 2    2 0 2 1
2 2 0 2    1 2 0 2    2 1 0 2    1 1 0 2    2 2 0 2    2 1 0 2    2 2 0 2
2 2 2 0    2 2 2 0    2 2 2 0    2 2 2 0    1 2 2 0    1 2 2 0    2 1 2 0

0 2 1 2    0 1 2 1    0 2 2 2    0 1 2 2    0 2 1 1    0 2 2 2
2 0 2 1    1 0 2 1    2 0 2 2    1 0 2 2    2 0 2 2    2 0 1 1
1 2 0 2    2 2 0 2    2 2 0 1    2 2 0 1    1 2 0 1    2 1 0 1
2 1 2 0    1 1 2 0    2 2 1 0    2 2 1 0    1 2 1 0    2 1 1 0
</code></pre><p>
</p>
<p>Your task is simple. For the given <b>N</b> count overall number of special matrices of order <b>N</b>.<br/> Since the answer could be extremely large output it modulo <b>10<sup>9</sup> + 7 = 1000000007</b>.</br/></p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases.<br/> The description of <b>T</b> test cases follows.<br/> The only line of each test case contains a single integer <b>N</b>.</br/></br/></p>
<h3>Output</h3>
<p>For each test case output the overall number of special matrices of order <b>N</b> modulo <b>1000000007</b> on the separate line.</p>
<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100000</b> (<b>10<sup>5</sup></b>)</li>
<li><b>3</b> ≤ <b>N</b> ≤ <b>10000000</b> (<b>10<sup>7</sup></b>)</li>
</ul>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
3
4
10

<b>Output:</b>
1
13
719666144
</pre><h3>Explanation</h3>
<p>
Example cases 1 and 2 are explained above.
</p>
