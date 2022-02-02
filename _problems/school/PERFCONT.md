---
{"category_name":"school","problem_code":"PERFCONT","problem_name":"A Balanced Contest","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"COB","10":"CPP 4.3.2","11":"CPP 6.3","12":"CPP14","13":"CS2","14":"D","15":"ERL","16":"FORT","17":"FS","18":"GO","19":"HASK","20":"ICK","21":"ICON","22":"JAVA","23":"JS","24":"kotlin","25":"LISP clisp","26":"LISP sbcl","27":"LUA","28":"NEM","29":"NICE","30":"NODEJS","31":"PAS fpc","32":"PAS gpc","33":"PERL","34":"PERL6","35":"PHP","36":"PIKE","37":"PRLG","38":"PYPY","39":"PYTH","40":"PYTH 3.5","41":"RUBY","42":"rust","43":"SCALA","44":"SCM chicken","45":"SCM guile","46":"SCM qobi","47":"ST","48":"swift","49":"TCL","50":"TEXT","51":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"alex_2oo8","date_added":"9-09-2017","tags":{"0":"admin2","1":"cakewalk","2":"oct17"},"editorial_url":"https://discuss.codechef.com/problems/PERFCONT","time":{"view_start_date":1508146200,"submit_start_date":1508146200,"visible_start_date":1508146200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/OCT17/mandarin/PERFCONT.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/OCT17/russian/PERFCONT.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/OCT17/vietnamese/PERFCONT.pdf">vietnamese</a> as well.</h3>

<p>Chef wants to organize a contest. Predicting difficulty levels of the problems can be a daunting task. Chef wants his contests to be balanced in terms of difficulty levels of the problems.</p>

<p>Assume a contest had total <b>P</b> participants. A problem that was solved by at least half of the participants (i.e. <b>P / 2</b> (integer division)) is said to be cakewalk difficulty. A problem solved by at max <b>P / 10</b> (integer division) participants is categorized to be a hard difficulty.</p>

<p>Chef wants the contest to be balanced. According to him, a balanced contest must have exactly 1 cakewalk and exactly 2 hard problems. You are given the description of <b>N</b> problems and the number of participants solving those problems. Can you tell whether the contest was balanced or not?</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>The first line of each test case contains two space separated integers, <b>N, P</b> denoting the number of problems, number of participants respectively.</p>
<p>The second line contains <b>N</b> space separated integers, <b>i</b>-th of which denotes number of participants solving the <b>i</b>-th problem.</p>

<h3>Output</h3>
<p>For each test case, output "yes" or "no" (without quotes) denoting whether the contest is balanced or not.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T, N</b> ≤ 500 </li>
<li>1 ≤ <b>P</b> ≤ 10<sup>8</sup> </li>
<li>1 ≤ Number of participants solving a problem ≤ <b>P</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1</b> (40 points): <b>P</b> is a multiple of 10</li>
<li><b>Subtask #2</b> (60 points): Original constraints</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
6
3 100
10 1 100
3 100
11 1 100
3 100
10 1 10
3 100
10 1 50
4 100
50 50 50 50
4 100
1 1 1 1

<b>Output</b>
yes
no
no
yes
no
no
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b>: The problems are of hard, hard and cakewalk difficulty. There is 1 cakewalk and 2 hard problems, so the contest is balanced.</p>
<p><b>Example case 2.</b>: The second problem is hard and the third is cakewalk. There is 1 cakewalk and 1 hard problem, so the contest is not balanced.</p>
<p><b>Example case 3.</b>: All the three problems are hard. So the contest is not balanced.</p>
<p><b>Example case 4.</b>: The problems are of hard, hard, cakewalk difficulty. The contest is balanced.</p>
<p><b>Example case 5.</b>: All the problems are cakewalk. The contest is not balanced.</p>
<p><b>Example case 6.</b>: All the problems are hard. The contest is not balanced.</p>