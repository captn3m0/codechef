---
{"category_name":"hard","problem_code":"ANUAAA","problem_name":"Anup at Amrithapuri","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":7,"source_sizelimit":50000,"problem_author":"anudeep2011","problem_tester":"xiaodao","date_added":"6-01-2015","tags":{"0":"anudeep2011","1":"cook54","2":"medium","3":"mo"},"editorial_url":"http://discuss.codechef.com/problems/ANUAAA","time":{"view_start_date":1421609400,"submit_start_date":1421609400,"visible_start_date":1421609400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK54/mandarin/ANUAAA.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK54/russian/ANUAAA.pdf">Russian</a> as well.</h3>
<h3>Problem description</h3>
<p>Anup recently visited Amrithapuri for ACM ICPC regional contest. A student walked up to Anup, gave him a paper which had a long programming question on it and asked him to solve it by 18th of January, 2015. As Anup was busy with school kids, he posted the question as cook off question, asking wider community to solve that question. Following is the question:</p>
<pre>
function f(A[0..N-1], L, R, P):
	if L > R:
		return f(A, R, L, P)
	ANSWER = 0
	C[] = A[L..R]
	for each subset S of C:
		G = GCD(S)
		for each prime factor PF of G:
			if PF == P:
				ANSWER = MAX(ANSWER, SIZE(S))
	return ANSWER
</pre><p><br />
Clarifications:<br />
Line 5 loops over all 2^(R-L+1) subsets.<br />
GCD(S) returns the Greatest common divisor of all the elements in S.<br />
SIZE(S) returns the number of elements in S.
</p>
<p><br />
Given: <b>N</b>, <b>M</b>, <b>A[0..N-1]</b>, <b>B[0..M-1]</b><br />
Required: <br />
<img src="http://www.codechef.com/download/COOK54/ANUAAA_1.gif" /><br />
Where <b>L = (B[i] + B[j]) % N<br />
R = (B[i] - B[j] + N) % N</b><br />
As the answer can be large. Output it modulo 1000000007.
</p>
<h3>Input</h3>
<p>First line has two integer <b>N</b> and <b>M</b>. Second line has <b>N</b> space separated integers representing the array <b>A</b>. Third line has <b>M</b> space separated integers representing the array <b>B</b>.</p>
<h3>Output</h3>
<p>Output single integer which is the required answer modulo 1000000007</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>500</b></li>
<li><b>1</b> ≤ <b>A[i]</b> ≤ <b>100000</b></li>
<li><b>0</b> ≤ <b>B[i]</b> &lt; <b>N</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5 2
1 2 3 4 5
1 2

<b>Output:</b>
34
</pre><h3>Explanation</h3>
<p>Here are the answers of few calls to function f()<br />
f(A, 2, 0, 2) = 1<br />
f(A, 2, 0, 5) = 0<br />
f(A, 3, 4, 2) = 1
</p>
