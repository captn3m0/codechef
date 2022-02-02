---
{"category_name":"easy","problem_code":"CPERM","problem_name":"Count Permutations","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"darkshadows","problem_tester":"xcwgf666","date_added":"18-04-2014","tags":{"0":"combinatorics","1":"darkshadows","2":"easy","3":"fast","4":"nov16"},"editorial_url":"http://discuss.codechef.com/problems/CPERM","time":{"view_start_date":1479115800,"submit_start_date":1479115800,"visible_start_date":1479115800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/mandarin/CPERM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/russian/CPERM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/vietnamese/CPERM.pdf">Vietnamese</a> as well.</h3>

<p>Given <b>N</b>, count how many permutations of <b>[1, 2, 3, ..., N]</b> satisfy the following property.<br/></p>

<p<</p>

<p>
Let <b>P<sub>1</sub>, P<sub>2</sub>, ..., P<sub>N</sub></b> denote the permutation. The property we want to satisfy is that there exists an <b>i</b> between <b>2</b> and <b>n-1</b> (inclusive) such that
<ul>
<li><b>P<sub>j</sub> > P<sub>j + 1</sub>  ∀    i ≤ j ≤ N - 1</b>.</li>
<li><b>P<sub>j</sub> > P<sub>j - 1</sub>  ∀    2 ≤ j ≤ i</b>.</li>
</ul>
</p>

<h3>Input</h3>
<p>First line contains <b>T</b>, the number of test cases. Each test case consists of <b>N</b> in one line.</p>

<h3>Output</h3>
<p>For each test case, output the answer modulo <b>10<sup>9</sup>+7</b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask #1(40 points): <b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li>Subtask #2(60 points): <b>original constraints</b></li>
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
2
2
3

<b>Output:</b>
0
2

</pre>
<h3>Explanation</h3>
<p>
Test case 1:<br/>
No permutation satisfies.<br/><br/>
Test case 2:<br/>
Permutations [1, 3, 2] and [2, 3, 1] satisfy the property.
</p>