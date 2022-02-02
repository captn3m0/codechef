---
{"category_name":"easy","problem_code":"CHEFEQ","problem_name":"Chef and Equality","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"abhra73","problem_tester":"pushkarmishra","date_added":"16-01-2015","tags":{"0":"abhra73","1":"ad","2":"easy","3":"feb15"},"editorial_url":"http://discuss.codechef.com/problems/CHEFEQ","time":{"view_start_date":1424079000,"submit_start_date":1424079000,"visible_start_date":1424079000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB15/mandarin/CHEFEQ.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB15/russian/CHEFEQ.pdf">Russian</a>.</h3>
<p>Chef has a box full of infinite number of identical coins. One day while playing, he made <b>N</b> piles each containing equal number of coins. Chef suddenly remembered an important task and left the room for sometime. While he was away, his newly hired assistant came across the piles and mixed them up while playing.<br />
When Chef returned home, he was angry to see that all of his piles didn't contain equal number of coins as he very strongly believes in the policy of equality for all, may it be people or piles of coins. </p>
<p> In order to calm down the Chef, the assistant proposes to make all the piles equal. Chef agrees to give this task to him, but as a punishment gives him only <b>two</b> type of operations that he can perform.</p>
<ul>
<li>Pick some coins from any pile and put them back in Chef's coin box.</li>
<li>Pick some coins from the Chef's coin box and put them on any one pile.</li>
</ul>

<p>The assistant wants to do this task as fast as possible. So he wants to know the minimum number of operations needed to make all the piles equal.</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of piles.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the number of coins in each pile.</li>
</ul>
<h3>Output</h3>
<ul>
<li>
For each test case, output a single line containing an integer corresponding to the minimum number of operations assistant needs to do.
</li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>5</sup></b></li>
</ul>
<h3>Sub tasks</h3>
<ul>
<li>Subtask #1: 1 &le; <b>N</b> ≤ 1000 (30 points)</li>
<li>Subtask #2: original constraints (70 points)</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
4
1 2 3 4

<b>Output:</b>
3
</pre><h3>Explanation</h3>
<ul>
<li>In test case 1, if you decide to convert all the piles to contain either of 1, 2, 3, or 4 coins you will have to change the other 3 piles. For any other choice you will have to alter more than 3 (i.e. 4) piles.
</li></ul>
