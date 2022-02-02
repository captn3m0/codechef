---
{"category_name":"medium","problem_code":"SHOOTING","problem_name":"Shooting","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"xcwgf666","date_added":"11-08-2014","tags":{"0":"bruteforce","1":"cook49","2":"greedy","3":"simple","4":"witua"},"editorial_url":"http://discuss.codechef.com/problems/SHOOTING","time":{"view_start_date":1408906200,"submit_start_date":1408906200,"visible_start_date":1408906200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK49/mandarin2/SHOOTING.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK49/russian/SHOOTING.pdf">Russian</a> as well.</h3>

<p>
You are given a rectangular grid with <b>N</b> rows and <b>M</b> columns. Each its cell is either empty, contains an enemy, or contains a laser.
</p>
<p>
The lasers are capable of shooting. Each one can shoot in one of <b>three</b> directions: either left, right or up.When a laser shoots at some direction, it kills all the enemies on its way.
</p>
<p>
Find out whether it's possible to kill all the enemies on the grid. If it's possible, output "Possible", otherwise output "Impossible".
</p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains the pair of integers <b>N</b> and <b>M</b> denoting the size of the grid.</p> 

<p>The next <b>N</b> lines contain <b>M</b> characters each. The characters can be one of the following ones:
<ul>
<li>'.' denoting an empty cell.</li>
<li>'E' denoting an enemy.</li>
<li>'L' denoting a laser.</li>
</ul>

</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the answer to the corresponing test case.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b>, <b>M</b> ≤ <b>50</b></li>
<li>The number of lasers will be between <b>1</b> and <b>16</b>, inclusive.</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
2 2
E.
L.
2 4
E.EL
LL..
3 3
EE.
L.L
L..

<b>Output:</b>
Possible
Possible
Impossible
</pre>