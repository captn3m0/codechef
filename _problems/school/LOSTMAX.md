---
{"category_name":"school","problem_code":"LOSTMAX","problem_name":"Find the Maximum Value","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"arpa","problem_tester":null,"date_added":"28-07-2017","tags":{"0":"arpa","1":"cakewalk","2":"ltime50"},"editorial_url":"https://discuss.codechef.com/problems/LOSTMAX","time":{"view_start_date":1501349400,"submit_start_date":1501349400,"visible_start_date":1501349400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME50/mandarin/LOSTMAX.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME50/russian/LOSTMAX.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME50/vietnamese/LOSTMAX.pdf">vietnamese</a> as well.</h3>

<p>The Chef had a box with <b>N</b> numbers arranged inside it: <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>. He also had the number <b>N</b> at the front, so that he knows how many numbers are in it. That is, the box actually contains <b>N</b>+1 numbers. But in his excitement due the ongoing <a href = "http://ioi2017.org/">IOI</a>, he started dancing with the box in his pocket, and the <b>N</b>+1 numbers got jumbled up. So now, he no longer knows which of the <b>N</b>+1 numbers is <b>N</b>, and which the actual numbers are.<p>

<p>He wants to find the largest of the <b>N</b> numbers. Help him find this.</p>


<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of each testcase follows.</li>
<li>Each of the next <b>T</b> lines will contain <b>N</b> and <b>N</b> numbers, but it is not guaranteed that <b>N</b> is the first number. </li>
</ul>

<h3>Output</h3>
<p> For each test case, output a single line containing the maximum value of the <b>N</b> numbers in that testcase.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>N</b> ≤  50 </li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup> </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
1 2 1
3 1 2 8
1 5 1 4 3 2

<b>Output:</b>
1
8
4
</pre>

<h3>Explanation</h3>
<p><b>Test case 1:</b> </p>
<p>
<b> N</b> = 2 and the numbers are {1, 1}. The maximum among these 2 numbers is 1, and hence the output is 1. </p>


<p><b>Test case 2:</b></p>
<p>
<b> N</b> = 3 and the numbers are {1, 2, 8}. The maximum among these 3 numbers is 8, and hence the output is 8. </p>


<p><b>Test case 3:</b></p>
<p>
<b> N</b> = 5 and the numbers are {1, 1, 4, 3, 2}. The maximum among these 5 numbers is 4, and hence the output is 4.</p>