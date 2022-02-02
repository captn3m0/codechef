---
{"category_name":"hard","problem_code":"CUTTREE","problem_name":"Chef Cuts Tree","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"31-12-2017","tags":{"0":"centroid","1":"expected","2":"fft","3":"hard","4":"jtnydv25","5":"march18","6":"probability"},"editorial_url":"https://discuss.codechef.com/problems/CUTTREE","time":{"view_start_date":1520847000,"submit_start_date":1520847000,"visible_start_date":1520847000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/mandarin/CUTTREE.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/russian/CUTTREE.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/vietnamese/CUTTREE.pdf">Vietnamese</a> as well.</h3>

<p>
A forest is an undirected acyclic graph. Let us define the <i>strength</i> of a forest as the sum of squares of sizes of its connected components. (Clearly, a tree with <b>n</b> nodes has strength <b>n<sup>2</sup></b>.)</p> 

<p>
Chef has found a tree with <b>N</b> nodes on day 0. On each of the next <b>N-1</b> days, he's going to remove one edge. Let's denote the forest that remains after <b>i</b> days by <b>F<sub>i</sub></b>, for each 1 ≤ <b>i</b> ≤ <b>N-1</b>; also, let's denote the original tree by <b>F<sub>0</sub></b>. On day <b>i</b>, <b>F<sub>i</sub></b> is created by randomly uniformly choosing one edge from <b>F<sub>i-1</sub></b> and removing it.
</p>

<p>
Let <b>E<sub>i</sub></b> be the expected value of strength of the forest <b>F<sub>i</sub></b>, for each 0 ≤ <b>i</b> ≤ <b>N-1</b>. It can be proven that this number can be written in the form <b>P<sub>i</sub></b> / <b>Q<sub>i</sub></b>, where <b>gcd</b>(<b>P<sub>i</sub></b>, <b>Q<sub>i</sub></b>)</b> = 1 and <b>gcd</b>(<b>Q<sub>i</sub></b>, 10<sup>9</sup> + 7) = 1. Let <b>R<sub>i</sub></b> = <b>P<sub>i</sub></b> · <b>Q<sub>i</sub><sup>-1</sup></b> mod 10<sup>9</sup> + 7, where <b>Q<sub>i</sub><sup>-1</sup></b> denotes the modular inverse of <b>Q<sub>i</sub></b> modulo 10<sup>9</sup> + 7.
</p>

<p>
Find the values of <b>R<sub>0</sub>, R<sub>1</sub>, ..., R<sub>N-1</sub></b>.
</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>N</b> — the number of nodes in the tree.</li>
<li><b>N-1</b> lines follow. Each of these lines contains two space-separated integers <b>u</b> and <b>v</b> denoting an edge between nodes <b>u</b> and <b>v</b> in the tree.</li>
</ul>

<h3>Output</h3>
<p>
Print a single line containing <b>N</b> space-separated integers <b>R<sub>0</sub>, R<sub>1</sub>, ..., R<sub>N-1</sub></b>.
</p>

<h3>Constraints</h3>
<ul>
<li> 1 ≤ <b>N</b> ≤ 10<sup>5<sup> </li>
<li> 1 ≤ <b>u</b>, <b>v</b> ≤ <b>N</b> </li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask #1 (25 points):</b> 1 ≤ <b>N</b> ≤ 10<sup>3</sup></p>

<p><b>Subtask #2 (75 points):</b> original constraints</p>

<h3>Example</h3>
<pre><b>Input:</b>

5
1 2
1 3
2 4
2 5

<b>Output:</b>

25 16 333333346 7 5
</pre>
