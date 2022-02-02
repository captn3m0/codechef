---
{"category_name":"easy","problem_code":"CONFLIP","problem_name":"Coin Flip","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"khadarbasha","problem_tester":"laycurse","date_added":"2-09-2012","tags":{"0":"ad","1":"cakewalk","2":"khadarbasha","3":"nov12","4":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CONFLIP","time":{"view_start_date":1352712600,"submit_start_date":1352712600,"visible_start_date":1352712600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
<b>Little Elephant</b> was fond of inventing new games. After a lot of research, Little Elephant came to know that most of the animals in the forest were showing less interest to play the multi-player games.Little Elephant had started to invent single player games, and succeeded in inventing the new single player game named <b>COIN FLIP</b>.
</p>

<p>
In this game the player will use <b>N</b> coins numbered from <b>1</b> to <b>N</b>, and all the coins will be facing in "Same direction" (Either <b>Head</b> or <b>Tail</b>),which will be decided by the player before starting of the game.
</p>

<p>
The player needs to play <b>N</b> rounds.In the <b>k</b>-th round the player will flip the face of the all coins whose number is less than or equal to <b>k</b>. That is, the face of coin <b>i</b> will be reversed, from <b>Head</b> to <b>Tail</b>, or, from <b>Tail</b> to <b>Head</b>, for <b>i</b> ≤ <b>k</b>.
</p>

<p>
Elephant needs to guess the total number of coins showing a particular face after playing <b>N</b> rounds. Elephant really becomes quite fond of this game <b>COIN FLIP</b>, so Elephant plays <b>G</b> times. Please help the Elephant to find out the answer.
</p>


<h3>Input</h3>
<p>
The first line of input contains an integer <b>T</b>, denoting the number of test cases.
Then <b>T</b> test cases follow.
</p>

<p>
The first line of each test contains an integer <b>G</b>, denoting the number of games played by Elephant. Each of the following <b>G</b> lines denotes a single game, and contains 3 space separeted integers <b>I</b>, <b>N</b>, <b>Q</b>, where <b>I</b> denotes the initial state of the coins, <b>N</b> denotes the number of coins and rounds, and <b>Q</b>, which is either 1, or 2 as explained below.

<p>
Here <b>I=1</b> means all coins are showing <b>Head</b> in the start of the game, and <b>I=2</b> means all coins are showing <b>Tail</b> in the start of the game. <b>Q=1</b> means Elephant needs to guess the total number of coins showing <b>Head</b> in the end of the game, and <b>Q=2</b> means Elephant needs to guess the total number of coins showing <b>Tail</b> in the end of the game.
</p>

<h3>Output</h3>
<p>
For each game, output one integer denoting the total number of coins showing the particular face in the end of the game.
</p>

<h3>Constraints</h3>

<p>
<b>1 ≤ T ≤ 10</b><br>
<b>1 ≤ G ≤ 20000</b><br>
<b>1 ≤ N ≤ 10<sup>9</sup></b><br>
<b>1 ≤ I ≤ 2</b><br>
<b>1 ≤ Q ≤ 2</b><br>
</p>

<pre>
<h3>Example</h3>
<b>Input:</b>
1
2
1 5 1
1 5 2

<b>Output:</b>
2
3
</pre>

<h3>Explanation:</h3>
<p>
<b>In the 1st game in Example:</b>
<b>I=1</b>, so initial arrangement of coins are H H H H H,
and now Elephant will play 5 rounds and coin faces will be changed as follows<br>
After the 1st Round: <b>T</b> H H H H<br>
After the 2nd Round: <b>H T</b> H H H<br>
After the 3rd Round: <b>T H T</b> H H<br>
After the 4th Round: <b>H T H T</b> H<br>
After the 5th Round: <b>T H T H T</b>
</p>
<p>
Finally <b>Q=1</b>, so we need to find the total number of coins showing <b>Head</b>, which is <b>2</b>.
</p>

<p>
<b>In the 2nd game in Example:</b>
This is similar to the 1st game, except Elephant needs to find the total number of coins showing <b>Tail</b>.
So the Answer is <b>3</b>. (Please see the final state of the coins in the 1st game)
</p>
