---
{"category_name":"medium","problem_code":"CHEFGRPH","problem_name":"Time to Study Graphs with Chef","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"malinovsky239","problem_tester":"shangjingbo","date_added":"31-05-2014","tags":{"0":"combinatorics","1":"dynamic","2":"feb15","3":"graph","4":"malinovsky239","5":"medium"},"editorial_url":"http://discuss.codechef.com/problems/CHEFGRPH","time":{"view_start_date":1424079000,"submit_start_date":1424079000,"visible_start_date":1424079000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB15/mandarin/CHEFGRPH.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB15/russian/CHEFGRPH.pdf">Russian</a>.</h3>
<p>
Consider directed graph which has <b>n + 2</b> layers numbered from left to right by integers from <b>0</b> up to <b>n + 1</b>. The leftmost (<b>0</b>) and the rightmost (<b>n + 1</b>) layers both contain <b>only one</b> vertex while every other layer contains exactly <b>m</b> vertices. Vertices are numbered independently in each layer by integers from <b>0</b> to <b>m - 1</b>. For each pair of vertices which are in the adjacent layers (<b>i</b> and <b>i + 1</b> for any <b>i (0 &lt;= i &lt;= n)</b>), there exists an edge. The vertex which is in the layer with smaller number is the initial vertex for such edge and the other one is the terminal vertex.
</p>
<p>
Based on a graph as described above, Chef added <b>k</b> more edges. Each edge connects two vertices which are in the different layers, no matter the adjacent layers or not. Also, each edge is directed from left to right (as well as all previously existing edges).
</p>
<p>
Chef is interested in the number of ways to get from the leftmost layer to the rightmost one. Two paths are considered different if there is, at least, one edge which belongs to exactly one path. However, they are allowed to traverse the same set of vertices. In that case, there should be a multiple edge in the graph. It is also possible if some edge added by Chef connects two adjacent layers.
</p>
<h3>Input</h3>
<p>The first line of the input contains three space-separated integers: <b>n</b>, <b>m</b> and <b>k</b>.</p>
<p><b>k</b> lines follow. Each of them describes one of the <b>k</b> additional edges and contains four space-separated integers <b>edge<sub>i</sub></b> (where <b>0</b> &lt;= <b>i</b> &lt;= <b>3</b>). First two integers are for the initial vertex and the other two - for the terminal one. Two integers each vertex is described by are the number of the layer (<b>edge<sub>0</sub></b> and <b>edge<sub>2</sub></b> respectively) and number of the vertex in its layer (<b>edge<sub>1</sub></b> and <b>edge<sub>3</sub></b> respectively).</p>
<h3>Output</h3>
<p>Output a single integer: the number of ways to reach the last layer from the initial one modulo <b>10<sup>9</sup>+7</b>. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> &lt;= <b>n</b> &lt;= <b>10<sup>12</sup></b></li>
<li><b>1</b> &lt;= <b>m</b> &lt;= <b>10<sup>5</sup></b></li>
<li><b>0</b> &lt;= <b>k</b> &lt;= <b>5 * 10<sup>4</sup></b></li>
<li>for each added edge:
<ul>
<li>Layers: <b>0</b> &lt;= <b>edge<sub>0</sub></b> &lt; <b>edge<sub>2</sub></b> &lt;= <b>n+1</b></li>
<li>Numbers inside the layer: </li>
<li>In general: <b>0</b> &lt;= <b>edge<sub>1</sub></b>, <b>edge<sub>3</sub></b> &lt;= <b>m-1</b></li>
<li>When <b>edge<sub>0</sub></b> = 0, <b>edge<sub>1</sub></b> = 0</li>
<li>When <b>edge<sub>2</sub></b> = <b>n + 1</b>, <b>edge<sub>3</sub></b> = 0</li>
</ul>
</li>
</ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask #1: <b>n</b>, <b>m</b> &lt;= <b>6</b>, <b>k</b> &lt;= <b>2</b> (20 points)</li>
<li>Subtask #2: <b>n</b>, <b>m</b> &lt;= <b>110</b>, <b>k</b> &lt;= <b>30</b> (30 points)</li>
<li>Subtask #3: original constraints (50 points)</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4 2 2
2 1 5 0
0 0 4 0

<b>Output:</b>
19
</pre><h3>Explanation</h3>
<p>Consider the graph without <b>2</b> edges added by Chef. There are <b>16</b> ways to get from the layer <b>#0</b> to the layer <b>#5</b>. Now recall added edges. There are <b>2</b> ways to get from the layer <b>#0</b> to the layer <b>#5</b> using the edge <b>2 1 5 0</b> (0, 0 -> 1, 0 -> 2, 1 -> 5, 0 and 0, 0 -> 1, 1 -> 2, 1 -> 5, 0) and also <b>1</b> way to do it using the edge <b>0 0 4 0</b> (0, 0 -> 4, 0 -> 5, 0). Note, that there is no path traversing both added edges.</p>
