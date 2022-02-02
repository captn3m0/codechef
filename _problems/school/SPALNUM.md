---
{"category_name":"school","problem_code":"SPALNUM","problem_name":"Sum of palindromic numbers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"logic_iu","date_added":"27-08-2015","tags":{"0":"ad","1":"ltime28","2":"palindrome","3":"simple","4":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/SPALNUM","time":{"view_start_date":1440923400,"submit_start_date":1440923400,"visible_start_date":1440923400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME28/mandarin/SPALNUM.pdf">Mandarin Chinese </a> , <a target="_blank" href="http://www.codechef.com/download/translated/LTIME28/russian/SPALNUM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME28/vietnamese/SPALNUM.pdf">Vietnamese</a></h3>


<p>A number is called <i>palindromic</i> if its decimal representation is a palindrome. You are given a range, described by a pair of integers <b>L</b> and <b>R</b>. Find the sum of all palindromic numbers lying in the range <b>[L, R]</b>, inclusive of both the extrema.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a pair of space separated integers <b>L</b> and <b>R</b> denoting the range for which you are required to find the sum of the palindromic numbers. </p>

<h3>Output</h3>
<p>For each test case, output a single line containing the sum of all the palindromic numbers in the given range.
</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li>Subtask 1 (34 points) : <b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>10<sup>3</sup></b></li>
<li>Subtask 2 (66 points) : <b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>10<sup>5</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
1 10
123 150</tt>

<b>Output:</b>
<tt>45
272</tt>

</pre>

<h3>Explanation</h3>
<p><b>Example case 1. </b>The palindromic numbers between <b>1</b> and <b>10</b> are all numbers except the number <b>10</b>. Their sum is 45.</p>
<p><b>Example case 2. </b>The palindromic numbers between <b>123</b> and <b>150</b> are <b>131</b> and <b>141</b> and their sum is <b>272</b>.</p>