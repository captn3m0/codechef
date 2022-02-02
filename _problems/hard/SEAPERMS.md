---
{"category_name":"hard","problem_code":"SEAPERMS","problem_name":"Sereja and Permutations","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"2 - 8","source_sizelimit":50000,"problem_author":"sereja","problem_tester":"iscsi","date_added":"22-11-2015","tags":{"0":"feb16","1":"medium","2":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEAPERMS","time":{"view_start_date":1455528600,"submit_start_date":1455528600,"visible_start_date":1455528600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/mandarin/SEAPERMS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/russian/SEAPERMS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/vietnamese/SEAPERMS.pdf">Vietnamese</a> as well.</h3>

<p>Sereja has an array <b>A</b> of <b>N</b> integers: <b>A[1], A[2], …, A[N]</b>. Sereja also has an integer <b>D</b>.</p>
<p>
Sereja calls a permutation <b>P[1], P[2], …, P[N]</b> as <b><i>good</i></b> if the following conditions hold.<br />
<b>A[P[1]] + D > A[P[2]]</b>,<br/>
<b>A[P[2]] + D > A[P[3]]</b>,<br/>
⋮<br/>
<b>A[P[N-1]] + D > A[P[N]]</b>.
</p>
<p>
Sereja wants to sequentially perform <b>M</b> single-element replacement operations on the array. Each of these operations consists of choosing an index <b>p</b> of the array, and replacing <b>A[p]</b> with a new value <b>v</b>. Your task is to keep track of the number of <i><b>good</b></i> permutations <b>P[1], P[2], …, P[N]</b> after each operation.
</p>


<h3>Input</h3>
The first line of input contains the integers <b>N</b> and <b>D</b> described above. The next line contains <b>N</b> integers <b>A[1], A[2], …, A[N]</b>. The line after this contains a single integer, <b>M</b>. Each of the next <b>M</b> lines contain two numbers <b>p</b> and <b>v</b>, implying that the new value of <b>A[p]</b> is <b>v</b>.

<h3>Output</h3>
Output <b>M</b> lines. The <b>i</b><sup>th</sup> line should contain the number of good permutations modulo <b>10<sup>9</sup> + 7</b> after we perform the <b>i</b><sup>th</sup> replacement operation.

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A[i], v</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>D </b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>p</b> ≤ <b>N</b></li>
</ul>

<h3>Constraints</h3>
<ul>
<li><b>Subtask #1 :</b><b>N, M</b>  ≤ <b>10</b> (10 points) </li>
<li><b>Subtask #2 :</b><b>N, M</b>  ≤ <b>20</b> (10 points) </li>
<li><b>Subtask #3: </b><b>N, M</b>  ≤ <b>1000</b> (20 points) </li>
<li><b>Subtask #4: </b> original constrains (60 points) </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3 3
1 2 3
2
1 2
3 5

<b>Output:</b>
6
2

</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> After the first replacement operation, all permutations will be good. However, after the second operation, <b>P[1]</b> must be <b>3</b>.</p>
