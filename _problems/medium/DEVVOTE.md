---
{"category_name":"medium","problem_code":"DEVVOTE","problem_name":"Devus and their voting system","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"xcwgf666","date_added":"9-03-2015","tags":{"0":"admin2","1":"april15","2":"dynamic","3":"medium","4":"partitioning"},"editorial_url":"http://discuss.codechef.com/problems/DEVVOTE","time":{"view_start_date":-62170005200,"submit_start_date":-62170005200,"visible_start_date":1772159245,"end_date":1735669800},"layout":"problem"}
---
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL15/mandarin/DEVVOTE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL15/russian/DEVVOTE.pdf">Russian</a>.</h3>
<p>
Devus are creatures living in Devupur. There are total <b>n</b> Devus in Devupur. <b>i<sup>th</sup></b> Devu live in <b>i<sup>th</sup></b> house. Houses <b>1, 2, 3, , ,  n</b> are placed in a single lane i.e. <b>1</b> is a neighbor of <b>2</b>,  <b>2</b> is a neighbor of <b>1</b> and <b>3</b> etc.
</p>
<p>
They decide their president by a very weird voting system. All the Devus contest in the presidential elections. Each person uniformly randomly votes any of the <b>n</b> person as his preference (he can vote himself too). Devus are really very envious creatures, so no Devu casts his vote to the person whom his neighbor has casted. Devus vote in the increasing order of their IDs.
</p>
<p>
Finally all the votes are counted and all the Devus having votes equal to highest voted Devu are selected as president.
</p>
<p>
Now you are interested in finding out expected number of presidents Devupur can select in their upcoming election. Please round the answer to 6 digits after decimal.
</p>
<h3>Input</h3>
<ul>
<li>First line of the input contains a single integer <b>T</b> denoting number of test cases.</li>
<li>For each test case, there is a single line containing a single integer <b>n</b>.</li>
</ul>
<h3>Output</h3>
<p>For each test case, print a single real number corresponding to the answer of the problem.</p>
<h3>Constraints and Subtasks</h3>
<p><b>Subtask 1 (15 points)</b></p>
<ul>
<li><b>1 ≤ T, n ≤ 7</b></li>
</ul>
<p></p>
<p><b>Subtask 2 (25 points)</b></p>
<ul>
<li><b>1 ≤ T, n ≤ 18</b></li>
</ul>
<p> </p>
<p><b>Subtask 3 (60 points)</b></p>
<ul>
<li><b>1 ≤ T, n ≤ 36</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
1
2

<b>Output:</b>
1.000000
2.000000
</pre><h3>Explanation</h3>
<p>
<b>Example 1:</b><br />
	<b>1<sup>st</sup></b> Devu votes himself and get elected for president. So expected number of presidents are <b>1</b>.
</p>
<p>
<b>Example 2:</b> </p>
<ul>
<li>	Both the Devus cast their vote to themselves. So total number of presidents selected are <b>2</b>.</li>
<li>	Devu <b>1</b> votes to Devu <b>2</b> and Devu <b>2</b> votes to Devu <b>1</b>. In this way, again total total number of presidents selected are <b>2</b>.</li>
<li>	So expected number of presidents selected are <b>(2 + 2) / 2 = 2</b>.</li>
</ul>

