---
{"category_name":"easy","problem_code":"LEVY","problem_name":"Levy Conjecture","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kaushik_iska","problem_tester":"laycurse","date_added":"7-03-2013","tags":{"0":"april13","1":"kaushik_iska","2":"sieve","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/LEVY","time":{"view_start_date":1366018200,"submit_start_date":1366018200,"visible_start_date":1366018200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Problem Statement</h3>
<p style="text-align:justify"><b>Levy's conjecture</b>, named after <b>Hyman Levy</b>, states that all odd integers greater than <b>5</b> can be represented as the sum of an odd prime number and an even semiprime. To put it algebraically, <b>2n + 1 = p + 2q</b> always has a solution in primes <b>p</b> and <b>q</b> (not necessary to be distinct) for <b>n > 2</b>. <i>(Source: <a href="http://en.wikipedia.org/wiki/Lemoine's_conjecture">Wikipedia</a>)</i></p>
<p style="text-align:justify">In this problem, given a positive integer <b>N</b> (not necessary to be odd integer greater than <b>5</b>). Your task is to calculate how many distinct ordered pairs <b>(p, q)</b> such that <b>N = p + 2q</b>, where <b>p</b> and <b>q</b> are primes.</p>
<h3>Input</h3>
<p style="text-align:justify">The first line of input contains an integer <b>T</b>, denoting the number of test cases. Then <b>T</b> test cases follow.</p>
<p style="text-align:justify">Each test case consists of exactly one line containing an integer <b>N</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100000 (10<sup>5</sup>)</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10000 (10<sup>4</sup>)</b></li>
</ul>
<h3>Output</h3>
<p style="text-align:justify">For each test case, output the number of ordered pairs <b>(p, q)</b> of primes such that <b>N = p + 2q</b>.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2
7
11

<b>Output:</b>
0
1
2
</pre><h3>Explanation</h3>
<p><b>Case #1:</b> There are no ordered pairs <b>(p, q)</b> such that <b>p + 2q = 2</b>.</p>
<p><b>Case #2:</b> There is only one ordered pair <b>(p, q) = (3, 2)</b> such that <b>p + 2q = 7</b>.</p>
<p><b>Case #3:</b> There are two ordered pairs <b>(p, q) = (7, 2), (5, 3)</b> such that <b>p + 2q = 11</b>.</p>
