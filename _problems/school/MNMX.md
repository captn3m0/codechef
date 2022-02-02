---
{"category_name":"school","problem_code":"MNMX","problem_name":"Minimum Maximum","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"minimario","date_added":"11-08-2015","tags":{"0":"ad","1":"cakewalk","2":"ltime27","3":"ma5termind"},"editorial_url":"http://discuss.codechef.com/problems/MNMX","time":{"view_start_date":1440923400,"submit_start_date":1440923400,"visible_start_date":1440923400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME27/mandarin/MNMX.pdf">Mandarin Chinese </a> , <a target="_blank" href="http://www.codechef.com/download/translated/LTIME27/russian/MNMX.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME27/vietnamese/MNMX.pdf">Vietnamese</a></h3>

<p>Chef loves to play with arrays by himself. Today, he has an array <b>A</b> consisting of <b>N</b> distinct integers. He wants to perform the following operation on his array <b>A</b>.</p>
<p><ul>
<li>Select a pair of adjacent integers and remove the larger one of these two. This decreases the array size by 1. Cost of this operation will be equal to the smaller of them.
</li>
</ul>
</p>
<p>Find out minimum sum of costs of operations needed to convert the array into a single element.</p>

<h3>Input</h3>
<p>First line of input contains a single integer <b>T</b> denoting the number of test cases. First line of each test case starts with an integer <b>N</b> denoting the size of the array <b>A</b>. Next line of input contains <b>N</b> space separated integers, where the <b>i<sup>th</sup></b> integer denotes the value <b>A<sub>i</sub></b>.</p>

<h3>Output</h3>
<p>For each test case, print the minimum cost required for the transformation.</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10 </b></li>
<li><b>2 ≤ N ≤ 50000 </b></li>
<li><b>1 ≤ A<sub>i</sub> ≤ 10<sup>5</sup> </b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask 1 :</b> 2 ≤ N ≤ 15<b> : 35 pts </b></li>
<li><b>Subtask 2 :</b> 2 ≤ N ≤ 100<b> : 25 pts </b></li>
<li><b>Subtask 3 :</b> 2 ≤ N ≤ 50000<b> : 40 pts </b></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
2
2
3 4
3
4 2 5

<b>Output</b>
3
4
</pre>

<h3>Explanation</h3>
<b>Test 1 : </b> Chef will make only 1 move: pick up both the elements (that is, 3 and 4), remove the larger one (4), incurring a cost equal to the smaller one (3).