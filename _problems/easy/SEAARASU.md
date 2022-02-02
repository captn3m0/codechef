---
{"category_name":"easy","problem_code":"SEAARASU","problem_name":"Sereja and Array and Subtracting","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"iscsi","date_added":"6-11-2015","tags":{"0":"cook64","1":"easy","2":"gcd","3":"mathematics","4":"number","5":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEAARASU","time":{"view_start_date":1448217000,"submit_start_date":1448217000,"visible_start_date":1448217000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK64/mandarin/SEAARASU.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK64/russian/SEAARASU.pdf">Russian</a>.</h3>

<p>
Sereja has an array <b>A</b> of <b>N</b> positive integers : <b>A[1], A[2], A[3], ... , A[N]</b>. 
</p>

<p>
In a single operation on the array, he performs the following two steps :  
<ul>
<li>Pick two indices <b>i, j</b> s.t. <b>A[i] > A[j]</b></li>
<li><b>A[i] -= A[j]</b></li>
</ul>
</p>

<p>
Sereja can apply these operations any number of times (possibly zero), such that the sum of resulting elements of the array is as small as possible.
</p>

<p>
Help Sereja find this minimum sum.
</p>

<h3>Input</h3>
<p>
First line of input contains an integer <b>T</b> - the number of test cases. <b>T</b> test cases follow.
</p>
<p>
First line of each test case contains the integer <b>N</b>. The next line contains <b>N</b> integers — <b>A[1], A[2], A[3], ... , A[N]</b>.
</p>

<h3>Output</h3>
For each test case, output a single line with the answer.

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A[i]</b> ≤ <b>10<sup>9</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
1
1
3
2 4 6

<b>Output:</b>
1
6
</pre>

<h3>Explanation</h3>
<p><b>Example case 2.</b> In this case, one possible way in which Sereja can perform the operations could be as follows. </br>

<ul>
<li> Pick <b>i = 2, j = 1. A[2] -= A[1]</b>. Now the resulting array would be <b>[2, 2, 6]</b>.</li>
<li> Pick <b>i = 3, j = 2. A[3] -= A[2]</b>. Now the resulting array would be <b>[2, 2, 4].</b></li>
<li> Pick <b>i = 3, j = 2. A[3] -= A[2]</b>. Now the resulting array would be <b>[2, 2, 2]</b>.</li> </br>
</ul>

As the resulting array is <b>[2 2 2]</b>, so the sum is 6.
</p>