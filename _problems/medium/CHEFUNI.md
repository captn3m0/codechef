---
{"category_name":"medium","problem_code":"CHEFUNI","problem_name":"Chef and Universe","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"CPP 4.3.2","9":"CPP 6.3","10":"CPP14","11":"CS2","12":"D","13":"ERL","14":"FORT","15":"FS","16":"GO","17":"HASK","18":"ICK","19":"ICON","20":"JAVA","21":"JS","22":"LISP clisp","23":"LISP sbcl","24":"LUA","25":"NEM","26":"NICE","27":"NODEJS","28":"PAS fpc","29":"PAS gpc","30":"PERL","31":"PERL6","32":"PHP","33":"PIKE","34":"PRLG","35":"PYPY","36":"PYTH","37":"PYTH 3.5","38":"RUBY","39":"SCALA","40":"SCM chicken","41":"SCM guile","42":"SCM qobi","43":"ST","44":"TCL","45":"TEXT","46":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"saluja123","problem_tester":null,"date_added":"30-05-2017","tags":{"0":"dec17","1":"saluja123"},"editorial_url":"https://discuss.codechef.com/problems/CHEFUNI","time":{"view_start_date":1512984600,"submit_start_date":1512984600,"visible_start_date":1512984600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/DEC17/mandarin/CHEFUNI.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/DEC17/russian/CHEFUNI.pdf">Russian</a> and<a target="_blank" 
href="http://www.codechef.com/download/translated/DEC17/vietnamese/CHEFUNI.pdf">Vietnamese</a> as well.</h3>

<p>Chef lives in the Universe in which only planets are present. Every planet is identified by 3 integers [p, q, r]. Chef lives on the planet [0, 0, 0] and wants to go to planet [X, Y, Z] with minimum energy loss.</p>

<p>The energy loss is determined by the following rules:
<ul>
<li>If Chef goes from [p, q, r] to [p+1, q, r] or [p, q+1, r] or [p, q, r+1], then A units of energy are lost.</li>
<li>If Chef goes from [p, q, r] to [p+1, q+1, r] or [p, q+1, r+1] or [p+1, q, r+1], then B units of energy are lost.</li>
<li> If Chef goes from [p, q, r] to [p+1, q+1, r+1], then C units of energy are lost.</li>
</ul>
</p>

<p>Your task is to calculate the minimum energy loss possible when Chef goes from planet [0, 0, 0] to planet [X, Y, Z].</p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The only line of each test case contains 6 space-separated integers denoting the values of <b>X, Y, Z, A, B</b> and <b>C</b> respectively.</li>
</ul></p>

<h3>Output</h3>
<p>For each test case, output a single line containing one integer — the minimum energy loss.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b> T </b> ≤ 10<sup>5</sup></b></li> 
<li>1 ≤ <b>X, Y, Z</b> ≤ 10<sup>5</sup></b></li> 
<li>1 ≤ <b>A, B, C</b> ≤ 10<sup>3</sup></b></li> 
</ul>

<h3>Subtasks</h3>

<p>
<b>Subtask #1 (20 points):</b>
<ul>
<li>1 ≤ <b>T</b> ≤ 50</b></li> 
<li>1 ≤ <b>X, Y, Z</b> ≤ 100</b></li> 
</ul>
</p>

<p>
<b>Subtask #2 (80 points):</b> original constraints
<p>

<h3>Example</h3>
<pre><b>Input:</b>

2
1 2 3 10 1 5
2 2 1 1 2 3

<b>Output:</b>

3
5
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> One of the possible solutions is [0, 0, 0] --&gt;  [1, 0, 1]  --&gt;  [1, 1, 2]  --&gt;  [1, 2, 3]. The minimum energy loss is <b>B</b> + <b>B</b> + <b>B</b> = 3 · <b>B</b> = 3 · 1 = 3.</p>
<p><b>Example case 2:</b> One of the possible solutions is [0, 0, 0] --&gt;  [1, 1, 1]  --&gt;  [2, 2, 1]. The minimum energy loss is <b>C</b> + <b>B</b> = 3 + 2 = 5.</p>