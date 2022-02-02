---
{"category_name":"medium","problem_code":"TALCA","problem_name":"Lowest Common Ancestor","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":null,"date_added":"3-07-2014","tags":{"0":"lca","1":"ltime14","2":"medium","3":"tree","4":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/TALCA","time":{"view_start_date":1406452500,"submit_start_date":1406452500,"visible_start_date":1406452500,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME14/mandarin/TALCA.pdf">Mandarin Chinese.</a></h3>
<p> </p>
<p>In a rooted tree, the <a href="http://en.wikipedia.org/wiki/Lowest_common_ancestor">lowest common ancestor</a> (or LCA for short) of two vertices <b>u</b> and <b>v</b> is defined as the lowest vertex that is ancestor of both that two vertices.</p>
<p>Given a tree of <b>N</b> vertices, you need to answer the question of the form "<b>r u v</b>" which means if the root of the tree is at <b>r</b> then what is LCA of <b>u</b> and <b>v</b>.</p>
<p> </p>
<h3>Input</h3>
<p>The first line contains a single integer <b>N</b>. Each line in the next <b>N - 1</b> lines contains a pair of integer <b>u</b> and <b>v</b> representing a edge between this two vertices.</p>
<p>The next line contains a single integer <b>Q</b> which is the number of the queries. Each line in the next <b>Q</b> lines contains three integers <b> r, u, v</b> representing a query.</p>
<p> </p>
<h3>Output</h3>
<p>For each query, write out the answer on a single line.</p>
<h3>Constraints</h3>
<p>20 points:</p>
<ul>
<li> 1 ≤ <b>N</b>, <b>Q</b> ≤ 100</li>
</ul>
<p> </p>
<p>40 points:</p>
<ul>
<li> 1 ≤ <b>N</b>, <b>Q</b> ≤ 10<sup>5</sup></li>
<li>There is less than 10 unique value of r in all queries</li>
</ul>
<p> </p>
<p>40 points:</p>
<ul>
<li> 1 ≤ <b>N</b>, <b>Q</b> ≤ 2 × 10<sup>5</sup></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
1 2
2 3
1 4
2
1 4 2
2 4 2

<b>Output:</b>
1
2
</pre><p> </p>
<h3>Explanation</h3>
<ul>
<li>"1 4 2": if 1 is the root, it is parent of both 2 and 4 so LCA of 2 and 4 is 1.</li>
<li>"2 4 2": the root of the tree is at 2, according to the definition, LCA of any vertex with 2 is 2.</li>
</ul>
