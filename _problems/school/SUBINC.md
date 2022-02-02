---
{"category_name":"school","problem_code":"SUBINC","problem_name":"Count Subarrays","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"darkshadows","problem_tester":null,"date_added":"9-06-2015","tags":{"0":"darkshadows","1":"dynamic","2":"oct15","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/SUBINC","time":{"view_start_date":1444642200,"submit_start_date":1444642200,"visible_start_date":1444642200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT15/mandarin/SUBINC.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT15/russian/SUBINC.pdf">Russian</a> </h3>

<p>Given an array <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>, count the number of subarrays of array <b>A</b> which are non-decreasing.<br />

A subarray <b>A[i, j]</b>, where <b>1 ≤ i ≤ j ≤ N</b> is a sequence of integers <b>A<sub>i</sub>, A<sub>i+1</sub>, ..., A<sub>j</sub></b>.</p>

<p>A subarray <b>A[i, j]</b> is non-decreasing if <b>A<sub>i</sub> ≤ A<sub>i+1</sub> ≤ A<sub>i+2</sub> ≤ ... ≤ A<sub>j</sub></b>. You have to count the total number of such subarrays.</p>

<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the size of array.</p>

<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the elements of the array.</p>


<h3>Output</h3>
<p>For each test case, output in a single line the required answer.
</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li></ul>

<h3>Subtasks</h3>
<ul>
<li> <b>Subtask 1</b> (20 points) : <b>1</b> ≤ <b>N</b> ≤ <b>100</b>
<li> <b>Subtask 2</b> (30 points) : <b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li> <b>Subtask 3</b> (50 points) : Original constraints</li>
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
4
1 4 2 3
1
5</tt>

<b>Output:</b>
<tt>6
1</tt>
</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b><br/>
All valid subarrays are <b>A[1, 1], A[1, 2], A[2, 2], A[3, 3], A[3, 4], A[4, 4]</b>.<br />
Note that singleton subarrays are identically non-decreasing.
</p>
<p><b>Example case 2.</b><br/>
Only single subarray <b>A[1, 1]</b> is non-decreasing.
</p>
