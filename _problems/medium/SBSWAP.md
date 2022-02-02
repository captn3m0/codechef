---
{"category_name":"medium","problem_code":"SBSWAP","problem_name":"Subtree swapping","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"2 - 5","source_sizelimit":50000,"problem_author":"pkacprzak","problem_tester":null,"date_added":"29-12-2016","tags":{"0":"link","1":"ltime43","2":"medium","3":"pkacprzak","4":"sqrt","5":"treap","6":"tree"},"time":{"view_start_date":1483203600,"submit_start_date":1483203600,"visible_start_date":1483203600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME43/mandarin/SBSWAP.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME43/russian/SBSWAP.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME43/vietnamese/SBSWAP.pdf">Vietnamese</a> as well.</h3>

<p>You are given rooted tree with <b>N</b> weighted nodes numbered from <b>1</b> to <b>N</b>. The root of tree is node with number 1. Your goal is to handle <b>Q</b> queries, each of which can be one of the below three types:</p>

<ol>
<li><b>getSum(u)</b> := returns sum of values in nodes in <b>u</b>'s subtree.</li>
<li><b>add(u, x)</b> := adds <b>x</b> to values of every node in <b>u</b>'s subtree (including <b>u</b>).</li>
<li><b>swap(u, v)</b> := swaps whole subtrees of <b>u</b> and <b>v</b> if and only if the subtrees are disjoint.</li>
</ol>

<h3>Input</h3>
<p>The first line of the input contains two space separated integers <b>N</b> and <b>Q</b>, denoting the number of nodes in the tree and the number of queries to handle, respectively.</p>

<p>In the second line there are <b>N</b> space separated integers <b>w<sub>1</sub>, w<sub>2</sub>, ..., w<sub>N</sub></b>, where <b>w<sub>i</sub></b> denotes the value assigned to node <b>i</b> at the beginning.</p>

<p>Each of the following <b>N-1</b> lines contains two space separated integers <b>u</b> and <b>v</b> denoting that there is an edge between <b>u</b> to <b>v</b> in the tree.</p>

<p>The <b>i</b>-th of the following <b>Q</b> lines contains a description of the <b>i</b>-th query. It starts with integer <b>qtype</b> denoting the type of the query. If <b>qtype=1</b>, then it is followed by a single integer denoting the parameter of the query. Otherwise, if <b>qtype=2</b> or <b>qtype=3</b>, it is followed by two space separated integers denoting the parameters to the query.</p>

<h3>Output</h3>
<p>For each query of type 1, output the answer for such a query in a single line. Moreover, output -1 for each query of type 3 for which the given subtrees are not disjoint.</p>

<h3>Constraints</h3>

<p>
<ul>
<li><b>1 ≤ v, u ≤ N</b></li>
<li><b>1 ≤ x ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ w<sub>i</sub> ≤ 10<sup>5</sup></b></li>
</ul>
</p>

<h3>Subtasks</h3>

<p>
<b>Subtask #1: (10 points)</b>
<ul>
<li><b>1 ≤ N ≤ 1000</b></li>
<li><b>1 ≤ Q ≤ 1000</b></li>
</ul>
</p>

<p>
<b>Subtask #2: (20 points)</b>
<ul>
<li><b>1 ≤ N ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ Q ≤ 10<sup>5</sup></b></li>
<li>There are no queries of type 3</li>
<li>Time limit is 4s</li>
</ul>
</p>

<p>
<b>Subtask #3: (70 points)</b>
<ul>
<li><b>1 ≤ N ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ Q ≤ 10<sup>5</sup></b></li>
<li>Time limit is 5s</li>
</ul>
</p>


<h3>Example</h3>
<pre><b>Input:</b>
10 5
1 1 1 1 1 1 1 1 1 1
1 2
1 3
1 8
3 4
8 9
8 10
4 5
4 6
4 7
2 8 1
1 3
3 4 8
1 3
3 1 2

<b>Output:</b>
5
7
-1

</pre>

<h3>Explanation</h3>
<p>The input tree has 10 nodes and each of them has assigned value of 1 at the beginning. Initial tree can be drawn as follows:</p>

<p>
<img src="https://codechef_shared.s3.amazonaws.com/download/Images/LTIME43/15750153_1301041666620483_2119272736_n.png" height="200"/>
</p>
<!-- initial drawing -->

<p>There are 5 queries to handle. The first one adds a value of 1 to all nodes in subtree of 8. The second asks for the sum of values of nodes in subtree of 3, which is 5, because there are 5 nodes there, each with initial value of 1. The 3rd query swaps subtrees of nodes 4 and 8, which is performed as the below drawing illustrates:

<p>
<img src="https://codechef_shared.s3.amazonaws.com/download/Images/LTIME43/15801498_1301041663287150_781091460_n.png" height="200"/>
</p>

<p>
<img src="https://codechef_shared.s3.amazonaws.com/download/Images/LTIME43/15820123_1301041659953817_1549432346_n.png" height="200"/>
</p>

<!-- drawings 2,3,4 -->

This swap can be performed, because these subtrees are disjoint. The 4th query asks for the sum of values of nodes in subtree of 3. Now this subtree has changed and the result is 7, because there is one node with value 1 and 3 nodes with value 2 there. The last query tries to swap subtrees of 1 and 2, but since these subtrees are not disjoint, the answer for this query is -1.