---
{"category_name":"easy","problem_code":"MIXCOLOR","problem_name":"Mix the Colors","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"shivangi_gupta","problem_tester":null,"date_added":"26-02-2018","tags":{"0":"ad","1":"easy","2":"greedy","3":"march18","4":"shivangi_gupta","5":"sorting"},"editorial_url":"https://discuss.codechef.com/problems/MIXCOLOR","time":{"view_start_date":1520847000,"submit_start_date":1520847000,"visible_start_date":1520847000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/mandarin/MIXCOLOR.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/russian/MIXCOLOR.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/vietnamese/MIXCOLOR.pdf">Vietnamese</a> as well.</h3>

<p>Chef likes to mix colors a lot. Recently, she was gifted <b>N</b> colors <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b> by her friend.</p>

<p>Chef wants to make the values of all her colors pairwise distinct, as they will then look stunningly <i>beautiful</i>. In order to achieve that, she can perform the following mixing operation zero or more times:
<ul>
<li>Choose any two colors. Let's denote their values by <b>x</b> and <b>y</b>.</li>
<li>Mix the color with value <b>x</b> into the color with value <b>y</b>. After the mixing, the value of the first color remains <b>x</b>, but the value of the second color changes to <b>x + y</b>.</li>
</ul>
</p>

<p>Find the minimum number of mixing operations Chef needs to perform to make her colors beautiful.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of colors.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b> denoting Chef's initial colors.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing one integer — the minimum number of required mixing operations.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup> for each valid <b>i</b></li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask #1 (30 points):</b> 1 ≤ <b>N</b> ≤ 100</p>

<p><b>Subtask #2 (70 points):</b> original constraints</p>

<h3>Example</h3>
<pre><b>Input:</b>

2
3
1 2 3
3
2 1 2

<b>Output:</b>

0
1
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> No two colors have the same value. Hence, they are already beautiful. No mixing is required.</p>

<p><b>Example case 2:</b> Take the second color (with value <b>x</b> = 1) and mix it into the first color (with value <b>x</b> = 2). After the mixing, the colors will be 3 1 2. Now the colors are beautiful. This is the minimum number of mixing operations that are required. Hence, the answer is 1.</p>
