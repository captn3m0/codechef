---
{"category_name":"medium","problem_code":"GRIDCONN","problem_name":"Yet another substring problem","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"white_king","date_added":"11-11-2014","tags":{"0":"biginteger","1":"bruteforce","2":"handling","3":"ltime18","4":"simple","5":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/GRIDCONN","time":{"view_start_date":1417336200,"submit_start_date":1417336200,"visible_start_date":1417336200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME18/mandarin/GRIDCONN.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME18/russian/GRIDCONN.pdf">Russian</a>.</h3>
<p>The problem is completely unrelated to its problem code :).</p>
<p>Let us build an infinite string <b>D</b> that is simply a concatenation of the decimal representations of all positive integers without leading zeros. In other words, <b>D</b> = 12345678910111213141...</p>
<p>You are given a string <b>S</b>. Find the position of the first occurrence of <b>S</b> in <b>D</b> that satisfies one additional constraint: at least one integer that was concatenated to form <b>D</b> occurs entirely within <b>S</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a string of digits <b>S</b>.</p>
<p>It is guaranteed that <b>S</b> will occur satisfying the given condition somewhere in <b>D</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the minimal position number where <b>S</b> occurs in <b>D</b> under the given condition, modulo <b>10<sup>9</sup>+7</b>. Consider the string to be 1-indexed: '1' is in position 1.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>300</b></li>
<li>Subtask 1 (17 points): the answer won't exceed 10<sup>7</sup></li>
<li>Subtask 2 (23 points): the answer will fit in a signed 64-bit integer (before taking modulo).</li>
<li>Subtask 3 (60 points): no additional constraints.</li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
78910
9930

<b>Output:</b>
7
2679
</pre>
<h3>Explanation</h3>
<p>Please pay attention that in the second test case the answer is not 788, as it may seem at first glance. This is because the part 2982<b>9930</b>0301 doesn't contain any integer completely in it - neither 299, nor 300. But the part 92892<b>9930</b>931932 contains the integer 930 completely.</p>
