---
{"category_name":"medium","problem_code":"CHEFPRAD","problem_name":"Chef and Pairs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"1-06-2017","tags":{"0":"mgch"},"time":{"view_start_date":1496516400,"submit_start_date":1496516400,"visible_start_date":1496516400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/mandarin/CHEFPRAD.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/russian/CHEFPRAD.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/vietnamese/CHEFPRAD.pdf">Vietnamese</a> as well.</h3>

<p>We define a function maxMatching(A, B, y), which takes two arrays of integers, A and B, an integer y, and returns an integer. The function is described as follows:</p>
<p>Let N be the size of array A, and M be the size of array B. Consider a bipartite graph with one side having the vertices {a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>N</sub>}, and the other side having the vertices {b<sub>1</sub>, b<sub>2</sub>, ..., b<sub>M</sub>}. There is an edge between a<sub>i</sub> and b<sub>j</sub> if abs(A<sub>i</sub> - B<sub>j</sub>) ≤ y. The function returns the size of a <a href = "https://en.wikipedia.org/wiki/Matching_(graph_theory)#Definition">maximum matching</a> in this graph.</p>

<p> Now, you are given two arrays, <b>C</b> and <b>D</b>, an integer <b>e</b>, and asked to output the result of this procedure: </p>
<pre> <code>
ans = maxMatching(C, D, e)
FOR x = -2*10^9..2*10^9
	 FOR i = 1..N
	 	 F[i] = C[i] + x
	 ans = max(ans, maxMatching(F, D, e))
output ans
</code></pre>
<p> </p>

<h3>Input</h3>
<ul>
<li>The first line contains one integer <b>T</b>, denoting the number of tests. <b>T</b> test cases follows. </li>

<li>The first line of each test case contains three integers: <b>N</b> - number of elements of array <b>C</b>, <b>M</b> - number of elements of array <b>D</b> and <b>e</b>.</li>
<li>The second line contains <b>N</b> space-separated integers denoting elements of array <b>C</b>.</li>
<li>The third line contains <b>M</b> space-separated integers denoting elements of array <b>D</b>.</li>
</ul>

<h3>Output</h3>
<p> For each test case output the final value of "ans" as produced by the given procedure, in a new line. </p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N, M</b> ≤ 250 </li>
<li>1 ≤ <b>C<sub>i</sub>, D<sub>i</sub></b>, <b>e</b> ≤ 10<sup>9</sup></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
5 7 1
8 9 18 13 19
1 3 7 20 17 18 11

<b>Output:</b>
4
</pre>