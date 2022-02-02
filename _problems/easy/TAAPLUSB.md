---
{"category_name":"easy","problem_code":"TAAPLUSB","problem_name":"A Plus B Again!","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":"keshav_57","date_added":"15-05-2013","tags":{"0":"cook36","1":"easy","2":"maths","3":"probability","4":"tsaplusb","5":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/TAAPLUSB","time":{"view_start_date":1374431400,"submit_start_date":1374431400,"visible_start_date":1374431400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Have you ever implemented a program adding two big integers that cannot be represented by the primitive data type of your programming language? The algorithm is just simulation of the column addition method that we have been taught in elementary school. Sometimes we forget the carry and the result is incorrect. </p>
<p> In this problem, you need to evaluate the expected value of the number of times we have non-zero carry when adding two non-negative integers that contain <b>at most N</b> digits each. Note that we are adding the numbers in their <b>base 10</b> representation.
</p>
<p>For example, the following table shows the number of carries when adding some pairs of numbers: </p>
<table border="1" cellpadding="3" align="center">
<tr>
<td><b>A</b></td>
<td><b>B</b></td>
<td><b>Number of carries</b></td>
</tr>
<tr>
<td>20</td>
<td>4</td>
<td>0</td>
</tr>
<tr>
<td>111</td>
<td>119</td>
<td>1</td>
</tr>
<tr>
<td>123</td>
<td>923</td>
<td>1</td>
</tr>
<tr>
<td>1235</td>
<td>98765</td>
<td>5</td>
</tr>
</table>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br />
Each test case has a single line containing an integer <b>N</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the required expected value.<br />
Your answer will be accepted if the error is less than 10 <sup>-6</sup>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100,000(10<sup>5</sup>)</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100,000(10<sup>5</sup>)</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
1
2
3

<b>Output:</b>
0.45
0.945
1.4445

</pre><h3>Explanation</h3>
<p><b>Example case 1.</b><br />
We have 10*10 = 100 cases of adding two 1-digit number.<br />
The carry appears when adding 1 and 9, 2 and 9, 3 and 9 ... and so on,<br />
there are 45 cases in total and in each case, the carry appears exactly once.</p>
