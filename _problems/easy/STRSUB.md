---
{"category_name":"easy","problem_code":"STRSUB","problem_name":"Count Substrings","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"darkshadows","problem_tester":"laycurse","date_added":"18-04-2014","tags":{"0":"binary","1":"darkshadows","2":"dynamic","3":"march15","4":"simple"},"editorial_url":"http://discuss.codechef.com/problems/STRSUB","time":{"view_start_date":1426498200,"submit_start_date":1426498200,"visible_start_date":1426498200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH15/mandarin/STRSUB.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH15/russian/STRSUB.pdf">Russian</a>.</h3>
<p>You are given a string <b>S</b> of length <b>N</b> consisting only of <b>0</b>s and <b>1</b>s. You are also given an integer <b>K</b>.</p>
<p>You have to answer <b>Q</b> queries. In the <b>i</b><sup>th</sup> query, two integers <b>L<sub>i</sub></b> and <b>R<sub>i</sub></b> are given. Then you should print the number of substrings of <b>S[L, R]</b> which contain at most <b>K</b> <b>0</b>s and at most <b>K</b> <b>1</b>s where <b>S[L, R]</b> denotes the substring from <b>L</b><sup>th</sup> to <b>R</b><sup>th</sup> characters of the string <b>S</b>. <br />
In other words, you have to count number of pairs <b>(i, j)</b> of integers such that <b>L ≤ i ≤ j ≤ R</b> such that no character in substring <b>S[i, j]</b> occurs more than <b>K</b> times.</p>
<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b>, denoting the number of test cases. Then <b>T</b> test cases follow.</p>
<p>The first line of each test case contains three space-separated integers <b>N</b>, <b>K</b> and <b>Q</b> as described in the problem. The second line contains a string <b>S</b> of length <b>N</b>. Then the next <b>Q</b> lines describe the query, where the <b>i</b><sup>th</sup> line of them contains two space-separated integers <b>L<sub>i</sub></b> and <b>R<sub>i</sub></b>.</p>
<h3>Output</h3>
<p>For each query, print the required answer in a single line.</p>
<h3>Constraints and Subtasks</h3>
<ul>
<li><b>1 ≤ T ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ K ≤ N ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ Q ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ L<sub>i</sub> ≤ R<sub>i</sub> ≤ N</b></li>
<li>Sum of <b>N</b> over all test cases in one test file does not exceed <b>10<sup>5</sup></b></li>
<li>Sum of <b>Q</b> over all test cases in one test file does not exceed <b>10<sup>5</sup></b></li>
<li><b>S</b> consists only of <b>0</b>s and <b>1</b>s.</li>
</ul>
<p> </p>
<p><b>Subtask 1: 10 points</b></p>
<ul>
<li>Sum of <b>N</b> over all test cases in one test file does not exceed <b>100</b></li>
</ul>
<p> </p>
<p><b>Subtask 2: 10 points</b></p>
<ul>
<li><b>Q = 1</b></li>
<li><b>1 ≤ K ≤ min(5, N)</b></li>
</ul>
<p> </p>
<p><b>Subtask 3: 20 points</b></p>
<ul>
<li><b>1 ≤ Q ≤ 10</b></li>
</ul>
<p> </p>
<p><b>Subtask 4: 60 points</b></p>
<ul>
<li>Original constraints.</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
8 2 3
01110000
1 4
2 4
5 8

<b>Output:</b>
8
5
7
</pre><h3>Explanation</h3>
<p><b>Query 1:</b> Consider substring <b>P = S[1, 4] = "0111"</b>.<br/>Out of <b>10</b> total substrings of <b>P</b>, substrings <b>P[1, 4]</b> and <b>P[2, 4]</b> are not valid because both contain more than two <b>1</b>s.<br/> Other substrings contains at most two <b>0</b>s and at most two <b>1</b>s, thus the answer is <b>8</b>.</br/></br/></p>
<p><b>Query 2:</b> Consider substring <b>P = S[2, 4] = "111"</b>.<br/>Out of <b>6</b> total substrings of <b>P</b>, substrings <b>P[1, 3]</b> is  not valid because it contains more than two 1s.</br/></p>
<p><b>Query 3:</b> Consider substring <b>P = S[5, 8] = "0000"</b>.<br/>Out of <b>10</b> total substrings of <b>P</b>, substrings <b>P[1, 3]</b>, <b>P[1, 4]</b> and <b>P[2, 4]</b> are not valid because all contain more than two <b>0</b>s.</br/></p>
