---
{"category_name":"easy","problem_code":"MINVOTE","problem_name":"Minions and Voting","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"28-02-2018","tags":{"0":"admin2","1":"binary","2":"easy","3":"march18"},"editorial_url":"https://discuss.codechef.com/problems/MINVOTE","time":{"view_start_date":1520847000,"submit_start_date":1520847000,"visible_start_date":1520847000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/mandarin/MINVOTE.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/russian/MINVOTE.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/vietnamese/MINVOTE.pdf">Vietnamese</a> as well.</h3>

<p>There are <b>N</b> minions who are competing in an election of the president of the ACM (Association of Cute Minions). They are standing in a line in the order from minion 1 to minion <b>N</b>. For each <b>i</b> (1 ≤ <b>i</b> ≤ <b>N</b>), the <b>i</b>-th minion has an influence level of <b>S<sub>i</sub></b>.</p>

<p>A single minion may cast any number of votes. Minion <b>j</b> will vote for minion <b>i</b> (<b>i</b> ≠ <b>j</b>) if and only if the influence level of the <b>j</b>-th minion is greater than or equal to the sum of influence levels of all the minions standing between them (excluding the <b>i</b>-th and <b>j</b>-th minion).</p>

<p>Your task is to find the number of votes received by each minion.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of minions.</li>
<li>The second line contains <b>N</b> space-separated integers <b>S<sub>1</sub>, S<sub>2</sub>, ..., S<sub>N</sub></b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing <b>N</b> space-separated integers. For each valid <b>i</b>, the <b>i</b>-th of these integers should denote the number of votes the <b>i</b>-th minion will get.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>S<sub>i</sub></b> ≤ 10<sup>9</sup> for each valid <b>i</b></li>
<li>sum of <b>N</b> over all test cases won't exceed 10<sup>6</sup></li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask #1 (30 points):</b>
<ul>
<li>1 ≤ <b>N</b> ≤ 500</li>
<li>sum of <b>N</b> over all test cases won't exceed 10,000</li>
</ul>
</p>

<p><b>Subtask #2 (70 points):</b> original constraints</p>

<h3>Example</h3>
<pre><b>Input:</b>

2
4
4 3 2 1
5
1 2 2 3 1

<b>Output:</b>

1 2 3 2
2 3 2 3 1
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> 
<ul>
	<li>The first minion will get only a vote of the second minion.</li>
	<li>The second minion will get votes of the first and third minion.</li>
	<li>The third minion will get votes of the first, second and fourth minion.</li>	
	<li>The fourth minion will get votes of the second and third minion.</li>
</ul>
</p>
