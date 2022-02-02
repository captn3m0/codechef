---
{"category_name":"easy","problem_code":"CHEFBR","problem_name":"Chef and Bracket-Pairs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"xiaodao","date_added":"20-03-2014","tags":{"0":"berezin","1":"dec14","2":"dynamic","3":"easy"},"editorial_url":"http://discuss.codechef.com/problems/CHEFBR","time":{"view_start_date":1418643288,"submit_start_date":1418643288,"visible_start_date":1418643000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="/download/translated/DEC14/mandarin/CHEFBR.pdf" target="_blank">Mandarin Chinese </a> and <a href="/download/translated/DEC14/russian/CHEFBR.pdf" target="_blank">Russian</a>.</h3>
<p>Chef loves brackets. So much so, that rather than just use plain brackets like (), {}, or [], he has invented his own notation that allows him to use many more types of brackets.</p>
<p>Each type of bracket is designated by an integer. A negative integer <b>-x</b> represents an opening bracket of type <b>x</b>; while a positive integer <b>x</b> represents a closing bracket of type <b>x</b>. Any sequence of such integers is then called a <em>bracket-pair sequence</em>.</p>
<p>A <em>balanced</em> bracket-pair sequence can be defined recursively as follows:</p>
<ul>
<li>The empty sequence is a balanced bracket-pair sequence.</li>
<li>If <b>S</b> is a balanced bracket-pair sequence, then <b>-x S x</b> is a balanced bracket-pair sequence for any positive integer <b>x</b>. </li>
<li>If <b>S</b> and <b>T</b> are balanced bracket-pair sequences, then <b>S T</b> is a balanced bracket-pair sequence.</li>
</ul>
<p>For example, "-1 -2 2 -3 -4 4 3 1" is a balanced bracket-pair sequence, but "-1 -2 1 2" is not.</p>
<p>Chef has a bracket-pair sequence (which may or may not be balanced) consisting of <b>N</b> integers. There are 2<sup><b>N</b></sup> ways to form a <a href="http://en.wikipedia.org/wiki/Subsequence">subsequence</a> of his sequence. He wants to know how many of these subsequences are balanced.</p>
<p>Help him to calculate this number, modulo <b>10<sup>9</sup>+7</b>.</p>
<h3>Input</h3>
<p>The first line contains a single integer <b>N</b> denoting the number of brackets in his sequence.</p>
<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the types of brackets. A negative number means an opening bracket; a positive number means a closing bracket.</p>
<h3>Output</h3>
<p>In a single line print the required answer.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>-10<sup>9</sup></b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b> </li>
<li><b>A<sub>i</sub></b> ≠  0</li>
<li>It is <b>not</b> guaranteed that each opening bracket has a closing bracket of same type and vice-versa. </li>
</ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask <b>N</b> ≤ <b>10</b> Points: 10 </li>
<li>Subtask <b>N</b> ≤ <b>20</b> Points: 15 </li>
<li>Subtask <b>N</b> ≤ <b>100</b> Points: 75 </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
11
-1 -2 9 2 -3 -4 3 4 8 8 1 

<b>Output:</b>
12

</pre>