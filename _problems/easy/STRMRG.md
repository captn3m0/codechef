---
{"category_name":"easy","problem_code":"STRMRG","problem_name":"String Merging","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"2-01-2018","tags":{"0":"dynamic","1":"easy","2":"jan18","3":"kingofnumbers","4":"kingofnumbers"},"editorial_url":"https://discuss.codechef.com/problems/STRMRG","time":{"view_start_date":1516008600,"submit_start_date":1516008600,"visible_start_date":1516008600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JAN18/mandarin/STRMRG.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JAN18/russian/STRMRG.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JAN18/vietnamese/STRMRG.pdf">Vietnamese</a> as well.</h3>

<p>For a string <b>S</b>, let's define a function <b>F</b>(<b>S</b>) as the minimum number of blocks consisting of consecutive identical characters in <b>S</b>. In other words, <b>F</b>(<b>S</b>) is equal to 1 plus the number of valid indices <b>i</b> such that <b>S<sub>i</sub></b> ≠ <b>S<sub>i+1</sub></b>.</p>

<p>You are given two strings <b>A</b> and <b>B</b> with lengths <b>N</b> and <b>M</b> respectively. You should merge these two strings into one string <b>C</b> with length <b>N+M</b>. Specifically, each character of <b>C</b> should come either from <b>A</b> or <b>B</b>; all characters from <b>A</b> should be in the same relative order in <b>C</b> as in <b>A</b> and all characters from <b>B</b> should be in the same relative order in <b>C</b> as in <b>B</b>.</p>

<p>Compute the minimum possible value of <b>F</b>(<b>C</b>).</p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two space-separated integers <b>N</b> and <b>M</b>.</li>
<li>The second line contains a single string <b>A</b> with length <b>N</b>.</li>
<li>The third line contains a single string <b>B</b> with length <b>M</b>.</li>
</ul></p>

<h3>Output</h3>
<p>For each test case, print a single line containing one integer — the minimum possible value of <b>F</b>(<b>C</b>).</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>N</b>, <b>M</b> ≤ 5,000</li>
<li>1 ≤ sum of <b>N</b> in all test cases ≤ 5,000</li>
<li>1 ≤ sum of <b>M</b> in all test cases ≤ 5,000</li>
<li>strings <b>A</b>, <b>B</b> consist only of lowercase English letters</li>
</ul>

<h3>Subtasks</h3>

<p>
<b>Subtask 1 (10 points):</b> 1 ≤ <b>T</b>, <b>N</b>, <b>M</b> ≤ 10
</p>

<p>
<b>Subtask 2 (20 points):</b> the characters of <b>A</b> and <b>B</b> are sorted in non-decreasing order
</p>

<p>
<b>Subtask 3 (70 points):</b> original constraints
</p>

<h3>Example</h3>
<pre><b>Input:</b>

1
4 4
abab
baba

<b>Output:</b>

5
</pre>

<h3>Explanation</h3>

<p><b>Example case 1:</b> One possible way to choose the string <b>C</b> to get the desired answer is "abbaabba".</p>
