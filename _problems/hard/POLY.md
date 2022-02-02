---
{"category_name":"hard","problem_code":"POLY","problem_name":"Polynomials","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"chemthan","problem_tester":null,"date_added":"27-09-2017","tags":{"0":"chemthan","1":"hard","2":"hull","3":"nov17"},"time":{"view_start_date":1510579800,"submit_start_date":1510579800,"visible_start_date":1510579800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/mandarin/POLY.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/russian/POLY.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/vietnamese/POLY.pdf">Vietnamese</a> as well.</h3>

<p>Given <b>n</b> functions <b>y<sub>i</sub>(x) =  a<sub>0</sub>
 + a<sub>1</sub>x + a<sub>2</sub>x<sup>2</sup> + a<sub>3</sub>x<sup>3</sup></b> and <b>q</b> queries. For each query, you are given an integer <b>t</b> and you are required to find out <b>y<sub>i</sub></b> (<b>i ≤ i &le; n</b>) that minimizes the value of <b>y<sub>i</sub>(t)</b>.</p>

<h3>Input</h3>
<p>The first line is an integer <b>T</b> denotes the number of testcases. Each testcase starts with an integer <b>n</b> on a single line, the number of polynomials. The next <b>n</b> lines, each line describes a polynomial contains four integers: <b>a<sub>0</sub> a<sub>1</sub> a<sub>2</sub> a<sub>3</sub></b>. Then a line contains <b>q</b>, the number of queries. Each of the next <b>q</b> lines describes a query by a single integer <b>t</b>.</p>

<h3>Output</h3>
<p>Each query, output the answer on a single line.</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10</b></li>
<li><b>1 ≤ n, q ≤ 10<sup>5</sup></b></li>
<li><b>0 ≤ t ≤ 10<sup>5</sup></b></li>
<li><b>0 ≤ a<sub>3</sub> ≤ 10<sup>3</sup></b></li>
<li><b>0 ≤ a<sub>i</sub> ≤ 10<sup>5</sup></b></li>
<li>sum of <b>n, q</b> over all test cases, each is at most <b>3.10<sup>5</sup></b></li>
</ul>

<h3>Subtasks:</h3>
<ul>
<li>Subtask #1 (10 points): <b>n, q ≤ 10<sup>3</sup></b></li>
<li>Subtask #2 (20 points): <b>a<sub>2</sub> = a<sub>3</sub> =
 0</b></li>
<li>Subtask #3 (70 points): original constrains</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
5
10 5 4 8
2 0 5 0
1 8 0 2
8 7 8 7
7 0 8 1
4
1
3
5
2

<b>Output:</b>
7
47
127
22
</pre>
