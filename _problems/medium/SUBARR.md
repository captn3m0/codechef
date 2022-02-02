---
{"category_name":"medium","problem_code":"SUBARR","problem_name":"Perfect Subarrays","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":null,"date_added":"27-11-2013","tags":{"0":"bit","1":"easy","2":"fenwick","3":"kostya_by","4":"ltime07","5":"prefix","6":"segment"},"editorial_url":"http://discuss.codechef.com/problems/SUBARR","time":{"view_start_date":1388305855,"submit_start_date":1388305855,"visible_start_date":1388305800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME07/mandarin/SUBARR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME07/russian/SUBARR.pdf">Russian</a>.</h3>
<p>You are given an array <b>A</b>, which consists of <b>N</b> integers. Also, you have an integer <b>K</b>.
</p>
<p>Let's call a subarray <b>A[L..R]</b> perfect, if the average of the numbers <b>A<sub>L</sub></b>, <b>A<sub>L + 1</sub></b>, ..., <b>A<sub>R - 1</sub></b>, <b>A<sub>R</sub></b> is greater than or equal to <b>K</b>.
</p>
<p>
I.e. the average of the numbers <b>{2, 5, 9, -3}</b> equals to <b>3.25</b>.
</p>
<p>
So, your task is quite simple: you are to count the number of perfect subarrays of <b>A</b>.</p>

<h3>Input</h3>
<p>
The first line contains two integers <b>N</b> and <b>K</b>.<br /><br />
The second line contains <b>N</b> integers, <b>i</b>'th integer denotes <b>A<sub>i</sub></b>. The array <b>A</b> is 1-indexed.
</p>

<h3>Output</h3>
<p>The first line should contain an integer, denoting the number of perfect subarrays of <b>A</b>.</p>
<h3>Example</h3>
<pre><b>Input:</b>
4 2
1 2 3 -1
<b>Output:</b>
4
</pre>
<h3>Explanation</h3>
<p>
In the test case <b>N</b> equals to 4, <b>K</b> equals to 2, <b>A</b> equals to {1, 2, 3, -1}. The following subarrays are perfect: [2..2], [3..3], [2..3], [1..3].
</p>

<h3>Scoring</h3>
<p>
-10<sup>9</sup> ≤ <b>K</b> ≤ 10<sup>9</sup> for each test case;<br /><br />
-10<sup>9</sup> ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup> for each test case;
</p>
<p>
Subtask 1 (10 points): 1 ≤ <b>N</b> ≤ 100;<br /><br />
Subtask 2 (39 points): 1 ≤ <b>N</b> ≤ 6000;<br /><br />
Subtask 3 (11 points): 1 ≤ <b>N</b> ≤ 150 000, <b>K</b> = 0;<br /><br />
Subtask 4 (20 points): 1 ≤ <b>N</b> ≤ 150 000;<br /><br />
Subtask 5 (20 points): 1 ≤ <b>N</b> ≤ 1 000 000;<br />
</p>

