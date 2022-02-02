---
{"category_name":"easy","problem_code":"CHEFCK","problem_name":"Chef and Cake","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"abhra73","problem_tester":"kevinsogo","date_added":"11-03-2015","tags":{"0":"abhra73","1":"easy","2":"may15","3":"range","4":"sliding"},"editorial_url":"http://discuss.codechef.com/problems/CHEFCK","time":{"view_start_date":1431941400,"submit_start_date":1431941400,"visible_start_date":1431941400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>The Chef once decided to prepare some nice dishes on his birthday. There are <b>N</b> items kept on his shelf linearly from position <b>1</b> to <b>N</b>. Taste of the i-th item is denoted by a integer <b>A<sub>i</sub></b>.</p>
<p>He wants to make <b>Q</b> dishes. A dish will be made using some ingredients in the continuous range <b>A<sub>L</sub>, A<sub>L + 1</sub>, , , A<sub>R</sub></b> (1-base indexing). Quality of the dish will be determined by the ingredient with minimum taste.</p>
<h3>Read problems statements in <a target="_blank" href="/download/translated/MAY15/mandarin/CHEFCK.pdf">Mandarin Chinese </a> and <a target="_blank" href="/download/translated/MAY15/russian/CHEFCK.pdf">Russian</a>.</h3>
<p>The Chef once decided to prepare some nice dishes on his birthday. There are <b>N</b> items kept on his shelf linearly from position <b>1</b> to <b>N</b>. Taste of the i-th item is denoted by a integer <b>A<sub>i</sub></b>.</p>
<p>He wants to make <b>Q</b> dishes. A dish will be made using some ingredients in the continuous range <b>A<sub>L</sub>, A<sub>L + 1</sub>, , , A<sub>R</sub></b> (1-base indexing). Quality of the dish will be determined by the ingredient with minimum taste.</p>
<p>Chef wants help of his assistant Rupsa to find out sum and product of qualities of the dishes. As product of the qualities of the dishes could be very large, print it modulo <b>10<sup>9</sup> + 7</b>. Also, you are given an integer <b>K</b> and you are assured that for each dish, the size of continuous range of the ingredients (i.e. <b>R - L + 1</b>) will always lie between <b>K</b> and <b>2 * K</b>, both inclusive.</p>
<p><b><i>Method of generation of Array A</i></b> <br /> You are given non-negative integer parameters <b>a, b, c, d, e, f, r, s, t, m, A[1]</b></p>
<pre><code>
for x = 2 to N:
	if(t^x mod s  &lt;= r)        // Here t^x signifies "t to the power of x"
		A[x] = (a*A[x-1]^2 + b*A[x-1] + c) mod m
	else
		A[x] = (d*A[x-1]^2 + e*A[x-1] + f) mod m
</code></pre>
<p><b>Method of generation of range of ingredients for Q dishes</b> <br /> You are given non-negative integer parameters <b>L1, La, Lc, Lm, D1, Da, Dc, Dm</b></p>
<pre><code>
for i = 1 to Q:
	L1 = (La * L1 + Lc) mod Lm;
	D1 = (Da * D1 + Dc) mod Dm; 
	L = L1 + 1;
	R = min(L + K - 1 + D1, N);
</code></pre>
<h3>Input</h3>
<ul>
<li>The first line contains three integers <b>N</b>, <b>K</b> and <b>Q</b>.</li>
<li>The second line contains the integers <b>a, b, c, d, e, f, r, s, t, m,</b> and <b>A[1]</b>.</li>
<li>Then third line contains the integers <b>L1, La, Lc, Lm, D1, Da, Dc,</b> and <b>Dm</b></li>
</ul>
<h3>Output</h3>
<p>Output two space separated integers:</p>
<ul>
<li>The sum of qualities of the dishes.</li>
<li>The product of qualities of the dishes modulo <b>10<sup>9</sup>+7</b>.</li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ N, Q ≤ 10<sup>7</sup></b></li>
<li><b>1 ≤ K ≤ N</b></li>
<li><b>0 ≤ a, b, c, d, e, f, r, s, t, m, A[1] ≤ 10<sup>9</sup>+7</b></li>
<li><b>1 ≤ Lm ≤ N - K + 1</b></li>
<li><b>1 ≤ Dm ≤ K + 1</b></li>
<li><b>1 ≤ La, Lc ≤ Lm</b></li>
<li><b>1 ≤ Da, Dc ≤ Dm</b></li>
<li><b>1 ≤ L1 ≤ N</b></li>
<li><b>1 ≤ D1 ≤ K</b></li>
</ul>
<h3>Sub tasks</h3>
<ul>
<li>Subtask #1: <b>1 ≤ N, Q ≤ 1000</b> (10 points)</li>
<li>Subtask #2: <b>1 ≤ Q ≤ 10<sup>4</sup></b> (20 points)</li>
<li>Subtask #3: original constraints (70 points)</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4 2 1
1 1 1 1 1 1 1 1 1 100 1 
1 1 1 3 1 1 1 2

<b>Output:</b>
13 13
</pre>
<h3>Explanation</h3>
<ul>
<li>The array <b>A</b> comes out to be <b>{1, 3, 13, 83}</b> and the first dish has <b>L = 3</b> and <b>R = 4</b>. The minimum in this range is <b>13</b>, thus the sum and product both are <b>13</b> and hence the answer.</li>
</ul>
<h3>Note</h3>
<p>Multiplier for C# and Java have been reduced to 1.5 instead of 2.</p>