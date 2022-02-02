---
{"category_name":"easy","problem_code":"CHFNFRN","problem_name":"Chef and Friends","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":"dpraveen","date_added":"23-03-2015","tags":{"0":"antoniuk1","1":"bipartite","2":"easy","3":"sept16"},"time":{"view_start_date":1473931800,"submit_start_date":1473931800,"visible_start_date":1473931800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/mandarin/CHFNFRN.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/russian/CHFNFRN.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/vietnamese/CHFNFRN.pdf">Vietnamese</a> as well.</h3>

<p>Chef invited <b>N</b> of his friends in his birthday party. All the friends are numbered from <b>1</b> to <b>N</b>. Some of the friends might know each other. You are given this information by <b>M</b> pairs each of form (<b>a<sub>i</sub></b>, <b>b<sub>i</sub></b>), denoting that the persons <b>a<sub>i</sub></b> and <b>b<sub>i</sub></b> know each other.</p>

<p>Chef wants all of his guests to seat at the two tables set up for dinner. He wants that all the people  sitting at a table must know each other, otherwise they will feel awkward with mutual eating habits. Chef is okay if a table is not occupied by any person. Chef is worried whether all the guests can seat at the dinner tables in the desired way.</p>

<p>Please help Chef fast to identify whether his worry is real or not!! The delicacies at the table are getting cold.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains two space-separated integers <b>N</b> and <b>M</b>, denoting the number of Chef's friends and the number of pairs representing information whether two person know each other or not.</p>
<p>The next <b>M</b> lines contain two space-separated integers <b>a<sub>i</sub></b> and <b>b<sub>i</sub></b>, denoting that persons <b>a<sub>i</sub></b> and <b>b<sub>i</sub></b> know each other.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing word <tt>"YES"</tt> (without quotes) if Chef can divide all of his friends into two groups that in each group all the people know each other and <tt>"NO"</tt> (without quotes) otherwise.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>3</sup></b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>3</sup></b></li>
<li><b>0</b> ≤ <b>M</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>a<sub>i</sub>, b<sub>i</sub></b> ≤ <b>N</b></li>
<li>The sum of <b>N</b> over all test cases in a single test file does not exceed <b>10<sup>4</sup></b></li>
<li>The sum of <b>M</b> over all test cases in a single test file does not exceed <b>10<sup>6</sup></b></li>
</ul>

<h3>Subtasks</h3>
<b>Subtask #1 (30 pts)</b>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10</b></li>
</ul> </br>

<b>Subtask #2 (70 pts)</b>
<ul>
<li>Original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b><tt>
3
3 2
1 2
2 3
4 3
1 2
2 3
2 4
6 7
1 2
1 3
2 3
2 4
4 5
4 6
5 6
</tt>
<b>Output:</b><tt>
YES
NO
YES
</tt></pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b></p>
<p>Table 1: Person 1. Table 2: Persons 2 and 3.</p>
<img src="https://www.codechef.com/download/upload/SEPT16/1.jpg"  width="203" height="160" alt="explanation"> 

<p><b>Example case 2.</b></p>
<p>All guests can't have a seat according to the rule.</p>
<img src="https://www.codechef.com/download/upload/SEPT16/2.jpg" width="268" height="181" alt="explanation"> 

<p><b>Example case 3.</b></p>
<p>Table 1: Persons 1, 2, 3. Table 2: Persons 4, 5, 6.</p>
<img src="https://www.codechef.com/download/upload/SEPT16/3.jpg" width="279" height="188" alt="explanation"> 