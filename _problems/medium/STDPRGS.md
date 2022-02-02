---
{"category_name":"medium","problem_code":"STDPRGS","problem_name":"Estimating progress","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"2 - 5","source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"xcwgf666","date_added":"28-09-2015","tags":{"0":"ltime29","1":"medium","2":"mo","3":"pavel1996"},"editorial_url":"http://discuss.codechef.com/problems/STDPRGS","time":{"view_start_date":1445761800,"submit_start_date":1445761800,"visible_start_date":1445761800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME29/mandarin/STDPRGS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME29/russian/STDPRGS.pdf">Russian</a></h3>


<p>Leha is a usual student at 'The Usual University for Usual Students'. Sometimes he studies hard; at other times he plays truant and gets busy with other things besides academics. He has already studied at the university for <b>N</b> months. For the <b>i</b><sup>th</sup> month (1 ≤ <b>i</b> ≤ <b>N</b>), he has received some non-negative integer grade <b>A[i]</b>.</p>

<p>Now he wants to analyse his progress for some periods of his university education. An arbitrary period, defined by two positive integers <b>L</b> and <b>R</b>, begins at Leha's <b>L</b><sup>th</sup> month at the university and ends at the <b>R</b><sup>th</sup>. The analysis is performed via the following steps.<br />
1. Write down all the grades for each month from <b>L</b> to <b>R</b> and sort them. Let's call the sorted list <b>S</b>.<br />
2. Calculate the sum of squared differences of consecutive elements in <b>S</b>, that is, <b>(S[2] - S[1])<sup>2</sup> + (S[3] - S[2])<sup>2</sup> + ... + (S[R-L+1] - S[R-L])<sup>2</sup></b>.
</p>

<h3>Input</h3>
<p>The first line contains one integer <b>N</b> — the number of months Leha has already studied at the university.</p>
<p>The second line contains <b>N</b> integers — list <b>A</b> of Leha's grades.</p>
<p>The third line contains one integer <b>M</b> — the number of periods Leha is interested in analyzing.</p>
<p>Each of the following <b>M</b> lines contain two integers <b>L</b> and <b>R</b> describing each period.</p>

<h3>Output</h3>
<p>For each query, output one integer — the result of the progress analysis for the corresponding period.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>5*10<sup>4</sup></b></li>
<li><b>0</b> ≤ <b>A[i]</b> ≤ <b>10<sup>6</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask 1 (19 points) <b>1</b> ≤ <b>N, M</b> ≤ <b>200</b>, <b>time limit = 2 sec</b></li>
<li>Subtask 2 (31 points) <b>1</b> ≤ <b>N, M</b> ≤ <b>10 000</b>, <b>time limit = 2 sec</b></li>
<li>Subtask 3 (26 points) <b>0</b> ≤ <b>A[i]</b> ≤ <b>100</b>, <b>time limit = 5 sec</b></li>
<li>Subtask 4 (24 points) no additional constraints, , <b>time limit = 5 sec</b></li>
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
<tt>5
1 3 2 4 5
5
1 5
1 4
2 4
3 3
3 5</tt>

<b>Output:</b>
<tt>4
3
2
0
5</tt>

</pre>

<b>Explanation</b><br/>
The first query: sorted array looks like <b>(1, 2, 3, 4, 5)</b> and the answer is calculated as <b>(2-1)<sup>2</sup> + (3-2)<sup>2</sup> + (4-3)<sup>2</sup> + (5-4)<sup>2</sup> = 4</b><br/>
The second query: sorted array looks like <b>(1, 2, 3, 4)</b> and the answer is calculated as <b>(2-1)<sup>2</sup> + (3-2)<sup>2</sup> + (4-3)<sup>2</sup> = 3</b><br/>
The last query: sorted array looks like <b>(2, 4, 5)</b> and the answer is calculated as <b>(4-2)<sup>2</sup> + (5-4)<sup>2</sup> = 5</b><br/>