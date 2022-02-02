---
{"category_name":"medium","problem_code":"CHEFEXQ","problem_name":"Chef And Easy Xor Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"yb4singh","problem_tester":null,"date_added":"24-11-2017","tags":{"0":"dec17","1":"yb4singh"},"editorial_url":"https://discuss.codechef.com/problems/CHEFEXQ","time":{"view_start_date":1512984600,"submit_start_date":1512984600,"visible_start_date":1512984600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/DEC17/mandarin/CHEFEXQ.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/DEC17/russian/CHEFEXQ.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/DEC17/vietnamese/CHEFEXQ.pdf">Vietnamese</a> as well.</h3>

<p>Chef always likes to play with arrays. He came up with a new term <b><i>"magical subarray"</i></b>. A subarray is called magical if its starting index is <b>1</b> (1-based indexing). Now, Chef has an array of <b>N</b> elements and 2 types of queries:
<ul>
<li><b>type 1:</b> Given two numbers <b>i</b> and <b>x</b>, the value at index <b>i</b> should be updated to <b>x</b>.</li>
<li><b>type 2:</b> Given two numbers <b>i</b> and <b>k</b>, your program should output the total number of <i>magical</i> subarrays with the last index ≤ <b>i</b> in which the xor of all elements is equal to <b>k</b>.</li>
</ul>
</p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains two integers <b>N</b> and <b>Q</b> denoting the number of elements in the array and the number of queries respectively.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub> ... A<sub>N</sub></b> denoting the initial values of the array.</il>
<li>Each of the following <b>Q</b> lines describes an operation. If the first integer is <b>1</b>, it means that the operation is of <b>type 1</b> and it will be followed by two integers <b>i</b> and <b>x</b>. If the first integer is <b>2</b>, it means that the operations is of <b>type 2</b> and it will be followed by two integers <b>i</b> and <b>k</b>.</li>
</ul></p>

<h3>Output</h3>
<p>For each operation of type 2, print the number of magical subarrays on a separate line.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N, Q</b> ≤ 100,000</li>
<li>1 ≤ <b>A[i]</b> ≤ 1,000,000</li>
<li>1 ≤ <b>i</b> ≤ <b>N</b></li>
<li>1 ≤ <b>x, k</b> ≤ 1,000,000</li>
</ul>

<h3>Subtasks</h3>

<p>
<b>Subtask #1 (20 points):</b> 1 ≤ <b>N, Q</b> ≤ 1,000
</p>
<p>
<b>Subtask #2 (30 points):</b> 1 ≤ <b>N, Q</b> ≤ 10,000
</p>
<p>
<b>Subtask #3 (50 points):</b> original constraints
</p>

<h3>Example</h3>
<pre><b>Input:</b>

5 3
1 1 1 1 1
2 5 1
1 3 2
2 5 1

<b>Output:</b>

3
1
</pre>