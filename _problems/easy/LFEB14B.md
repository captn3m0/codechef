---
{"category_name":"easy","problem_code":"LFEB14B","problem_name":"Sereja and ASum","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":null,"date_added":"9-02-2014","tags":{"0":"cakewalk","1":"implementation","2":"ltime09","3":"maths","4":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/LFEB14B","time":{"view_start_date":1393146000,"submit_start_date":1393146000,"visible_start_date":1393146000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME09/mandarin/LFEB14B.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME09/russian/LFEB14B.pdf">Russian</a>.</h3>
<p>Sereja have an array that consist of <b>n</b> integers <b>a[1], a[2], ..., a[n]</b>. Now Sereja want to delete some(possible none, but not all) elements from the array, such that arithmetical mean of all remaining numbers will as big as possible.</p>
<p>Help Sereja, find number of ways to delete numbers.</p>
<h3>Input</h3>
<p>First line contain integer <b>T</b> - number of testcases. <b>T</b> tests follow. First line of each testcase contain integer <b>n</b>. Next line contain <b>n</b> integers <b>a[1], a[2], ..., a[n]</b>.</p>
<p> </p>
<h3>Output</h3>
<p>For each testcase print the answer modulo <b>10^9+7</b>.</p>
<p> </p>
<h3>Constraints</h3>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>10^5</b></li>
<li><b>1</b> ≤ <b>a[i]</b> ≤ <b>10^5</b></li>

<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1
1
4
1 2 1 2

<b>Output:</b>
1
3

</pre><p> </p>
<h3>Note</h3>
<p><b>Test #0-1(25 points) n  ≤ </b>20</p>
<p><b>Test #2(25 points) n  ≤ </b>1000</p>
<p><b>Test #3-4(50 points) n  ≤ </b>100000</p>
