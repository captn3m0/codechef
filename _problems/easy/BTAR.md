---
{"category_name":"easy","problem_code":"BTAR","problem_name":"Beautiful Array","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"chemthan","problem_tester":"kingofnumbers","date_added":"19-12-2017","tags":{"0":"chemthan","1":"chemthan","2":"cook89","3":"easy","4":"greedy","5":"likecs"},"editorial_url":"https://discuss.codechef.com/problems/BTAR","time":{"view_start_date":1514140200,"submit_start_date":1514140200,"visible_start_date":1514140200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK89/mandarin/BTAR.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK89/russian/BTAR.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK89/vietnamese/BTAR.pdf">Vietnamese</a> as well.</h3>

<p>A sequence of integers is <i>beautiful</i> if each element of this sequence is divisible by 4.</p>

<p>You are given a sequence <b>a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>n</sub></b>. In one step, you may choose any two elements of this sequence, remove them from the sequence and append their sum to the sequence. Compute the minimum number of steps necessary to make the given sequence beautiful.</p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>n</b>.</li>
<li>The second line contains <b>n</b> space-separated integers <b>a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>n</sub></b>.</li>
</ul></p>

<h3>Output</h3>
<p>For each test case, print a single line containing one number — the minimum number of steps necessary to make the given sequence beautiful. If it's impossible to make the sequence beautiful, print -1 instead.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>n</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ sum of <b>n</b> over all test cases ≤ 10<sup>6</sup></li>
<li>0 ≤ <b>a<sub>i</sub></b> ≤ 10<sup>9</sup></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>

1
7
1 2 3 1 2 3 8

<b>Output:</b>

3
</pre>
