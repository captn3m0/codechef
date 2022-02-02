---
{"category_name":"easy","problem_code":"EMITL","problem_name":"emitL","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"xcwgf666","date_added":"26-09-2015","tags":{"0":"ad","1":"cakewalk","2":"implementation","3":"ltime29","4":"pavel1996","5":"string"},"editorial_url":"http://discuss.codechef.com/problems/EMITL","time":{"view_start_date":1445761800,"submit_start_date":1445761800,"visible_start_date":1445761800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME29/mandarin/EMITL.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME29/russian/EMITL.pdf">Russian</a></h3>


<p>You are given a string <b>S</b> constisting of uppercase Latin letters. Is it possible to reorder the characters in this string to get a string with prefix "<b>LTIME</b>" and suffix "<b>EMITL</b>"?</p>

<p><i>We remind you that a <b>prefix</b> of a string is any substring which contains its first character, while a <b>suffix</b> of a string is substring containing its last character.</i></p>


<h3>Input</h3>
<p>The first line contains a single integer <b>T</b>, denoting the number of testcases. The descriptions of <b>T</b> test cases follow.</p>

<p>The first and only line of the test case description has one non-empty string <b>S</b> consisting of uppercase Latin letters only.</p>

<h3>Output</h3>
<p>For each testcase output a single line containing the string <b>"YES"</b> (without quotes) if it's possible to reorder the characters to get the required prefix and suffix, or <b>"NO"</b> (without quotes) otherwise.</p>

<h3>Constraints</h3>
<ul>
<li>Subtask 1 (23 points) : <b>1</b> ≤ <b>T</b> ≤ <b>100</b>, <b>1</b> ≤ <b>|S|</b> ≤ <b>9</b></li>
<li>Subtask 2 (77 points) : <b>1</b> ≤ <b>T</b> ≤ <b>1000</b>, <b>1</b> ≤ <b>|S|</b> ≤ <b>100</b></li>
</ul>

<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>3
LTIMEAZAZAITLME
LLLTTTIIIMMMEEEAHA
LTIMEM</tt>

<b>Output:</b>
<tt>YES
YES
NO</tt>

</pre>

<h3>Explanation</h3>
<p><b>Test case 1</b>: we can permute the last 5 letters and get LTIMEAZAZAEMITL</p>
<p><b>Test case 2</b>: we have 3 copies of each of the letters 'L', 'T', 'I', 'M', 'E' so we can leave 5 of them in the beginning and move 5 of them to the end.</p>
<p><b>Test case 3</b>: we have only one letter 'L' so we can't make necessary prefix and suffix at the same time.</p>