---
{"category_name":"medium","problem_code":"DGTCNT","problem_name":"Chef and Digits","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"acyume","problem_tester":null,"date_added":"16-09-2016","tags":{"0":"acyume","1":"april17"},"editorial_url":"https://discuss.codechef.com/problems/DGTCNT","time":{"view_start_date":1492421400,"submit_start_date":1492421400,"visible_start_date":1492421400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/mandarin/DGTCNT.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/russian/DGTCNT.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/vietnamese/DGTCNT.pdf">Vietnamese</a> as well.</h3>

<p>Chef loves integers, but of course not all of them. For some personal reason, he considers the integers <b>a</b><sub>0</sub>, <b>a</b><sub>1</sub>, ..., and <b>a</b><sub>9</sub> unlucky. If for an integer x, suppose there exists some digit i (0 ≤ i ≤ 9) which appears exactly <b>a</b><sub>i</sub> times in the decimal presentation of x (without leading zeros), then Chef dislikes x. Otherwise Chef loves it.</p>

<p>Chef wants to count the number of the integers between <b>L</b> and <b>R</b>, both inclusive, which he loves. Can you please help him in this?</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follow.</p>
<p>The first line of each test case contains two space separated integers <b>L, R</b>. </p>
<p>The second line will contain exactly 10 space separated integers, the i-th integer denotes <b>a</b><sub>i-1</sub>.</p>

<h3>Output</h3>
<p>For each test case, output an integer corresponding to the answer, in a new line.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 20</li>
<li>1 ≤ <b>L</b> ≤ <b>R</b> ≤ 10<sup>18</sup></li>
<li>0 ≤ <b>a</b><sub>i</sub> ≤ 18</li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask #1 (25 points)</b>
<ul>
<li>1 ≤ <b>L</b> ≤ <b>R</b> ≤ 10<sup>5</sup></li>
</ul></p>
<p><b>Subtask #2 (15 points)</b>
<ul>
<li><b>a</b><sub>i</sub> = 0, for all i</li>
</ul></p>

<p><b>Subtask #3 (60 points)</b>
<ul>
<li>1 ≤ <b>L</b> ≤ <b>R</b> ≤ 10<sup>18</sup></li>
</ul></p>

<h3>Example</h3>
<pre><b>Input</b>
2
21 28
5 4 3 2 1 1 2 3 4 5
233 23333
2 3 3 3 3 2 3 3 3 3

<b>Output</b>
6
19627
</pre>

<h3>Explanation</h3>
<p><b>In example 1</b>. Chef dislikes the integers 24 because the digit 4 appears exactly 1 time in 24, and <b>a</b><sub>4</sub> = 1. Similarly, he also dislikes the integer 25 because the digit 5 appears exactly 1 time in 25 and <b>a</b><sub>5</sub> = 1. These are the only two integers which Chef dislikes in the range [21,28]. Thus Chef loves the integers 21, 22, 23, 26, 27, and 28</b>. Therefore the answer is 6.</p>