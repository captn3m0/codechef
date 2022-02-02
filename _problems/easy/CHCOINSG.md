---
{"category_name":"easy","problem_code":"CHCOINSG","problem_name":"Chef and Coins Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":"iscsi","date_added":"12-02-2016","tags":{"0":"antoniuk1","1":"finding","2":"game","3":"june16","4":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CHCOINSG","time":{"view_start_date":1465983000,"submit_start_date":1465983000,"visible_start_date":1465983000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/mandarin/CHCOINSG.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/russian/CHCOINSG.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/vietnamese/CHCOINSG.pdf">Vietnamese</a> as well.</h3>
<p>Chef is playing a game with his friend Misha. They have a pile containg <b>N</b> coins. Players take alternate turns, removing some coins from the pile. On each turn, a player can remove either one coin or coins equal to some prime power (i.e. <b>p<sup>x</sup></b> coins, where <b>p</b> - prime number and <b>x</b> - positive integer). Game ends when the pile becomes empty. The player who can not make a move in his turn loses.
</p>
<p>Chef plays first. Your task is to find out who will win the game, provided that both of the player play optimally.</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The only line of each test case contains one integer <b>N</b>.</li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing one word - the name of the winner of the game. Print "Chef" (without quotes) if Chef wins the game, print "Misha" (without quotes) otherwise. </li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<h3>Subtasks</h3>
<p><b>Subtask #1 (20 points): </b></p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10</b></li>
</ul>

<p><b>Subtask #2 (30 points): </b></p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>4</sup></b></li>
</ul>

<p><b>Subtask #3 (50 points): </b>No additional constraints.</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1
8

<b>Output:</b>
Chef
Chef
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Chef will remove the only coin from the pile and will win the game.</p>
<p><b>Example case 2.</b> Chef will remove all 8 coins from the pile and win the game. Chef can remove 8 coins because 8 is a prime power, as 8 = 2<sup>3</sup>.
</p>