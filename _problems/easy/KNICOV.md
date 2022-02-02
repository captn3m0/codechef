---
{"category_name":"easy","problem_code":"KNICOV","problem_name":"Knight Covering","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"deadwing97","date_added":"30-05-2017","tags":{"0":"alei","1":"bitmasks","2":"cook83","3":"dynamic","4":"easy"},"editorial_url":"https://discuss.codechef.com/problems/KNICOV","time":{"view_start_date":1497812400,"submit_start_date":1497812400,"visible_start_date":1497812400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK83/mandarin/KNICOV.pdf">mandarin chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK83/russian/KNICOV.pdf">russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK83/vietnamese/KNICOV.pdf">vietnamese</a> as well.</h3>


<p>
Given a board of <b>N</b> rows and <b>M</b> columns, place the minimum number of knights such that every cell either contains a knight or is attacked by at least one knight.
</p>
<p>
Like in standard chess, a <a href="https://en.wikipedia.org/wiki/Knight_(chess)">knight</a> attacks every cell that is two squares away horizontally and one square vertically, or two squares vertically and one square horizontally.
</p>

<h3>Input</h3>
<p>
The first line of input contains one number <b>T</b>, the number of test cases.
Each test case contains two integers <b>N</b> and <b>M</b>, the dimensions of the board.
</p>
<h3>Output</h3>
<p>
For each test case print the minimum number of knights required to cover every cell of the board.
</p>

<h3>Constraints</h3>

<li>1</b> ≤ <b>T</b> ≤ 150</li>
<li>1</b> ≤ <b>N</b> ≤ 3</sup></li>
<li>1</b> ≤ <b>M</b> ≤ 50</li>

<h3>Example</h3>
<pre>
<b>Input:</b>
1
2 4

<b>Output:</b>
4
</pre>

<h3>Explanation</h3>
<p>One optimal configuration is:</p>

<p></p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/COOK83/KNICOV.png" height="100"/>
<p></p>

<p>Cells (1, 1), (1, 2), (4, 1) and (4, 2) contain knights. Cell (2, 1) is attacked by the knight in cell (4, 2). Cell (2, 2) is attacked by the knight in cell (4, 1). Cell (3, 1) is attacked by the knight in cell (1, 2). And cell (3, 2) is attacked by the knight in cell (1, 1).</p>
<p>So every cell either contains a knight or is attacked by at least one knight, hence this is a valid configuration. There is no valid configuration with fewer knights, and so the answer is 4.</p>