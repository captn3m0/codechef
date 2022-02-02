---
{"category_name":"easy","problem_code":"MINPERM","problem_name":"Minimum Good Permutation","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"r_64","problem_tester":"jingbo_adm","date_added":"26-07-2017","tags":{"0":"easy","1":"r_64","2":"sept17"},"editorial_url":"https://discuss.codechef.com/problems/MINPERM","time":{"view_start_date":1505122200,"submit_start_date":1505122200,"visible_start_date":1505122200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/mandarin/MINPERM.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/russian/MINPERM.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/vietnamese/MINPERM.pdf">vietnamese</a> as well.</h3>

<p> A permutation of length <b>n</b> is an array of size <b>n</b> consisting of <b>n</b> <b>distinct </b>integers in the range <b>[1, n]</b>. For example, (3, 2, 4, 1) is a permutation of length 4, but (3, 3, 1, 4) and (2, 3, 4, 5) are not, as (3, 3, 1, 4) contains duplicate elements, and (2, 3, 4, 5) contains elements not in range [1,4].</p>

<p>A permutation <b>p</b> of length <b>n</b> is <em>good</em> if and only if for any <b>1</b> ≤ <b>i</b> ≤ <b>n</b>, <b>p<sub>i</sub></b> ≠ <b>i</b>.</p>

<p>Please find the <b>lexicographically </b>smallest <em>good</em> permutation <b>p</b>.</p>

<p><b>Definition for "lexicographically smaller</b>":</p>

<p>For two permutations <b>p</b> and <b>q</b>, we say that <b>p</b> is lexicographically smaller than <b>q</b> if and only if there exists a index <b>1</b> ≤ <b>l</b> ≤ <b>n</b> such that:</p>
<ul>
	<li>For any <b>1</b> ≤ <b>i</b> &lt; <b>l</b>, <b>p<sub>i</sub></b> = <b>q</b><b><sub>i</sub></b>. Note that if <b>l</b> = <b>1</b>, this constraint means nothing.</li>
	<li>and, <b>p</b><b><sub>l</sub></b> &lt; <b>q</b><b><sub>l</sub></b>.</li>
</ul>
</p>

<p>For example, (2, 3, 1, 4) &lt; (2, 3, 4, 1) &lt; (3, 4, 1, 2). The lexicographically smallest permutation is, of course, (1, 2, ..., <b>n</b>), though this one is not <em>good</em>.</p>

<h3>Input</h3>
<p>First line of the input contains an integer <b>T</b> denoting number of test cases.</p>
<p>For each test case, the only line contains an integer <b>n</b>.</p>

<h3>Output</h3>
<p>For each test case, output the lexicographically smallest <em>good</em> permutation of length <b>n</b>. It's guaranteed that this permutation exists.</p>

<h3>Constraints</h3>
<ul>
	<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
	<li><b>2</b> ≤ <b>n</b> ≤ <b>10<sup>5</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
	<li><b>Subtask #1 (17 points)</b>: <b>2</b> ≤ <b>n</b> ≤ <b>9</b></li>
	<li><b>Subtask #2 (83 points)</b>: Original Constraints</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
4
2
3
5
6

<b>Output:</b>
2 1
2 3 1
2 1 4 5 3
2 1 4 3 6 5
</pre>
<h3>Explanation</h3>
<p>
	<b>Example case 1. </b>The only <em>good</em> permutation of length 2 is (2, 1).</p>
<p>
	<b>Example case 2. </b>Consider all permutations of length 3, they are(in lexicographically order):</p>
<ul>
	<li>p = (1, 2, 3), it's not good since p[1] = 1, p[2] = 2 and p[3] = 3;</li>
	<li>p = (1, 3, 2), it's not good since p[1] = 1;</li>
	<li>p = (2, 1, 3), it's not good since p[3] = 3;</li>
	<li>p = (2, 3, 1), it's good since p[1] ≠ 1, p[2] ≠ 2 and p[3] ≠ 3;</li>
	<li>p = (3, 1, 2), it's good since p[1] ≠ 1, p[2] ≠ 2 and p[3] ≠ 3;</li>
	<li>p = (3, 2, 1), it's not good since p[2] = 2.</li>
</ul>
<p>Thus the minimum good one is (2, 3, 1).</p>
<p><b>Example case 3. </b>Consider two good permutations for third test case: p=(2, 1, 4, 5, 3) and q=(2, 4, 1, 5, 3), then p < q. You can check lexicographically condition as follows. Find the first index where the entries of two permutations are different, and compare those entries. For example, in this case, the first position where the entries differ is index 2. You can see that p[2] < q[2], as 1 < 4, so p is lexicographically smaller than q.</p>
