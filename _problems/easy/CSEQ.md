---
{"category_name":"easy","problem_code":"CSEQ","problem_name":"Count Sequences","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"darkshadows","problem_tester":"xcwgf666","date_added":"18-04-2014","tags":{"0":"april15","1":"combinatorics","2":"darkshadows","3":"dynamic","4":"easy","5":"lucas","6":"maths"},"editorial_url":"http://discuss.codechef.com/problems/CSEQ","time":{"view_start_date":1428917400,"submit_start_date":1428917400,"visible_start_date":1428917400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL15/mandarin/CSEQ.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL15/russian/CSEQ.pdf">Russian</a>.</h3>
<p>
Given three positive integers <b>N</b>, <b>L</b> and <b>R</b>, find the number of non-decreasing sequences of size at least <b>1</b> and at most <b>N</b>, such that each element of the sequence lies between <b>L</b> and <b>R</b>, both inclusive.
</p>
<p>Print the answer modulo <b>10<sup>6</sup>+3</b>.</p>
<h3>Input</h3>
<ul>
<li>First line of input contains <b>T</b>, the number of the test cases.</li>
<li>Each of next <b>T</b> lines contains three space separated integers <b>N</b>, <b>L</b> and <b>R</b>.</li>
</ul>
<h3>Output</h3>
<p>For each test case print the answer modulo <b>10<sup>6</sup>+3</b> in a single line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>L ≤ R</b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (20 points): <b>1</b> ≤ <b>N, L, R</b> ≤ <b>100</b>
</li><li>Subtask #2 (30 points): <b>1</b> ≤ <b>N, L, R</b> ≤ <b>10<sup>4</sup></b>
</li><li>Subtask #3 (50 points): <b>1</b> ≤ <b>N, L, R</b> ≤ <b>10<sup>9</sup></b>
</li></ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
1 4 5
2 4 5

<b>Output:</b>
2
5
</pre><h3>Explanation</h3>
<p><b>test #1:</b> [4] and [5] are the two sequences.</p>
<p><b>test #2:</b> [4], [5], [4, 4], [4, 5] and [5, 5] are the five sequences.</p>
