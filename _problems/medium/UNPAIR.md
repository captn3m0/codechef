---
{"category_name":"medium","problem_code":"UNPAIR","problem_name":"No Unpaired Chefs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pnkjjindal","problem_tester":"xcwgf666","date_added":"14-03-2015","tags":{"0":"graph","1":"ltime22","2":"medium","3":"mst","4":"pnkjjindal"},"editorial_url":"http://discuss.codechef.com/problems/UNPAIR","time":{"view_start_date":1427617800,"submit_start_date":1427617800,"visible_start_date":1427617800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME22/mandarin/UNPAIR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME22/russian/UNPAIR.pdf">Russian</a>.</h3>
<p>
Codechef has now decided to make an admin panel amongst their chefs. This way they think that it would be easier for them to control and regulate their contests. To do so, they have asked them to rate everyone including themselves by a non-negative integer.
</p>
<p>There are <b>N</b> chefs, numbered from <b>1</b> to <b>N</b>. Each chef has submitted a rating to the Codechef panel for other all the chefs including a rating to himself. Surprisingly for the team, for each pair of chefs (say, chef with the number <b>i</b> and the chef with the number <b>j</b>), they collaborated within themselves and gave the same rating to each other i.e. the rating that the chef <b>i</b> has given to the chef <b>j</b> is equal to the rating that the chef <b>j</b> has given to the chef <b>i</b>. The Codechef team built a rating matrix from this input from Chefs. Now, from this input rating matrix <b>M</b>, they will make a <i>Paired</i> rating matrix <b>P</b> as follows:</p>
<ul>
<li><b>P</b> is symmetric.</li>
<li><b>P<sub>i, j</sub></b> is either equal to zero, or to <b>M<sub>i, j</sub></b>, where <b>M<sub>i, j</sub></b> is the rating given by i<sup>th</sup> chef to the j<sup>th</sup> chef.</li>
<li>There exists <b>S</b> > 0, such that each entry in <b>P + P<sup>2</sup> + ... + P<sup>S</sup></b> is positive.</li>
<li>To make things more friendly between the admin panel of Chefs, the sum of values in <b>P</b> is minimum possible.</li>
</ul>

<p>
Help the Codechef panel in selecting such a matrix <b>P</b> from <b>M</b>. Please find the minimum possible sum of entries in the matrix <b>P</b> such that <b>P</b> will still satisfy the constraints.
</p>
<h3>Input</h3>
<p>The first line of the input contains <b>T</b>, number of test cases to follow. Then <b>T</b> test cases follow.</p>
<p>Each test case start with a line containing an integer <b>N</b>, the number of chefs in Codechef team.</p>
<p>Then <b>N</b> lines follow. Each of them contains <b>N</b> space-separated integers. The <b>j</b><sup>th</sup> integer in the <b>i</b><sup>th</sup> line is the rating given by chef with the number <b>i</b> to chef with the number <b>j</b>.</p>
<h3>Output</h3>
<p>For each test case, print the minimum sum of entries, possible for <b>P</b>. If it is not possible to do, print "-1" (without quotes).</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li>Constraints on <b>N</b>:</li>
<ul>
<li>Subproblem 1 (30 points): <b> 1</b> ≤ <b>N</b> ≤ <b>5</b></li>
<li>Subproblem 2 (70 points): <b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
</ul>
<li><b>0</b> ≤ <b>M<sub>i, j</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
1 0
0 1
2
1 1
1 1

<b>Output:</b>
-1
2
</pre>
<p>
<b>Explanation:</b><br /><br />
In the first sample case, there are only two choices of choosing P, one is a zero-matrix, for a zero matrx, we will never be able to make <b>P + P<sup>2</sup> + ... + P<sup>S</sup></b> all positive. Another choice is to chose P = M, for this case also, we can never make the sum with all positive values for any S.<br /><br />
In the second case, if one selects P such that we eliminate diagonal elements from M, we get all sum positive for S=2 itself. One can check that this is the minimum sum value for P possible to satisfy all constraints.
</p>
