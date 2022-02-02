---
{"category_name":"easy","problem_code":"UNICOURS","problem_name":"Courses in an university","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"4-05-2017","tags":{"0":"admin2","1":"long","2":"may17"},"editorial_url":"https://discuss.codechef.com/problems/UNICOURS","time":{"view_start_date":1495099800,"submit_start_date":1495099800,"visible_start_date":1495099800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/MAY17/mandarin/UNICOURS.pdf">mandarin chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MAY17/russian/UNICOURS.pdf">russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY17/vietnamese/UNICOURS.pdf">vietnamese</a> as well.</h3>

<p>
There are <b>n</b> courses in a university being offered. These courses are numbered from 1 to <b>n</b> in the increasing order of their difficulty. For each course, you can have some courses as prerequisites. The prerequisite courses for a course should be of lower difficulty than it. You are given an array <b>a</b> of size <b>n</b>, where <b>a</b><sub>i</sub> denotes that there should be at least <b>a</b><sub>i</sub> prerequisite courses for i-th course. 
</p>


<p>
The university wants to estimate the efficiency of the allocation of prerequisites of courses by maximizing the number of courses that are not prerequisites for any other course. Find out what's the maximum such number of courses possible. It is guaranteed that <b>a</b><sub>i</sub> < i, thus making sure that it is possible to allocate the prerequisites for each of the course.
</p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains an integer <b>n</b>.</p>
<p>The second line of each test case contains <b>n</b> space separated integers denoting array <b>a</b>.</p>


<h3>Output</h3>
<p>For each test case, output a single line containing an integer corresponding to the maximum number of possible courses which are not prerequisite for any other course.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li>1 ≤ <b>n</b> ≤ 10<sup>5</sup></li>
<li>0 ≤ <b>a</b><sub>i</sub> < i</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1</b> (40 points) : 1 ≤ <b>n</b> ≤ 100</li>
<li><b>Subtask #2</b> (60 points) : original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
3
0 1 1
3
0 1 2

<b>Output:</b>
2
1
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> Both the courses 2 and 3 can have course 1 as a prerequisite. In this case, course 2 and course 3 are not prerequisites for any course. So, we have two such courses.</p>

<p>
Other possibility could be following. Course 2 has course 1 as a prerequisite, and course 3 has course 2 as a prerequisite. Thus only course 3 is the only course that is not the prerequisite of any other course.
</p>
<p>
Thus answer is 2.
</p>