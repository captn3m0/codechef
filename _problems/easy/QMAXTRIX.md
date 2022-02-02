---
{"category_name":"easy","problem_code":"QMAXTRIX","problem_name":"Query over Matrix","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"amitpandeykgp","problem_tester":"pushkarmishra","date_added":"3-11-2015","tags":{"0":"amitpandeykgp","1":"implementation","2":"ltime30","3":"precomputation"},"editorial_url":"http://discuss.codechef.com/problems/QMAXTRIX","time":{"view_start_date":1448785800,"submit_start_date":1448785800,"visible_start_date":1448785800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME31/mandarin/SVNTR.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME31/russian/SVNTR.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME31/vietnamese/SVNTR.pdf">Vietnamese </a> as well.</h3>


<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME30/mandarin/QMAXTRIX.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME30/russian/QMAXTRIX.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME30/vietnamese/QMAXTRIX.pdf"> Vietnamese</a></h3>


<p>
There is a <b>N*N</b> square matrix. You have been given <b>N</b> specifications, one per row of the matrix. The <b>i<sup>th</sup></b> specifications is represented by a pair of integers <b>L[i]</b> and <b>R[i]</b>, denoting that all element belonging to columns between <b>L[i]</b> and <b>R[i]</b> (both inclusive) in row <b>i</b> are 1, while the rest of the elements of the <b>i</b><sup>th</sup> row are 0.<br>
</p>
<p>
Now you will be given an integer <b>Q</b>, followed by <b>Q</b> operations: Each query is described by two integers <b>x</b> and <b>y</b>, which asks what will be the parity of the sum of the matrix if the <b>x</b><sup>th</sup> row and the <b>y</b><sup>th</sup> column are removed from the matrix. 
</p>

<h3>Input</h3>
<p>
<ul>
<li>
First line of the input contains an integer <b>N</b>, followed by <b>N</b> lines: each containing a pair of integers. <b>i</b><sup>th</sup> pair of integers denotes the value of <b>L[i]</b> and <b>R[i]</b>.
</li>
<li>
The next line contains the value of <b>Q</b>, and the following <b>Q</b> lines contain the queries. 
</li>
</ul>
</p>


<h3>Output</h3>
<p>
<b>Q</b> lines, each containing a single character "E" or "O" (no quotes needed), indicating whether the sum is even or odd.
</p>

<h3>Constraints</h3>
<p>
<b>Subtask #1: 20 points</b>
<ul>
	<li><b>1 ≤ N,Q ≤ 1000, 1 ≤ L[i] ≤ R[i] ≤ N,1 ≤ x,y ≤ N  </b></li>
</ul>
</p>
<p>
<b>Subtask #2: 80 points</b>
<ul>
	<li><b>1 ≤ N,Q ≤ 10<sup>5</sup>, 1 ≤ L[i] ≤ R[i] ≤ N, 1 ≤ x,y ≤ N  </b></li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
3
1 3
2 2
1 3
2
2 2
3 2

<b>Output:</b>
E
E
</pre>

<h3>Explanation</h3>
<p>The given array is:<br/>
1 1 1<br/>
0 1 0<br/>
1 1 1<br/>
It's easy to see that the sum is even in both the queries.
</p>