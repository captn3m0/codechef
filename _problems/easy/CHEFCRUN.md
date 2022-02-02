---
{"category_name":"easy","problem_code":"CHEFCRUN","problem_name":"Chef and Circle Run","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"xcwgf666","date_added":"13-10-2015","tags":{"0":"aug16","1":"berezin","2":"easy","3":"prefix"},"editorial_url":"http://discuss.codechef.com/problems/CHEFCRUN","time":{"view_start_date":1471253400,"submit_start_date":1471253400,"visible_start_date":1471253400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/mandarin/CHEFCRUN.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/russian/CHEFCRUN.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/vietnamese/CHEFCRUN.pdf">Vietnamese</a> as well.</h3>

<p>Chef likes to play with graphs a lot. Today he created a graph in the following way. He first lays down <b>N</b> nodes in a circle. The nodes nodes are numbered from <b>1</b> to <b>N</b>, in the clockwise order, i.e. the node <b>2</b> is followed by <b>1</b>, <b>3</b> is followed by <b>2</b>, and <b>1</b> is followed by <b>N</b>. Two vertices are said to be adjacent if they don't have an intermediate vertex placed between them. There is an edge between each adjacent pair of vertices, so there are total <b>N</b> such edges. Each edge has an integer associated with it (may be negative). 
</p>

<p>Chef wants to find a <b>walk</b> from node <b>start</b> to node <b>end</b> using the above described edges. Chef has to pay cost for each edge in the walk equal to the integer associated with the edge. He wants to minimize the total cost he will incur. Also, Chef does not like to move through an edge more than twice. Find out minimum cost that Chef has to pay.</p>

<p>Note that a walk from a node <b>u</b> to <b>v</b> can contain repeated vertices in it. Please refer to <a href="http://mathworld.wolfram.com/Walk.html"> link</a> for a formal definition.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>

<p>The first line of each test case contains a single integer <b>N</b> denoting the number of nodes. </p>

<p>The second line contains <b>N</b> space-separated integers <b>R<sub>1</sub></b>, <b>R<sub>2</sub></b>, ..., <b>R<sub>N</sub></b> denoting the integer of the rib from node <b>i</b> to node <b>(i % N) + 1</b>. Note that <b>R<sub>N</sub></b> is an integer on a rib from node <b>N</b> to node <b>1</b>. </p>

<p>The third line contains two integers <b>start</b> and <b>end</b> denoting the first and the last node of the walk. </p>

<h3>Output</h3>
<p>For each test case, output a single line containing the minimal possible cost Chef need to pay.</p>

<h3>Constraints</h3>
<p><ul>
<li><b>-10<sup>6</sup></b> ≤ <b>R<sub>i</sub></b> ≤ <b>10<sup>6</sup></b </li>
<li><b>1</b> ≤ <b>start</b> < <b>end</b> ≤ <b>N</b></li>
</ul></p>

<h3>Subtasks</h3>
<p><ul>
<li><b>Subtask #1 (20 points):</b> <b>1</b> ≤ sum of <b>N</b> ≤ <b>20</b>; <b>1</b> ≤ <b>N</b> ≤ <b>8</b></li>

<li><b>Subtask #2 (30 points):</b> <b>1</b> ≤ sum of all <b>N</b> ≤ <b>10<sup>3</sup></b>; <b>1</b> ≤ <b>N</b> ≤ <b>200</b></li>

<li><b>Subtask #3 (50 points):</b> <b>1</b> ≤ sum of all <b>N</b> ≤ <b>10<sup>6</sup></b>; <b>1</b> ≤ <b>N</b> ≤ <b>2 × 10<sup>5</sup></b> </li>
</ul></p>

<h3>Example</h3>
<pre>
<b>Input:</b>
<tt>2
4
1 2 1 1
1 3
5
-5 100 100 100 2
1 5</tt>

<b>Output:</b>
<tt>2
-8</tt>
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> Chef's walk starts with node 1. He goes to node <b>4</b> by incurring a cost of 1. Then from node 4, he goes to node 3 by incurring a cost of 1 more. Total cost incurred is 2.</p>
<p><b>Example case 2.</b> Chef goes from <b>1</b> to <b>2</b> by incurring a cost of <b>-5</b>. Then from <b>2</b> to <b>1</b> using the edge <b>second time</b> and incurring cost of <b>-5</b> again. Now, he can not use the edge between 1 and 2 again, as he has traversed the edge already twice. Now he will go from node 1 to node 4 by paying a cost of 2. Total sum of costs incurred is -5 + -5 + 2 = -8. This is the minimum possible cost that Chef can have.</p> 