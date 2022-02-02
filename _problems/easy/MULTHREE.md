---
{"category_name":"easy","problem_code":"MULTHREE","problem_name":"Multiple of 3","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sidhant007","problem_tester":"kingofnumbers","date_added":"14-01-2018","tags":{"0":"cook90","1":"easy","2":"maths","3":"modulo","4":"sidhant007"},"editorial_url":"https://discuss.codechef.com/problems/MULTHREE","time":{"view_start_date":1516559400,"submit_start_date":1516559400,"visible_start_date":1516559400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK90/mandarin/MULTHREE.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK90/russian/MULTHREE.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK90/vietnamese/MULTHREE.pdf">Vietnamese</a> as well.</h3>

<p>
Consider a very long <b>K</b>-digit number <b>N</b> with digits <b>d<sub>0</sub>, d<sub>1</sub>, ..., d<sub>K-1</sub></b> (in decimal notation; <b>d<sub>0</sub></b> is the most significant and <b>d<sub>K-1</sub></b> the least significant digit). This number is so large that we can't give it to you on the input explicitly; instead, you are only given its starting digits and a way to construct the remainder of the number.
</p>

<p>
Specifically, you are given <b>d<sub>0</sub></b> and <b>d<sub>1</sub></b>; for each <b>i</b> ≥ 2, <b>d<sub>i</sub></b> is the sum of all preceding (more significant) digits, modulo 10 — more formally, the following formula must hold:
<img src = "https://discuss.codechef.com/upfiles/latex_ee2df4815ab422dc8e52161db77bfe06.png" width = 400>
</p>

<p>
Determine if <b>N</b> is a multiple of 3.
</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first and only line of each test case contains three space-separated integers <b>K</b>, <b>d<sub>0</sub></b> and <b>d<sub>1</sub></b>.</li>
</ul>

<h3>Output</h3>
<p>
For each test case, print a single line containing the string <tt>"YES"</tt> (without quotes) if the number <b>N</b> is a multiple of 3 or <tt>"NO"</tt> (without quotes) otherwise.
</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 1000</li>
<li>2 ≤ <b>K</b> ≤ 10<sup>12</sup></li>
<li>1 ≤ <b>d<sub>0</sub></b> ≤ 9</li>
<li>0 ≤ <b>d<sub>1</sub></b> ≤ 9</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
5 3 4
13 8 1
760399384224 5 1

<b>Output:</b>
NO
YES
YES
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> The whole number <b>N</b> is <b>34748</b>, which is not divisible by 3, so the answer is NO.</p>
<p><b>Example case 2:</b> The whole number <b>N</b> is <b>8198624862486</b>, which is divisible by 3, so the answer is YES.</p>
