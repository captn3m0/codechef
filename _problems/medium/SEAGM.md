---
{"category_name":"medium","problem_code":"SEAGM","problem_name":"Sereja and Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"xcwgf666","date_added":"28-05-2013","tags":{"0":"dynamic","1":"game","2":"may14","3":"medium","4":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEAGM","time":{"view_start_date":1399887000,"submit_start_date":1399887000,"visible_start_date":1399887000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/mandarin/SEAGM.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/russian/SEAGM.pdf">Russian</a>.</h3>
<p>Sereja and Dima play the game. The rules are as follows:</p>
<p>Initially, there are <b>n</b> cards on the table, each card has a positive integer written on it.<br />
At the beginning Sereja writes down the number <b>0</b> on the sheet of paper.<br />
Then players pick cards from the table alternately. When a player picks a card, he writes down the greatest common divisor of a number that is written on a card and a number that was last written on the sheet of paper.<br />
Then the player throws this card away, so it can never been taken again.<br />
A player loses if after his turn the number, written on the piece of the paper is <b>1</b>.<br />
A player also loses, if he isn't able to make a move. </p>
<p>
Now Sereja is interested in the following two things: </p>
<ul>
<li>what is the probability of Sereja's victory if he makes the first move and the both players play optimaly</li>
<li>what is the probability of Sereja's victory if he makes the first move and the both players make moves randomly</li>
</ul>

<p>If player makes moves <b>randomly</b>, he chooses a card with equal probability among those that remained on the table.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains the number <b>n</b> — the amount of cards present on the table at the beginning of the game. The second line contains integers <b>a<sub>1</sub>, a<sub>2</sub>, </b>..., <b>a<sub>n</sub></b> — the numbers written on the cards.</p>
<h3>Output</h3>
<p>For each test case output two numbers denoting answers on Sereja's questions.<br />
Output the integer part of the answer to the first question and the answer to the second question with exactly four digits after the decimal point.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>a<sub>j</sub></b> ≤ <b>100</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
5
6 10 15 22 28
5
2 4 8 16 32
4
2 4 8 16
4
1 2 3 4

<b>Output:</b>
0 0.4000
1 1.0000
0 0.0000
1 0.5833

</pre>