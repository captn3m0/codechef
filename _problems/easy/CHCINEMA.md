---
{"category_name":"easy","problem_code":"CHCINEMA","problem_name":"Chef and cinema","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"omelyanenko","problem_tester":"xcwgf666","date_added":"29-07-2015","tags":{"0":"binary","1":"dec15","2":"easy","3":"greedy","4":"omelyanenko"},"editorial_url":"http://discuss.codechef.com/problems/CHCINEMA","time":{"view_start_date":1450085400,"submit_start_date":1450085400,"visible_start_date":1450085400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/mandarin/CHCINEMA.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/russian/CHCINEMA.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/vietnamese/CHCINEMA.pdf">Vietnamese</a> as well.</h3>


<p>
Probably everyone has experienced an awkward situation due to shared armrests between seats in cinemas. A highly accomplished cinema manager named "Chef" decided to solve this problem.
</p>
<p>
When a customer wants to buy a ticket, the clerk at the ticket window asks the visitor if they need the armrests, and if so, which of them: left, right, or both. We know that out of the audience expected to show up, <b>L</b> of them only need the left armrest, <b>R</b> of them need just the right one, <b>Z</b> need none and <b>B</b> need both. Your task is to calculate the maximum number of people that can attend the show. In the cinema hall there are <b>N</b> rows with <b>M</b> seats each. There is only one armrest between two adjacent seats. Seats at the beginning and at the end of the row have two armrests</p>
</p>

<h3>Input</h3>
<p>
Input begins with an integer T: the number of test cases.<br>
Each test case consists of a single line with 6 space-separated integers: <b>N</b>, <b>M</b>, <b>Z</b>, <b>L</b>, <b>R</b>, <b>B</b>.
</p>

<h3>Output</h3>
<p>
For each test case, output a line containing the answer for the task.
</p>

<h3>Constraints and Subtasks</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b> </li>
<br>
<b>Subtask 1 : 10 points </b> 
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>3</b> </li>
<li><b>0</b> ≤ <b>Z</b>, <b>L</b>, <b>R</b>, <b>B</b> ≤ <b>3</b> </li>
<br>
<b>Subtask 2 : 20 points </b> 
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>30</b> </li>
<li><b>0</b> ≤ <b>Z</b>, <b>L</b>, <b>R</b> ≤ <b>30</b> </li>
<li><b>0</b> ≤ <b>B</b> ≤ <b>10<sup>9</sup></b> </li>
<br>
<b>Subtask 3 : 30 points</b>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>10<sup>6</sup></b> </li>
<li><b>0</b> ≤ <b>Z</b>, <b>L</b>, <b>R</b> ≤ <b>10<sup>6</sup></b> </li>
<li><b>0</b> ≤ <b>B</b> ≤ <b>10<sup>16</sup></b> </li>
<br>
<b>Subtask 4 : 40 points</b> 
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>10<sup>8</sup></b> </li>
<li><b>0</b> ≤ <b>Z</b>, <b>L</b>, <b>R</b>, <b>B</b> ≤ <b>10<sup>16</sup></b> </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
2 2 3 2 1 1
3 3 1 2 0 9</tt>

<b>Output:</b>
<tt>4
8</tt>
</pre>

<h3>Explanation</h3>
'L' - needs left<br>
'R - needs right<br>
'Z' - doesn't need any<br>
'B' - needs both<br>
'-' - empty place<br> 
<p>
<b>Example case 1.</b><br>
<tt>ZZ<br>
ZB</tt><br>
<b>Example case 2.</b><br>
<tt>LLB<br>
BZB<br>
B-B</tt><br>
</p>