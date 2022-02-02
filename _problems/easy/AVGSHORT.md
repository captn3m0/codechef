---
{"category_name":"easy","problem_code":"AVGSHORT","problem_name":"Short in Average","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"harshil7924","date_added":"6-08-2016","tags":{"0":"bellman","1":"easy","2":"graph","3":"ltime39","4":"shortest","5":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/AVGSHORT","time":{"view_start_date":1472317200,"submit_start_date":1472317200,"visible_start_date":1472317200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME39/mandarin/AVGSHORT.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME39/russian/AVGSHORT.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME39/vietnamese/AVGSHORT.pdf">Vietnamese</a> as well.</h3>


<p>There are a lot of problems related to the shortest paths. Nevertheless, there are not much problems, related to the shortest paths <i>in average</i>.</p>

<p>Consider a directed graph <b>G</b>, consisting of <b>N</b> nodes and <b>M</b> edges. Consider a walk from the node <b>A</b> to the node <b>B</b> in this graph. The average length of this walk will be total sum of weight of its' edges divided by number of edges. Every edge counts as many times as it appears in this path.</p>

<p>Now, your problem is quite simple. For the given graph and two given nodes, find out the shortest average length of the walk between these nodes. Please note, that the length of the walk need not to be finite, but average walk length will be.</p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>

<p>The first line of each test case contains a pair of space-separated integers <b>N</b> and <b>M</b> denoting the number of nodes and the number of edges in the graph.</p>
<p>Each of the following <b>M</b> lines contains a triple of space-separated integers <b>X<sub>i</sub> Y<sub>i</sub> Z<sub>i</sup></b>, denoting the arc, connecting the node <b>X<sub>i</sub></b> to the node <b>Y<sub>i</sub></b> (but not vice-versa!) having the weight of <b>Z<sub>i</sub></b>.</p>
<p>The next line contains a pair of space separated integers <b>A</b> and <b>B</b>, denoting the first and the last node of the path.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the length of the shortest path <i>in average</i>.</p>
<p>If there is no path at all, output just <b>-1</b> on the corresponding line of the output.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>500</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>1000</b></li>
<li><b>A</b> is not equal to <b>B</b></li>
<li><b>1</b> ≤ <b>A</b>, <b>B</b>, <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>Z<sub>i</sub></b> ≤ <b>100</b></li>
<li>There are no self-loops and multiple edges in the graph.</li>
<li><b>1</b> ≤ sum of <b>N</b> over all test cases ≤ <b>10000</b></li>
<li><b>1</b> ≤ sum of <b>M</b> over all test cases ≤ <b>20000</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 (45 points)</b>: <b>1</b> ≤ <b>N</b> ≤ <b>10</b>, <b>1</b> ≤ <b>M</b> ≤ <b>20</b>; Your answer will be considered correct in case it has an absolute or relative error of no more than <b>10<sup>-2</sup></b>.</li>

<li><b>Subtask #2 (55 points)</b>: no additional constraints; Your answer will be considered correct in case it has an absolute or relative error of no more than <b>10<sup>-6</sup></b>.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
3 3
1 2 1
2 3 2
3 2 3
1 3
3 3
1 2 10
2 3 1
3 2 1
1 3</tt>

<b>Output:</b>
<tt>1.5
1.0</tt>
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> The walk 1 -> 2 and 2 -> 3 has average length of 3/2 = 1.5. Any other walks in the graph will have more or equal average length than this.</p>