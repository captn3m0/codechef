---
{"category_name":"school","problem_code":"TICKETS5","problem_name":"Tickets","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"karanaggarwal","date_added":"21-03-2015","tags":{"0":"cakewalk","1":"ltime23","2":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/TICKETS5","time":{"view_start_date":1430037000,"submit_start_date":1430037000,"visible_start_date":1430037000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME23/mandarin/TICKETS5.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME23/russian/TICKETS5.pdf">Russian</a>.</h3>


<p>Every day, Mike goes to his job by a bus, where he buys a ticket. On the ticket, there is a letter-code that can be represented as a string of upper-case Latin letters.</p> 

<p>Mike believes that the day will be successful in case <b>exactly two different letters</b> in the code alternate.  Otherwise, he believes that the day will be unlucky. Please see note section for formal definition of alternating code.</p>

<p>You are given a ticket code. Please determine, whether the day will be successful for Mike or not. Print "YES" or "NO" (without quotes) corresponding to the situation.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first and only line of each test case contains a single string <b>S</b> denoting the letter code on the ticket.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing "YES" (without quotes) in case the day will be successful and "NO" otherwise.</p>

<h3>Note</h3>
Two letters <b>x, y</b> where <b>x != y</b> are said to be alternating in a code, if code is of form "<b>xyxyxy...</b>".

<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>S</b> consists only of upper-case Latin letters</li>
</ul>
</p>
<p>Subtask 1 (50 points):
<ul>
<li><b>|S|</b> = <b>2</b></li>
</ul>
</p>
<p>Subtask 2 (50 points):
<ul>
<li><b>2</b> ≤ <b>|S|</b> ≤ <b>100</b></li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
2
ABABAB
ABC

<b>Output:</b>
YES
NO
</pre>
