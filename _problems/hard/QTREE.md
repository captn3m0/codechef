---
{"category_name":"hard","problem_code":"QTREE","problem_name":"Queries on tree again!","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":"pieguy","date_added":"26-12-2012","tags":{"0":"hard","1":"heavy","2":"may13","3":"segment","4":"simple","5":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/QTREE","time":{"view_start_date":1368440849,"submit_start_date":1368441000,"visible_start_date":1368441000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
You are given a simple connected graph <b>G</b> with <b>N</b> vertices and <b>N</b> edges (a simple graph is an un-directed graph that has no loops and no more than one edge between any two different vertices).<br />
It is obvious that the graph <b>G</b> contains exactly one cycle and you can assume that the length of this cycle is odd (there are odd number of vertices in this cycle).<br />
The vertices are numbered from 1 to <b>N</b>. Each edge is assigned a corresponding integer weight.<br />
Your mission is to stimulate two types of queries :</p>
<ul>
<li>
Update query represented by <b>f u v</b>: change the sign of all the weights of the edges on the shortest path (you can see the definition of shortest path in this problem later on) from vertex <b>u</b> to vertex <b>v</b>.
</li>
<li>
Find query represented by <b>? u v</b>: On the shortest path from vertex <b>u</b> to vertex <b>v</b>, find the (possibly empty) set of consecutive edges such that the sum of the weights is maximal. In other words, let's define the shortest path from <b>u</b> to <b>v</b> as <b>a_1, a_2, ..., a_k</b> (where <b>a_1</b> = <b>u</b> and <b>a_k</b> = <b>v</b>). You have to find <b>a_i</b> and <b>a_j</b> such that <b>i</b> &lt;= <b>j</b> and the sum of the weights of the edges of the path <b>a_i, a_(i + 1), ..., a_j</b> is as large as possible. You just have to find that sum.
</li>
</ul>

<p>
The shortest path between two vertices <b>u</b> and <b>v</b> is the path connecting them with the minimal number of vertices. In this problem, it is obvious that there is only one shortest path between any pair of vertices of <b>G</b>.
</p>
<h3>Input</h3>
<p>The first line contains an integer <b>N</b>. Each of the next <b>N</b> lines represents an edge of the graph with three integers <b>u v c</b> which mean there is an edge connecting vertices <b>u</b> and <b>v</b> and it is has weight <b>c</b>.<br />
The next line contains an integer <b>Q</b>, the number of queries. Each of the next <b>Q</b> lines represents a query in one of the two forms above.
</p>
<h3>Output</h3>
<p>
For each <b>find</b> query, print the result of the query (the maximal sum) on a line.
</p>
<h3>Constraints</h3>
<ul>
<li>1 &le; <b>N</b> &le; 100,000</li>
<li>1 &le; <b>u</b>, <b>v</b> &le; <b>N</b></li>
<li>-10,000 &le; <b>c</b> &le; 10,000</li>
<li>1 &le; <b>Q</b> &le; 100,000</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
6
1 2 1
2 3 1
3 1 1
2 4 1
4 5 1
3 6 1
3
? 5 6
f 2 3
? 5 6

<b>Output:</b>
4
2
</pre><h3>Explanation</h3>
<p>The shortest path from 5 to 6 is 5, 4, 2, 3, 6. All the edges on this path have weight 1 so the answer to the first query is 4. After the second query, the weight of the edge (2, 3) is - 1. The edges on the path 5, 4, 2, 3, 6 have weights 1, 1, -1, 1 respectively. so the answer for the third query is 2.</p>
