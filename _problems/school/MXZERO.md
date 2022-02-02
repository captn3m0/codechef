---
{"category_name":"school","problem_code":"MXZERO","problem_name":"Make XOR zero","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":null,"date_added":"13-05-2015","tags":{"0":"ad","1":"counting","2":"snck151b","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/MXZERO","time":{"view_start_date":1432954800,"submit_start_date":1432954800,"visible_start_date":1432954800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151B/mandarin/MXZERO.pdf">Mandarin Chinese </a> , <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151B/russian/MXZERO.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151B/vietnamese/MXZERO.pdf">Vietnamese</a></h3>


<p>Olya has written <b>N</b> binary integers (i.e. either zero or one) on a blackboard. She recently learned about XOR operation. Now she wants to erase exactly one integer in the array so that the <a href="http://en.wikipedia.org/wiki/Exclusive_or">XOR</a> of the remaining <b>N - 1</b> numbers is zero. Please help her to calculate the number of ways of doing so.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of numbers that Olya has written on a blackboard.</p> 
<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the numbers she had written. </p>

<h3>Output</h3>
For each test case, output a single line containing the number of ways to erase exactly one integer so that the XOR of the remaining integers is zero. The ways where you erase the same integer but on different places in the given sequence are considered different.

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>A<sub>i</sub></b> ≤ <b>1</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
5
1 0 0 0 0
5
1 1 1 1 1

<b>Output:</b>
1
5
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> If you erase the first number on the blackboard, then the XOR of the rest of numbers will be equal to zero.</p>
<p><b>Example case 2.</b> You can erase any of the given 5 numbers, it will make the XOR of the rest equal to zero.</p>