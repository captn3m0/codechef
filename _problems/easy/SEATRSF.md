---
{"category_name":"easy","problem_code":"SEATRSF","problem_name":"Sereja and Transformation","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"shangjingbo","date_added":"9-06-2013","tags":{"0":"combinatorics","1":"easy","2":"inclusn","3":"oct13","4":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEATRSF","time":{"view_start_date":1381743000,"submit_start_date":1381743000,"visible_start_date":1381743000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/OCT13/mandarin/SEATRSF.pdf">here</a></h3>
<h3>Problem Statement</h3>
<p>
<ul>Sereja has a sequence of <b>n</b> integers <b>a[1], a[2], ..., a[n]</b>. Sereja can do following transformation of the array:</ul></p>
<p> </p>
<li>create a new sequence of <b>n</b> integers<b> b[1], b[2], ..., b[n]</b>in this way:   <img src="http://latex.codecogs.com/gif.latex?b[i] =\min\limits_{j=1}^{n} a[j]- a[i] + \sum\limits_{j=1}^{n} a[j]" border="0" />   <b>(1 ≤ i ≤ n)
<p></p></b>
</li><li>Replace the sequence a by b, i.e., a[i] = b[i] for all i in [1, n] </li>
<p> </p>
<p>Sereja decided to use his transformation <b>k</b> times. Then he computed the value of    <img src="http://latex.codecogs.com/gif.latex?q(r)=\max\limits_{i=1}^{n} r_i - " border="0" /> <img src="http://latex.codecogs.com/gif.latex?\min\limits_{i=1}^{n} r_i" border="0" /> , where <b>r</b> — the sequence obtained after <b>k</b> transformations of sequence <b>a</b>, as described above.</p>
<p> </p>
<p>Sereja lost sequence <b>a</b>, but he was left with the numbers <b>q(r)</b> and <b>k</b>. Now Sereja is interested in the question : what is the number of the sequences of the integers <b>с[1], с[2], ..., с[n]</b>, such that <b>1 ≤ c[i] ≤ m</b> and <b>q(d) = q(r)</b>, where <b>d</b> — the sequence obtained after <b>k</b> transformations of sequence <b>c</b>, as described above.
</p>
<p> </p>
<h3>Input</h3>
<p>
<ul>The first lines contains a single integer T, denoting the number of test cases. Each  test case consist of four integers : <b>n, m, q(r), k</b>.</ul>
</p>
<p> </p>
<h3>Output</h3>
<p>
<ul>In a single line print the remainder of division the answer of the problem on number <b>10^9 + 7</b>.</ul>
</p>
<p> </p>
<h3>Constraints</h3>

<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>n, m, q(r), k</b> ≤ <b>10^9</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
1 1 1 1
2 2 1 1
2 3 1 1

<b>Output:</b>
0
2
4

</pre><p> </p>
