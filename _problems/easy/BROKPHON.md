---
{"category_name":"easy","problem_code":"BROKPHON","problem_name":"Broken Telephone","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"m0stik","problem_tester":"xcwgf666","date_added":"25-01-2015","tags":{"0":"april15","1":"cakewalk","2":"loops","3":"m0stik"},"editorial_url":"http://discuss.codechef.com/problems/BROKPHON","time":{"view_start_date":1428917400,"submit_start_date":1428917400,"visible_start_date":1428917400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL15/mandarin/BROKPHON.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL15/russian/BROKPHON.pdf">Russian</a>.</h3>
<p>Chef is judging a game called "Broken telephone". There are total <b>N</b> players taking part in the game. They are all sitting in a line. In the start of the game, first player is given a secret message written on a sheet of paper. Then they keep sending the message by whispering it to the player sitting immediate right to one and so on until it reaches the last person. </p>
<p>Finally, the message received by the last player is compared with the message said by first player. If these messages aren't equal, there is someone who has misheard the message or whispered it wrongly to the next player. If messages is equal, then the players win and receive a tasty chocolate. </p>
<p>Note that first player receives the message on a sheet of paper, thus he cannot mishear it.</p>
<p>As Chef wants to be sure that every player has fulfilled his/ her role in the game, so he asks everyone to state their received messages after the end of the game. You are given an array <b>A</b> of <b>N</b> integers denoting messages received by each person.</p>
<p>Please help Chef to find the number of players that could mishear the message or whisper it wrongly.</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. </li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of players</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the messages of players.</li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing an integer corresponding to the number of players that could mishear the message or whisper it wrongly.</li>
</ul>
<h3>Constraints and Subtasks</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<p><b>Subtask 1: 40 points</b></p>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>10<sup>3</sup></b></li>
</ul>
<p><b>Subtask 2: 60 points</b></p>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
7
1 1 1 3 3 3 2
5
1 3 1 1 1
4
5 5 5 5

<b>Output:</b>
4
3
0
</pre><h3>Explanation</h3>
<ul>
<li><b>Example 1</b>: The <b>3-rd</b>, <b>4-th</b>, <b>6-th</b> and <b>7-th</b> player could mishear the message or whisper it wrongly.</li>
<li><b>Example 2</b>: First <b>3</b> players could mishear the message or whisper it wrongly.</li>
</ul>
