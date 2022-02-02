---
{"category_name":"hard","problem_code":"BTREE","problem_name":"Union on Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"wjmzbmr","problem_tester":"shangjingbo","date_added":"26-08-2014","tags":{"0":"hard","1":"lca","2":"oct14","3":"wjmzbmr"},"editorial_url":"http://discuss.codechef.com/problems/BTREE","time":{"view_start_date":1413192600,"submit_start_date":1413192600,"visible_start_date":1413192600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/mandarin/BTREE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/russian/BTREE.pdf">Russian</a>.</h3>
<p>There is a country whose road system is a tree, the nodes in the tree represent cities and the edge is the road between them, and each edge is of unit length. For safety, the government should put guards to protect all cities. But the government is in shortage of money. So they might not be able to protect all cites.</p>
<p>You're concerned about the country's safety, so you get the information of the guards. And you know that on the i-th day, there are k[i] guards on the road system, and j-th guard is on node a[j] and can protect every node whose distance to a[j] is not larger than r[j]. And you want to know how many nodes in the road system is protected by at least one guard.</p>
<h3>Input</h3>
<p>The first line contains an integer n, denoting the number of the cities.</p>
<p>Then n-1 lines follows, each line contains 2 integers a and b, denoting there is an edge between city a and b (1-based index).</p>
<p>The next line contains an integer Q, denoting the number of the days.</p>
<p>Then Q lines's description follows, each contains an integer k, denoting the number of guards in that day, and k integer pairs a[i],r[i] denoting the guards's information, for simplicity, no node will have more than 1 guard.</p>
<h3>Constraints</h3>
<ul>
<li> 1 ≤ n, Q ≤ 50000. </li>
<li> The total number of guards in the queries ≤ 500000. </li>
</ul>

<h3>Output</h3>
<p>For each day, output the answer in one line.</p>
<h3>Example</h3>
<pre><strong>Input:</strong></pre><pre>
20
1 2
1 3
1 4
4 5
4 6
2 7
4 8
5 9
7 10
2 11
9 12
8 13
1 14
12 15
9 16
7 17
12 18
1 19
6 20
5
2 9 3 12 5 
3 3 3 4 1 11 5 
3 3 3 10 4 19 2 
2 3 4 10 2 
5 5 4 11 2 16 2 18 1 19 2
</pre><pre><strong>Output:</strong></pre><pre>
16
16
13
16
18
</pre>