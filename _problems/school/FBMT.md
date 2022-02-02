---
{"category_name":"school","problem_code":"FBMT","problem_name":"Football Match","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"chemthan","problem_tester":"kingofnumbers","date_added":"20-12-2017","tags":{"0":"cakewalk","1":"chemthan","2":"chemthan","3":"cook89","4":"likecs","5":"looping"},"editorial_url":"https://discuss.codechef.com/problems/FBMT","time":{"view_start_date":1514140200,"submit_start_date":1514140200,"visible_start_date":1514140200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK89/mandarin/FBMT.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK89/russian/FBMT.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK89/vietnamese/FBMT.pdf">Vietnamese</a> as well.</h3>

<p>You are given a score log of a football match between two teams. Every time when one of the teams scored a goal, the name of that team was written in the score log on a separate line.</p>
<p>At the end of the match, the team that scored strictly more goals than the other team wins the match. If both teams scored an equal number of goals, the match ends in a tie. Determine the name of the winning team or that the match ended in a tie.</p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>n</b> denoting the number of records in the score log (the total number of goals scored during the match).</li>
<li>Each of the following <b>n</b> lines contains a string <b>s</b> denoting the name of the team that scored a goal.</li>
</ul></p>

<h3>Output</h3>
<p>For each test case, print a single line containing one string — the name of the winning team or <tt>"Draw"</tt> (without quotes) in case of a tie.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10<sup>5</sup></li>
<li>0 ≤ <b>n</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>|s|</b> ≤ 20</li>
<li><b>s</b> consists only of lowercase English letters</li>
<li>sum of <b>n</b> over all test cases ≤ 10<sup>5</sup></li>
<li>for each test case, there are at most two different team names</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>

2
4
ab
bc
bc
ab
3
xxx
yyy
yyy

<b>Output:</b>

Draw
yyy
</pre>

