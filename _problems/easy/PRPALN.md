---
{"category_name":"easy","problem_code":"PRPALN","problem_name":"Let us construct palindrome","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"5-10-2014","tags":{"0":"ad","1":"admin2","2":"greedy","3":"nov14"},"editorial_url":"http://discuss.codechef.com/problems/PRPALN","time":{"view_start_date":1416216600,"submit_start_date":1416216600,"visible_start_date":1416216600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/mandarin/PRPALN.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/russian/PRPALN.pdf">Russian</a>.</h3>
<p>Given a string <b>s</b>. Can you make it a palindrome by deleting exactly one character? Note that size of the string after deletion would be one less than it was before. </p>
<h3>Input</h3>
<p>First line of the input contains a single integer T denoting number of test cases.</p>
<p>For each test case, you are given a single line containing string <b> s. </b></p>
<h3>Output</h3>
<p>For each test case, print <b>YES</b> or <b>NO</b> depending on the answer of the problem. </p>
<h3>Constraints</h3>
<p>
<b> Subtask 1, 35 points </b></p>
<ul>
<li> <b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>2</b> ≤ <b> size of string s</b> ≤ <b>1000</b></li>
<li> String <b>s</b> contains lowercase English alphabets (ie. from 'a' to 'z').
</li></ul>

<p>
<b> Subtask 2, 65 points </b> </p>
<ul>
<li><b>2</b> ≤ <b> size of string s</b> ≤ <b>10^5</b></li>
<li> Sum of size of string <b>s</b> over all the input test cases won't exceed 10^6</li>
<li> String <b>s</b> contains lowercase English alphabets (ie. from 'a' to 'z').
</li></ul>

<h3>Example</h3>
<pre><b>Input:</b>
4
aaa
abc
abdbca
abba

<b>Output:</b>
YES
NO
YES
YES
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Delete any one 'a', resulting string is "aa" which is a palindrome.</p>
<p><b>Example case 2.</b> It is not possible to delete exactly one character and having a palindrome.</p>
<p><b>Example case 3.</b> Delete 'c', resulting string is "abdba" which is a palindrome. </p>
<p><b>Example case 4.</b> Delete 'b', resulting string is "aba" which is a palindrome. </p>
