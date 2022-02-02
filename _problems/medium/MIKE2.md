---
{"category_name":"medium","problem_code":"MIKE2","problem_name":"Mike and Task Packages","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":null,"date_added":"28-11-2013","tags":{"0":"greedy","1":"kostya_by","2":"ltime07","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/MIKE2","time":{"view_start_date":1388305800,"submit_start_date":1388305800,"visible_start_date":1388305800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME07/mandarin/MIKE2.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME07/russian/MIKE2.pdf">Russian</a>.</h3>
<p>Mike takes part in olympiads in informatics. You think he is a rookie? Wrong! He is an experienced and well-prepared competitor! He participated in many important contests and won some of them. Now his level is rather high. </p>
<p>
In order to keep fit, Mike decided to improve his training sessions. He downloaded <b>N</b> task packages. There are <b>A<sub>i<sub></sub></sub></b> tasks in <b>i</b>'th package. They are really interesting and complicated, so Mike wants to solve them all!
</p>
<p>
Unfortunately, it is going to be an important contest in a few days, so Mike can solve at most <b>X</b> tasks before it. Let's assume, that Mike can solve any <b>X</b> problems before the contest.
</p>
<p>
Do you know what makes Mike happy? Right! Successful packages! A package of tasks is successful, if Mike solved all the tasks in it.
</p>
<p>
Do you also know what makes Mike sad? Right! Failed packages! A package of tasks is failed, if Mike solved less than a half of the tasks in it.
</p>
<p>
Please, help Mike to organize his training session!
</p>
<p>
Mike wants to minimize the number of failed packages. If there are several ways of doing this, he wants to maximize the number of successful packages. Remember also that he can't solve more than <b>X</b> tasks before the contest.
</p>

<h3>Input</h3>
<p>
The first line contain two integers <b>N</b> and <b>X</b>.<br /><br />
The second line contain <b>N</b> positive integers, <b>i</b>'th integer denotes <b>A<sub>i<sub></sub></sub></b>. The array <b>A</b> is 1-indexed.
</p>

<h3>Output</h3>
<p>The first line should contain two integers: the number of failed packages and the number of successful packages in the optimal way of solving.</p>
<h3>Example</h3>
<pre><b>Input:</b>
3 10
3 4 5
<b>Output:</b>
0 2
</pre>
<h3>Explanation</h3>
<p>
In the test case <b>N</b> equals to 3, <b>X</b> equals to 10, <b>A</b> equals to {3, 4, 5}. It is optimal to solve all the problems in the first and the second packages and to solve 3 problems in the third package.
</p>

<h3>Scoring</h3>
<p>
0 ≤ <b>X</b> ≤ 10<sup>15</sup> for each test case;<br /><br />
1 ≤ <b>A<sub>i<sub></sub></sub></b> ≤ 10<sup>9</sup> for each test case.
</p>
<p>
Subtask 1 (10 points): 1 ≤ <b>N</b> ≤ 100, <b>A<sub>1<sub></sub></sub></b> + <b>A<sub>2<sub></sub></sub></b> + ... + <b>A<sub>N<sub></sub></sub></b> ≤ <b>X</b>;<br /><br />
Subtask 2 (21 point): 1 ≤ <b>N</b> ≤ 15;<br /><br />
Subtask 3 (29 points): 1 ≤ <b>N</b> ≤ 1000;<br /><br />
Subtask 4 (25 points): 1 ≤ <b>N</b> ≤ 100 000;<br /><br />
Subtask 5 (15 points): 1 ≤ <b>N</b> ≤ 1 000 000.<br />
</p>

