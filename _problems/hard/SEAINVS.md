---
{"category_name":"hard","problem_code":"SEAINVS","problem_name":"Sereja and Inversions","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"mgch","date_added":"16-10-2016","tags":{"0":"sereja"},"time":{"view_start_date":1487496600,"submit_start_date":1487496600,"visible_start_date":1487496600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/mandarin/SEAINVS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/russian/SEAINVS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/vietnamese/SEAINVS.pdf">Vietnamese</a> as well.</h3>

<p>Sereja has a permutation <b>P</b> of the <b>N</b> numbers in the range <b>1</b> to <b>N</b>. You have to answer <b>M</b> queries over it, where each query is given four numbers <b>l<sub>1</sub>, r<sub>1</sub>, l<sub>2</sub>, r<sub>2</sub> (1 ≤ l<sub>1</sub> ≤ r<sub>1</sub> < l<sub>2</sub> ≤ r<sub>2</sub> ≤ N, r<sub>1</sub> - l<sub>1</sub> = r<sub>2</sub> - l<sub>2</sub>)</b>. Your task is to calculate number of permutations <b>Q</b> of the <b>S</b> integers in the range <b>1</b> to <b>S</b>, such that <b>S = r<sub>1</sub> - l<sub>1</sub> + 1</b>, and for each <b>i</b> from <b>1</b> to <b>S</b>, the condition <b>P<sub>Q<sub>i</sub> + l<sub>1</sub> - 1</sub> < P<sub>i + l<sub>2</sub> - 1</sub></b> is satisfied.

<p>Please help Sereja in providing the answer for each query modulo <b>10<sup>9</sup> + 7</b>.

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>First line of each test case contains two space separated integers <b>N, M</b>.</p>
<p>Next line contains numbers <b>P<sub>1</sub>, P<sub>2</sub>, ..., P<sub>N</sub></b>.</p>
<p>Each of next <b>M</b> lines contains numbers <b>l<sub>1</sub>, r<sub>1</sub>, l<sub>2</sub>, r<sub>2</sub></b> - denoting the query.</p>

<h3>Output</h3>
<p>For each query, output the corresponding answer in single line.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ sum of all <b>N</b> over all test cases ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ sum of all <b>M</b> over all test cases ≤ <b>10<sup>5</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1: (10 points)</b> <b>1</b> ≤ <b>N</b> ≤ <b>10</b></li>
<li><b>Subtask #2: (20 points)</b> <b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>Subtask #3: (70 points)</b> original constraints plus additionally <b>0</b> ≤ number of pairs <b>i, j (1 ≤ i < j ≤ N, P<sub>i</sub> > P<sub>j</sub>)</b> over all test cases ≤ <b>3*10<sup>6</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
4 1
1 2 3 4
1 2 3 4
4 2
1 3 2 4
1 1 2 2
1 2 3 4
10 1
1 4 3 2 9 5 6 7 10 8
1 5 6 10

<b>Output:</b>
2
1
1
24
</pre>

