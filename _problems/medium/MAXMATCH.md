---
{"category_name":"medium","problem_code":"MAXMATCH","problem_name":"Maximum Matching","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"amitpandeykgp","problem_tester":"xcwgf666","date_added":"20-04-2015","tags":{"0":"amitpandeykgp","1":"combinatorics","2":"dynamic","3":"ltime24","4":"medium"},"editorial_url":"http://discuss.codechef.com/problems/MAXMATCH","time":{"view_start_date":1433061000,"submit_start_date":1433061000,"visible_start_date":1433061000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME24/mandarin/MAXMATCH.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME24/russian/MAXMATCH.pdf">Russian</a>.</h3>
<p>
Devu is very frustrated with the following problem. So, he wants your help in solving it.
</p>
<p>
Given a set: <b> S = {1,2,3,....,N}</b>
</p>
<p>
Make a bipartite graph having partites <b>X</b> and <b>Y</b>. Partite <b>X</b> will contain all permutations of Set <b>S</b>. Partite <b>Y</b> will contain all strings of length <b>(N-1)</b>  having characters <b>‘I’</b> and <b>‘D’</b> only. Note that number of vertices in partite <b>X</b> will be <b>N!</b> and <b>2<sup>(N-1)</sup></b> in partite <b>Y</b>.
</p>
<p>
 Consider a vertex <b>x</b> in partite <b>X</b> and a vertex <b>y</b> in partite <b>Y</b>.
</p>
<p>
string <b>y</b> will be signature of permutation <b>x</b> if :
</p>
<p>
<b><br />
y[i] = ‘I’  => x[i] &lt; x[i+1]  &amp;& y[i] = ‘D’ => x[i] > x[i+1] …. for all i from 0 to N-2.<br />
</b>
</p>
<p>
There will be an edge between permutation <b>x</b> and string <b>y</b> if string <b>y</b> is the signature of the permutation <b>x</b> and weight of the edge will be the square of the inversion count in permutation <b>x</b>.
</p>
<p>
You need to find the maximum weighted matching in the given bipartite graph. As the answer can be very large, print it modulo <b>M</b>.
</p>
<h3>Input</h3>
<ul>
<li>First line of the input contains integers <b>T</b>, denoting the number of test cases and <b>M</b>.  </li>
<li>Next <b>T</b> lines will be containing the value of <b>N</b></li>
</ul>
<h3>Output</h3>
<p>For each test case, print a single integer representing the answer of that test case.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>2 ≤ M  ≤ 10<sup>9</sup></b></li>
</ul>
</p>
<p>
<b>Subtask #1: 8 points</b></p>
<ul>
<li><b>1 ≤ T  ≤ 20, 2 ≤ N  ≤8.</b></li>
</ul>

<p>
<b>Subtask #2: 22 points</b></p>
<ul>
<li><b>1 ≤ T  ≤ 20, 2 ≤ N ≤ 15.</b></li>
</ul>

<p>
<b>Subtask #3: 70 points</b></p>
<ul>
<li><b>1 ≤ T  ≤ 20, 2 ≤ N  ≤ 2000 </b></li>
</ul>

<h3>Example</h3>
<p><pre><b>Input:</b>
2 1007
2
3

<b>Output:</b>
1
17
</pre></p>
<h3>Explanation</h3>
<p>
<b>For N=3, graph can be shown as below:</b>
</p>
<p>
<img src="/download/extimages/e0e32ec8077fe8a8e8a759c8d8f5d9eb.jpg" alt="Mountain View" style="width:380px;height:450px" width=600 /></p>
