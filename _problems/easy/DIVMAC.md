---
{"category_name":"easy","problem_code":"DIVMAC","problem_name":"Dividing Machine","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"1 - 3","source_sizelimit":50000,"problem_author":"kaizer","problem_tester":"dpraveen","date_added":"5-07-2015","tags":{"0":"kaizer","1":"medium","2":"segment","3":"sept16"},"editorial_url":"http://discuss.codechef.com/problems/DIVMAC","time":{"view_start_date":1473931800,"submit_start_date":1473931800,"visible_start_date":1473931800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/mandarin/DIVMAC.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/russian/DIVMAC.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/vietnamese/DIVMAC.pdf">Vietnamese</a> as well.</h3>


<p>Chef has created a <i>special dividing machine</i> that supports the below given operations on an array of positive integers.</p>

<p>There are two operations that Chef implemented on the machine.</p>

<p>
<b>Type 0 Operation</b></br>
<code>
<pre>
<b>Update(L,R):</b>
	for i = L to R:
		a[i] = a[i] / LeastPrimeDivisor(a[i])
</pre>
</code>
</p>

<p>
<b>Type 1 Operation</b></br>
<code>
<pre>
<b>Get(L,R):</b>
	result = 1
	for i = L to R:
		result = max(result, LeastPrimeDivisor(a[i]))
	return result;
</pre>
</code>
</p>

<p>The function <b>LeastPrimeDivisor(x)</b> finds the smallest prime divisor of a number. If the number does not have any prime divisors, then it returns 1.</p>

<p>Chef has provided you an array of size <b>N</b>, on which you have to apply <b>M</b> operations using the special machine. Each operation will be one of the above given two types. Your task is to implement the <i>special dividing machine</i> operations designed by Chef. Chef finds this task quite easy using his machine, do you too?</p>


<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. </p>
</p>The first line of each test case contains two space-separated integers <b>N</b>, <b>M</b>, denoting the size of array <b>A</b> and the number of queries correspondingly.</p>
<p>The second line of each test case contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the initial array for dividing machine.</p>
<p>Each of following <b>M</b> lines contain three space-separated integers <b> type</b>, <b>L</b>, <b>R</b> - the type of operation (<b>0</b> - <b>Update</b> operation, <b>1</b> - <b>Get</b> operation), and the arguments of function, respectively</p>

<h3>Output</h3>
<p>For each test case, output answer of each query of type 1 (<b>Get</b> query) separated by space. Each test case from the same file should start from the new line.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>N</b></li>
<li><b>0</b> ≤ <b>type</b> ≤ <b>1</b></li>
<li> Sum of <b>M</b> over all test cases in a single test file does not exceed <b>10<sup>6</sup></b></li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask #1: (10 points) </b></p>
<ul>
<li><b>1</b> ≤ <b>N</b>, <b>M</b> ≤ <b>10<sup>3</sup></b></li>
</ul></br>

<p><b>Subtask #2: (25 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>N</b>, <b>M</b> ≤ <b>10<sup>5</sup></b></li>
<li> <b>A<sub>i</sub></b> is a prime number. </li>
</ul></br>

<p><b>Subtask #3: (65 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>N</b>, <b>M</b> ≤ <b>10<sup>5</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b><tt>
2
6 7
2 5 8 10 3 44
1 2 6
0 2 3
1 2 6
0 4 6
1 1 6
0 1 6
1 4 6
2 2
1 3
0 2 2
1 1 2
</tt>
<b>Output:</b><tt>
5 3 5 11
1
</tt></pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b>The states of array A after each <b>Update</b>-operation:</p>
<pre>
<b>A:</b> = [2 1 4 10 3 44]
<b>A:</b> = [2 1 4 5 1 22]
<b>A:</b> = [1 1 2 1 1 11]
</pre>