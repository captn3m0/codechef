---
{"category_name":"easy","problem_code":"CALC","problem_name":"Calculator ","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"4-07-2017","tags":{"0":"easy","1":"july17","2":"kingofnumbers","3":"math","4":"simple"},"editorial_url":"https://discuss.codechef.com/problems/CALC","time":{"view_start_date":1500283800,"submit_start_date":1500283800,"visible_start_date":1500283800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY17/mandarin/CALC.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JULY17/russian/CALC.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY17/vietnamese/CALC.pdf">Vietnamese</a> as well.</h3>


<p>Chef has a calculator which has two screens and two buttons. Initially, each screen shows the number zero. Pressing the first button increments the number on the first screen by 1, and each click of the first button consumes 1 unit of energy.</p>

<p>Pressing the second button increases the number on the second screen by the number which is currently appearing on the first screen. Each click of the second button consumes <b>B</b> units of energy.</p>

<p>Initially the calculator has <b>N</b> units of energy.</p>

<p>Now chef wonders what the maximum possible number is, that he gets on the second screen of the calculator, with the limited energy.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>

<p>Each test case is described using a single line containing two integers, <b>N</b> and <b>B</b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the answer to this test case.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10,000</li>
<li>1 ≤ <b>N, B</b> ≤ 1,000,000,000</li>
</ul>
<p> </p>


<h3>Subtasks</h3>
<ul>
<li>Subtask 1 (20 points): 1 ≤ <b>N, B</b> ≤ 1,000</li>
<li>Subtask 2 (80 points): Original constraints</li>
</ul>
<p> </p>


<h3>Example</h3>
<pre><b>Input:</b>
3
10 2
8 5
6 1

<b>Output:</b>
12
3
9
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> There are 10 units of energy available. Pressing second button takes 2 units of energy. Chef can achieve 12 on the second screen as follows.
<ul>
<li>Press first button to get scores (1, 0). 9 units of energey is left.</li>
<li>Press first button to get scores (2, 0). 8 units of energy remaining.</li>
<li>Press first button to get scores (3, 0). 7 units of energy remaining.</li>
<li>Press first button to get scores (4, 0). 6 units of energy remaining.</li>
<li>Press second button to get scores (4, 4). 4 units of energy remaining.</li>
<li>Press second button to get scores (4, 8). 2 units of energy remaining.</li>
<li>Press second button to get scores (4, 12). 0 units of energy remaining.</li>
</ul>
</p>