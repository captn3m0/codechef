---
{"category_name":"medium","problem_code":"LABEL","problem_name":"Tree Labelling","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"xcwgf666","date_added":"9-04-2016","tags":{"0":"dynamic","1":"implementation","2":"ltime35","3":"ma5termind","4":"medium","5":"memoization"},"editorial_url":"http://discuss.codechef.com/problems/LABEL","time":{"view_start_date":1462036200,"submit_start_date":1462036200,"visible_start_date":1462036200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME35/mandarin/LABEL.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME35/russian/LABEL.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME35/vietnamese/LABEL.pdf">Vietnamese</a> as well.</h3>
<p>Chef likes to play with trees a lot, so his best friend Smurf has given him a tree <b>T</b> consisting of <b>N</b> nodes numbered from <b>1</b> to <b>N</b>. </p>
<p>Smurf asked him to count the number of ways to assign an integer in the range <b>[1, M]</b> to each of the nodes of the tree such that the absolute difference between the integers assigned to any pair of adjacent nodes is greater or equal than <b>K</b> (i. e <b>≥ K</b>). Since this number can be huge, Chef only needs to find it modulo <b>10<sup>9</sup> + 7 (1000000007)</b></p>
<p>Of course this task is tough for our little chef and he cannot solve it without your help. Can you help him?</p>
<h3>Input</h3>
<p>The first line of input contains a single integer <b>t</b> denoting the number of test cases. </p>
<p>The first line of each test case contains three space separated integers denoting <b>N</b>, <b>M</b> and <b>K</b>, denoting the number of nodes in the tree and the values of <b>M</b> and <b>K</b> respectively. </p>
<p>The following <b>(N-1)</b> lines of each test case contain two space separated integers <b>u</b> and <b>v</b> denoting that there is an edge between the nodes <b>u</b> and <b>v</b>.</p>
<h3>Output</h3>
<p>For each test case, print the answer in a separate line.</p>
<h3>Constraints</h3>
<ul>
<b>
<li>1 ≤ T ≤ 50</li>
<p></p></b><br />
<b>
<li>1 ≤ N ≤ 100</li>
<p></p></b><br />
<b>
<li>0 ≤ K ≤ 100</li>
<p></p></b><br />
<b>
<li>1 ≤ M ≤ 10<sup>9</sup></li>
<p></p></b>
</ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask 1 (20 pts) : <b>1 ≤ M ≤ 10<sup>2</sup></b></li>
<p></p>
<li>Subtask 2 (30 pts) : <b>1 ≤ M ≤ 10<sup>4</sup></b></li>
<p></p>
<li>Subtask 3 (50 pts) : <b>1 ≤ M ≤ 10<sup>9</sup></b></li>
<p>
</p></ul>
<h3>Example</h3>
<pre>
<b>Input</b>
<tt>3
2 2 0
1 2
3 3 2
1 3
1 2
3 3 1
1 2
2 3</tt>

<b>Output</b>
<tt>4
2
12</tt>
</pre><h3>Explanation</h3>
<p><img src="https://s3.amazonaws.com/hr-challenge-images/15909/1461164061-a8af760fd8-C.png" title="C.png" /></p>
