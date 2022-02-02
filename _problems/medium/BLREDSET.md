---
{"category_name":"medium","problem_code":"BLREDSET","problem_name":"Black and Red vertices of Tree","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"21-11-2017","tags":{"0":"acm17chn","1":"admin2","2":"chn17rol","3":"dynamic","4":"medium","5":"tree"},"editorial_url":"https://discuss.codechef.com/problems/BLREDSET","time":{"view_start_date":1515357000,"submit_start_date":1515357000,"visible_start_date":1515357000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given a tree <b>T</b> with <b>N</b> vertices. The vertices are numbered from 1 to <b>N</b>. Some of the vertices are colored black and some are colored red. Also, some vertices can be uncolored. There is at least one black and at least one red vertex.</p>

<p>Compute the number of subsets of vertices <b>W</b> such that:
<ul>
<li>Each vertex in <b>W</b> is uncolored.</li>
<li><b>W</b> is a connected subgraph of <b>T</b>.</li>
<li>If you remove all the vertices of set <b>W</b>, there will be at least one pair of vertices (<b>u</b>, <b>v</b>) such that:
<ul>
<li><b>u</b> is colored black and <b>v</b> red.</li>
<li>There is no path from node <b>u</b> to node <b>v</b>.</li>
</ul>
</li>
</ul></p>

<p>Output your answer <b>modulo 10<sup>9</sup> + 7</b>.</p>

<h3>Input</h3>
<p>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of vertices.</li>
<li>Each of the next <b>N - 1</b> lines contains two space-separated integers <b>u</b> and <b>v</b> denoting an edge between vertices <b>u</b> and <b>v</b>.</li>
<li>The next line contains <b>N</b> space-separated integers denoting the colors of the vertices. The <b>i</b>-th of these integers is 0 if vertex <b>i</b> is uncolored, 1 if it's black or 2 if it's red.</li>
</ul>
</p>

<h3>Output</h3>
<p>For each test case, print a single line containing one integer denoting the number of ways to select a valid subset <b>W</b>, modulo 10<sup>9</sup> + 7.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 2 · 10<sup>5</sup></li>
<li>2 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>u</b>, <b>v</b> ≤ <b>N</b></li>
<li>Sum of <b>N</b> over all test cases doesn't exceed 10<sup>6</sup></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
2
6
1 2
1 3
1 4
3 5
3 6
0 1 0 1 2 0
6
1 2
1 3
1 4
3 5
3 6
1 0 0 0 2 0

<b>Output</b>
5
2
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> The possible subsets <b>W</b> are <b>{1}, {3}, {1, 3}, {3, 6}</b> and <b>{1, 3, 6}</b>.</p>
<p><b>Example case 2:</b> The possible subsets <b>W</b> are <b>{3}</b> and <b>{3, 6}</b>.</p>