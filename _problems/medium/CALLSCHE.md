---
{"category_name":"medium","problem_code":"CALLSCHE","problem_name":"Call Center Schedule","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"cenadar","problem_tester":"iscsi","date_added":"19-12-2015","tags":{"0":"cenadar","1":"feb16","2":"graph","3":"maxflow","4":"medium","5":"minimum"},"editorial_url":"http://discuss.codechef.com/problems/CALLSCHE","time":{"view_start_date":1455528600,"submit_start_date":1455528600,"visible_start_date":1455528600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/mandarin/CALLSCHE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/russian/CALLSCHE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/vietnamese/CALLSCHE.pdf">Vietnamese</a> as well.</h3>


<p>Chef is working as a manager of a call center. He has a large number of empoyees in his team. Each of them spends their time participating in meetings, talking to clients over the phone, and a few other activities related to the job.</p>
<p>Each person can spend an hour either in a meeting, talking to clients, or working on their project. Each hour must be dedicated to only one activity and in a single hour, a person cannot switch activities.</p>
<p>There are <b>D</b> business days in the week, numbered <b>1</b> to <b>D</b>. Person <b>i</b> can spend at most <b>L<sub>i</sub></b> hours per week talking to clients. For each person, it is known which hours in their schedule are taken up by meetings.</p>
<p>The call center responds to client for <b>H</b> hours per day, which, for simplicity, are numbered <b>1</b> through <b>H</b>.</p>
<p>For each hour in the week, the number of clients connecting to the call center for that hour is known. So, Chef knows that he needs exactly <b>R<sub>i,j</sub></b> people talking with clients during the day <b>i</b> and hour <b>j</b>.</p>
<p><b>F<sub>k, i, j</sub></b> is equal to <b>1</b> if person <b>k</b> is available to talk to clients during hour <b>j</b> of day <b>i</b> and <b>0</b> if they have a meeting during that time.</p>
<p>Please note that Chef lives in an alien world, which may not have 24 hours in a day or 7 days in a week.</p>
<p>Chef needs to create a schedule for each person. Remember that there is a lunch period every day, from <b>LT<sub>begin</sub></b> to <b>LT<sub>end</sub></b> hours, both inclusive , so please make sure that each person will have at least one hour of free time during the designated lunch period.</p>
<p>If some person doesn't have a meeting during an hour and they don't talk to a client as well during that hour, they can work on a corporate project and this hour will count as a working hour. Alternatively, they may spend this time working on a personal project and it will not count as a working hour.</p>
<p>Please help Chef find out if it is possible to create a schedule such that following conditions hold.</p>
<ul>
<li>Each person spends at most <b>N</b> hours per day being on meetings and speaking with clients.</li>
<li>Each person spends at most <b>L<sub>i</sub></b> hours per week talking to clients.</li>
<li>Each person has at least one hour during the lunch time free of client calls as well as meetings.</li>
<li>For each hour <b>j</b> on the day <b>i</b>, there are exactly <b>R<sub>i,j</sub></b> people free to talk to clients.</li>
</ul>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case input contains four space-separated integers — <b>P</b>, <b>D</b>, <b>H</b> and <b>N</b> — denoting the number of people in the team, number of working days in a week, number of hours the call center works in a day, and the number of working hours per day for people respectively.</p>
<p>The next line contains <b>P</b> space-separated integers, where the <b>i<sup>th</sup></b> integer denotes <b>L<sub>i</sub></b>.</p>
<p>The next line contains two space-separated integers <b>LT<sub>begin</sub></b> and <b>LT<sub>end</sub></b>. The first integer denotes the first hour of the designate lunch period, and the second denotes its last hour.</p>
<p>Next <b>D</b> lines contain <b>H</b> space-separated integers each. The <b>j<sup>th</sup></b> integer of line <b>i</b> denotes <b>R<sub>i,j</sub></b>.</p>
<p>Next <b>P</b> blocks of lines will contain <b>D</b> lines each, with a line containing <b>H</b> space-separated integers. The <b>j<sup>th</sup></b> integer of line <b>i</b> of block <b>k</b> denotes <b>F<sub>k,i,j</sub></b>.</p>

<h3>Output</h3>
<p>For each test case in a single line output <b>"Yes"</b> (without quotes) if it's possible to create a schedule and <b>"No"</b> (without quotes) otherwise.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>H</b> ≤ <b>MAX</b></li>
<li><b>1</b> ≤ <b>D</b> ≤ <b>MAX</b></li>
<li><b>1</b> ≤ <b>P</b> ≤ <b>MAX</b></li>
<li><b>1</b> ≤ <b>L<sub>i</sub></b> ≤ <b>N*D</b></li>
<li><b>0</b> ≤ <b>R<sub>i,j</sub></b> ≤ <b>15</b></li>
<li><b>0</b> ≤ <b>F<sub>k,i,j</sub></b> ≤ <b>1</b></li>
<li><b>1</b> ≤ <b>LT<sub>begin</sub>, LT<sub>end</sub></b> ≤ <b>N</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 [15 points]: MAX = 3</b></li>
<li><b>Subtask #2 [25 points]: MAX = 10</b></li>
<li><b>Subtask #3 [60 points]: MAX = 70</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
2 2 3 2
4 1
2 3
0 1 1
0 1 0
1 1 1
1 1 1
1 1 1
1 0 1
2 2 3 2
4 1
2 3
0 1 2
0 1 0
1 1 1
1 1 1
1 1 1
1 0 1

<b>Output:</b>
Yes
No
</pre>