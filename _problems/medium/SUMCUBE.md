---
{"category_name":"medium","problem_code":"SUMCUBE","problem_name":"Sum of Cubes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"r_64","problem_tester":"jingbo_adm","date_added":"4-08-2017","tags":{"0":"hard","1":"maths","2":"r_64","3":"sept17","4":"sqrt"},"editorial_url":"https://discuss.codechef.com/problems/SUMCUBE","time":{"view_start_date":1505122200,"submit_start_date":1505122200,"visible_start_date":1505122200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/mandarin/SUMCUBE.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/russian/SUMCUBE.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/vietnamese/SUMCUBE.pdf">vietnamese</a> as well.</h3>

<p>You are given an undirected graph <b>G</b> = (<b>V</b>, <b>E</b>). We define a function <b>f</b>(<b>s</b>) for <b>s</b> ⊆ <b>V</b> to be the number of edges in the <a href="https://en.wikipedia.org/wiki/Induced_subgraph">induced subgraph</a> of <b>s</b>.</p>

<p>The problem asks you to calculate the sum of <b>f</b>(<b>s</b>)<b><sup>k</sup></b> over all <b>s</b> in <b>2<sup>|V|</sup></b> subsets of <b>V</b>.</p>

<p>As the answer could be very large, output it modulo (<b>10<sup>9</sup>+7</b>).</p>

<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>For each test case, the first line contains three space-separated integers <b>n</b> = |<b>V</b>|, <b>m</b> = |<b>E</b>| and <b>k</b>.</p>
<p>Then <b>m</b> lines follow, each line contains two space-separated integers <b>u</b>, <b>v</b> denoting an edge (<b>u</b>, <b>v</b>) is in <b>E</b>.</p>

<h3>Output</h3>
<p>For each test case, output one line containing one integer, the answer modulo (<b>10<sup>9</sup>+7</b>).</p>

<h3>Constraints</h3>
<ul>
	<li>
		<b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
	<li>
		<b>2</b> ≤ <b>n</b> ≤ <b>10<sup>5</sup></b></li>
	<li>
		<b>0</b> ≤ <b>m</b> ≤ <b>10<sup>5</sup></b></li>
	<li>Sum of each of <b>n, m</b> over all test cases ≤ <b>3 * 10<sup>5</sup></b></li>
	<li><b>1</b> ≤ <b>u, v</b> ≤ <b>n</b>.</li>
	<li>
		<b>1</b> ≤ <b>k</b> ≤ <b>3</b>.</li>
	<li>The graph is simple, i.e., doesn't contain self loops and multiple edges.</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 (8 points)</b>: <b>T, n ≤ 15</b></li>
<li><b>Subtask #2 (7 points)</b>: <b>k = 1</b></li>
<li><b>Subtask #3 (9 points)</b>: <b>k = 2</b></li>
<li><b>Subtask #4 (15 points)</b>: 
	<ul>
		<li><b>k = 3</b>.</li>
		<li>Sum of <b>n</b> over all test cases ≤ <b>300</b></li>
		<li>Sum of <b>m</b> over all test cases ≤ <b>300</b></li>
	</ul>
</li>
<li><b>Subtask #5 (24 points)</b>: 
	<ul>
		<li><b>k = 3</b>.</li>
		<li>Sum of <b>n</b> over all test cases ≤ <b>3000</b></li>
		<li>Sum of <b>m</b> over all test cases ≤ <b>3000</b></li>
	</ul>
</li>
<li><b>Subtask #6 (37 points)</b>: Original Constraints</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
3
3 3 1
1 2
2 3
3 1
4 5 2
1 2
2 3
3 4
4 1
2 4
5 4 3
1 2
1 3
1 4
2 5

<b>Output:</b>
6
56
194

</pre>
<h3>Explanation</h3>

<p><b>Example case 1. </b></p>
<p><b>f</b>(emptyset) = <b>f</b>({1}) = <b>f</b>({2}) = <b>f</b>({3}) = 0; </p>
<p><b>f</b>({1, 2}) = <b>f</b>({2, 3}) = <b>f</b>({3, 1}) = 1</p>
<p><b>f</b>({1, 2, 3}) = 3.</p>
<p>So the answer is 1 + 1 + 1 + 3 = 6.</p>

<p><b>Example case 2.</b></p>
<p>The nonzero <b>f</b>'s are as follows</p>
<p><b>f</b>({1, 2}) = <b>f</b>({2, 3}) = <b>f</b>({3, 4}) = <b>f</b>({4, 1}) = <b>f</b>({2, 4}) = 1</p>
<p><b>f</b>({1, 2, 3}) = <b>f</b>({1, 3, 4}) = 2</p>
<p><b>f</b>({1, 2, 4}) = <b>f</b>({2, 3, 4}) = 3</p>
<p><b>f</b>({1, 2, 3, 4}) = 5</p>

<p>So the answer is 5 * 1<sup>2</sup> + 2 * 2<sup>2</sup> + 2 * 3<sup>2</sup> + 5<sup>2</sup> = 56.</p>
