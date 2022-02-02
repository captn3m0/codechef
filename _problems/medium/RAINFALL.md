---
{"category_name":"medium","problem_code":"RAINFALL","problem_name":"Rain vs City","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"utkarsh_lath","problem_tester":null,"date_added":"7-07-2016","tags":{"0":"utkarsh_lath"},"time":{"view_start_date":1468063200,"submit_start_date":1468063200,"visible_start_date":1468063200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/mandarin/RAINFALL.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/russian/RAINFALL.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/vietnamese/RAINFALL.pdf">Vietnamese</a> as well.</h3>
<p>
You are given an <b>n*m</b> matrix <b>A</b>. <b>A[1][1]</b> is the top-left cell, and <b>A[n][m]</b> is the bottom-right cell. You want to fill a matrix <b>B[n][m]</b> using the following pseudo code. All the entries of matrix <b>B</b> are zero initially.
</p>
<p>
<code>randomInt(a, b)</code> returns an uniform random integer between a and b (both inclusive). That is, all the b-a+1 integers have an equal probability of being returned.
</p>
<pre>
<code>
For x = 1 to n:
  For y = 1 to m:
    I = randomInt(1, x)
    J = randomInt(1, y)
    K = randomInt(x, n)
    L = randomInt(y, m)
    Consider the rectangle formed by (I, J) as top-left and (K, L) as 
    right-bottom cell. Add A[x][y] to every cell in the B matrix which
    is within this rectangle.
    This means B[p][q] += A[x][y] if I &lt;= p &lt;= K and J &lt;= q &lt;= L.
</code>
</pre>
<p>
A city is constructed, which has <b>n * m</b> houses. The house located at <b>(i, j)</b> has height <b>B[i][j]</b> above sea level. After <b>X</b> amount of rainfall, all houses whose height is less than or equal to <b>X</b> are submerged in water.
</p>
<p>
Note than in the above construction, the heights of houses inside the city are not constant, but vary based on outcome of the previous algorithm.
</p>
<p>
You have to answer <b>Q</b> queries, where each query is defined by an integer <b>k</b> (<b>0 &lt; k &lt; n * m</b>). You have to find the smallest integer <b>X</b>, so that if there is <b>X</b> amount of rainfall, expected number of houses submerged in water are at least <b>k</b>.
</p>
<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.
</p>
<p>The first line of each test case contains three integers, <b>n, m</b> and <b>Q</b>.</p>
<p>The next <b>n</b> lines contain <b>m</b> space separated integers each, denoting the initial matrix <b>A</b>.</p>
<p>The next <b>Q</b> lines have one integer each, the query parameter <b>k</b>.</p>
<h3>Output</h3>
<p>For each test case, for each query, output a single line containing the smallest value of integer <b>X</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1 ≤ n,m ≤ 20</b></li>
<li><b>1 ≤ A[i][j] ≤ 5</b></li>
<li><b>1 ≤ Q ≤ 400</b></li>
<li><b>0 &lt; k &lt; n*m</b> </li>
<li>The sum of <b>n*m</b> for all test cases in a single file does not exceed 500 </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
1 2 1
2 3
1

<b>Output:</b>
3
</pre><h3>Explanation</h3>
<p>
These are the following possible values of B:</p>
<pre>
2 3

5 3

2 5

5 5
</pre><p>
All these four values of <b>B</b> appear with same probability, 1/4. The expected number of houses submerged when X = 3 is (2 * 1/4 + 1 * 1/4 + 1 * 1/4 + 0 * 1/4) = 1.<br />
if rainfall is less than 3, then the expected number of submerged houses is less than 1.<br />

</p>
