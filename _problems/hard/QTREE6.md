---
{"category_name":"hard","problem_code":"QTREE6","problem_name":"Query on a tree VI","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xiaodao","problem_tester":"gerald","date_added":"7-11-2013","tags":{"0":"dec13","1":"hard","2":"heavy","3":"link","4":"xiaodao"},"editorial_url":"http://discuss.codechef.com/problems/QTREE6","time":{"view_start_date":1387186200,"submit_start_date":1387186200,"visible_start_date":1387186200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/mandarin/QTREE6.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/russian/QTREE6_1.pdf">Russian</a>.</h3>
<p>You are given a tree (an acyclic undirected connected graph) with <strong>n</strong> nodes. The tree nodes are numbered from 1 to <strong>n</strong>. Each node has a color, white or black. All the nodes are black initially. We will ask you to perfrom some instructions of the following form:</p>
<ul>
<li><strong>0 u</strong>: ask for how many nodes are connected to <strong>u</strong>, two nodes are connected if all the node on the path from <strong>u</strong> to <strong>v</strong> (inclusive <strong>u</strong> and <strong>v</strong>) have the same color.</li>
<li><strong>1 u</strong>: toggle the color of <strong>u</strong> (that is, from black to white, or from white to black).</li>
</ul>
<h3>Input</h3>
<p>The first line contains a number <strong>n</strong> that denotes the number of nodes in the tree (1 ≤ <strong>n</strong> ≤ 10<sup>5</sup>). In each of the following <strong>n-1</strong> lines, there will be two numbers (<strong>u</strong>, <strong>v</strong>) that describes an edge of the tree (1 ≤ <strong>u</strong>, <strong>v</strong> ≤ <strong>n</strong>). The next line contains a number <strong>m</strong> denoting number of operations we are going to process (1 ≤ <strong>m</strong> ≤ 10<sup>5</sup>). Each of the following <strong>m</strong> lines describe an operation (<strong>t</strong>, <strong>u</strong>) as we mentioned above(0 ≤ <strong>t</strong> ≤ 1, 1 ≤ <strong>u</strong> ≤ <strong>n</strong>).</p>
<h3>Output</h3>
<p>For each query operation, output the corresponding result.</p>
<h3>Example</h3>
<pre style="text-align: left;"><strong>Input 1:</strong><br />5
1 2
1 3
1 4
1 5
3
0 1
1 1
0 1
<strong>Output 1:</strong><br />5
1</pre><pre style="text-align: left;"><strong><br />Input 2:<br /></strong>7
1 2
1 3
2 4
2 5
3 6
3 7
4
0 1
1 1
0 2
0 3
<strong><br /><br />Output 2:</strong><br />7
3
3<br /><br /><br /><strong>Warning: large input/output data,be careful with certain languages</strong></pre><p> </p>
<p> </p>
