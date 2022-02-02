---
{"category_name":"school","problem_code":"TEAMFORM","problem_name":"Team Formation For Snackdown","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"kingofnumbers","date_added":"26-05-2017","tags":{"0":"admin2","1":"cakewalk","2":"snckpa17"},"editorial_url":"https://discuss.codechef.com/problems/TEAMFORM","time":{"view_start_date":1495992600,"submit_start_date":1495992600,"visible_start_date":1495992600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPA17/mandarin/TEAMFORM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPA17/russian/TEAMFORM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPA17/vietnamese/TEAMFORM.pdf">Vietnamese</a> as well.</h3>

<p>There are <b>n</b> people who want to take part in SnackDown. In the competition in this problem, a team should consist of exactly two people (as opposed to the real contest, where single-member teams are allowed). Of course, a person can only participate in a single team. Out of these, 2 * <b>m</b> people have already formed their teams, i.e. there are <b>m</b> teams already formed. The remaining people want to participate and make teams amongst themselves. Can you please tell whether it is possible to divide them into teams so that all the <b>n</b> people can participate?</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains two space separated integers <b>n, m</b>.</p>
<p>The i-th of the next <b>m</b> lines contains two space separated integers u<sub>i</sub>, v<sub>i</sub> denoting that the pair of people u<sub>i</sub>, and v<sub>i</sub> have decided to form a team.</p>

<h3>Output</h3>
<p>For each test case, output "yes" or "no" (without quotes) corresponding to the answer of the problem.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>2 ≤ <b>n</b> ≤ 100</li>
<li>1 ≤ <b>m</b> ≤ n / 2</li>
<li>1 ≤ u<sub>i</sub>, v<sub>i</sub> ≤ n</li>
<li>The <b>m</b> already formed teams will be valid.</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
4
2 1
1 2
4 1
1 3
5 2
1 2
4 5
5 1
1 4

<b>Output</b>
yes
yes
no
no
</pre>

<h3>Explanation</h3>
<p><b>Example 1</b>. Persons 1 and 2 have already formed the team. No other person is left. So, the answer is yes.</p>

<p><b>Example 2</b>. Persons 1 and 3 have already formed the team. Persons 2 and 4 can form their own team. No other person is left. So, the answer is yes.</p>

<p><b>Example 3</b>. Persons 1 and 2 have already formed the team. Persons 4 and 5 have also formed their own team. Only person 3 is left. A single person can't form a team. So, the answer is no.</p>

<p><b>Example 4</b>. Persons 1 and 4 have already formed the team. Persons 2, 3 and 5 cannot all participate, because at least one person will be left out. So, the answer is no.</p>