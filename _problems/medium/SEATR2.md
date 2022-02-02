---
{"category_name":"medium","problem_code":"SEATR2","problem_name":"Sereja and Tree 2","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"iscsi","date_added":"9-11-2015","tags":{"0":"cook64","1":"dynamic","2":"maths","3":"medium","4":"sereja","5":"tree"},"editorial_url":"http://discuss.codechef.com/problems/SEATR2","time":{"view_start_date":1448217000,"submit_start_date":1448217000,"visible_start_date":1448217000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK64/mandarin/SEATR2.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK64/russian/SEATR2.pdf">Russian</a>.</h3>


<p>
Sereja has a rooted tree of <b>N</b> nodes with node <b>1</b> being the root node. He wants to find the number of ways of assigning an integer in the range <b>[1, M]</b> to each node, such that value of each node should be a multiple of it's parent node's value (for vertex #1 there is no parent so any number fit condition). As the answer could be large, report it modulo <b>(10<sup>9</sup> + 7)</b>.
</p>

<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> — the number of test cases. <b>T</b> tests follow.</p>
<p>First line of each test case contains two space-separated integers <b>N</b> and <b>M</b>. Each of the next <b>N-1</b> lines contains two integers <b>(u, v)</b> — a pair of vertices connected by an edge. 
</p>

<h3>Output</h3>
For each test case, output a single integer corresponding to the answer in separate line.

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>500</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>20000</b></li>
<li><b>1</b> ≤ <b>u, v</b> ≤ <b>N</b>
<li>It is guaranteed that the given graph is a tree (i.e., there won't be any cycles or self-loops).</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
3 2
1 2
1 3
1 100

<b>Output:</b>
5
100
</pre>

<h3>Explanation</h3>
In first test case there are five possible assigns of numbers: [1, 1, 1], [1, 1, 2], [1, 2, 1], [1, 2, 2], [2, 2, 2]. <p></p>
In second test case there are hundred possible assigns: [1], [2], [3], ..., [100].

