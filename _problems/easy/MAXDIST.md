---
{"category_name":"easy","problem_code":"MAXDIST","problem_name":"Chef and Trees","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"iscsi ","problem_tester":null,"date_added":"8-06-2015","tags":{"0":"iscsi","1":"snck15el"},"editorial_url":"http://discuss.codechef.com/problems/MAXDIST","time":{"view_start_date":1434135600,"submit_start_date":1434135600,"visible_start_date":1434135600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCK15EL/mandarin/MAXDIST.pdf">Mandarin Chinese </a> , <a target="_blank" href="http://www.codechef.com/download/translated/SNCK15EL/russian/MAXDIST.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCK15EL/vietnamese/MAXDIST.pdf">Vietnamese</a></h3>


<p>
Chef recently read about trees. He already learnt that the trees are undirected, simple, connected graphs and has no cycles. He also knows that the tree (or graph) diameter is the largest distance of two nodes in the tree (or graph). He finds out about a challenging problem: Can we decrease the diameter of the tree if we add just a single edge? Unfortunately he is tired from a lot of reading, so could you help him to solve the problem?

</p>

<h3>Input</h3>
<p><p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. 
The description of <b>T</b> test cases follows. The first line of each test contains an integer <b>N</b>, denoting the number of nodes in the tree.
The next <b>N - 1</b> lines contain two space separated integers <b>A<sub>i</sub>, B<sub>i</sub></b> denoting the tree edges.
It's guaranteed that the input is a valid tree.
<p> </p>

<h3>Output</h3>
<p>
For each test case, output a single line print "YES" if it is possible to add a tree an edge to decrease the diameter of the graph, otherwise print "NO".
</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤   <b>T</b> ≤   <b> 30 </b></li>
<li><b>2</b> ≤   <b>N</b> ≤  <b> 10000 </b></li>
<li><b>1</b> ≤  <b>A<sub>i</sub>, B<sub>i</sub></b> ≤  <b> N </b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
2
1 2
3 
1 2
2 3
5
1 2
2 3
3 4
3 5

<b>Output:</b>
NO
YES
YES
</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> 
In this example, we can use just cycle edges, or a parallel edge but these edges don't change the distance of the 1-2 nodes.
<img src="https://dl.dropboxusercontent.com/u/61869957/example1.bmp" alt="HTML5 Icon" width="256" height="128">
</p>
<p><b>Example case 2.</b>
The original graph diameter is two because distance(1,3)=2, distance(1,2)=1 and distance(2,3)=1, if we connect 1,3 nodes then distance(1,3) will be 1 so the diameter decrease to 1.
<img src="https://dl.dropboxusercontent.com/u/61869957/example2.bmp" alt="HTML5 Icon" width="256" height="128">
</p>

<p><b>Example case 3.</b>
The original graph diameter is three because dist(1,4)=dist(1,5)=3, if we connect 1,3 nodes then the diameter becomes 2.
<img src="https://dl.dropboxusercontent.com/u/61869957/example3.bmp" alt="HTML5 Icon" width="400" height="200">
</p>
