---
{"category_name":"easy","problem_code":"CHEFLCM","problem_name":"Chef and Interview","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"abhra73","problem_tester":"xcwgf666","date_added":"21-01-2015","tags":{"0":"abhra73","1":"april15","2":"lcm","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CHEFLCM","time":{"view_start_date":1428917400,"submit_start_date":1428917400,"visible_start_date":1428917400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL15/mandarin/CHEFLCM.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL15/russian/CHEFLCM.pdf">Russian</a>.</h3>
<p>Chef wants to hire a new assistant. He published an advertisement regarding that in a newspaper. After seeing the advertisement, many candidates have applied for the job. Now chef wants to shortlist people for the interviews, so he gave all of them one problem which they must solve in order to get shortlisted.</p>
<p> The problem was : For a given positive integer <b>N</b>, what is the maximum sum of distinct numbers such that the <a href = "http://en.wikipedia.org/wiki/Least_common_multiple">Least Common Multiple</a> of all these numbers is <b>N</b>.  </p>
<p> Your friend Rupsa also applied for the job, but was unable to solve this problem and hence you've decided to help her out by writing a code for solving this problem.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>Each test case contains a single integer <b>N</b>.</p>
<h3>Output</h3>
<p>
For each test case, output a single line containing an integer corresponding to the answer for that test case.
</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>9</sup></b></li>
</ul>
</p>
<p><b>Subtask 1 (30 points):</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
</ul>

<p><b>Subtask 2 (70 points):</b></p>
<ul>
<li>original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
1
2

<b>Output:</b>
1
3
</pre><h3>Explanation</h3>
<p><b>Example 1 :</b> Only possible number is <b>1</b>, so the maximum sum of distinct numbers is exactly <b>1</b>. <br />
<b>Example 2 :</b> The distinct numbers you can have are just <b>1</b> and <b>2</b>, so the sum is <b>3</b>. If we consider any other number greater than <b>2</b>, then the least common multiple will be more than <b>2</b>.</p>
