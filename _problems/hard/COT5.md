---
{"category_name":"hard","problem_code":"COT5","problem_name":"Count on a Treap","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xiaodao","problem_tester":"laycurse","date_added":"12-12-2013","tags":{"0":"feb14","1":"hard","2":"segment","3":"treap","4":"xiaodao"},"editorial_url":"http://discuss.codechef.com/problems/COT5","time":{"view_start_date":1392629400,"submit_start_date":1392629400,"visible_start_date":1392629400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB14/mandarin/COT5.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB14/russian/COT5.pdf">Russian</a>.</h3>
<p>In computer science, a treap is a binary search tree according to the keys and meanwhile a heap according to the weights. Follow the link for more details: <a href="http://en.wikipedia.org/wiki/Treap" title="http://en.wikipedia.org/wiki/Treap">http://en.wikipedia.org/wiki/Treap</a></p>
<p>Your task is to maintain a <b>max-treap</b> supporting the following operations:</p>
<ul>
<li>0 <b>k w</b>: Insert a new node, whose key and weight are <b>k</b> and <b>w</b>.</li>
<li>1 <b>k</b>: Delete a node in the treap with key <b>k</b>.</li>
<li>2 <b>ku</b> <b>kv</b>: Return the distance between node <b>u</b> whose key is <b>ku</b> and node <b>v</b> whose key is <b>kv</b>.</li>
</ul>
<p><br /><br />
No two nodes share the same key or the same weight in the tree, and we guarantee the node is indeed in the treap before a delete operation takes place.</p>
<p><br /></p>
<h3>Input</h3>
<p>The first line contains an integer <b>N</b>, the number of operations.<br />
Each of the next <b>N</b> lines contains two or three integers "<b>0 k w</b>" "<b>1 k</b>" or "<b>2 ku kv</b>” . These integers describe the current operation.</p>
<p><br /></p>
<h3>Output</h3>
<p>For each distance query, print the distance between <b>u</b> and <b>v</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ N ≤ 200000</b></li>
<li><b>0 &lt; k, w, ku, kv  &lt; 2<sup>32</sup></b></li>
</ul>
<h3>Example</h3>
<pre><strong>Input:</strong>
12
0 4 17535
0 10 38964
0 2 21626
0 1 61321
2 1 10
2 10 4 
1 10
1 1
0 8 42634
2 8 4
2 8 2
2 4 2

<strong>Output:</strong>
1
2
2
1
1
</pre>