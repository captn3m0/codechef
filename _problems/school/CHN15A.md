---
{"category_name":"school","problem_code":"CHN15A","problem_name":"Mutated Minions","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"arjunarul","problem_tester":null,"date_added":"26-10-2015","tags":{"0":"acmchn15","1":"arjunarul","2":"cakewalk","3":"modulo"},"editorial_url":"http://discuss.codechef.com/problems/CHN15A","time":{"view_start_date":1420050600,"submit_start_date":1420050600,"visible_start_date":1420050600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Gru has not been in the limelight for a long time and is, therefore, planning something particularly nefarious. Frustrated by his minions' incapability which has kept him away from the limelight, he has built a transmogrifier — a machine which mutates minions.
</p>

<p>
Each minion has an intrinsic characteristic value (similar to our DNA), which is an integer. The transmogrifier adds an integer <b>K</b> to each of the minions' characteristic value. 
</p>

<p>
Gru knows that if the new characteristic value of a minion is divisible by 7, then it will have Wolverine-like mutations.
</p>

<p>
Given the initial characteristic integers of <b>N</b> minions, all of which are then transmogrified, find out how many of them become Wolverine-like.
</p>

<h3>Input Format:</h3>
<p>The first line contains one integer, <b>T</b>, which is the number of test cases. Each test case is then described in two lines.</p>
<p>The first line contains two integers <b>N</b> and <b>K</b>, as described in the statement.</p>
<p>The next line contains <b>N</b> integers, which denote the initial characteristic values for the minions.</p>

<h3>Output Format:</h3>
<p>For each testcase, output one integer in a new line, which is the number of Wolverine-like minions after the transmogrification.</p>

<h3>Constraints:</h3>
<ul>
<li><b>1 ≤ T ≤ 100</b></li>
<li><b>1 ≤ N ≤ 100</b></li>
<li><b>1 ≤ K ≤ 100</b></li>
<li>All initial characteristic values lie between 1 and 10<sup>5</sup>, both inclusive.</li>
</ul>


<h3>Example</h3>
<pre>
<b>Input:</b>
1
5 10
2 4 1 35 1

<b>Output:</b>
1
</pre>

<h3>Explanation:</h3>
After transmogrification, the characteristic values become {12,14,11,45,11}, out of which only 14 is divisible by 7. So only the second minion becomes Wolverine-like.