---
{"category_name":"easy","problem_code":"OBEXPVAL","problem_name":"Obtain Desired Expected Value","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"25-11-2017","tags":{"0":"acm17chn","1":"admin2","2":"chn17rol","3":"simple"},"editorial_url":"https://discuss.codechef.com/problems/OBEXPVAL","time":{"view_start_date":1515357000,"submit_start_date":1515357000,"visible_start_date":1515357000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given <b>n</b> non-negative integers <b>x<sub>1</sub>, x<sub>2</sub>, ..., x<sub>n</sub></b>. You are also given a positive integer <b>E</b>. You have to find <b>n</b> non-negative real  numbers <b>p<sub>1</sub>, p<sub>2</sub>, ..., p<sub>n</sub></b> such that <b>p<sub>1</sub> · x<sub>1</sub> + p<sub>2</sub> · x<sub>2</sub> + p<sub>3</sub> · x<sub>3</sub> + .... + p<sub>n</sub> · x<sub>n</sub> = E</b> and <b>p<sub>1</sub> + p<sub>2</sub> + ... + p<sub>n</sub> = 1</b>.</p>

<p>If it's not possible to find <b>n</b> such numbers, output -1 instead.</p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two space-separated integers <b>n</b> and <b>E</b>.</li>
<li>The second line contains <b>n</b> space-separated integers <b>x<sub>1</sub>, x<sub>2</sub>, ..., x<sub>n</sub></b>.</li>
</ul></p>

<h3>Output</h3>
<p>For each test case, print a single line containing <b>n</b> space-separated real numbers denoting the values of <b>p<sub>1</sub>, p<sub>2</sub>, ..., p<sub>n</sub></b>. If there is more than one possible solution, you may output any one. If there is no solution, print -1 instead.</p>

<p>When a solution exists, your answer will be considered correct if the absolute value of the expression <b>p<sub>1</sub> · x<sub>1</sub> + p<sub>2</sub> · x<sub>2</sub> + p<sub>3</sub> · x<sub>3</sub> + ... + p<sub>n</sub> · x<sub>n</sub> - E</b> doesn't exceed 10<sup>-6</sup> and the value of <b>|(p<sub>1</sub> + p<sub>2</sub>  + p<sub>3</sub> + ... + p<sub>n</sub>) - 1|</b> doesn't exceed 10<sup>-6</sup>.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>n, E</b> ≤ 10<sup>3</sup></li>
<li>1 ≤ <b>x<sub>i</sub></b> ≤ 10<sup>3</sup></li>
<li>sum of <b>n</b> over all test cases doesn't exceed 10<sup>6</sup></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>

3
1 2
1
3 3
1 2 3
4 4
1 2 3 6

<b>Output</b>

-1
0 0 1.00 
0 0 0.66666666666 0.33333333333
</pre>