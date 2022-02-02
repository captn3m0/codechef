---
{"category_name":"medium","problem_code":"ISONUM","problem_name":"Number Isomorphism","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":null,"date_added":"13-05-2015","tags":{"0":"counting","1":"snck151b","2":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/ISONUM","time":{"view_start_date":1432954800,"submit_start_date":1432954800,"visible_start_date":1432954800,"end_date":1735669800},"hand_edited":true,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151B/mandarin/ISONUM.pdf">Mandarin Chinese </a> , <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151B/russian/ISONUM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151B/vietnamese/ISONUM.pdf">Vietnamese</a></h3>


<p>Let's call two numbers isomorphic if they have same number of digits and set of places having equal digits is same. We consider that all the numbers are in decimal notation and don't have leading zeroes. Consider some examples:

<ul>
<li>12321 is isomorphic to 83538 and 45654.</li>
<li>1232 is not isomorphically equal to 2342 because set of places having equal digits are ({1}, {2, 4}, {3}) and ({1, 4}, {2}, {3}) (digits are numbered from left to right using 1 based indexing). In other words, the digits order has to remain the same.</li>
<li>12 isomorphic to 10,13,14, 92, but not isomorphic to 1, because their lengths are not equal and not isomorphic to 01, because leading zeroes are not allowed.</li>
</ul>
</p>

<p>Let <b>F(X)</b> denote the smallest integer (without leading zeroes) isomorphic to <b>X</b> where <b>X</b> is a positive integer. For example, <b>F(12)</b> = 10, <b>F(213)</b> = 102.</p>

<p>You are given two integers <b>N</b> and <b>M</b>. Your task is to calculate <b>F(1) % M + F(2) % M + F(3) % M + ... + F(N - 1) % M + F(N) % M</b>.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first and only line of each test case contains a pair of integers <b>N</b> and <b>M</b>. The meaning of these integers is described in the statement.</p>

<h3>Output</h3>
For each test case, output a single line containing the answer to the problem.

<h3>Constraints</h3>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>11</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10<sup>7</sup></b></li>


<h3>Example</h3>
<pre><b>Input:</b>
2
15 100
123456789 9876543

<b>Output:</b>
70
102768568246676
</pre>

<h3>Explanation</h3>
<p>
<b>Example case 1.</b> Numbers 1, 2, 3, ..., 9 are isomorphic to 1. Numbers 10, 12, 13, 14, 15 are isomorphic to 10. Among the numbers from 1 to 15, 11 is isomorphic only to itself. So, we get 1 + 1 + ... + 1 + 10 + 11 + 10 + 10 + 10 + 10 = 70. 
</p>
<p>
<b>Example case 2.</b> This is just a large case so that you can check your solution better. </p>