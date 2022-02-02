---
{"category_name":"medium","problem_code":"NWAYS","problem_name":"Number of Ways ","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"amitpandeykgp","problem_tester":"xcwgf666","date_added":"4-05-2015","tags":{"0":"amitpandeykgp","1":"combinatorics","2":"easy","3":"ltime24"},"editorial_url":"http://discuss.codechef.com/problems/NWAYS","time":{"view_start_date":1433061000,"submit_start_date":1433061000,"visible_start_date":1433061000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME24/mandarin/NWAYS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME24/russian/NWAYS.pdf">Russian</a>.</h3>
<p>
Devu is learning Combinatorics in his college. He find it very interesting to calculate number of ways of going to point <b>(c,d)</b> from point <b>(a,b)</b> in co-ordinate plane. We can take horizontal and vertical steps only and can not visit at a point twice. In a step, you can move one unit only. We have to reach to the point <b>(c,d)</b> from the point <b>(a,b)</b> using <b>abs(a-c)+ abs(b-d)</b> steps only.
</p>
<p>
Devu has two sets of points. Set <b>A</b> contains points having <b>X</b> co-ordinate <b>0</b> and <b>Y</b> co-ordinates varying from <b>1</b> to <b>N</b>(both inclusive). Set <b>B</b> contains points having <b>X</b> co-ordinate <b>K</b> and <b>Y</b> co-ordinates varying from <b>1</b> to <b>N</b>(both inclusive).  Both sets contains <b>N</b> number of integral points. He wants to calculate the sum of number of ways to going to the each point of set <b>B</b> from the each point of set <b>A</b> .
</p>
<p>
As the answer can be large, print it modulo <b>1000000007</b>.
</p>
<h3>Input</h3>
<ul>
<li>First line of input contains an integer <b>T</b> denoting number of test cases.  </li>
<li> Next <b>T</b> lines will contain pair of integers <b>N</b> and <b>K</b></li>
<h3>Output</h3>
<p>For each test case, print a single integer representing the answer of that test case.</p>
<h3>Constraints</h3>
<p>
<b>Subtask #1: 10 points</b></p>
<ul>
<li><b>1 ≤ T  ≤ 20, 1 ≤ N ,K ≤ 1000</b></li>
</ul>

<p>
<b>Subtask #1: 10 points</b></p>
<ul>
<li><b>1 ≤ T  ≤ 20, 1 ≤ N ,K ≤ 10<sup>6</sup></b></li>
</ul>

<p>
<b>Subtask #3: 80 points</b></p>
<ul>
<li><b>1 ≤ T  ≤ 10000, 1 ≤ N,K  ≤ 10<sup>6</sup></b></li>
</ul>

<h3>Example</h3>
<p><pre><b>Input:</b>
2
2 2
4 5

<b>Output:</b>
8
236
</pre></p>
<h3>Explanation</h3>
<p>
For the first sample case,<br /><br />
ways[(0,1)->(2,1)]= 1<br /><br />
ways[(0,2)->(2,2)]= 1<br /><br />
ways[(0,1)->(2,2)]= 3<br /><br />
ways[(0,2)->(2,1)]= 3<br /><br /></p>
<p><b>So, the total number of ways = 8.</b>
</p>
</ul>