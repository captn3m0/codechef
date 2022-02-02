---
{"category_name":"hard","problem_code":"TAPAIR","problem_name":"Counting The Important Pairs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":null,"date_added":"15-05-2013","tags":{"0":"dfs","1":"hard","2":"jan14","3":"tuananh93","4":"xor"},"editorial_url":"http://discuss.codechef.com/problems/TAPAIR","time":{"view_start_date":1389605400,"submit_start_date":1389605400,"visible_start_date":1389605400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/mandarin/TAPAIR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/russian/TAPAIR1.pdf">Russian</a>.</h3>
<p><i>[<b>a simple graph</b> is an undirected graph that has no loops (edges connected at both ends to the same vertex) and no more than one edge between any two different vertices.]</i></p>
<p align="right"> -Retrieved from http://en.wikipedia.org/wiki/Graph_(mathematics)</p>
<p>The road system at Byteland can be seen as a simple graph in which the vertices represented by the cities and the edges represented by the roads connected two different cities. Besides, the road system is connected it means people can travel between any two cities. It is decided by the president that two roads will be concurrently upgraded in the next month. Since it may take a couple of weeks to get the work done, two roads should be chosen so that the connectivity of the system is hold during the up-gradation process. More clearly, people still can go between any pair of cities without using that two roads.
</p>
<p>Which roads should be upgraded is not decided yet. There may be no way to choose such a two roads or may be many ways. Your mission is counting how many pair of roads <b>cannot</b> be chosen. Notice that two roads must be different and we consider only un-ordered pair ((1, 2) is the same as (2,1)).</p>
<h3>Input</h3>
<p>The first line of the input contains two integers <b>N M</b> which are the number of cities and roads respectively. Each line in the next <b> M </b> contains two integers <b>u v</b> which means there is a road connects the <b>u</b>th city to the <b>v</b>th city.</p>
<h3>Output</h3>
<p> Output a single line contains the number of way that two roads <b>cannot</b> be chosen for upgradation.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100,000</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>300,000</b></li>
<li><b>1</b> ≤ <b>u</b>, <b>v</b> ≤ <b>N</b></li>
<li><b>u</b> ≠ <b>v</b></li>
<li>There is at most one road between any two cities.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5 6
1 2
2 3
1 3
3 4
4 5
3 5

<b>Output:</b>
6
</pre><h3>Explanation</h3>
<p>There are 5 cities and 6 roads (numbered from 1 to 6). There are 6 pairs of roads cannot be chosen which are<br />
(1, 2), (1, 3), (2, 3), (4, 5), (4, 6) and (5, 6).</p>
