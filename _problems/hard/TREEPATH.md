---
{"category_name":"hard","problem_code":"TREEPATH","problem_name":"Decompose the Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"iscsi","date_added":"27-09-2015","tags":{"0":"bit","1":"fenwick","2":"fenwick","3":"hard","4":"nov15","5":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/TREEPATH","time":{"view_start_date":1447666200,"submit_start_date":1447666200,"visible_start_date":1447666200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/mandarin/TREEPATH.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/russian/TREEPATH.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/vietnmese/TREEPATH.pdf">Vietnamese</a> as well.</h3>
<p>You are given an unrooted tree. There is an integer written on each node of this tree.</p>
<p>Your task is to count the number of ways to decompose this tree to a set of paths in such a way that each node belongs to exactly one path and the sum of numbers associated with all the nodes on any of these path is always non-negative.</p>
<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of nodes.</p>
<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ... , <b>A<sub>N</sub></b> denoting the numbers written on the corresponding nodes. </p>
<p>Each of the following <b>(N-1)</b> lines contain a pair of space-separated integers <b>X<sub>j</sub> Y<sub>j</sub></b> denoting that there is an edge between the nodes numbered <b>X<sub>j</sub></b> and <b>Y<sub>j</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the number of ways to decompose the tree to a set of paths, under the given condition, modulo <b>10<sup>9</sup>+7</b>.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>X<sub>j</sub></b>, <b>Y<sub>j</sub></b> ≤ <b>N</b></li>
</ul>
</p>
<p>Subtask 1 (15 points):</p>
<ul>
<li><b>1</b> ≤ sum of <b>N</b> over test case ≤ <b>10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>-10</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10</b></li>
</ul>

<p>Subtask 2 (16 points):</p>
<ul>
<li><b>1</b> ≤ sum of <b>N</b> over test case ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>3</sup></b></li>
<li><b>-10<sup>4</sup></b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>4</sup></b></li>
</ul>

<p>Subtask 3 (69 points):</p>
<ul>
<li><b>1</b> ≤ sum of <b>N</b> over test case ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>-10<sup>4</sup></b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>4</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>1
4
1 10 5 -1
1 2
1 3
2 4</tt>

<b>Output:</b>
<tt>4</tt>
</pre>
<h3>Explanation</h3>
<p>Let's list all the four possible decompositions:</p>
<ul>
<li>The whole tree is one path. Then, the sum of nodes' associated numbers is 1 + 10 + 5 + (-1) = 15.</li>
<li>One path consists of the nodes with the indices <b>2</b> and <b>4</b>, another one consists of the nodes <b>1</b> and <b>3</b>. Then, the sum of nodes' associated numbers in the first path is 10 + (-1) = 9 and the sum of nodes' numbers in the second path is 1 + 5 = 6.</li>
<li>One path consists of the nodes with the indices <b>1</b>, <b>2</b> and <b>4</b>, another one consists of the node <b>3</b>. Then, the sum of nodes' associated numbers in the first path is 1 + 10 + (-1) = 10 and the sum of nodes' numbers in the second path is 5.</li>
<li>The first path consists of the nodes with the indices <b>2</b> and <b>4</b>, the second one consists of the node <b>1</b>, and the third consists of the node <b>3</b>. Then, the sum of nodes' associated numbers in the first path is 10 + (-1) = 9, the sum of nodes' numbers in the second path is 1, the sum of nodes' numbers in the third path is 5.</li>
</ul>

