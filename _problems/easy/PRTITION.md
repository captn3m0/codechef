---
{"category_name":"easy","problem_code":"PRTITION","problem_name":"Partition the numbers","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"4-01-2018","tags":{"0":"easy","1":"jan18","2":"kingofnumbers","3":"kingofnumbers"},"editorial_url":"https://discuss.codechef.com/problems/PRTITION","time":{"view_start_date":1516008600,"submit_start_date":1516008600,"visible_start_date":1516008600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JAN18/mandarin/PRTITION.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JAN18/russian/PRTITION.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JAN18/vietnamese/PRTITION.pdf">Vietnamese</a> as well.</h3>

<p>You are given two integers <b>x</b> and <b>N</b>. Consider all integers between 1 and <b>N</b> inclusive, except <b>x</b>. We want to partition these integers into two disjoint sets (each integer has to appear in exactly one set) such that the sums of numbers in these sets are equal.</p>
<p>Find one valid partition or determine that it doesn't exist.</p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first and only line of each test case contains two space-separated integers <b>x</b> and <b>N</b>.</li>
</ul></p>

<h3>Output</h3>
<p>For each test case:
<ul>
<li>If there's no way to partition the numbers into two sets with equal sums, print a single line containing the string <tt>"impossible"</tt> (without quotes).</li>
<li>Otherwise, print a single line containing a string with length <b>N</b>.</li>
<li>The <b>x</b>-th character of this string should be <b>'2'</b>.</li>
<li>For each valid <b>i</b> ≠ <b>x</b>, the <b>i</b>-th character of this string should be <b>'0'</b> if number <b>i</b> should be in the first set or <b>'1'</b> if it should be in the second set.</li>
</ul></p>

<h3>Constraints</h3>

<ul>
<li>1 ≤ <b>T</b> ≤ 10,000</li>
<li>2 ≤ <b>N</b> ≤ 1,000,000</li>
<li>1 ≤ <b>x</b> ≤ <b>N</b> </li>
<li>1 ≤ sum of <b>N</b> in all test cases ≤ 1,000,000</li>
</ul>

<h3>Subtasks</h3>

<p>
<b>Subtask #1 (20 points):</b> sum of <b>N</b> in all test cases ≤ 50
</p>

<p>
<b>Subtask #2 (80 points):</b> original constraints
</p>

<h3>Example</h3>
<pre><b>Input:</b>

3
2 4
5 5
1 2

<b>Output:</b>

0201
01102
impossible
</pre>
