---
{"category_name":"medium","problem_code":"CHEFB","problem_name":"Chef and easy problem 2","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"furko","problem_tester":"stzgd","date_added":"17-09-2014","tags":{"0":"furko","1":"ltime16","2":"maths","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CHEFB","time":{"view_start_date":1411893000,"submit_start_date":1411893000,"visible_start_date":1411893000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME16/mandarin/CHEFB.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME16/russian/CHEFB.pdf">Russian</a>.</h3>

<p>
Roma gave Chef an array of intergers.<br />
Chef wants to make all integers in the array equal to 1.<br />
In a single operation, he can select a prime number <b>p</b> and a subset of the integers, and then divide all of the integers in the subset by <b>p</b>.<br />
Chef can make this operation only if every integer in the selected subset is divisible by <b>p</b>.
</p>
<p>
Please help Chef to make all the integers in the array equal to 1 with minimum number of operations.</p>

<h3>Input</h3>
<p>The first line of input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the length of the array that Roma gave Chef.</p>
<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the integers in the array.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing one integer - the minimum number of operations needed to make all numbers equal to 1.</p>

<h3>Constraints</h3>
<ul>
<li>Subtask 1 (10 points): <b>T</b> = 5, 1 ≤ <b>N</b> ≤ 10<sup>5</sup>, 1 ≤ <b>A<sub>i</sub></b> ≤ 3</li>
<li>Subtask 2 (40 points): <b>T</b> = 3, 1 ≤ <b>N</b> ≤ 10, 1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>6</sup></li>
<li>Subtask 3 (50 points): <b>T</b> = 3, 1 ≤ <b>N</b> ≤ 10<sup>5</sup>, 1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>6</sup></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
3
1 2 4

<b>Output:</b>
2
</pre>
