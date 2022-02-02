---
{"category_name":"easy","problem_code":"MINSUBAR","problem_name":"Minimum SubArray","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"chemthan","problem_tester":"kingofnumbers","date_added":"23-10-2017","tags":{"0":"binary","1":"chemthan","2":"chemthan","3":"cook89","4":"easy","5":"likecs","6":"prefix"},"editorial_url":"https://discuss.codechef.com/problems/MINSUBAR","time":{"view_start_date":1514140200,"submit_start_date":1514140200,"visible_start_date":1514140200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK89/mandarin/MINSUBAR.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK89/russian/MINSUBAR.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK89/vietnamese/MINSUBAR.pdf">Vietnamese</a> as well.</h3>

<p>You are given a sequence of <b>n</b> integers <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ..., <b>a<sub>n</sub></b> and an integer <b>d</b>.</p>
<p>Find the length of the shortest non-empty <i>contiguous</i> subsequence with sum of elements at least <b>d</b>. Formally, you should find the smallest positive integer <b>k</b> with the following property: there is an integer <b>s</b> (1 ≤ <b>s</b> ≤ <b>N-k+1</b>) such that <b>a<sub>s</sub> + a<sub>s+1</sub> + ... + a<sub>s+k-1</sub></b> ≥ <b>d</b>.</p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two space-separated integers <b>n</b> and <b>d</b>.</li>
<li>The second line contains <b>n</b> space-separated integers <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ..., <b>a<sub>n</sub></b>.</li>
</ul></p>

<h3>Output</h3>
<p>For each test case, print a single line containing one integer — the length of the shortest contiguous subsequence with sum of elements ≥ <b>d</b>. If there is no such subsequence, print -1 instead.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>n</b> ≤ 10<sup>5</sup></li>
<li>-10<sup>9</sup> ≤ <b>d</b> ≤ 10<sup>9</sup></li>
<li>-10<sup>4</sup> ≤ <b>a<sub>i</sub></b> ≤ 10<sup>4</sup></li>
<li>1 ≤ sum of <b>n</b> over all test cases ≤ 2 · 10<sup>5</sup></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>

2
5 5
1 2 3 1 -5
5 1
1 2 3 1 -5

<b>Output:</b>

2
1
</pre>
