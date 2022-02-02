---
{"category_name":"easy","problem_code":"WALK","problem_name":"Walk","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"whiteking","date_added":"21-01-2014","tags":{"0":"berezin","1":"cakewalk","2":"march14","3":"programming"},"editorial_url":"http://discuss.codechef.com/problems/WALK","time":{"view_start_date":1395135000,"submit_start_date":1395135000,"visible_start_date":1395135000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/mandarin/WALK.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/russian/WALK.pdf">Russian</a>.</h3>
<p>Chef and his girlfriend are going to have a promenade. They are walking along the straight road which consists of segments placed one by one. Before walking Chef and his girlfriend stay at the beginning of the first segment, they want to achieve the end of the last segment. </p>
<p>There are few problems: </p>
<ul>
<li> At the beginning Chef should choose constant integer - the velocity of mooving. It can't be changed inside one segment. </li>
<li> The velocity should be decreased by at least 1 after achieving the end of some segment. </li>
<li> There is exactly one shop on each segment. Each shop has an attractiveness. If it's attractiveness is <b>W</b> and Chef and his girlfriend move with velocity <b>V</b> then if <b>V</b> &lt; <b>W</b> girlfriend will run away into the shop and the promenade will become ruined. </li>
</ul>

<p> Chef doesn't want to lose her girl in such a way, but he is an old one, so you should find the minimal possible velocity at the first segment to satisfy all conditions.</p>
<p> 
</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of segments. The second line contains <b>N</b> space-separated integers <b>W<sub>1</sub></b>, <b>W<sub>2</sub></b>, ..., <b>W<sub>N</sub></b> denoting the attractiveness of shops. </li>
</ul>
<p> </p>
<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing the minimal possible velocity at the beginning.</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^5</b></li>
<li><b>1</b> ≤ <b>W<sub>i</sub></b> ≤ <b>10^6</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>

2
5
6 5 4 3 2
5
3 4 3 1 1

<b>Output:</b>

6
5
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b>  </p>
<p> If we choose velocity 6, on the first step we have 6 >= 6 everything is OK, then we should decrease the velocity to 5 and on the 2nd segment we'll receive 5 >= 5, again OK, and so on. </p>
<p><b>Example case 2.</b>  </p>
<p> If we choose velocity 4, the promanade will be ruined on the 2nd step (we sould decrease our velocity, so the maximal possible will be 3 which is less than 4). </p>
