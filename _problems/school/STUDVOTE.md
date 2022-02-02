---
{"category_name":"school","problem_code":"STUDVOTE","problem_name":"Drumpf for President!","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"pushkarmishra","date_added":"29-07-2016","tags":{"0":"ad","1":"admin2","2":"cakewalk","3":"ltime38"},"editorial_url":"http://discuss.codechef.com/problems/STUDVOTE","time":{"view_start_date":1469901600,"submit_start_date":1469901600,"visible_start_date":1469901600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME38/mandarin/STUDVOTE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME38/russian/STUDVOTE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME38/vietnamese/STUDVOTE.pdf">Vietnamese</a> as well.</h3>



<img src="https://codechef_shared.s3.amazonaws.com/upfiles/young-donald-trump-military-school.jpg" height="330" width="350" />

<p>
Donald Drumpf has spent the entire summer lobbying to gather votes for the upcoming student government election. At his University, there are a total of <b>N</b> students. Each student in the university casts a vote. The size of student government is determined by the number of students that get at least <b>K</b> votes.
</p>

<p>
Each person that receives at least <b>K</b> votes is given a post in the student government. The Dean noticed that every year, there are a few students who vote for themselves. He decided to add a rule to disqualify any such individuals who vote for themselves i.e they cannot be part of the student government. 
</p>

<p>
You are given an array <b>A</b>, where <b>A<sub>i</sub></b> denotes the person who the <b>i</b>-th person voted for. Can you compute the size of the student government?
</p> 

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>For each test case, first line consists of two space separated integers <b>N</b>, <b>K</b>.</p>
<p>Second line consists of <b>N</b> space separated integers denoting the array <b>A</b>,  where <b>i</b>-th integer denotes <b>A<sub>i</sub></b>.</p>

<h3>Output</h3>
<p>
For each test case, output a single line containing an integer corresponding to the size of the student government.
</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>N</b></li>
</ul>

<h3>Subtasks</h3>
<b>Subtask #1: (30 points)</b>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>3</b></li>
</ul>

<b>Subtask #2: (70 points)</b>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
</ul> 

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
3 2
2 1 2
2 1
1 2</tt>

<b>Output:</b>
<tt>1
0</tt>
</pre>

<h3>Explanation</h3>

<p>
In <b>first test case</b>, there are <b>3</b> students. A student must receive at least <b>2</b>
votes to be part of the student government. Student <b>1</b> votes for student <b>2</b>, student <b>2</b> votes for student <b>1</b> and student <b>3</b> votes for student <b>2</b>. Thus, Student <b>2</b> receives <b>2</b> votes and is the only one eligible for student government.
</p>

<p>
In <b>second test case</b>, although both students receive the required amount of votes, they are both disqualified as they had voted for themselves. Thus, size of the student
government is <b>0</b>.
</p>