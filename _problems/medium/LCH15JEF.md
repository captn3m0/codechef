---
{"category_name":"medium","problem_code":"LCH15JEF","problem_name":"Just multiply","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":"2 - 3","source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"rubanenko","date_added":"25-12-2014","tags":{"0":"bignum","1":"easy","2":"implementation","3":"ltime20","4":"maths","5":"pavel1996"},"time":{"view_start_date":1422174600,"submit_start_date":1422174600,"visible_start_date":1422174600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME20/mandarin/LCH15JEF.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME20/russian/LCH15JEF.pdf">Russian</a>.</h3>
<p> Leonid is developing new programming language. The key feature of his language is fast multiplication and raising to a power operations. He is asking you to help with the following task. </p>
<p>You have an expression <b>S</b> and positive integer <b>M</b>. <b>S</b> has the following structure: <b>A<sub>1</sub>*A<sub>2</sub>*...*A<sub>n</sub></b> where "*" is multiplication operation. Each <b>A<sub>i</sub></b> is an expression <b>X<sub>i</sub>**Y<sub>i</sub></b>  where <b>X<sub>i</sub></b> and <b>Y<sub>i</sub></b> are non-negative integers and "**" is raising <b>X<sub>i</sub></b> to power <b>Y<sub>i</sub></b> operation. </p>
<p>.</p>
<p>Your task is just to find the value of an expression <b>S</b> modulo <b>M</b> </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. Each of the following <b>T</b> testcases is described by one line which contains  one positive integer <b>M</b> and expression <b>S</b> separated by whitespace.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing one integer corresponding to value of <b>S</b> modulo <b>M</b>  </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
<li> <b>1</b> ≤ <b>M</b> ≤ <b>10<sup>18</sup></b></li>
<li> <b>1</b> ≤ <b>length of S</b> ≤ <b>10<sup>4</sup></b></li>
<li> <b>0</b> ≤ <b>X<sub>i</sub>, Y<sub>i</sub></b> ≤ <b>10<sup>9997</sup></b> </li>
<li>It's guaranteed that there will not be <b>0**0</b> expression</li>
</ul>
<h3> Subtasks </h3>
<p><b>Subtask #1</b>[30 points]: <b>X<sub>i</sub>, Y<sub>i</sub></b> &lt; <b>10</b>, <b>M</b> &lt; <b>10 <sup>4</sup></b><br />
<b>Subtask #2</b>[40 points]:  <b>M</b> &lt; <b>10<sup>9</sup></b><br />
<b>Subtask #3</b>[30 points]: no additional conditions</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1000 2**3*3**1
100000 11**2*2**4
<b>Output:</b>
24
1936
</pre>