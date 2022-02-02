---
{"category_name":"school","problem_code":"CHRL4","problem_name":"Chef and Way","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"furko","problem_tester":"xcwgf666","date_added":"21-01-2014","tags":{"0":"dynamic","1":"easy","2":"furko","3":"ltime08"},"editorial_url":"http://discuss.codechef.com/problems/CHRL4","time":{"view_start_date":1390725000,"submit_start_date":1390725000,"visible_start_date":1390725000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME08/russian/CHRL4.pdf">Russian</a> also.</h3>
<p>After visiting a childhood friend, Chef wants to get back to his home. Friend lives at the first street, and Chef himself lives at the <b>N</b>-th (and the last) street. Their city is a bit special: you can move from the <b>X</b>-th street to the <b>Y</b>-th street if and only if 1 &lt;= <b>Y</b> - <b>X</b> &lt;= <b>K</b>, where <b>K</b> is the integer value that is given to you. Chef wants to get to home in such a way that the product of all the visited streets' special numbers is minimal (including the first and the <b>N</b>-th street). Please, help him to find such a product. </p>
<h3>Input</h3>
<p>The first line of input consists of two integer numbers - <b>N</b> and <b>K</b> - the number of streets and the value of <b>K</b> respectively. The second line consist of <b>N</b> numbers  - <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> respectively, where <b>A<sub>i</sub></b> equals to the special number of the <b>i</b>-th street.</p>
<h3>Output</h3>
<p>Please output the value of the minimal possible product, modulo <b>1000000007</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^5</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10^5</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>N</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4 2
1 2 3 4.

<b>Output:</b>
8

</pre><h3>Scoring</h3>
<p>Subtask 1 (30 points): <b>N</b> &lt;= 80 <br /><br />
Subtask 2 (70 points): See the constraints.</p>
