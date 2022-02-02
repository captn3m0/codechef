---
{"category_name":"easy","problem_code":"MXMEDIAN","problem_name":"Median of adjacent maximum numbers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"5-05-2017","tags":{"0":"admin2","1":"long","2":"may17"},"editorial_url":"https://discuss.codechef.com/problems/MXMEDIAN","time":{"view_start_date":1495099800,"submit_start_date":1495099800,"visible_start_date":1495099800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY17/mandarin/MXMEDIAN.pdf">mandarin chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MAY17/russian/MXMEDIAN.pdf">russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY17/vietnamese/MXMEDIAN.pdf">vietnamese</a> as well.</h3>

<p>You are given an array <b>A</b> of size <b>2 * N</b> consisting of positive integers, where <b>N</b> is an odd number. You can construct an array B from <b>A</b> as follows, B[i] = max(<b>A</b>[2 * i - 1], <b>A</b>[2 * i]), i.e. B array contains the maximum of adjacent pairs of array <b>A</b>. Assume that we use 1-based indexing throughout the problem.</p>

<p>You want to maximize the <a href="https://en.wikipedia.org/wiki/Median">median</a> of the array B. For achieving that, you are allowed to permute the entries of <b>A</b>. Find out the maximum median of corresponding B array that you can get. Also, find out any permutation for which this maximum is achieved.
</p>

<h3>Note</h3>
<p>Median of an array of size n, where n is odd, is the middle element of the array when it is sorted in non-decreasing order. Note that n being odd, the middle element will be unique, i.e. at index (n+1) / 2.</b>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains an integer <b>N</b>.</p>
<p>The second line of each test case contains <b>2 * N</b> space separated integers denoting array <b>A</b>.</p>


<h3>Output</h3>
<p>For each test case, output two lines.</p>
<p>The first of which should contain an integer corresponding to maximum value of the median of array B that you can get.</p>
<p>In the second line, print <b>2 * N</b> integers in a single line denoting any permutation of <b>A</b> for which the maximum value of median of array B is achieved.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N</b> ≤ 50000</li>
<li>1 ≤ <b>A</b><sub>i</sub> ≤ 2 * N</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1</b> (25 points) : 1 ≤ N ≤ 3</li>
<li><b>Subtask #2</b> (75 points) : original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
1
1 2
3
1 2 3 4 5 6
3
1 3 3 3 2 2

<b>Output:</b>
2
1 2
5
1 3 2 5 4 6
3
1 3 3 3 2 2
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> There are only two possible permutations of <b>A</b>, for both of those B will be 2. The median of B is 2.
</p>

<p><b>Example case 2.</b> For following permutation of A: 1 3 2 5 4 6, the corresponding B will be: 3 5 6, whose median is 5, which is the maximum that you can achieve.
</p>

<p><b>Example case 3.</b> For A: 1 3 3 3 2 2, the corresponding B will be: 3, 3, 2. Its 
median is 3, which is maximum that you can achieve.
</p>