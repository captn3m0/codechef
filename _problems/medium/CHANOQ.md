---
{"category_name":"medium","problem_code":"CHANOQ","problem_name":"Chef and odd queries","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"markysha","problem_tester":null,"date_added":"21-01-2018","tags":{"0":"feb18","1":"markysha","2":"medium","3":"persistence","4":"segment","5":"sqrt"},"editorial_url":"https://discuss.codechef.com/problems/CHANOQ","time":{"view_start_date":1518427800,"submit_start_date":1518427800,"visible_start_date":1518427800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/mandarin/CHANOQ.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/russian/CHANOQ.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/vietnamese/CHANOQ.pdf">Vietnamese</a> as well.</h3>

<p>Chef has <b>N</b> segments. For each <b>i</b> (1 ≤ <b>i</b> ≤ <b>N</b>), the <b>i</b>-th segment starts at point <b>L<sub>i</sub></b> and ends at point <b>R<sub>i</sub></b> (let's denote it by [<b>L<sub>i</sub></b>,  <b>R<sub>i</sub></b>]).</p>

<p>Let's say that a segment [<b>l</b>, <b>r</b>] crosses a point <b>x</b> if <b>l</b> ≤ <b>x</b> ≤ <b>r</b>.</p>

<p>Chef wants you to answer <b>Q</b> queries. In each query, you are given a set of <b>M</b> distinct points <b>X<sub>1</sub>, X<sub>2</sub>, ..., X<sub>M</sub></b>; you should compute the number of good segments [<b>L<sub>i</sub></b>, <b>R<sub>i</sub></b>] among the given <b>N</b> segments. A segment is <i>good</i> if it crosses an <b>odd</b> number of points out of the given <b>M</b> points.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of segments.</li>
<li>The following <b>N</b> lines describe the segments. For each <b>i</b>, the <b>i</b>-th of these lines contains two space-separated integers <b>L<sub>i</sub></b> and <b>R<sub>i</sub></b>.</li>
<li>The next line contains a single integer <b>Q</b> denoting the number of queries.</li>
<li>The following <b>Q</b> lines describe the queries. Each of these lines starts with an integer <b>M</b> — the number of points in this query, followed by <b>M</b> space-separated integers <b>X<sub>1</sub>, X<sub>2</sub>, ..., X<sub>M</sub></b>.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>Q</b> ≤ <b>N</b> ≤ 100,000</li>
<li>sum of <b>M</b> for all queries ≤ <b>N</b></li>
<li>sum of <b>N</b> over all test cases ≤ 200,000</li>
<li>1 ≤ <b>X<sub>i</sub></b> ≤ <b>N</b> for each valid <b>i</b></li>
<li>all <b>X<sub>i</sub></b> in each query are distinct</li>
<li>1 ≤ <b>L<sub>i</sub></b> ≤ <b>R<sub>i</sub></b> ≤ <b>N</b> for each valid <b>i</b></li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask #1 (10 points):</b> <b>N</b>, <b>Q</b> ≤ 300</p>

<p><b>Subtask #2 (90 points):</b> original constraints</p>

<h3>Output</h3>
<p>For each query, print a single line containing the number of good segments for that query.</p>

<h3><b>Example</b></h3>
<pre><b>Input:</b>

2
5
4 5
3 5
2 4
1 3
5 5
2
4 1 2 3 4
1 4
5
4 5
3 5
2 4
2 3
5 5
2
2 2 5
3 1 2 5

<b>Output:</b>

3
3
5
5
</pre>
