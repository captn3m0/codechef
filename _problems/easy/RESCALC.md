---
{"category_name":"easy","problem_code":"RESCALC","problem_name":"Chef and calculation","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"omelyanenko","problem_tester":"dpraveen","date_added":"26-07-2016","tags":{"0":"ad","1":"basic","2":"bitset","3":"easy","4":"omelyanenko","5":"sept16"},"editorial_url":"http://discuss.codechef.com/problems/RESCALC","time":{"view_start_date":1473931800,"submit_start_date":1473931800,"visible_start_date":1473931800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/mandarin/RESCALC.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/russian/RESCALC.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/vietnamese/RESCALC.pdf">Vietnamese</a> as well.</h3>

<p>
Every Friday Chef and his <b>N - 1</b> friends go for a party. At these parties, they play board games. This Friday, they are playing a game named "Boats! Boats! Boats!". In this game players have to transport cookies between Venice and Constantinople. Each player has a personal storage. The players are numbered from 1 to <b>N</b>, Chef is numbered 1. Rules for determining a winner are very difficult, therefore Chef asks you to write a program, which will determine who is a winner. 
</p>

<p>
There are 6 types of cookies. For each cookie in the storage player gets 1 point. Also player gets additional points if he packs his cookies in some boxes as follows: 
<ul>
<li>A box containing 4 different types of cookies fetches 1 additional point.</li>
<li>A box containing 5 different types of cookies fetches 2 additional points.</li>
<li>A box containing 6 different types of cookies fetches 4 additional points.</li>
</ul>

Obviously a cookie can be put into a single box.
</p>

<p>
For each player, you know the number of cookies in his storage (denoted by <b>c[i]</b>), also the types of cookies in the storage given denoted by <b>type[i][j]</b>.</p>

<p>
Your task is to determine the winner of this game. Output "tie" if there are two or more players with same maximum score, "chef" if only Chef has a maximum score, winner's index in all other cases.</p>

<h3>Input</h3>
<p>
The first line of input contains a single integer <b>T</b> denoting the number of test cases. This will be followed by <b>T</b> test cases.</p>
<p>The first line of each test case contains an integer <b>N</b> denoting the number of players.</p>
<p>The second line of each test case contains an integer <b>c[i]</b> denoting the number of cookies in the i-th storage, followed by <b>c[i]</b> space-separated integers <b>type[i][j]</b> which denote the type if j-th cookie in the storage i-th.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the answer as specified in the statement.</p>
  
<h3>Constraints and Subtasks</h3>
<b>Subtask #1 : (20 points) </b> </br>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b> </li>
<li><b>1</b> ≤ <b> N </b> ≤ <b>100 </b> </li>
<li><b>1</b> ≤ <b> c[i] </b> ≤ <b> 100 </b> </li>
<li><b>1</b> ≤ <b> type[i][j] </b> ≤ <b> 3 </b> </li>
</ul>  </br>

<b>Subtask #2 : (80 points) </b> </br>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b> </li>
<li><b>1</b> ≤ <b> N </b> ≤ <b>100 </b> </li>
<li><b>1</b> ≤ <b> c[i] </b> ≤ <b> 100 </b> </li>
<li><b>1</b> ≤ <b> type[i][j] </b> ≤ <b> 6 </b> </li>
</ul> 

<h3>Example</h3>
<pre>
<b>Input:</b><tt>
3
2
6 1 2 3 4 5 6
9 3 3 3 4 4 4 5 5 5
2
5 2 3 4 5 6
7 1 1 2 2 3 3 4
3
4 1 1 2 3
4 1 2 2 3
4 1 2 3 3
</tt>
<b>Output:</b><tt>
chef
2
tie</tt>
</pre>

<h3>Explanation</h3> 
<p><b>Example case 1</b>.</p>
<p>Chef has total 6 cookie, so he gets 6 points for that. Also, he can put all his cookies (as they are all distinct) in a bag of size 6. It will fetch him additional 4 points. So, Chef's total points will be 10.</p>
<p>The second player has 9 cookies, he gets 9 points for that. Other than this, he can't create a bag with either 4, 5 or 6 distinct cookies. So, his final score is 9.</p>
<p>10 > 9 - Chef wins.</p>

<p><b>Example case 2</b>.</p>
<p>Chef has 5 + 2 (a bag with 5 different cookies) = 7.</p>
<p>The second player has 7 + 1(a bag with 4 different cookies) = 8.</p>
<p>7 < 8 - the second player wins.</p>

<p><b>Example case 3</b>.</p>
<p>Every player has 4 cookies and can't create any bag of sweets. So, it's a tie.</p>