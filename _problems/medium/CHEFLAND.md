---
{"category_name":"medium","problem_code":"CHEFLAND","problem_name":"Chef Land","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"mgch","date_added":"13-06-2016","tags":{"0":"bridges","1":"cook71","2":"graph","3":"kingofnumbers","4":"medium"},"editorial_url":"http://discuss.codechef.com/problems/CHEFLAND","time":{"view_start_date":1466965800,"submit_start_date":1466965800,"visible_start_date":1466965800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK71/mandarin/CHEFLAND.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK71/russian/CHEFLAND.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK71/vietnamese/CHEFLAND.pdf">Vietnamese</a> as well.</h3>
<p>You are given an undirected unweighted graph consisting of <b>N</b> nodes and M edges. A pair of nodes <b>u, v</b> is called good if and only if you can go from node <b>u</b> to <b>v</b> and then return back from <b>v</b> to <b>u</b> without using any edge more than once.</p>
<p>Can you add at most one edge to the graph to make all the pairs of nodes good? Note that the added edge can be between two vertices which are already connected by some edges. However you are not allowed to add self loops.</p>
<h3>Input</h3>
<p>First line of the input contains two space separated integers - <b>N</b> (number of nodes) and <b>M</b> (number of edges).</p>
<p>Each of the next <b>M</b> lines contains two space separated integers <b>x</b> and <b>y</b>, denoting that there is an edge between node <b>x</b> and <b>y</b>.</p>
<h3>Output</h3>
<p>Output <tt>"YES"</tt> (without quotes) if it possible to make all pairs of node good by adding at most one edge. Output <tt>"NO"</tt> (without quotes) otherwise.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>M</b> ≤ <b>2 * 10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>x, y</b> ≤ <b>N</b> </li>
<li>It is guaranteed that the graph is connected. 
</li><li>The given graph may contain multi-edges. It doesn't contain any self loops. </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>4 4
3 2
3 1
2 1
1 4</tt>

<b>Output:</b>
<tt>YES</tt>
</pre><h3>Explanation</h3>
<p>We can connect nodes 3 and 4 via an edge. After that all the pair of vertices will be good.</p>
