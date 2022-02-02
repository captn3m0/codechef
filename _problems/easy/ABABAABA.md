---
{"category_name":"easy","problem_code":"ABABAABA","problem_name":"ABABAABA","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"zedthirtyeight","date_added":"21-02-2016","tags":{"0":"ad","1":"easy","2":"ltime34","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/ABABAABA","time":{"view_start_date":1459011600,"submit_start_date":1459011600,"visible_start_date":1459011600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/mandarin/ABABAABA.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/russian/ABABAABA.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/vietnamese/ABABAABA.pdf">Vietnamese</a> as well.</h3>
<p>You are given a <b>uniformly randomly generated</b> string <b>S</b>, consisting of letters from the set <b>{"A", "B"}</b>. Your task is to find a string <b>T</b> that appears in <b>S</b> as a subsequence <b>exactly twice</b>.</p>
<p>In other words, you need to find such a string <b>T</b>, that there exist <b>exactly two</b> sets of indexes <b>i<sub>1</sub>, i<sub>2</sub>, ..., i<sub>|T|</sub></b> and <b>j<sub>1</sub>, j<sub>2</sub>, ..., j<sub>|T|</sub></b> such that there exists some <b>k</b>, where  <b>i<sub>k</sub> ≠ j<sub>k</sub></b> and <b>S<sub>{i<sub>1</sub>...i<sub>|T|</sub>}</sub> = S<sub>{j<sub>1</sub>...j<sub>|T|</sub>}</sub> = T</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first and only line of each test case contains a single string <b>S</b>.</p>
<p>The string <b>S</b> was generated <b>randomly</b>. For a generating string <b>S</b>, we first choose an integer <b>N</b> denoting a length of <b>S</b>. After that every symbol of the string <b>S</b> is chosen randomly from the set <b>{"A", "B"}</b> and the both symbols have equal probability to be chosen. Note that <b>N</b> is not choosen randomly.</p>
<h3>Output</h3>
<p>For each test case, output a string that occurs <b>exactly twice</b> as a subsequence in <b>S</b>, or output <b>-1</b> if there is no such string. If there are more than one possible subsequences occurring exactly two times, you can print any one of them.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 (10 points)</b>: <b>2</b> ≤ <b>N</b> ≤ <b>3</b></li>
<li><b>Subtask #2 (26 points)</b>: <b>2</b> ≤ <b>N</b> ≤ <b>10</b></li>
<li><b>Subtask #3 (64 points)</b>: <b>2</b> ≤ <b>N</b> ≤ <b>5000</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
AAAA
BAB

<b>Output:</b>
-1
B
</pre><h3>Explanation</h3>
<p><b>Test case #1</b>: </p>
<ul>
<li>The string "AAAA" appears once as a subsequence in itself.</li>
<li>The string "AAA" appears four times as a subsequence in "AAAA"; possible positions: {2, 3, 4}, {1, 3, 4}, {1, 2, 4}, {1, 2, 3}.</li>
<li>The strings "AA" and "A" also appear in "AAAA" as a subsequence strictly more than twice.</li>
<p><br />
So, there is no string of "AAAA", which appears exactly twice. Hence answer is -1.</p>
<p><b>Test case #2</b>: Two occurrences of "B" in "BAB" are {1} and {3} (1-based indexing).</p>
</ul>