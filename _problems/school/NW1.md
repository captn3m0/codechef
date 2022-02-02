---
{"category_name":"school","problem_code":"NW1","problem_name":"Days in Month","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"abx_2109","problem_tester":"kingofnumbers","date_added":"30-10-2017","tags":{"0":"abx_2109","1":"ad","2":"cakewalk","3":"ltime55"},"editorial_url":"https://discuss.codechef.com/problems/NW1","time":{"view_start_date":1514653200,"submit_start_date":1514653200,"visible_start_date":1514653200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME55/mandarin/NW1.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME55/russian/NW1.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME55/vietnamese/NW1.pdf">Vietnamese</a> as well.</h3>


<p>RJ is a very curious observer. On the first day of every month, he tries to figure out, for each of the seven days of the week, how many times that day occurs in the current month.</p>
<p>RJ got confused so badly doing this that he asks for your help!
He asks several queries; in each query, he gives you the number of days in the current month and which day of the week is on the 1st of the current month.</p>
<p>For each query, you should tell him how many times each day of the week occurs.</p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first and only line of each test case contains an integer <b>W</b> and a string <b>S</b>, separated by a space.</li>
<li><b>W</b> denotes the number of days in the current month.</li>
<li><b>S</b> is one of the strings "mon", "tues", "wed", "thurs", "fri", "sat" or "sun", denoting the day of the week on the 1st of the current month.</li>
</ul></p>

<h3>Output</h3>
<p>For each query, print seven space-separated integers denoting the number of occurrences of Monday, Tuesday, Wednesday, Thursday, Friday, Saturday and Sunday.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10<sup>3</sup></li>
<li>28 ≤ <b>W</b> ≤ 31</li>
</ul>

<h3>Subtasks</h3>

<p>
<b>Subtask #1 (20 points):</b> <b>W</b> = 28
</p>

<p>
<b>Subtask #2 (80 points):</b> original constraints
<p>

<h3>Example</h3>
<pre><b>Input:</b>

2
28 mon
31 wed

<b>Output:</b>

4 4 4 4 4 4 4
4 4 5 5 5 4 4
</pre>

<h3>Example</h3>
<p><b>Example case 2:</b> There are 4 Mondays, 4 Tuesdays, 5 Wednesdays, 5 Thursdays, 5 Fridays, 4 Saturdays and 4 Sundays</b>.</p>
