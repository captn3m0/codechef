---
{"category_name":"school","problem_code":"XENTASK","problem_name":"Xenny and Alternating Tasks","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"wittyceaser","problem_tester":"xcwgf666","date_added":"15-02-2017","tags":{"0":"basic","1":"cakewalk","2":"march17","3":"wittyceaser"},"editorial_url":"https://discuss.codechef.com/problems/XENTASK","time":{"view_start_date":1489397400,"submit_start_date":1489397400,"visible_start_date":1489397400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/mandarin/XENTASK.pdf?v=1">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/russian/XENTASK.pdf?v=1">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/vietnamese/XENTASK.pdf?v=1">Vietnamese</a> as well.</h3>

<p>Xenny and Yana were very keen to celebrate Valentine's Day at their home.
To make preparations for the celebration, they listed down <b>N</b> tasks that they had to complete.
</p>
<p>
To complete the <b>i<sup>th</sup></b> task, Xenny takes <b>X<sub>i</sub></b> seconds and Yana takes <b>Y<sub>i</sub></b> seconds.
In order to minimize the disparity in tasks performed, they decide to do the tasks <b>alternatingly</b>. If Xenny did the <b>1<sup>st</sup></b> task,
then Yana would just wait and watch him until he completes the task. After that, Yana would start the <b>2<sup>nd</sup></b> task, and while
she does her task, Xenny would just watch her. He would start the <b>3<sup>rd</sup></b> task only after her completion, and they would keep
doing tasks alternatingly uptil the <b>N<sup>th</sup></b> task. They could also do tasks in the other order - that is, Yana could do the <b>1<sup>st</sup></b> task,
after that Xenny could do the <b>2<sup>nd</sup></b> task, and so on.
Their eventual goal was to minimize the total time taken by them to complete all <b>N</b> tasks.
</p>
<p>
Please help them find the minimum total time they would take to complete all <b>N</b> tasks.
</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each testcase contains a positive integer <b>N</b> - the number of tasks to be completed.</p>
<p>The second line contains <b>N</b> space-separated positive integers representing the time taken in seconds by Xenny to complete the <b>i<sup>th</sup></b> task.</p>
<p>The third line contains <b>N</b> space-separated positive integers representing the time taken in seconds by Yana to complete the <b>i<sup>th</sup></b> task.</p>

<h3>Output</h3>
<p>For each testcase, print a single line containing the minimum total time in seconds Xenny and Yana would take to complete the tasks.</p>

<h3>Constraints</h3>
<p><b>Subtask 1: 40 points</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>3</b></li>
<li><b>1</b> ≤ <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b> ≤ <b>10<sup>5</sup></b></li>
</ul>
<p><b>Subtask 2: 60 points</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>2*10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b> ≤ <b>10<sup>5</sup></b></li>
</ul>

<h3>Sample Testcase</h3>
<pre><b>Input:</b>
<tt>1
3
2 1 2
3 2 1</tt>

<b>Output:</b>
<tt>5</tt>
</pre>

<h3>Explanation</h3>
<p>
Let's say Xenny does the 1<sup>st</sup> task. Then Yana would do the 2<sup>nd</sup> task and
Xenny would do the 3<sup>rd</sup> task.
Hence, the total time taken would be: 2 + 2 + 2 = 6 seconds.
</p>
<p>
Another possibility is that Yana does the 1<sup>st</sup> task, Xenny does the 2<sup>nd</sup> task and then
Yana does the 3<sup>rd</sup> task. The total time taken in this case would be 5 seconds.
</p>
<p>
Hence, the <b>minimum</b> total time taken would be <b>5 seconds</b>.
</p>
