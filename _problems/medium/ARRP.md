---
{"category_name":"medium","problem_code":"ARRP","problem_name":"Partitions","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"lg5293","date_added":"27-03-2018","tags":{"0":"easy","1":"ltime58","2":"maths","3":"mgch","4":"sieve","5":"sum"},"time":{"view_start_date":1522602000,"submit_start_date":1522602000,"visible_start_date":1522602000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME58/mandarin/ARRP.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME58/russian/ARRP.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME58/vietnamese/ARRP.pdf">Vietnamese</a> as well.</h3>

<p>
You are given an array <b>A</b> with size <b>N</b>. For each <b>K</b> between 1 and <b>N</b> (inclusive), find out if it is possible to partition (split) the array <b>A</b> into <b>K</b> contiguous subarrays such that the sum of elements within each of these subarrays is the same. Each element of the original array should belong to exactly one subarray.
</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b>.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing <b>N</b> characters. For each <b>K</b> (1 ≤ <b>K</b> ≤ <b>N</b>), the <b>K</b>-th of these characters should be '1' if it is possible to partition the array in the desired way or '0' if it is impossible.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 1,000,000</li>
<li>1 ≤ <b>N</b> ≤ 1,000,000</li>
<li>1 ≤ sum of <b>N</b> over all test cases ≤ 1,000,000</li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup> for each valid <b>i</b></li>
</ul>

<h3>Subtasks</h3>
<p>
<b>Subtask #1 (30 points):</b> sum of <b>N</b> over all test cases ≤ 10,000
</p>

<p>
<b>Subtask #2 (70 points):</b> original constraints
</p>

<h3>Example</h3>
<pre><b>Input:</b>

3
5
1 4 2 3 5
4
1 1 1 1
4
1 1 2 2

<b>Output:</b>

10100
1101
1010
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> There are two possible partitions: into exactly 1 array (with sum 1+4+3+2+5) or into exactly 3 arrays (with sums 1+4 = 2+3 = 5).</p>
