---
{"category_name":"medium","problem_code":"ABROADS","problem_name":"Ancient Berland Roads","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"BASH","21":"JS","22":"LISP sbcl","23":"PAS gpc","24":"BF","25":"CLOJ","26":"D","27":"CAML","28":"FORT","29":"ASM","30":"FS","31":"WSPC","32":"LISP clisp","33":"SCM guile","34":"PERL6","35":"ERL","36":"CLPS","37":"ICK","38":"NICE","39":"PRLG","40":"ICON","41":"SCM chicken","42":"PIKE","43":"SCM qobi","44":"ST","45":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sergey_adm","problem_tester":"pavel1996","date_added":"29-10-2015","tags":{"0":"breadth","1":"disjoint","2":"ltime31","3":"medium","4":"sergey_adm","5":"set"},"problem_difficulty_level":"Medium","best_tag":"Breadth First Search","editorial_url":"https://discuss.codechef.com/problems/ABROADS","time":{"view_start_date":1444827600,"submit_start_date":1444827600,"visible_start_date":1444827600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ABROADS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
<h3> Read problems statements in <a target="_blank" href="https://www.codechef.com/download/translated/LTIME31/mandarin/ABROADS.pdf">Mandarin Chinese </a>, <a target="_blank" href="https://www.codechef.com/download/translated/LTIME31/russian/ABROADS.pdf">Russian</a> and <a target="_blank" href="https://www.codechef.com/download/translated/LTIME31/vietnamese/ABROADS.pdf">Vietnamese</a> as well.</h3>

<p>In Ancient Berland, there were <b>N</b> towns, along with <b>M</b> bidirectional roads connecting them. With time, some roads became unusable, and nobody repaired them.</p>
<p>As a person who is fond of Ancient Berland history, you now want to undertake a small research study. For this purpose, you want to write a program capable of processing the following kinds of queries:</p>
<p><ul>
<li><tt>D</tt><b> K</b> : meaning that the road numbered <b>K</b> in the input became unusable. The road numbers are 1-indexed.</li>
<li><tt>P</tt><b> A x</b> : meaning that the population of the <b>A</b><sup>th</sup> town became <b>x</b>.</li>
</ul>
</p>
<p>Let's call a subset of towns a <b>region</b> if it is possible to get from each town in the subset to every other town in the subset by the usable (those, which haven't already been destroyed) roads, possibly, via some intermediary cities of this subset. The <b>population</b> of the region is, then, the sum of populations of all the towns in the region.</p>
<p>You are given the initial road system, the initial population in each town and <b>Q</b> queries, each being one of two types above. Your task is to maintain the size of the most populated region after each query.</p> 

<h3>Input</h3>
<p>The first line of each test case contains three space-separated integers — <b>N</b>, <b>M</b>, and <b>Q</b> — denoting the number of cities, the number of roads, and the number of queries, respectively.</p>

<p>The following line contains <b>N</b> space-separated integers, the <b>i</b><sup>th</sup> of which denotes the initial population of the <b>i</b><sup>th</sup> city.</p>

<p>The <b>j</b><sup>th</sup> of the following <b>M</b> lines contains a pair of space-separated integers — <b>X<sub>j</sub>, Y<sub>j</sub></b> — denoting that there is a bidirectional road connecting the cities numbered <b>X<sub>j</sub></b> and <b>Y<sub>j</sub></b>.</p>

<p>Each of the following <b>Q</b> lines describes a query in one of the forms described earlier.</p>

<h3>Output</h3>
<p>Output <b>Q</b> lines. On the <b>i</b><sup>th</sup> line, output the size of the most populated region after performing <b>i</b> queries.</p>

<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>X<sub>j</sub></b>, <b>Y<sub>j</sub></b> ≤ <b>N</b></li>
<li>Roads' numbers are 1-indexed.</li>
<li>There is no road that gets removed twice or more.</li>
<li><b>1</b> ≤ <b>P<sub>i</sub></b> ≤ <b>10<sup>5</sup></b></li>
<li>Subtask 1 (30 points) : <b>1</b> ≤ <b>N</b>, <b>M</b>, <b>Q</b> ≤ <b>10<sup>3</sup></b></li>
<li>Subtask 2 (70 points) : <b>1</b> ≤ <b>N</b>, <b>M</b>, <b>Q</b> ≤ <b>5 × 10<sup>5</sup></b></li>
</ul>
 </p>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>3 3 6
1 2 3
1 2
2 3
3 1
P 1 3
D 1
P 2 3
D 2
P 3 10
D 3</tt>

<b>Output:</b>
<tt>8
8
9
6
13
10</tt>
</pre>
<p> </p>
<h3>Explanation</h3>
<p>
<ul>
<li>After the first query, the populations are <b>(3, 2, 3)</b> and the most populated region is <b>{1, 2, 3}</b>.</li>
<li>After the second query the populations and the regions remain the same.</li>
<li>After the third query the populations are <b>(3, 3, 3)</b> and the most populated region is again <b>{1, 2, 3}</b>.</li>
<li>After the fourth query the populations remain the same, but we have two regions: <b>{1, 3}</b> and <b>{2}</b>. The most populated region is <b>{1, 3}</b>.</li>
<li>After the fifth query the populations become equal to <b>(3, 3, 10)</b> respectively, and the most populated region is again <b>{1, 3}</b>.</li>
<li>After the last query we have populations the same, but now every city forms it own separate region, and the most populated region is region <b>{3}</b>.</li>
</ul>
</p>
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>