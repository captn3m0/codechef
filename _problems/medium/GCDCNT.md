---
{"category_name":"medium","problem_code":"GCDCNT","problem_name":"Chef and Gcd Queries","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vipsharmavip","problem_tester":null,"date_added":"31-01-2018","tags":{"0":"inclusion","1":"march18","2":"medium","3":"mobius","4":"vipsharmavip"},"editorial_url":"https://discuss.codechef.com/problems/GCDCNT","time":{"view_start_date":1520847000,"submit_start_date":1520847000,"visible_start_date":1520847000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/mandarin/GCDCNT.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/russian/GCDCNT.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/vietnamese/GCDCNT.pdf">Vietnamese</a> as well.</h3>

<p>Chef likes solving problems involving a lot of queries with numbers. One day, he found a new problem which he finds difficult to solve. Therefore, he's asking for your help!</p>

<p>You are given a sequence <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> and <b>Q</b> queries. There are two types of queries:
<ul> 
<li>1 <b>X</b> <b>Y</b> — Set <b>A<sub>X</sub></b> = <b>Y</b>.</li>
<li>2 <b>L</b> <b>R</b> <b>G</b> — Compute the number of indices <b>i</b> such that <b>L</b> ≤ <b>i</b> ≤ <b>R</b> and <b>gcd</b>(<b>G</b>, <b>A<sub>i</sub></b>) = 1.</li>
</ul></p>

<p>
Find the answer to each query of the second type.
</b>

<p>Note: <b>gcd</b>(<b>X</b>, <b>Y</b>) denotes the greatest common divisor — the highest positive integer which divides both <b>X</b> and <b>Y</b>.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>N</b> denoting the number of elements in the sequence.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>.</li>
<li>The third line contains a single integer <b>Q</b> denoting the number of queries.</li>
<li>Each of the following <b>Q</b> lines describes one query in the following format:
<ul>
<li>1 <b>X</b> <b>Y</b> for a query of the first type</li>
<li>2 <b>L</b> <b>R</b> <b>G</b> for a query of the second type</li>
</ul>
</li>
</ul>

<h3>Output</h3>
<p>For each query of type 2, print a single line containing one integer - the answer to the query.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b>, <b>Q</b> ≤ 5 · 10<sup>4</sup></li>
<li>1 ≤ <b>L</b> ≤ <b>R</b> ≤ <b>N</b></li>
<li>1 ≤ <b>X</b> ≤ <b>N</b></li>
<li>1 ≤ <b>Y</b>, <b>G</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>5</sup> for each valid <b>i</b></li>
</ul>


<h3>Subtasks  </h3>
<p><b>Subtask #1 (15 points):</b> 1 ≤ <b>N</b>, <b>Q</b> ≤ 1000</p>
<p><b>Subtask #2 (85 points):</b> original constraints</p>

<h3>Example</h3>
<pre><b>Input:</b>

4
2 3 4 5
3
2 1 4 2
1 2 6
2 1 4 2

<b>Output:</b>

2
1
</pre>

<h3>Explanation</h3>
<p>In the first query, <b>gcd</b>(<b>A<sub>2</sub></b>, 2) = 1 and <b>gcd</b>(<b>A<sub>4</sub></b>, 2) = 1, so the answer is 2.</p>
<p>In the third query, only <b>gcd</b>(<b>A<sub>4</sub></b>, 2) is equal to 1, so the answer is 1.</p>
