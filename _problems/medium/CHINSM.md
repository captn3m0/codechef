---
{"category_name":"medium","problem_code":"CHINSM","problem_name":"Chef and insomnia","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"zedthirtyeight","problem_tester":"laycurse","date_added":"7-07-2015","tags":{"0":"ad","1":"aug15","2":"combinatorics","3":"divisors","4":"intervals","5":"medium","6":"zedthirtyeight"},"editorial_url":"http://discuss.codechef.com/problems/CHINSM","time":{"view_start_date":1439803800,"submit_start_date":1439803800,"visible_start_date":1439803800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG15/mandarin/CHINSM.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG15/russian/CHINSM.pdf">Russian</a>.</h3>
<p>Chef sometimes suffers from insomnia. During sleepless nights, he often plays this game: He creates an array <b>A</b> of <b>N</b> integers and also decides one integer <b>K</b>. After that, he tries to count the number of non-empty contiguous subsequences (subsegments) of <b>A</b>, such that there are no bad pairs of integers in this subsegment. A pair <b>(x, y)</b> of integers is called bad if <b>x</b> is situated to the left of <b>y</b> in the array and <b>x mod y = K</b>. Finally, before going to sleep, Chef wrote down the answer on a sheet of paper. Sadly, he has forgotten it this morning and want your help regarding that.</p>
<h3>Input</h3>
<ul>
<li>The first line contains two integers - <b>N</b> and <b>K</b>.</li>
<li>Second line contains <b>N</b> integers - <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b> ... <b>A<sub>N</sub></b> - separated by spaces, denoting the array <b>A</b>.</li>
</ul>
<h3>Output</h3>
<p>A single line containing an integer - the answer to the problem.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b>, <b>A<sub>i</sub></b> ≤ 10<sup>5</sup> </li>
<li>0 ≤ <b>K</b> ≤ 10<sup>5</sup> </li>
</ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask 1: <b>N</b> ≤ 100 (15 points) </li>
<li>Subtask 2: <b>N</b> ≤ 1000 (15 points) </li>
<li>Subtask 3: <b>K</b> = 0 (10 points) </li>
<li>Subtask 4: Original constraints (60 points) </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3 2
5 3 1

<b>Output:</b>
4
</pre><h3>Explanation:</h3>
<p>We can check <b>5 mod 3 = 2</b>, <b>5 mod 1 = 0</b> and <b>3 mod 1 = 0</b>. Thus <b>(5, 3)</b> is the only bad pair in the array. The <b>4</b> subsegments <b>A[1;1] = {5}, A[2;2] = {3}, A[3;3] = {1}, A[2;3] = {3, 1}</b> are OK. The other subsegments <b>A[1;2] = {5, 3}, A[1;3] = {5, 3, 1}</b> have a bad pair.</p>
