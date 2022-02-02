---
{"category_name":"school","problem_code":"CHEFROUT","problem_name":"Chef and his daily routine","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"4-05-2017","tags":{"0":"admin2","1":"long","2":"may17"},"editorial_url":"https://discuss.codechef.com/problems/CHEFROUT","time":{"view_start_date":1495099800,"submit_start_date":1495099800,"visible_start_date":1495099800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/MAY17/mandarin/CHEFROUT.pdf">mandarin chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MAY17/russian/CHEFROUT.pdf">russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY17/vietnamese/CHEFROUT.pdf">vietnamese</a> as well.</h3>

<p>Chef's daily routine is very simple. He starts his day with cooking food, then he eats the food and finally proceeds for sleeping thus ending his day. Chef carries a robot as his personal assistant whose job is to log the activities of Chef at various instants during the day. <b>Today</b> it recorded activities that Chef was doing at N different instants. These instances are recorded in chronological order (in increasing order of time). This log is provided to you in form of a string <b>s</b> of length N, consisting of characters 'C', 'E' and 'S'. If <b>s</b>[i] = 'C', then it means that at the i-th instant Chef was cooking, 'E' denoting he was eating and 'S' means he was sleeping.</p>

<p>You have to tell whether the record log made by the robot could possibly be correct or not. </p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The only line of each test case contains string <b>s</b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing "yes" or "no" (without quotes) accordingly.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 20</li>
<li>1 ≤ N ≤ 10<sup>5</sup></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1</b> (40 points) : 1 ≤ N ≤ 100</li>
<li><b>Subtask #2</b> (60 points) : original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
5
CES
CS
CCC
SC
ECCC

<b>Output:</b>
yes
yes
yes
no
no
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> "CES" can correspond to a possible record of activities of Chef. He starts the day with cooking, then eating and then sleeping.</p>

<p><b>Example case 2.</b> "CS" can also correspond to a possible record of activities of Chef. He starts the day with cooking, then eating and then sleeping. Robot recorded his cooking and sleeping in order. He might not have recorded his eating activity.</p>

<p><b>Example case 4.</b> "SC" can not correspond to Chef's activities. Here it means that Chef slept first, then he cooked the food, which is impossible for Chef to do on some particular day.</p>


