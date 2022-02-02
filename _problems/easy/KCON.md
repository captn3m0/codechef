---
{"category_name":"easy","problem_code":"KCON","problem_name":"K-Concatenation","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"hruday968","problem_tester":null,"date_added":"28-12-2017","tags":{"0":"easy","1":"hruday968","2":"hruday968","3":"jan18"},"editorial_url":"https://discuss.codechef.com/problems/KCON","time":{"view_start_date":1516008600,"submit_start_date":1516008600,"visible_start_date":1516008600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JAN18/mandarin/KCON.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JAN18/russian/KCON.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JAN18/vietnamese/KCON.pdf">Vietnamese</a> as well.</h3>

<p>You are given an array <b>A</b> with size <b>N</b> (indexed from 0) and an integer <b>K</b>. Let's define another array <b>B</b> with size <b>N</b> · <b>K</b> as the array that's formed by concatenating <b>K</b> copies of array <b>A</b>.</p>

<p>For example, if <b>A</b> = {1, 2} and <b>K</b> = 3, then <b>B</b> = {1, 2, 1, 2, 1, 2}.</p>

<p>You have to find the maximum subarray sum of the array <b>B</b>. Fomally, you should compute the maximum value of <b>B<sub>i</sub> + B<sub>i+1</sub> + B<sub>i+2</sub> + ... + B<sub>j</sub></b>, where 0 ≤ <b>i</b> ≤ <b>j</b> &lt; <b>N</b> · <b>K</b>.</p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two space-separated integers <b>N</b> and <b>K</b>.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>0</sub>, A<sub>1</sub>, ..., A<sub>N-1</sub></b>.</li>
</ul></p>

<h3>Output</h3>
<p>For each test case, print a single line containing the maximum subarray sum of <b>B</b>.</p> 

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>K</b> ≤ 10<sup>5</sup></li>
<li>-10<sup>6</sup> ≤ <b>A<sub>i</sub></b> ≤ 10<sup>6</sup> for each valid <b>i</b></li>
</ul>

<h3>Subtasks</h3>

<p>
<b>Subtask #1 (18 points):</b> <b>N</b> · <b>K</b> ≤ 10<sup>5</sup>
</p>
	
<p>
<b>Subtask #2 (82 points):</b> original constraints
</p>


<h3>Example</h3>
<pre><b>Input:</b>

2
2 3
1 2
3 2
1 -2 1

<b>Output:</b>

9
2
</pre>

<h3>Explanation</h3>

<p><b>Example case 1:</b> <b>B</b> = {1, 2, 1, 2, 1, 2} and the subarray with maximum sum is the whole {1, 2, 1, 2, 1, 2}. Hence, the answer is 9.</p>

<p><b>Example case 2:</b> <b>B</b> = {1, -2, 1, 1, -2, 1} and the subarray with maximum sum is {1, 1}. Hence, the answer is 2.</p>
