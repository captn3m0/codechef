---
{"category_name":"hard","problem_code":"TROOT","problem_name":"Roots of a Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"stzgd","date_added":"30-04-2014","tags":{"0":"dfs","1":"easy","2":"ltime12","3":"segment","4":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/TROOT","time":{"view_start_date":1401006600,"submit_start_date":1401006600,"visible_start_date":1401006600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME12/mandarin/TROOT.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME12/russian/TROOT.pdf">Russian</a>.</h3>
<p>You are given a tree with <b>N</b> nodes, numbered from 1 to <b>N</b>. You need to handle the queiries of the following two types:</p>
<ul>
<li>+ <b>x</b> <b>y</b>. Add a path going from the node <b>x</b> to the node <b>y</b> (or from <b>y</b> to <b>x</b> because it's actually irrelevant). We will never add the path that is already a present one.</li>
<li>- <b>x</b> <b>y</b>. Delete the path going from the node <b>x</b> to the node <b>y</b>. It is guaranteed that such path exists and after its last adding it haven't yet been deleted.</li>
</ul>

<p>If we root the tree at the node <b>t</b> and for every present (added and not yet deleted) path, the least common ancestor of its endpoints is also one of the endpoints of this path, then we call the node <b>t</b> a possible root.</p>
<p>We ask you to output the product of all the possible roots' indexes after every query.</p>
<h3>Input</h3>
<p>The first line of input contains two single space separated integers <b>N</b> and <b>M</b> - the number of nodes in the tree and the number of queries respectively.</p>
<p>The following <b>N-1</b> lines contain pairs of integers denoting the edges of a tree. The pair <b>X Y</b> corresponds to the edge between the nodes <b>X</b> and <b>Y</b>.</p>
<p>Then there are <b>M</b> lines denoting the queries in the form described above.</p>
<h3>Output</h3>
<p>Output <b>M</b> lines. Output the product of all the possible roots' numbers modulo <b>10<sup>9</sup>+7</b> after the performing of the <b>i</b>-th query on the <b>i</b>-th line. If there are no possible roots, output <b>-1</b> on this line instead.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>X, Y</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>x, y</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>100</b> - 42 points.</li>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>10<sup>5</sup></b> - 58 points.</li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
5 4
1 2
2 3
3 4
4 5
+ 1 3
+ 3 5
- 1 3
- 3 5

<b>Output:</b>
60
15
30
120
</pre>