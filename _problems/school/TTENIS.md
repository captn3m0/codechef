---
{"category_name":"school","problem_code":"TTENIS","problem_name":"Chef and Table Tennis","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"iscsi ","problem_tester":null,"date_added":"8-06-2015","tags":{"0":"iscsi","1":"snck15el"},"editorial_url":"http://discuss.codechef.com/problems/TTENIS","time":{"view_start_date":1434135600,"submit_start_date":1434135600,"visible_start_date":1434135600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCK15EL/mandarin/TTENIS.pdf">Mandarin Chinese </a> , <a target="_blank" href="http://www.codechef.com/download/translated/SNCK15EL/russian/TTENIS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCK15EL/vietnamese/TTENIS.pdf">Vietnamese</a></h3>


<p>Chef likes to play table tennis. He found some statistics of matches which described who won the points in order. A game shall be won by the player first scoring 11 points except in the case when both players have 10 points each, then the game shall be won by the first player subsequently gaining a lead of 2 points. Could you please help the Chef find out who the winner was from the given statistics? (It is guaranteed that statistics represent  always a valid, finished match.) </p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of <b>T</b> test cases follows. Each test case consist a binary string <b>S</b>, which describes a match. '0' means Chef lose a point, whereas '1' means he won the point.</p>

<h3>Output</h3>
<p>
For each test case, output on a separate line a string describing who won the match. If Chef won then print "WIN" (without quotes), otherwise print "LOSE" (without quotes).
</p>

<h3>Constraints</h3>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>length(S)</b> ≤ <b>100</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
0101111111111
11100000000000

<b>Output:</b>
WIN
LOSE
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> Chef won the match 11:2, his opponent won just two points, the first and the third of the match.</p>
<p><b>Example case 2.</b> Chef lost this match 11:3, however he started very well the match, he won the first three points in a row, but maybe he got tired and after that lost 11 points in a row.</p>