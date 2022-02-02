---
{"category_name":"medium","problem_code":"TREEDIAM","problem_name":"Product of Diameters","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"harshil7924","date_added":"6-08-2016","tags":{"0":"lca","1":"ltime39","2":"medium","3":"tree","4":"union","5":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/TREEDIAM","time":{"view_start_date":1472317200,"submit_start_date":1472317200,"visible_start_date":1472317200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME39/mandarin/TREEDIAM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME39/russian/TREEDIAM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME39/vietnamese/TREEDIAM.pdf">Vietnamese</a> as well.</h3>


<p>Chef had a tree <b>T</b> with weighted nodes.</p>

<p>One day he decided that he wants to have two trees instead of one. So, he removed one of the edges of <b>T</b>.</p>

<p>The next day, he decided to have three trees instead of two. So, he removed one more edge from some of the trees he had.</p>

<p>And so on. Every day, Chef was removing one, not yet removed edge, util he once got a forest, consisting of <b>N</b> single-node trees.</p>

<p>Chef thinks that the main characteristic of a tree is its' diameter. So he asks you to calculate the product of the diameters in obtained set of trees.</p>

<p>Since the overall product might be quite large, output it modulo <b>10<sup>9</sup>+7</b>.</p>

<h3>Note</h3>

<p>In this problem, we consider the diameter of the tree as the maximum sum of weights of the nodes over all simple paths in this tree.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>N</b> denoting the number of nodes in the tree <b>T</b>.</p>

<p>The following line contains <b>N</b> space-separated integers <b>W<sub>i</sub></b>, denoting the weights of the nodes.</p>

<p>Each of the following <b>(N-1)</b> lines contain two space-separated integers <b>X<sub>i</sub> Y<sub>i</sub></b>.</p>

<p>Each of the following <b>(N-1)</b> lines contain a single integer <b>K<sub>j</sub></b>, denoting the number of the edge that will be deleted on the <b>j</b><sup>th</sup> day.</p>

<h3>Output</h3>
<p>Output <b>N</b> lines.</p>
<p>On the <b>i</b><sup>th</sup> line, output the product of the diameters of all the trees after <b>(i-1)</b> days modulo <b>10<sup>9</sup>+7</b>. Formally, if <b>i > 1</b>, output the product of the diameters of the obtained trees after deleting the edges <b>K<sub>1</sub></b>, <b>K<sub>2</sub></b>, ..., <b>K<sub>i - 1</sub></b>, modulo <b>10<sup>9</sup>+7</b>, otherwise output the diameter of the initial tree.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>W<sub>i</sub></b> ≤ <b>10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>X<sub>i</sub>, Y<sub>i</sub></b> ≤ <b>N</b></li>
<li><b>K</b> is a permutation of the integers from the range <b>[1; N-1]</b>.</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 (16 points)</b>: <b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>Subtask #2 (24 points)</b>: <b>1</b> ≤ <b>N</b> ≤ <b>5000</b></li>
<li><b>Subtask #3 (60 points)</b>: no additional constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>3
1 2 3
1 2
1 3
2
1</tt>

<b>Output:</b>
<tt>6
9
6</tt>
</pre>

<h3>Explanation</h3>
<p>The diameter of the initial tree is <b>6</b> (node <b>2</b> to node <b>1</b> to node <b>3</b>).</p>

<p>After the first day (the deletion of the <b>2</b><sup>nd</sup> edge, i.e. <b>1 3</b>), we get two trees, both with diameters 3.</p>

<p>After the second day (the deletion of the <b>1</b><sup>st</sup> edge, i.e. <b>1 2</b>), we get three trees with diameters <b>1</b>, <b>2</b>, <b>3</b>, and their product equals to <b>6</b>.</p>