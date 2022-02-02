---
{"category_name":"hard","problem_code":"COUPLES","problem_name":"Couples sit next to each other","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"mgch","date_added":"21-02-2018","tags":{"0":"kingofnumbers","1":"ltime57","2":"med","3":"segment"},"editorial_url":"https://discuss.codechef.com/problems/COUPLES","time":{"view_start_date":1519491600,"submit_start_date":1519491600,"visible_start_date":1519491600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME57/mandarin/COUPLES.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME57/russian/COUPLES.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME57/vietnamese/COUPLES.pdf">Vietnamese</a> as well.</h3>

<p>There are <b>N</b> couples numbered 1 through <b>N</b>. Each couple consists of two people. There are also <b>2N</b> chairs numbered 1 through <b>2N</b>. Each chair has a person sitting on it; for each <b>i</b> (1 ≤ <b>i</b> ≤ <b>2N</b>), the person initially sitting on chair <b>i</b> belongs to couple number <b>A<sub>i</sub></b>. The chairs are placed in a circle, so chairs <b>i</b> and <b>i+1</b> are adjacent for each 1 ≤ <b>i</b> ≤ <b>2N-1</b>; chairs <b>2N</b> and <b>1</b> are also adjacent.</p>

<p>You may perform the following operation any number of times (including zero): choose two people sitting on adjacent chairs and swap them.</p>

<p>We would like all couples to sit on adjacent chairs. Compute the minimum number of operations needed to achieve this.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b>.</li>
<li>The second line contains <b>2N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>2N</sub></b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing one number — the minimum number of operations required to make each couple sit next to each other.</p>


<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 1,000</li>
<li>1 ≤ <b>N</b> ≤ 500,000</li>
<li>1 ≤ sum of <b>N</b> over all test cases ≤ 1,000,000</li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ <b>N</b> for each valid <b>i</b></li>
<li>each number from 1 to <b>N</b> appears in <b>A</b> exactly twice</li>
</ul>

<h3>Subtasks</h3>
<p>
<b>Subtask #1 (35 points):</b>
<ul>
<li><b>N</b> ≤ 1,000</li>
<li>sum of <b>N</b> over all test cases ≤ 5,000</li>
</ul>
</p>

<p>
<b>Subtask #2 (65 points):</b> original constraints
</p>

<h3>Example</h3>
<pre><b>Input:</b>

2
2
1 2 1 2
3
1 2 3 1 3 2

<b>Output:</b>

1
2
</pre>
