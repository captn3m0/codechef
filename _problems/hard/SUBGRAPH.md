---
{"category_name":"hard","problem_code":"SUBGRAPH","problem_name":"Counting Subgraphs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":10,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"shangjingbo","date_added":"25-07-2015","tags":{"0":"cook62","1":"dynamic","2":"graph","3":"kostya_by","4":"medium","5":"tree"},"editorial_url":"http://discuss.codechef.com/problems/SUBGRAPH","time":{"view_start_date":1442773800,"submit_start_date":1442773800,"visible_start_date":1442773800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="/download/translated/COOK62/mandarin/SUBGRAPH.pdf" target="_blank">Mandarin Chinese</a> and <a href="/download/translated/COOK62/russian/SUBGRAPH.pdf" target="_blank">Russian</a> as well.</h3>
<p>
<meta charset="utf8" />
</p>
<p>Kostya recently began his internship in a very big and famous IT company. His first project is dedicated to visualization of graphs, but his manager wanted to make sure Kostya is good enough for this project before he starts writing any code. As it usually goes, Kostya was given an algorithmic problem and was asked to come up with a solution. After struggling with the problem for a couple of days, he finally managed to solve it. Now Kostya wants to challenge the participants of the September Cook-Off 2015 Contest with this problem. Unfortunately, you don't have a couple of days to solve it, and you'll have to make do with 2.5 hours. Are you ready to be challenged? :)</p>
<p>You are given an undirected graph <b>G</b> of <b>N</b> nodes and <b>M</b> edges. The nodes of <b>G</b> are labeled with unique integer numbers of the range [1, 2, ... , <b>N</b>]. It's guaranteed that no multiple edges or self-loops appear in the graph as well as that the graph is connected. There's one more restriction on the graph: any node of <b>G</b> belongs to at most one simple cycle in <b>G</b>.</p>
<p>Your task is to count the subsets of nodes in <b>G</b>, such that the nodes in the subset are connected (you can reach any node of the subset from any other node of the subset only by moving to adjacent nodes that belong to the subset) and contain no more than <b>K</b> nodes. Since the answer may exceed the limits of usual primitive integer types, you are asked to do all the calculations modulo 10<sup>9</sup> + 7.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of a test case description contains three integers <b>N</b>, <b>M</b> and <b>K</b>.</p>
<p>Each of the next <b>M</b> lines contains two integers <b>U</b> and <b>V</b> denoting a single edge in <b>G</b> between the vertices labeled <b>U</b> and <b>V</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing one integer: the number of described subsets modulo 10<sup>9</sup> + 7.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N</b> ≤ 5000</li>
<li>0 ≤ <b>M</b> ≤ 10000</li>
<li>1 ≤ <b>K</b> ≤ min(<b>N</b>, 30)</li>
<li>1 ≤ <b>U</b> ≠ <b>V</b> ≤ <b>N</b></li>
<li>The size of any simple cycle in <b>G</b> does not exceed <b>L</b> = 50</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 2 1
2 1
3 1
5 5 4
5 4
4 3
1 5
3 2
2 5
3 2 2
2 3
1 3

<b>Output:</b>
3
20
5

</pre>