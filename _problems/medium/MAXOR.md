---
{"category_name":"medium","problem_code":"MAXOR","problem_name":"Good Pairs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"arpa","problem_tester":null,"date_added":"28-07-2017","tags":{"0":"arpa","1":"dp","2":"ltime50"},"editorial_url":"https://discuss.codechef.com/problems/MAXOR","time":{"view_start_date":1501349400,"submit_start_date":1501349400,"visible_start_date":1501349400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME50/mandarin/MAXOR.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME50/russian/MAXOR.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME50/vietnamese/MAXOR.pdf">vietnamese</a> as well.</h3>

<p>You are given <b>N</b> integers: <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>. You need to count the number of pairs of indices (<b>i</b>, <b>j</b>) such that 1 ≤ <b>i</b> < <b>j</b> ≤ <b>N</b> and <b>A<sub>i</sub></b> | <b>A<sub>j</sub></b> ≤ max(<b>A<sub>i</sub></b>, <b>A<sub>j</sub></b>).</p>

<p><b>Note:</b> <b>A<sub>i</sub></b> | <b>A<sub>j</sub></b> refers to <a href = "https://en.wikipedia.org/wiki/Bitwise_operation#OR">bitwise OR</a>.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of each testcase follows.</li>
<li>The first line of each testcase contains a single integer: <b>N</b></li>
<li>The second line of each testcase contains <b>N</b> integers: <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>.</li>
</ul>


<h3>Output</h3>
<p>For each test case, output a single line containing the answer for that test case.</p>


<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤  20</li>
<li>1 ≤ <b>N</b> ≤ 10<sup>6</sup> </li>
<li>0 ≤ <b>A<sub>i</sub></b> ≤  10<sup>6</sup></li>
<li>1 ≤ Sum of <b>N</b> over all test cases ≤  10<sup>6</sup> </li>
</ul>

<h3>Subtasks</h3>
<b>Subtask #1</b> (20 points):
<ul>
<li>1 ≤ <b>N</b> ≤ 10<sup>3</sup> </li>
</ul>
<b>Subtask #2</b> (80 points):
<ul>
<li>Original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
3
1 2 3

<b>Output:</b>
2
</pre>

<h3>Explanation</h3>
<p>There are three possible pairs of indices which satisfy 1 ≤ <b>i</b> < <b>j</b> ≤ <b>N</b>: (1, 2), (1, 3) and (2, 3). Let us see which of those satisfy <b>A<sub>i</sub></b> | <b>A<sub>j</sub></b> ≤ max(<b>A<sub>i</sub></b>, <b>A<sub>j</sub></b>)</b>:
<ul>
<li>(1, 2): <b>A<sub>1</sub></b> | <b>A<sub>2</sub></b> = 1 | 2 = (01)<sub>2</sub> | (10)<sub>2</sub> = (11)<sub>2</sub> = 3. But max(<b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>) = max(1, 2) = 2, and 3 ≤ 2 is not correct. Hence this is not a valid pair.</li>
<li>(1, 3): <b>A<sub>1</sub></b> | <b>A<sub>3</sub></b> = 1 | 3 = (01)<sub>2</sub> | (11)<sub>2</sub> = (11)<sub>2</sub> = 3. And max(<b>A<sub>1</sub></b>, <b>A<sub>3</sub></b>) = max(1, 3) = 3, and 3 ≤ 3 is correct. Hence this is a valid pair.</li>
<li>(2, 3): <b>A<sub>2</sub></b> | <b>A<sub>3</sub></b> = 2 | 3 = (10)<sub>2</sub> | (11)<sub>2</sub> = (11)<sub>2</sub> = 3. And max(<b>A<sub>2</sub></b>, <b>A<sub>3</sub></b>) = max(2, 3) = 3, and 3 ≤ 3 is correct. Hence this is a valid pair.</li>
</ul>
<p>So there are a total of 2 valid pairs, and hence the answer is 2.</p>