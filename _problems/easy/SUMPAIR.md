---
{"category_name":"easy","problem_code":"SUMPAIR","problem_name":"Maximize Disjoint Pair Sum","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"devuy11","problem_tester":"adurysk","date_added":"20-05-2015","tags":{"0":"cook60","1":"devuy11","2":"simple"},"editorial_url":"http://discuss.codechef.com/problems/SUMPAIR","time":{"view_start_date":1437330600,"submit_start_date":1437330600,"visible_start_date":1437330600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK60/mandarin/SUMPAIR.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK60/russian/SUMPAIR.pdf">Russian</a> as well.</h3>
<p>Given an array of <b>N</b> numbers, a pair of numbers is called <em>good</em> if difference between the two numbers is strictly less than <b>D</b>.</p>
<p>Find out maximum possible sum of all good disjoint pairs that can be made from these numbers.</p>
<p>Sum of X pairs is the sum of all 2*X numbers in the pairs.</p>
<h3>Input</h3>
<p>First line contains <b>T</b>, the number of test cases to follow.</p>
<p>First line of each test case contains 2 space separated integers: <b>N</b> and <b>D</b>.</p>
<p>Second line of each test case contains <b>N</b> space separated integers.</p>
<h3>Output</h3>
<p>
For each test case, output the answer in a separate line.
</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T, N, D, Array Elements</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ Sum of <b>N</b> over all test cases ≤ 5*10<sup>5</sup></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 3
3 5 8
4 3
5 8 10 12
5 3
3 2 8 17 15

<b>Output:</b>
8
22
37
</pre><h3>Explanation:</h3>
<p>Test Case 1: You can only take 1 pair out of 3 numbers. So pair(3,5) is only valid pair whose difference is 2.
</p>
<p>Test Case 3: You can take pairs(3,2) and (15,17) as the answer.
</p>
<h3>Note:</h3>
<p>Pair (a,b) is disjoint with pair (c,d) if and only if indices of a, b, c and d in the array are distinct.</p>
