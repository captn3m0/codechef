---
{"category_name":"hard","problem_code":"SEAINCR","problem_name":"Sereja and Increasing subsequence","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"kevinsogo","date_added":"13-10-2016","tags":{"0":"sereja"},"time":{"view_start_date":1481535000,"submit_start_date":1481535000,"visible_start_date":1481535000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/mandarin/SEAINCR.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/russian/SEAINCR.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/vietnamese/SEAINCR.pdf">Vietnamese</a> as well.</h3>

<p>Sereja has an array <b>A</b> consisting of <b>N</b> integers. Sereja has <b>M</b> queries <b>(L<sub>i</sub>, R<sub>i</sub>)</b>, and for each query Sereja wants to find the length of the longest increasing subsequence in the array <b>A[L<sub>i</sub>], A[L<sub>i</sub> + 1], ..., A[R<sub>i</sub>]</b>. 
</p>

<p>
Help Sereja find the answer for each query.
</p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>The description of <b>T</b> test cases follows. </p>
<p>Each test case starts with two integers <b>N</b>, <b>M</b>. </p>
<p>The next line contains the numbers <b>A[1], A[2], ..., A[N]</b>. The next <b>M</b> lines contains the pairs <b>L<sub>i</sub>, R<sub>i</sub></b>, which are the queries.</p>

<h3>Output</h3>
<p>For each test case, output <b>M</b> lines - the answer for each query.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>A[i]</b>, <b>M</b>, <b>N</b></li>
<li>Let <b>S</b> be sum of all <b>A[i]</b> in whole file.</li>
<li><b>1</b> ≤ <b>S</b> ≤ <b> 1000000 </b></li>
<li><b>1</b> ≤ <b>L<sub>i</sub></b> ≤ <b>R<sub>i</sub></b> ≤ <b> N </b></li>
<li><b>1</b> ≤ sum of all <b>M</b> per file  ≤ <b> 1000000 </b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1:</b>  <b>1</b> ≤ <b>N</b>, <b>M</b> ≤ <b> 100 </b> (15 points) </li>
<li><b>Subtask #2:</b>  <b>1</b> ≤ <b>N</b>, <b>M</b> ≤ <b> 1000 </b> (15 points) </li>
<li><b>Subtask #3:</b>   <b> original constraints </b> (70 points) </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>1
5 3
2 5 1 2 3
1 5
1 3
2 4</tt>

<b>Output:</b>
<tt>3
2
2</tt>
</pre>

