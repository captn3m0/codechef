---
{"category_name":"medium","problem_code":"DIVSET","problem_name":"Divide the Set","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"arpa","problem_tester":null,"date_added":"28-07-2017","tags":{"0":"arpa","1":"binary","2":"ltime50"},"editorial_url":"https://discuss.codechef.com/problems/DIVSET","time":{"view_start_date":1501349400,"submit_start_date":1501349400,"visible_start_date":1501349400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME50/mandarin/DIVSET.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME50/russian/DIVSET.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME50/vietnamese/DIVSET.pdf">vietnamese</a> as well.</h3>

<p>You are given <b>N</b> integers. In each step you can choose some <b>K</b> of the remaining numbers and delete them, if the following condition holds: Let the <b>K</b> numbers you've chosen be <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, <b>a<sub>3</sub></b>, ..., <b>a<sub>K</sub></b> in sorted order. Then, for each i ≤ <b>K</b> - 1, <b>a<sub>i+1</sub></b> must be greater than or equal to <b>a<sub>i</sub> * C</b>.</p>

<p>You are asked to calculate the maximum number of steps you can possibly make.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of each testcase follows.</li>
<li>The first line of each testcase contains three integers: <b>N</b>, <b>K</b>, and <b>C</b></li>
<li>The second line of each testcase contains the <b>N</b> initial numbers</li>
</ul>

<h3>Output</h3>
<p>For each test case output the answer in a new line.</p>

<h3>Subtasks</h3>
<b>Subtask #1</b> (40 points):
<ul>
<li>1 ≤ <b>N</b> ≤ 10<sup>3</sup> </li>
<li>1 ≤ Sum of <b>N</b> over all test cases ≤  10<sup>3</sup> </li>
</ul>
<b>Subtask #2</b> (60 points):
<ul>
<li>Original constraints</li>
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>N</b> ≤ 3 * 10<sup>5</sup></li>
<li>1 ≤ <b>K</b> ≤ 64</li>
<li>2 ≤ <b>C</b> ≤ 50</li>
<li>1 ≤ <b>a<sub>i</sub></b> ≤ 10<sup>18</sup></li>
<li>1 ≤ Sum of <b>N</b> over all test cases ≤  3 * 10<sup>5</sup> </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
6 3 2
4 1 2 2 3 1
6 3 2
1 2 2 1 4 4

<b>Output:</b>
1
2
</pre>

<h3>Explanation</h3>
<p><b>Testcase 1:</b> You can make one step by choosing <b>{1, 2, 4}</b>.</p>
<p><b>Testcase 2:</b> You can make one step by choosing <b>{1, 2, 4}</b> and another by choosing <b>{1, 2, 4}</b>.</p>