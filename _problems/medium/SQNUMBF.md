---
{"category_name":"medium","problem_code":"SQNUMBF","problem_name":"Square in numbers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"karanaggarwal","date_added":"13-06-2016","tags":{"0":"ltime37","1":"medium","2":"number","3":"pavel1996"},"editorial_url":"http://discuss.codechef.com/problems/SQNUMBF","time":{"view_start_date":1466874000,"submit_start_date":1466874000,"visible_start_date":1466874000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME37/mandarin/SQNUMBF.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME37/russian/SQNUMBF.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME37/vietnamese/SQNUMBF.pdf">Vietnamese</a> as well.</h3>
<p>Leha is a bright mathematician. Today he is investigating whether an integer is divisible by some square number or not.</p>
<p>He has a positive integer <b>X</b> represented as a product of <b>N</b> integers <b>a<sub>1</sub>, a<sub>2</sub>, .... a<sub>N</sub></b>. He has somehow figured out that there exists some integer <b>P</b> such that the number <b>X</b> is divisible by <b>P<sup>2</sup></b>, but he is not able to find such <b>P</b> himself. Can you find it for him? If there are more than one possible values of <b>P</b> possible, you can print any one of them.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. <b>T</b> test cases follow.</p>
<p>The first line of each test case contains one integer <b>N</b> denoting the number of intgers in presentation of <b>X</b>.</p>
<p>The second line contains <b>N</b> space-separated integers <b>a<sub>1</sub>, a<sub>2</sub>, .... a<sub>N</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, output a single integer <b>P</b> deoting the answer for this test case. Note that <b>P</b> must be in range from <b>2</b> to <b>10<sup>18</sup></b> inclusive. It's guaranteed that at least one answer exists. If there are more than one possible answers, print any.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>a<sub>i</sub></b> ≤ <b>10<sup>18</sup></b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li><b>Subtask 1[19 points]:</b> <b>1</b> ≤ <b>a<sub>1</sub>*a<sub>2</sub>*...*a<sub>N</sub></b> ≤ <b>10<sup>6</sup></b></li>
<li><b>Subtask 2[22 points]:</b> <b>1</b> ≤ <b>a<sub>1</sub>*a<sub>2</sub>*...*a<sub>N</sub></b> ≤ <b>10<sup>12</sup></b></li>
<li><b>Subtask 3[23 points]:</b> <b>1</b> ≤ <b>a<sub>i</sub></b> ≤ <b>10<sup>12</sup></b></li>
<li><b>Subtask 4[36 points]:</b> no additional constraints</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
3
21 11 6

<b>Output:</b>
3
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> <b>X = 21 * 11 * 6 = 1386</b>. It's divisible by 9 which is a square number, as <b>9 = 3<sup>2</sup></b>. So <b>P = 3</b>.</p>
