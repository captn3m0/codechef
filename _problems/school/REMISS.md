---
{"category_name":"school","problem_code":"REMISS","problem_name":"Chef and Remissness","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"shiplu","problem_tester":"rustinpiece‎","date_added":"31-01-2014","tags":{"0":"cakewalk","1":"cook43","2":"shiplu"},"editorial_url":"http://discuss.codechef.com/problems/REMISS","time":{"view_start_date":1392575400,"submit_start_date":1392575400,"visible_start_date":1392575400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK43/mandarin/REMISS.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK43/russian/REMISS.pdf">Russian</a> as well.</h3>
<p>Chef is now a corporate person. He has to attend office regularly. But chef does not want to go to office, rather he wants to stay home and discover different recipes and cook them. </p>
<p>In the office where chef works, has two guards who count how many times a person enters into the office building. Though the duty of a guard is 24 hour in a day, but sometimes they fall asleep during their duty and could not track the entry of a person in the office building. But one better thing is that they never fall asleep at the same time. At least one of them remains awake and counts who enters into the office.</p>
<p>Now boss of Chef wants to calculate how many times Chef has entered into the building. He asked to the guard and they give him two integers <b>A</b> and <b>B</b>, count of first guard and second guard respectively.</p>
<p>Help the boss to count the minimum and maximum number of times Chef could have entered into the office building.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of the <b>T</b> test cases follows. </p>
<p>Each test case consists of a line containing two space separated integers <b>A</b> and <b>B</b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing two space separated integers, the minimum and maximum number of times Chef could have entered into the office building.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>0</b> ≤ <b>A, B</b> ≤ <b>1000000</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
19 17

<b>Output:</b>
19 36
</pre>
