---
{"category_name":"easy","problem_code":"DISCHAR","problem_name":"Distinct Characters Subsequence","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"darkshadows","problem_tester":null,"date_added":"26-09-2014","tags":{"0":"cakewalk","1":"darkshadows","2":"nov14"},"editorial_url":"http://discuss.codechef.com/problems/DISCHAR","time":{"view_start_date":1416216600,"submit_start_date":1416216600,"visible_start_date":1416216600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/mandarin/DISCHAR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/russian/DISCHAR.pdf">Russian</a>.</h3>


<p>You have initially a string of <b>N</b> characters, denoted by <b>A<sub>1</sub>,A<sub>2</sub>...A<sub>N</sub></b>. You have to print the size of the largest subsequence of string <b>A</b> such that all the characters in that subsequence are distinct ie. no two characters in that subsequence should be same.<br/>
A subsequence of string <b>A</b> is a sequence that can be derived from <b>A</b> by deleting some elements  and without changing the order of the remaining elements.
</p>

<h3>Input</h3>
<p>First line contains <b>T</b>, number of testcases. Each testcase consists of a single string in one line. Each character of the string will be a small alphabet(ie. 'a' to 'z').</p>

<h3>Output</h3>
<p>For each testcase, print the required answer in one line.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li>Subtask 1 (20 points):<b>1</b> ≤ <b>N</b> ≤ <b>10</b></li>
<li>Subtask 2 (80 points):<b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
abc
aba

<b>Output:</b>
3
2

</pre>
<h3>Explanation</h3>
<p>For first testcase, the whole string is a subsequence which has all distinct characters.<br/>
In second testcase, the we can delete last or first 'a' to get the required subsequence.
</p>