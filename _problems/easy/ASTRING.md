---
{"category_name":"easy","problem_code":"ASTRING","problem_name":"Akhil And Random String","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"amitpandeykgp","problem_tester":"prateekg603","date_added":"24-05-2016","tags":{"0":"amitpandeykgp","1":"implementation","2":"ltime36"},"editorial_url":"http://discuss.codechef.com/problems/ASTRING","time":{"view_start_date":1464454800,"submit_start_date":1464454800,"visible_start_date":1464454800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME36/mandarin/ASTRING.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME36/russian/ASTRING.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME36/vietnamese/ASTRING.pdf">Vietnamese</a> as well.</h3>
<p>Akhil comes across a string <b>S</b> of length <b>N</b>. He started wondering about the smallest lexicographical subsequence of string <b>S</b> of length <b>K</b>.</p>
<p>A subsequence of a string is formed by deleting some characters (possibly none) from it's original string.</p>
<p>A string <b>A</b> is said to be lexicographically smaller than the string <b>B</b> of the same length if at the first position where <b>A</b> and <b>B</b> differ, <b>A</b> contains a letter which appears earlier in the dictionary than the corresponding letter in <b>B</b>.</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows:</li>
<li>First line of each test case will contain string <b>S</b></li>
<li>Second line of each test case will contain an integer <b>K</b>.</li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing the lexicographically smallest subsequence of <b>S</b> of length <b>K</b>.</li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>N</b></li>
<li><b>S</b> consists of lowercase English alphabet characters, i.e. from 'a' to 'z'.</li>
</ul>
<h3>Subtasks</h3>
<li>Subtask #1 (10 points) : <b>1</b> ≤ <b>|S|</b> ≤ <b>100</b></li>
<li>Subtask #2 (20 points) : <b>1</b> ≤ <b>|S|</b> ≤ <b>10<sup>3</sup></b></li>
<li>Subtask #3 (70 points) : <b>1</b> ≤ <b>|S|</b> ≤ <b>10<sup>5</sup></b></li>

<h3>Example</h3>
<pre><b>Input:</b>
2
abdc
3
bacb
2

<b>Output:</b>
abc
ab
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> "abc" is the smallest lexicographical subsequence out of ["abd", "bdc", "abc", "adc"].</p>
<p><b>Example case 2.</b> "ab" is the smallest lexicographical subsequence of length 2.</p>
