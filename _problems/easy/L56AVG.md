---
{"category_name":"easy","problem_code":"L56AVG","problem_name":"Chef and Average on a Tree","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":"1 - 3","source_sizelimit":50000,"problem_author":"kefaa","problem_tester":"mgch","date_added":"18-01-2018","tags":{"0":"binary","1":"easy","2":"kefaa","3":"ltime56","4":"taran_1407","5":"tree"},"editorial_url":"https://discuss.codechef.com/problems/L56AVG","time":{"view_start_date":1517073000,"submit_start_date":1517073000,"visible_start_date":1517073000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME56/mandarin/L56AVG.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME56/russian/L56AVG.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME56/vietnamese/L56AVG.pdf">Vietnamese</a> as well.</h3>

<p>Chef has a tree with <b>N</b> nodes. Each node of the tree has an integer weight associated with it.</p>

<p>Let's define the <i>cost of a sequence</i> of numbers as the arithmetic mean of all elements of the sequence.</p>

<p>Next, let's define the <i>cost of a path</i> in the tree as the cost of the sequence of weights of all nodes belonging to the path. (It's possible for a path to contain only one node.)</p>

<p>A set of paths in the tree is called a <i>correct path decomposition</i> if each node of the tree belongs to exactly one of the paths from this set. The <i>cost</i> of a correct decomposition is defined as the minimum of costs of all paths in this decomposition.</p>

<p>Chef would like to find the maximum cost of a correct decomposition. Can you help him?</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b>.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b> denoting the weights of nodes of the tree.</li>
<li>Each of the following <b>N-1</b> lines contains two space-separated integers <b>x</b> and <b>y</b> denoting an edge between nodes <b>x</b> and <b>y</b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print the maximum possible cost among all correct decompositions. You answer will be considered correct if its absolute error does not exceed 10<sup>-6</sup>.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 20</li>
<li>1 ≤ <b>N</b> ≤ 100,000</li>
<li>1 ≤ sum of <b>N</b> over all test cases ≤ 200,000</li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 100,000</li>
</ul>

<h3>Subtasks</h3>

<p>
<b>Subtask #1 (15 points, time limit 1 second):</b>
<ul>
<li>1 ≤ <b>N</b> ≤ 200</li>
<li>1 ≤ sum of <b>N</b> over all testcases ≤ 400 </li>
<li>for each <b>i</b> (1 &lt; <b>i</b> ≤ <b>N</b>), there is an edge connecting nodes <b>i</b> and <b>i-1</b></li>
</ul>
</p>

<p>
<b>Subtask #2 (35 points, time limit 1 second):</b>
<ul>
<li>1 ≤ <b>N</b> ≤ 200</li>
<li>1 ≤ sum of <b>N</b> over all test cases ≤ 400</li>
</ul>
</p>

<p>
<b>Subtask #3 (50 points, time limit 3 seconds):</b> original constraints
</p>

<h3>Example</h3>
<pre><b>Input:</b>
	
2
2
2 3
1 2
5
4 3 5 2 1
5 3
1 3
2 1
3 4

<b>Output:</b>

2.5000000
2.6666667
</pre>

<h3> Explanation </h3>

<img src="https://codechef_shared.s3.amazonaws.com/download/upload/LTIME56/AVG-sample.png" alt="https://codechef_shared.s3.amazonaws.com/download/upload/LTIME56/AVG-sample.png" height="300"/>

<p><b>Example case 1:</b> It's better to use one path containing both nodes (blue in the picture above) rather than keep each node in a separate one-node path, since the first way gives decomposition cost equal to (<b>A<sub>1</sub></b> + <b>A<sub>2</sub></b>) / 2 = (2+3) / 2 = 2.5, while the second one gives decomposition cost min(<b>A<sub>1</sub></b> / 1, <b>A<sub>2</sub></b> / 1) = min(2 / 1, 3 / 1) = 2.</p>

<p><b>Example case 2:</b> It's optimal to decompose the tree into three paths (coloured red, green and yellow in the picture). This way, the red path has cost (<b>A<sub>3</sub></b> + <b>A<sub>4</sub></b> + <b>A<sub>5</sub></b>) / 3 = (5 + 2 + 1) / 3 = 8 / 3 = 2.6666667, the green path has cost <b>A<sub>1</sub></b> = 4 and the yellow path has cost <b>A<sub>2</sub></b> = 3. Thus, the cost of this decomposition is 2.6666667.</p>

<p>It's possible to merge the green and yellow paths into one path with cost 3.5 without changing the decomposition cost. Any other decomposition has smaller cost.</p>

<h3>Note</h3>: <p>The multiplier for Python has been decreased from 5 to 3.</p>