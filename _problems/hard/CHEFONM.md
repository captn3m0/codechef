---
{"category_name":"hard","problem_code":"CHEFONM","problem_name":"Chef and Sort","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"karanaggarwal","date_added":"10-07-2016","tags":{"0":"cook72","1":"expected","2":"gauss","3":"hard","4":"mgch","5":"permutation","6":"probability"},"editorial_url":"http://discuss.codechef.com/problems/CHEFONM","time":{"view_start_date":1469385000,"submit_start_date":1469385000,"visible_start_date":1469385000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK72/mandarin/CHEFONM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK72/russian/CHEFONM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK72/vietnamese/CHEFONM.pdf">Vietnamese</a> as well.</h3>
<p>Chef has permutation <b>P</b> consisting of first <b>N</b> numbers, (i.e. from 1 to <b>N</b>). He wants to sort it, but he doesn't know any type of sort, except<a href="https://en.wikipedia.org/wiki/Bogosort"> Bogosort</a> . Chef is afraid that Bogosort might take a lot of time, so he optimized that algorithm and called it Chefsort. But he doesn't know expected time complexity of this algorithm. Formally, he wants to find expected value of findSwaps function. Please help him to find it. Below is the pseudo code of Chefsort.
</p>
<pre>
<code>
function findSwaps(permutation P) {
	swaps = 0;
	WHILE (not sorted P) {
		(i, j) = random pair (1 &lt;= i &lt; j &lt;= n)
		SWAP(P[i], P[j])
		swaps = swaps + 1;
	}
	return swaps;
}
</code>
</pre><h3>Input</h3>
<p>First line of the input contains one integer <b>T</b>, denoting number of tests. <b>T</b> test case follow. </p>
<p>For each test case, first line contains one integer <b>N</b>, denoting number of elements in the permutation.</p>
<p>Second line contains <b>N</b> space separated integers denoting the permutation <b>P</b></p>
<h3>Output</h3>
<p>Output a single real number corresponding to expected number of swap operations in Chefsort. Answer will be correct if absolute error less than <b>10<sup>-2</sup></b>.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>2 ≤ <b>N</b> ≤ 10</li>
<li>1 ≤ <b>P<sub>i</sub></b> ≤ <b>N</b> </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
2
2 1
3
2 1 3
4
2 3 4 1
6
2 5 1 3 4 6

<b>Output:</b>
1.0000000
5.0000000
27.5000000
781.0416667
</pre>