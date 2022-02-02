---
{"category_name":"medium","problem_code":"SEAGCD2","problem_name":"Sereja and GCD 2","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"kevinsogo","date_added":"25-10-2014","tags":{"0":"combinatorics","1":"dynamic","2":"may16","3":"number","4":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEAGCD2","time":{"view_start_date":1463391000,"submit_start_date":1463391000,"visible_start_date":1463391000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/mandarin/SEAGCD2.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/russian/SEAGCD2.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/vietnamese/SEAGCD2.pdf">Vietnamese</a> as well.</h3>
<p>
Sereja asks you to find out number of arrays <b>A</b> of size <b>N, i.e. A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub> (1 ≤ A<sub>i</sub> ≤ M)</b>, such that for each pair <b>i, j (1 ≤ i &lt; j ≤ N) gcd(A<sub>i</sub>, A<sub>j</sub>) = 1.</b>
</p>
<p>
As the answer could be large, print it modulo <b>10<sup>9</sup> + 7 (1000000007)</b>.
</p>
<h3>Input</h3>
<p>
First line of the input contain an integer <b>T</b> - number of test cases.
</p>
<p><b>T</b> tests follow. First line of each test case contain two space separated integers <b>N, M</b>.
</p>
<h3>Output</h3>
<p>
For each test case output required answer modulo <b>10^9 + 7</b>.
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 10 </b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b> 10<sup>5</sup> </b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b> 100 </b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask #1: (10 points, TL = 5 secs) <b>1</b> ≤ <b>N, M</b> ≤ <b> 10 </b></li>
<li>Subtask #2: (25 points, TL = 5 secs) <b>1</b> ≤ <b>N</b> ≤ <b> 100 </b></li>
<li>Subtask #3: (65 points, TL = 5 secs) <b>original</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
1 1
3 3

<b>Output:</b>
1
13

</pre>