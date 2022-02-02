---
{"category_name":"easy","problem_code":"FSTSQ","problem_name":"Fast squarer","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"xcwgf666","date_added":"27-09-2015","tags":{"0":"ad","1":"easy","2":"implementation","3":"ltime29","4":"pavel1996"},"editorial_url":"http://discuss.codechef.com/problems/FSTSQ","time":{"view_start_date":1445761800,"submit_start_date":1445761800,"visible_start_date":1445761800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME29/mandarin/FSTSQ.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME29/russian/FSTSQ.pdf">Russian</a></h3>


<p>A squarer is a simple and convenient device. You give it some positive integer <b>X</b> and it calculates its square.</p>

<p>Leha is implementing a module of this device which is responsible for squaring the numbers consisting of multiple repetitions of one digit. But it turned out that it's not as simple as he thought.</p>

<p>Please help him now!</p>

<h3>Input</h3>
<p>The first line contains one integer <b>T</b> denoting the number of testcases. The descriptions of <b>T</b> test cases follow.</p>
<p>Each of the following <b>T</b> lines contain <b>2</b> space-separated integers - <b>N</b> and <b>D</b>, respectively. It means that the number <b>X</b> in the corresponding testcase consists of the digit <b>D</b> repeated <b>N</b> times (in decimal representation).</p>

<h3>Output</h3>
<p>As the answer can be very large, we ask you to output its hash which is computed in the following way:</p>
<p>Let's consider the integer answer <b>Y</b> as a 0-indexed array starting from its leftmost digit. The hash function is calculated as:<br> <b>p<sup>0</sup>*Y[0] + p<sup>1</sup>*Y[1] + ... + p<sup>M-1</sup>*Y[M-1] modulo 10<sup>9</sup> + 7</b> <br />where <b>M</b> is the length of the array representation of <b>Y</b> and <b>p</b> equals <b>23</b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
<li><b>1</b> ≤ <b>D</b> ≤ <b>9</b></li>
<li>Subtask 1 (16 points): <b>1</b> ≤ <b>N</b> ≤ <b>9</b></li>
<li>Subtask 2 (25 points): <b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li>Subtask 3 (27 points): <b>1</b> ≤ <b>N</b> ≤ <b>2 × 10<sup>4</sup></b></li>
<li>Subtask 4 (32 points): <b>1</b> ≤ <b>N</b> ≤ <b>10<sup>6</sup></b></li>

</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>3
1 4
3 6
3 5</tt>

<b>Output:</b>
<tt>139
40079781
32745632</tt>

</pre>

<h3>Explanation</h3>
<p>In the first test case, <b>X = 4</b> and <b>Y = 16</b>. Its hash equals <b>1*1 + 23*6 = 139</b>.</p>