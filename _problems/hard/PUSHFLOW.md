---
{"category_name":"hard","problem_code":"PUSHFLOW","problem_name":"Push the Flow!","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":null,"date_added":"27-06-2014","tags":{"0":"aug14","1":"graphs","2":"hard","3":"heavy","4":"kostya_by","5":"tree"},"editorial_url":"http://discuss.codechef.com/problems/PUSHFLOW","time":{"view_start_date":1407749400,"submit_start_date":1407749400,"visible_start_date":1407749400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/mandarin/PUSHFLOW.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/russian/PUSHFLOW.pdf">Russian</a>.</h3>
<p>
You are given a connected undirected graph <b>G</b>, consisting of <b>N</b> vertices and <b>M</b> edges. The vertices of <b>G</b> are indexed with integers 1, 2, 3, ..., <b>N</b>, the edges of <b>G</b> are indexed with integers 1, 2, 3, ..., <b>M</b>. Each edge of <b>G</b> has <i>a capacity</i> - a positive integer parameter. Each pair of the vertices is connected by at most one edge. No edge connects a vertex with itself.
</p>
<p>
Let's call a sequence of vertices <b>A</b> = <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>K</sub></b>(<b>K</b> > 2) <i>a simple cycle</i>, if:
</p>
<p><ul type="square">
<li>There's an edge between vertices <b>A<sub>i</sub></b> and <b>A<sub>i + 1</sub></b>, for each 1 ≤ <b>i</b> &lt; <b>K</b>;
</li><li>There's an edge between vertices <b>A<sub>1</sub></b> and <b>A<sub>K</sub></b>;
</li><li><b>A<sub>i</sub></b> equals to <b>A<sub>j</sub></b> if and only if <b>i</b> equals to <b>j</b>.
    </li></ul>
</p>
<p>It's guaranteed, that each vertex of <b>G</b> belongs to at most one simple cycle.</p>
<p>You task is to implement a data structure, which can process the following queries efficiently:</p>
<p><ul type="square">
<li>0 <b>S</b> <b>T</b>: find the maximum flow in <b>G</b> in case the source is <b>S</b> and the sink is <b>T</b>;
</li><li>1 <b>X</b> <b>NEW_CAPACITY</b>: make the capacity of <b>X</b>'th edge equal to <b>NEW_CAPACITY</b>.
    </li></ul>
</p>
<p>You can read about maximum flow problem here: <a href="http://en.wikipedia.org/wiki/Maximum_flow_problem">http://en.wikipedia.org/wiki/Maximum_flow_problem</a></p>
<h3>Input</h3>

<p>The first line of the input contains two integers <b>N</b> and <b>M</b>, denoting the number of the vertices and the number of the edges.</p>
<p>The next <b>M</b> lines contain the information about the edges of <b>G</b>, each contains three integers <b>U</b>, <b>V</b> and <b>C</b>, which means that this edge connects vertices <b>U</b>-<b>V</b> and has a capacity equal to <b>C</b>. The information about <b>i</b>'th edge is on <b>(i + 1)</b>'th line of the input.</p>
<p>The next line contains an integer <b>Q</b>, denoting the number of queries to process.</p>
<p>The next <b>Q</b> lines contain the queries to process, each contains one query. The format of queries is the same with the one described in the legend.</p>
<h3>Output</h3>
<p>Your output should contain exactly <b>Q<sub>0</sub></b> lines, where <b>Q<sub>0</sub></b> is the number of the queries of the zeroth type in the input.</p>
<p>For each query of the zeroth type you should to output one integer: the maximum flow in the corresponding graph. You should output the answers for the queries in the order they appear in the input.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 100 000;</li>
<li>0 ≤ <b>M</b> ≤ 200 000;</li>
<li>0 ≤ <b>Q</b> ≤ 200 000;</li>
<li>1 ≤ <b>U, V</b> ≤ <b>N</b>, for each edge;</li>
<li>1 ≤ <b>C</b> ≤ 10<sup>9</sup>, for each edge;</li>
<li>1 ≤ <b>S ≠ T</b> ≤ <b>N</b>, for each query of the zeroth type appeared in the input;</li>
<li>1 ≤ <b>X</b> ≤ <b>M</b>, for each query of the first type appeared in the input;</li>
<li>1 ≤ <b>NEW_CAPACITY</b> ≤ 10<sup>9</sup>, for each query of the first type appeared in the input;</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
6 6
1 2 1
4 5 8
4 3 2
6 5 5
1 6 4
2 3 1
6
0 4 5
0 1 3
0 1 2
1 1 5
1 6 5
0 1 2

<b>Output:</b>
9
3
2
7
</pre>
