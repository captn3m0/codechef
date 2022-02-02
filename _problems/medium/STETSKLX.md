---
{"category_name":"medium","problem_code":"STETSKLX","problem_name":"Chef and Path","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"1 - 6","source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":"laycurse","date_added":"17-07-2015","tags":{"0":"antoniuk1","1":"aug15","2":"binary","3":"divide","4":"medium","5":"minimum","6":"sliding","7":"unrooted"},"editorial_url":"http://discuss.codechef.com/problems/STETSKLX","time":{"view_start_date":1439803800,"submit_start_date":1439803800,"visible_start_date":1439803800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG15/mandarin/STETSKLX.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG15/russian/STETSKLX.pdf">Russian</a>.</h3>
<p>Chef has a <a href="https://en.wikipedia.org/wiki/Tree_(graph_theory)">tree</a> (with <b>N</b> nodes, numbered from <b>1</b> to <b>N</b>) where each edge has some length.</p>
<p>The <i>Chef length</i> of a path is the median of the lengths of all edges along the path. More formally: if we put lengths of all edges from the path into an array and sort it, then the <i>Chef length</i> of this path is the <b>median</b> of this array (element in the middle of the sorted array, and if we have two elements in the middle of the array, then the median is the bigger one). For example, if the array equals <b>{3, 7, 9}</b>, then its median is <b>7</b>, and <b>if the array equals {1, 2, 3, 4}, then the median is 3</b>.</p>
<p>Now, Chef wants to find minimum <i>Chef length</i> among simple paths having at least <b>L</b> and at most <b>R</b> edges. Please help him accomplish this task.</p>
<h3>Input</h3>
<ul>
<li>The first line of input contains an integer <b>T</b> denoting the number of test cases. Description of <b>T</b> test cases follows.</li>
<li>The first line for a test case contains three space-separated integers - <b>N</b>, <b>L</b>, <b>R</b> - denoting the number of nodes in a tree, and the limits on number of edges in any chosen path.</li>
<li>Each of next <b>N − 1</b> lines contains three space-separated integers - <b>a</b>, <b>b</b> and <b>c</b> - describing an edge in the tree. This edge connects vertex <b>a</b> with vertex <b>b</b> and has length <b>c</b>.</li>
</ul>
<h3>Output</h3>
<p>For each test case, output a single line containing the shortest Chef length amongst paths satisfying the given conditions. If there are no paths with at least <b>L</b> and at most <b>R</b> edges, output <b>-1</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5×10<sup>4</sup></b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>10<sup>5<sup></sup></sup></b></li>
<li><b>2</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>a</b>, <b>b</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>c</b> ≤ <b>10<sup>9</sup></b></li>
<li>The sum of <b>N</b> over all the test cases in one file is at most <b>3×10<sup>5</sup></b></li>
<li>The given graph denotes a tree</li>
</ul>
<h3>Subtasks</h3>
<p><b>Subtask 1 (27 points)</b></p>
<ul>
<li>The sum of <b>N</b> over all the test cases in one file is at most <b>1000</b></li>
<li>Time Limit is 1 second</li>
</ul>

<p><b>Subtask 2 (73 points)</b></p>
<ul>
<li>Original constraints</li>
<li>Time Limit is 6 seconds</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
6 2 3
1 3 3
1 2 1
2 4 1
2 5 2
3 6 2
5 3 4
1 2 3
2 3 1
3 4 4
4 5 2

<b>Output:</b>
1
2
</pre><h3>Explanation</h3>
<p><b>Test #1</b></p>
<p>Let's look at all correct simple paths: </p>
<ul>
<li>1-3-6, lengths = <b>{3, 2}</b> => Chef length = <b>3</b></li>
<li>1-2-4, lengths = <b>{1, 1}</b> => Chef length = <b>1</b></li>
<li>1-2-5, lengths = <b>{1, 2}</b> => Chef length = <b>2</b></li>
<li>2-1-3, lengths = <b>{1, 3}</b> => Chef length = <b>3</b></li>
<li>2-1-3-6, lengths = <b>{1, 3, 2}</b> => Chef length = <b>2</b></li>
<li>4-2-5, lengths = <b>{1, 2}</b> => Chef length = <b>2</b></li>
<li>4-2-1-3, lengths = <b>{1, 1, 3}</b> => Chef length = <b>1</b></li>
<li>5-2-1-3, lengths = <b>{2, 1, 3}</b> => Chef length = <b>2</b></li>
</ul>
<p>And the reverse of these paths. So, the smallest value we get is <b>1</b> and it is the answer.</p>
<p><b>Test #2</b></p>
<p>All correct paths:</p>
<ul>
<li>1-2-3-4, lengths = <b>{1, 3, 4}</b> => Chef length = <b>3</b></li>
<li>2-3-4-5, lengths = <b>{1, 2, 4}</b> => Chef length = <b>2</b></li>
<li>1-2-3-4-5, lengths = <b>{1, 2, 3, 4}</b> => Chef length = <b>3</b></li>
</ul>
<p>The shortest Chef length is <b>2</b>.</p>
<h3>Note</h3>
<p>A <i>simple path</i> in a graph is a path which does not have any repeated vertices.</p>
