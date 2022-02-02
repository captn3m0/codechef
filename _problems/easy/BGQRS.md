---
{"category_name":"easy","problem_code":"BGQRS","problem_name":"Big Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":"alex_2oo8","date_added":"27-01-2015","tags":{"0":"antoniuk1","1":"chasethered"},"editorial_url":"https://discuss.codechef.com/problems/BGQRS","time":{"view_start_date":1476696600,"submit_start_date":1476696600,"visible_start_date":1476696600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/mandarin/BGQRS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/russian/BGQRS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/vietnamese/BGQRS.pdf">Vietnamese</a> as well.</h3>

<p><b>WARNING: This problem has large input / output files. Use of faster I/O methods is recommended.</b></p>
<p>You are given an array <b>A</b> consisting of <b>N</b> integers. You have to answer <b>M</b> queries on it. Each query belongs to one of the following three types:</p>
<ul>
<li><b>1 L R X</b> : multiply each number in the range <b>A<sub>L</b>, <b>A<sub>L + 1</b>, ..., <b>A<sub>R</b></sub></b> by <b>X</b>.</li>
<li><b>2 L R Y</b> : Replace the elements <b>A<sub>L</b>, <b>A<sub>L + 1</b>, ..., <b>A<sub>R</b></sub></b> by <b>Y, 2 * Y, ... (R - L + 1) * Y</b>. In other words, the number <b>A<sub>i</sub></b> will be equal to <b>(i - L + 1) * Y</b> for each <b>i</b> from <b>L</b> to <b>R</b>.</li>
<li><b>3 L R</b> : Find the product of all numbers in the range <b>A<sub>L</b>, <b>A<sub>L + 1</b>, ..., <b>A<sub>R</b></sub></b>. As this number could be very large, you have to just find the number of trailing zeros of this number when represented in decimal notation.</li>
</ul>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. <b>T</b> test cases follow.</p>
<p>The first line of each test case contains two space-separated integers <b>N</b> and <b>M</b>.</p>
<p>The second line contains <b>N</b> space-separated integers denoting <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b></p>
<p>For next <b>M</b> lines, each line contains a query.<sub></sub></p>
<p>Each query is given by three or four (please refer to the statement) space separated integers.<sub></sub></p>
<p>The first integer denotes type of the query. For every type of query next two integers denote <b>L</b> and <b>R</b>. For each query of type 1, next integer denote <b>X</b>. For each query of type 2, next integer denote <b>Y</b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the sum of answers of all the queries of type 3.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N, M, N + M </b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>N</b><sup></li>
<li><b>1</b> ≤ <b>X, Y, A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (18 points): <b>1 ≤ <b>N, M, X, Y, A<sub>i</sub></b> ≤ 10</b></li>
<li>Subtask #2 (31 points): <b>1 ≤ <b>N, M</b> ≤ 1000</b></li>
<li>Subtask #3 (51 points): <b>original constraints</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
5 5
2 4 3 5 5
3 2 4
3 2 5
2 2 4 1
1 3 3 10
3 1 5

<b>Output:</b>
5
</pre>

<h3>Explanation</h3>
<p>Array: <b>[2, 4, 3, 5, 5]</b></p>
<ul>
<li>1st query: <b>[4, 3, 5]</b>, 4 * 3 * 5 = 60 : answer 1.</li>
<li>2nd query: <b>[4, 3, 5, 5]</b>, 4 * 3 * 5 * 5 = 300 : answer 2.</li>
<li>3rd query: <b>[2, 4, 3, 5, 5] => [2, 1, 2, 3, 5]</b>.</li>
<li>4th query: <b>[2, 1, 2, 3, 5] => [2, 1, 20, 3, 5]</b>.</li>
<li>5th query: <b>[2, 1, 20, 3, 5]</b>, 2 * 1 * 20 * 3 * 5 = 600 - answer 2.</li>
</ul>
<p>Sum of all answers = 5.</p>
