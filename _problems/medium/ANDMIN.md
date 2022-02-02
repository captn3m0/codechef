---
{"category_name":"medium","problem_code":"ANDMIN","problem_name":"Range Minimum Queries ","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"mgch","date_added":"13-06-2016","tags":{"0":"bitwise","1":"cook71","2":"kingofnumbers","3":"medium","4":"segment"},"editorial_url":"http://discuss.codechef.com/problems/ANDMIN","time":{"view_start_date":1466965800,"submit_start_date":1466965800,"visible_start_date":1466965800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK71/mandarin/ANDMIN.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK71/russian/ANDMIN.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK71/vietnamese/ANDMIN.pdf">Vietnamese</a> as well.</h3>
<p>You are given an array of <b>N</b> integers. You should support the following queries on this array.</p>
<ul>
<li><b>0 L R</b> : Find the minimum integer in the range <b>A<sub>L</sub>, A<sub>L+1</sub>, ..., A<sub>R</sub></b>.</li>
<li><b>1 L R X</b> :  You should apply the assignment <b>A[i] = A[i] &amp; X</b>, for all indices <b>i</b> in range <b>[L, R]</b>, where <b>&amp;</b> denotes bitwise AND operation.</li>
</ul>

<h3>Input</h3>
<p>First line of the input contains two space separated integers <b>N</b> and <b>Q</b>.</p>
<p>Second line contains <b>N</b> integer numbers denoting array <b>A</b>.</p>
<p>In the next <b>Q</b> lines, each contain one of the queries described above.</p>
<h3>Output</h3>
<p>For each query of the type <b>0</b>, output  a single line containing the answer of the query.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b>, <b>X</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>N</b> </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>5 5
1 5 2 3 4
0 2 5
1 1 5 6
0 2 2
1 2 5 3
0 1 3
</tt>
<b>Output:</b>
<tt>2
4
0</tt>
</pre>