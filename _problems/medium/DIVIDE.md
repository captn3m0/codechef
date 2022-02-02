---
{"category_name":"medium","problem_code":"DIVIDE","problem_name":"Dividing the Students","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":"1 - 5","source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"white_king","date_added":"11-11-2014","tags":{"0":"binary","1":"bipartite","2":"easy","3":"graph","4":"ltime18","5":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/DIVIDE","time":{"view_start_date":1417336200,"submit_start_date":1417336200,"visible_start_date":1417336200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME18/mandarin/DIVIDE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME18/russian/DIVIDE.pdf">Russian</a>.</h3>
<p>In the city of "M", there are N girls who attend a certain high school. Historically, all of the students of this school are divided into two groups, not necessarily equal in size, right before they start to study.</p>
<p>Each girl in the city of "M" has an integer ID number <b>A<sub>i</sub></b>, that somehow corresponds to her interests, ideology and beliefs. Each girl is unique, so each ID is unique as well.</p>
<p>Some of the girls have similar interests. For any pair of girls, say the <b>i</b>-th and the <b>j</b>-th one, we call the value of similarity the number <b>min(A<sub>i</sub><sup>A<sub>j</sub></sup> mod (10<sup>9</sup>+7), A<sub>j</sub><sup>A<sub>i</sub></sup> mod (10<sup>9</sup>+7))</b>.</p>
<p>The teachers have decided that they want the students in each group to be as diverse as possible. This way they will be encouraged to become acquainted and make friends faster. For this reason they want to divide the students in such a way that the maximal similarity value of any two girls' IDs in the same group is as small as possible.</p>
<p>Please help them and find the minimal possible maximal similarity value of two girls' IDs within a single group after the optimal division.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case starts with a single integer <b>N</b> - the number of students.</p>
<p>Then, there is a line containing <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b> - the IDs of the girls.</p>
<h3>Output</h3>
<p>For each test case output a single line with a single integer - the answer to the problem.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<h3>Subtasks</h3>
<li>Subtask 1: <b>3</b> ≤ <b>N</b> ≤ <b>10</b>. The time limit is 1 second - 14 points.</li>
<li>Subtask 2: <b>3</b> ≤ <b>N</b> ≤ <b>50</b>. The time limit is 1 second - 23 points.</li>
<li>Subtask 3: <b>T = 2</b>, <b>3</b> ≤ <b>N</b> ≤ <b>1000</b>. The time limit is 5 seconds - 63 points.</li>


<h3>Example</h3>
<pre><b>Input:</b>
1
4
1 2 1024 1025

<b>Output:</b>
1048576
</pre>
<h3>Explanation</h3>
<p>The first and the fourth girl will form the first group; the second and the third will form the second group.</p>
