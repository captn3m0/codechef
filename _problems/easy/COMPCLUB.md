---
{"category_name":"easy","problem_code":"COMPCLUB","problem_name":"Company and Club Hierarchies","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":"lg5293","date_added":"23-06-2017","tags":{"0":"admin3","1":"dfs","2":"dp","3":"dynamic","4":"ltime49","5":"medium"},"editorial_url":"https://discuss.codechef.com/problems/COMPCLUB","time":{"view_start_date":1498323600,"submit_start_date":1498323600,"visible_start_date":1498323600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME49/mandarin/COMPCLUB.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME49/russian/COMPCLUB.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME49/vietnamese/COMPCLUB.pdf">vietnamese</a> as well.</h3>

<p>You are working in a company with <b>N</b> employees numbered from <b>0</b> to <b>N - 1</b>, and employee <b>0</b> is the director. Each employee, except the director, has a supervisor. The director doesn't have a supervisor. Let's call employee <b>v</b>, an ancestor of employee <b>u</b> if and only if <b>v</b> is the supervisor of <b>u</b> or <b>v</b> is an ancestor of the supervisor of <b>u</b>.</p>

<p>Also, each employee belongs to exactly one club. Employee <b>i</b> belongs to club number <b>C<sub>i</sub></b>. And each club has some internal levels, which are actually independent of the company hierarchy. Each member of a club has a Level Number. The Level Number of employee <b>i</b> is denoted by <b>K<sub>i</sub></b>. The higher the Level Number, the more important he is in the club.</p>

<p>Each club wants to advertise, and for that, they want to claim that people who are more important in their club, end up being superior in the company. So they want to find such instances. More precisely, for every employee <b>v</b>, a sequence of company employees (<b>e<sub>1</sub>, e<sub>2</sub>, ..., e<sub>q</sub></b>) is a <i>good</i> sequence starting at <b>v</b>, if all of these conditions hold true:
<ul>
<li><b>e<sub>1</sub> = v</b>.
<li>All of them are part of the same club.</li>
<li><b>e<sub>i</sub></b> is an ancestor of <b>e<sub>i+1</sub></b>, for i = 1 to q - 1.</li>
<li><b>K</b>[<b>e<sub>1</sub></b>] = q - 1, <b>K</b>[<b>e<sub>2</sub></b>] = q - 2, ..., <b>K</b>[<b>e<sub>q</sub></b>] = 0.</li>
</ul>
<p></p>
<p>For each employee <b>v</b>, you want to find the total number of <i>good</i> sequences starting with it. As these numbers could be very large, output the answers modulo 10<sup>9</sup>+7.</p>


<h3>Input</h3>
<p>
<ul>
<li>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of each testcase follows.
<li>The first line of each test case contains two integers, <b>N</b> and <b>X</b>, denoting the number of employees in the company and a bound on the size of the Level Numbers, as mentioned in the Constraints section below.</li>
<li>The second line contains <b>N - 1</b> space-separated integers: <b>P<sub>1</sub></b>, <b>P<sub>2</sub></b>, ..., <b>P<sub>N - 1</sub></b>, denoting the supervisors. <b>P<sub>i</sub></b> is the supervisor of employee <b>i</b>.</li>
<li>The third line contains <b>N</b> space-separated integers: <b>C<sub>0</sub></b>, <b>C<sub>1</sub></b>, ..., <b>C<sub>N - 1</sub></b>, denoting the clubs. <b>C<sub>i</sub></b> is the club that employee <b>i</b> belongs to.</li>
<li>The fourth line contains <b>N</b> space-separated integers: <b>K<sub>0</sub></b>, <b>K<sub>1</sub></b>, ..., <b>K<sub>N - 1</sub></b>, denoting the Level Numbers. <b>K<sub>i</sub></b> is the Level number of employee <b>i</b>.</li>
</ul>
</p>

<h3>Output</h3>
<p>For each test case, you have to output <b>N</b> lines. Line number <b>i + 1</b> should contain the answer for employee <b>i</b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>500000</b></li>
<li><b>1</b> ≤ <b>X</b> ≤ <b>N</b></li>
<li><b>0</b> ≤ <b>P<sub>i</sub></b> < <b>i</b></li>
<li><b>0</b> ≤ <b>C<sub>i</sub></b> < <b>N</b></li>
<li><b>0</b> ≤ <b>K<sub>i</sub></b> < <b>X</b></li>
<li><b>1</b> ≤ Sum of <b>N</b> over all test cases ≤ <b>1000000</b></li>
</ul>

<h3>Subtasks</h3>
<p>
<b>Subtask #1</b> (20 points): 
<ul>
<li>Sum of integers in the output of all testcases ≤ <b>20000</b>, and </li>
<li>Sum of <b>N</b> over all test cases ≤ <b>5000</b></li>
</ul>
</p>

<p>
<b>Subtask #2</b> (30 points):
<ul>
<li><b>N</b> ≤ <b>5000</b>, and</li>
<li>Sum of <b>N</b> over all test cases ≤ <b>20000</b></li>
</ul>
</p>

<p>
<b>Subtask #3</b> (25 points): 
<ul>
<li><b>N</b> ≤ <b>100000</b>, and </li>
<li>Sum of <b>N</b> over all test cases ≤ <b>500000</b></li>
</ul>
</p>

<p>
<b>Subtask #4</b> (25 points):
<ul>
<li>Original constraints</li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
1
5 3
0 1 2 3
0 0 0 0 0
2 1 1 0 0

<b>Output:</b>
4
2
2
1
1

</pre>

<h3>Explanation</h3>
<ul>
<li>Good sequences starting at employee 0: (0, 1, 3), (0, 1, 4), (0, 2, 3), (0, 2, 4)</li>
<li>Good sequences starting at employee 1: (1, 3), (1, 4)</li>
<li>Good sequences starting at employee 2: (2, 3), (2, 4)</li>
<li>Good sequences starting at employee 3: (3)</li>
<li>Good sequences starting at employee 4: (4)</li>
</ul>