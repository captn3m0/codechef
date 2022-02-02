---
{"category_name":"easy","problem_code":"EXTRAN","problem_name":"Bear and Extra Number","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":"xcwgf666","date_added":"22-02-2017","tags":{"0":"errichto","1":"march17","2":"simple","3":"sorting"},"editorial_url":"https://discuss.codechef.com/problems/EXTRAN","time":{"view_start_date":1489397400,"submit_start_date":1489397400,"visible_start_date":1489397400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/mandarin/EXTRAN.pdf?v=1">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/russian/EXTRAN.pdf?v=1">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/vietnamese/EXTRAN.pdf?v=1">Vietnamese</a> as well.</h3>

<p>A sequence is called nice if its elements are distinct consecutive numbers, possibly in changed order.
For example, both (6, 7, 8) and (15, 13, 16, 14) are nice, while (4, 6), (4, 5, 5, 6) and (15, 16, 15) are not.</p>

<p>
Limak has a nice sequence.
While he was in school today, someone inserted one extra number in the sequence.
Limak has just returned and realized that the sequence isn't nice anymore!
He wants to remove the inserted number and make his sequence nice again.
Can you help him to find the number that he should remove?
</p>

<p>Formally, in each test case you are given a sequence of <b>N</b> numbers <b>A</b><sub>1</sub>, <b>A</b><sub>2</sub>, ..., <b>A<sub>N</sub></b>.
Your task is to find the value <b>X</b>, such that removing one occurrence of <b>X</b> would make the sequence nice.
It's guaranteed that exactly one solution exists.</p>



<h3>Input</h3>

<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.
The description of <b>T</b> test cases follows.</p>

<p>The first line of each test case contains an integer <b>N</b> denoting the size of the new sequence.</p>

<p>The second line of a test case contains <b>N</b> integers <b>A</b><sub>1</sub>, <b>A</b><sub>2</sub>, ..., <b>A<sub>N</sub></b> denoting the new sequence.</p>




<h3>Output</h3>

<p>For each test case, output a single line containing one integer — a number that should be removed from the given sequence.</p>



<h3>Constraints</h3>

<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>3</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A</b><sub>i</sub> ≤ <b>10<sup>9</sup></b></li>
<li>The given sequence isn't nice.</li>
<li>There is exactly one solution.</li>
</ul>




<h3>Subtasks</h3>

<ul>
<li>Subtask #1 (40 points) <b>3</b> ≤ <b>N</b> ≤ <b>1000</sup></b></li>
<li>Subtask #2 (60 points) Original constraints</li>
</ul>




<h3>Example</h3>

<pre><b>Input:</b>
<tt>4
5
45 42 46 48 47
3
7 7 8
8
12 156 157 158 159 160 161 162
4
8 7 10 6</tt>

<b>Output:</b>
<tt>42
7
12
10</tt>
</pre>


<h3>Explanation</h3>

<p><b>Test case 1.</b> The sequence <b>A</b> is (45, 42, 46, 48, 47). We should remove the number 42, and the remaining numbers will form a nice sequence (45, 46, 48, 47).</p>

<p><b>Test case 2.</b> We should remove one of two 7's to get the sequence (7, 8), which is nice.</p>