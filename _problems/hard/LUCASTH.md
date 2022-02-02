---
{"category_name":"hard","problem_code":"LUCASTH","problem_name":"Lucas Theorem","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"yzl427","problem_tester":"r_64","date_added":"24-11-2017","tags":{"0":"divide","1":"feb18","2":"fft","3":"lucas","4":"math","5":"yzl427"},"editorial_url":"https://discuss.codechef.com/problems/LUCASTH","time":{"view_start_date":1518427800,"submit_start_date":1518427800,"visible_start_date":1518427800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/mandarin/LUCASTH.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/russian/LUCASTH.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/vietnamese/LUCASTH.pdf">Vietnamese</a> as well.</h3>

<p>Chef is tired of solving boring math problems by hand. One of these problems is summing up the products of elements from each <b>k</b>-subset of the set <b>[n]</b>. Here, a <b>k</b>-subset is a subset containing exactly <b>k</b> elements and <b>[n]</b> refers to the set which contains all integers between <b>1</b> and <b>n</b> (inclusive). More formally:</p>

<img src="https://raw.githubusercontent.com/Lucas110550/ProblemImages/master/lucasth.png" width="50%" height="50%">

<p>Let’s denote this number by <b>f</b>(<b>n</b>, <b>k</b>). Note that <b>f</b>(<b>n</b>, 0) = 1.</p>

<p>Since calculating <b>f(n, k)</b> is too boring, Chef wants to know how the divisibility of <b>f(n, k)</b> by a given prime <b>p</b> depends on <b>k</b>. Specifically, for a fixed <b>n</b>, you should compute the number of ways to select <b>k</b> (0 ≤ <b>k</b> ≤ <b>n</b>) so that <b>f</b>(<b>n</b>, <b>k</b>) isn't divisible by <b>p</b>. After a while of thinking, Chef realized there might be too many ways to do that. Therefore, you should compute this number modulo <b>10<sup>9</sup>+7</b>.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first and only line of each test case contains two space-separated integers <b>n</b> and <b>p</b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing one number — the number of ways to select <b>k</b>, modulo 10<sup>9</sup>+7.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 4</li>
<li>1 ≤ <b>n</b> &lt; 10<sup>501</sup></li>
<li><b>n</b> does not contain leading zeroes</li>
<li>2 ≤ <b>p</b> ≤ 100,000</li>
<li><b>p</b> is prime</li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask #1 (10 points):</b> <b>n</b> ≤ 5,000</p>

<p><b>Subtask #2 (40 points):</b> <b>n</b> ≤ 100,000</p>

<p><b>Subtask #3 (50 points):</b> original constraints</p>

<h3>Example</h3>
<pre><b>Input:</b>

1
4 2

<b>Output:</b>

2
</pre>

<h3>Explanation</h3>

<p><b>Example case 1:</b> The values of <b>f</b>(4, <b>k</b>) are as follows:
<ul>
<li><b>f</b>(4, 0) = 1</li>
<li><b>f</b>(4, 1) = 1+2+3+4 = 10</li>
<li><b>f</b>(4, 2) = 1·2+2·3+3·4+4·1+1·3+2·4 = 35</li>
<li><b>f</b>(4, 3) = 1·2·3+2·3·4+1·3·4+1·2·4 = 50</li>
<li><b>f</b>(4, 4) = 1·2·3·4 = 24</li>
</ul></p>

<p>Only <b>k</b> = 0 and <b>k</b> = 2 give numbers indivisible by <b>p</b> = 2, so the answer is 2.</p>
