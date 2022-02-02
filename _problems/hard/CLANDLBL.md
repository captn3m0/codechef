---
{"category_name":"hard","problem_code":"CLANDLBL","problem_name":"Chef And Land Labeling","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kamranmaharov ","problem_tester":"r_64","date_added":"6-12-2017","tags":{"0":"feb18","1":"isomorphism","2":"kamranmaharov","3":"medium","4":"number"},"editorial_url":"https://discuss.codechef.com/problems/CLANDLBL","time":{"view_start_date":1518427800,"submit_start_date":1518427800,"visible_start_date":1518427800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/mandarin/CLANDLBL.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/russian/CLANDLBL.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/vietnamese/CLANDLBL.pdf">Vietnamese</a> as well.</h3>

<p>ChefsLand can be viewed as a graph consisting of <b>N</b> cities and bidirectional roads. Each pair of cities is directly connected by a road. Recently, Chef came up with following game to make the Number Theory course more interesting for students in country schools.</p>

<p>At the beginning of each lesson, Chef draws ChefsLand as a graph with <b>N</b> vertices corresponding to cities and <b>N(N-1)/2</b> edges corresponding to roads between them. Then he labels the cities; each city is given a distinct label between 1 and <b>N</b> (inclusive). Next, he labels each edge — the label of the edge between vertices <b>u</b> and <b>v</b> is the common divisor count of <b>lbl<sub>u</sub></b> and <b>lbl<sub>v</sub></b> (the number of positive integers which divide both <b>lbl<sub>u</sub></b> and <b>lbl<sub>v</sub></b>), where <b>lbl<sub>u</sub></b> and <b>lbl<sub>v</sub></b> denote the labels of vertices <b>u</b> and <b>v</b> respectively.</p>

<p>Now, Chef erases the vertex labels, retaining only edge labels in the graph. You, as the number theory student, should find some assignment of labels to vertices which produces a graph with the given edge labels.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of vertices in the graph.</li>
<li>The following <b>N</b> lines describe the labels of edges. For each valid <b>i</b>, the <b>i</b>-th of these lines contains <b>N</b> space-separated integers <b>M<sub>i1</sub>, M<sub>i2</sub>, ..., M<sub>iN</sub></b>; for each valid <b>j</b> ≠ <b>i</b>, <b>M<sub>ij</sub></b> represents the label of the edge connecting vertices <b>i</b> and <b>j</b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print <b>N</b> lines. For each valid <b>i</b>, the <b>i</b>-th of these lines should contain a single integer — the label of the <b>i</b>-th vertex.</p>

<p>If there are multiple solutions, you may output any one.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 1000</li>
<li>for each valid <b>i</b>, <b>M<sub>ii</sub></b> = 0</li>
<li>it's guaranteed that for the given edge labels, at least one possible assignment of labels to vertices exists</li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask #1 (15 points):</b> sum of <b>N</b> for all test cases ≤ 10</p>

<p><b>Subtask #2 (85 points):</b> sum of <b>N</b> for all test cases ≤ 1000</p>

<h3>Example</h3>
<pre><b>Input:</b>

1
4
0 1 1 1
1 0 1 1
1 1 0 2
1 1 2 0

<b>Output:</b>

3
1
2
4
</pre>
