---
{"category_name":"medium","problem_code":"FCUBE","problem_name":"The First Cube","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"furko","date_added":"24-01-2015","tags":{"0":"ltime21","1":"medium","2":"prime","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/FCUBE","time":{"view_start_date":1424593800,"submit_start_date":1424593800,"visible_start_date":1424593800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME21/mandarin/FCUBE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME21/russian/FCUBE.pdf">Russian</a>.</h3>
<p>This problem's statement is really a short one.</p>
<p>You are given an integer <b>S</b>. Consider an infinite sequence <b>S, 2S, 3S, ...</b> . Find the first number in this sequence that can be represented as <b>Q<sup>3</sup></b>, where <b>Q</b> is some positive integer number. As the sought number could be very large, please print modulo <b>(10<sup>9</sup> + 7)</b>.</p>
<p>The number <b>S</b> will be given to you as a product of <b>N</b> positive integer numbers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>, namely <b>S = A<sub>1</sub> * A<sub>2</sub> * ... * A<sub>N</sub></b></p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains an integer <b>N</b>.</p>
<p>Then there is a line, containing <b>N</b> space separated integers, denoting the numbers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the first term of the sequence which is the perfect cube, modulo <b>10<sup>9</sup>+7</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li>(Subtask 1): <b>N</b> = <b>1</b>, <b>1</b> ≤ <b>S</b> ≤ <b>10<sup>9</sup></b> - 15 points.</li>
<li>(Subtask 2): <b>N</b> = <b>1</b>, <b>1</b> ≤ <b>S</b> ≤ <b>10<sup>18</sup></b> - 31 point.</li>
<li>(Subtask 3): <b>1</b> ≤ <b>N</b> ≤ <b>100</b>, <b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>18</sup></b> - 54 points.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
2 2
2
2 3
<b>Output:</b>
8
216
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> First few numbers in the infinite sequence 4, 8, 12, 16, 20, , etc. In this sequence, 8 is the first number which is also a cube (as <b>2<sup>3</sup> = 8</b>).</p>
<p><b>Example case 2.</b> First few numbers in the infinite sequence 6, 12, 18, 24, , etc. In this sequence, 216 is the first number which is also a cube (as <b>6<sup>3</sup> = 216</b>).</p>
