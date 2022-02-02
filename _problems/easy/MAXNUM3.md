---
{"category_name":"easy","problem_code":"MAXNUM3","problem_name":"Maximum Number","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"COB","10":"CPP 4.3.2","11":"CPP 6.3","12":"CPP14","13":"CS2","14":"D","15":"ERL","16":"FORT","17":"FS","18":"GO","19":"HASK","20":"ICK","21":"ICON","22":"JAVA","23":"JS","24":"kotlin","25":"LISP clisp","26":"LISP sbcl","27":"LUA","28":"NEM","29":"NICE","30":"NODEJS","31":"PAS fpc","32":"PAS gpc","33":"PERL","34":"PERL6","35":"PHP","36":"PIKE","37":"PRLG","38":"PYPY","39":"PYTH","40":"PYTH 3.5","41":"RUBY","42":"rust","43":"SCALA","44":"SCM chicken","45":"SCM guile","46":"SCM qobi","47":"ST","48":"swift","49":"TCL","50":"TEXT","51":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"chemthan","problem_tester":"melfice","date_added":"24-10-2017","tags":{"0":"ad","1":"chemthan","2":"easy","3":"ltime53"},"editorial_url":"https://discuss.codechef.com/problems/MAXNUM3","time":{"view_start_date":1509210000,"submit_start_date":1509210000,"visible_start_date":1509210000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME53/mandarin/MAXNUM3.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME53/russian/MAXNUM3.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME53/vietnamese/MAXNUM3.pdf">Vietnamese</a> as well.</h3>

<p>Given an integer <b>A</b> that contains <b>n > 1</b> digits. You are asked to remove <b>exactly one</b> digit to make the result number is divisible by 6, also make it biggest possible.</p>
<p> </p>

<h3>Input</h3>
<p>The first line contains an integer <b>T</b>, denotes the number of test cases. Each test case is described by an integer <b>A</b> in a single line.</p>
<p> </p>

<h3>Output</h3>
<p>Each test case, output the answer on a single line (it's allowed to delete a digit such that the resulting number contains leading zeroes, you <b>shouldn't remove them in this case</b>). If it is impossible to make the result number satisfies the above condition,
 output -1.</p>
<p> </p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 100</b></li>
<li><b>2 ≤ n ≤ 10<sup>5</sup></b></li>
<li><b>A</b> will not contain leading zeroes</li>
<li>the sum of <b>n</b> over all test cases <b>≤ 10<sup>6</sup></b></li>
</ul>
<p> </p>
<p>Subtasks:</p>
<ul>
<li>Subtask #1 (30 points): the sum of <b>n</b> over all test cases <b>≤ 2000</b></li>
<li>Subtask #2 (70 points): original constrains</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
123
100222
10003

<b>Output:</b>
12
00222
-1
</pre>