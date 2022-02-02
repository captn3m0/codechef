---
{"category_name":"easy","problem_code":"DCGAME","problem_name":"Devu And Churu ","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"laycurse","date_added":"2-04-2015","tags":{"0":"aug15","1":"binary","2":"combinatorics","3":"ma5termind","4":"medium","5":"stack","6":"stock","7":"value"},"editorial_url":"http://discuss.codechef.com/problems/DCGAME","time":{"view_start_date":1439803800,"submit_start_date":1439803800,"visible_start_date":1439803800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG15/mandarin/DCGAME.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG15/russian/DCGAME.pdf">Russian</a>.</h3>
<p>Devu and Churu love to play games a lot. Today, they have an array <b>A</b> consisting of <b>N</b> positive integers. First they listed all <b>N × (N+1) / 2</b> non-empty continuous subarrays of the array <b>A</b> on a piece of paper and then replaced all the subarrays on the paper with the maximum element present in the respective subarray.</p>
<p>Devu and Churu decided to play a game with numbers on the paper. They both have decided to make moves turn by turn. In one turn, the player picks some number from the list and discards that number. The one who is not able to make a valid move will be the loser. To make the game more interesting, they decided to put some constraints on their moves.</p>
<p>A constraint on a game can be any of following three types :</p>
<ul>
<li><b> > K </b>: They are allowed to choose numbers having values strictly greater than <b>K</b> only.</li>
<li><b> &lt; K </b>: They are allowed to choose numbers having values strictly less than <b>K</b> only.</li>
<li><b> = K </b>: They are allowed to choose numbers having values equal to <b>K</b> only.</li>
</ul>
<p> </p>
<p>Given <b>M</b> constraints and who goes first, you have to tell the outcome of each game. Print <b>'D'</b> if Devu wins otherwise print <b>'C'</b> without quotes.</p>
<p>Note that <b>M</b> games are independent, that is, they'll rewrite numbers by using array <b>A</b> after each game. (This is the task for the loser of the previous game!)</p>
<h3>Input </h3>
<p>First line of input contains two space separated integers <b>N</b> and <b>M</b> denoting the size of array <b>A</b> and number of game played by them. Next line of input contains <b>N</b> space-separated integers denoting elements of array <b>A</b>. Each of the next <b>M</b> lines of input contains three space-separated parameters describing a game. First two parameter are a character <b>C ∈ {&lt;, >, =}</b> and an integer <b>K</b> denoting the constraint for that game. The last parameter is a character <b>X ∈ {D, C}</b> denoting the player who will start the game. </p>
<h3> Output </h3>
<p>Output consists of a single line containing a string of length <b>M</b> made up from characters <b>D</b> and <b>C</b> only, where <b>i<sup>th</sup></b> character in the string denotes the outcome of the <b>i<sup>th</sup></b> game.</p>
<h3> Constraints: </h3>
<ul>
<li><b>1 ≤ N, M ≤ 10<sup>6</sup></b></li>
<li><b>1 ≤ A<sub>i</sub>, K ≤ 10<sup>9</sup></b> </li>
<li><b>X ∈ {D, C}</b></li>
<li><b>C ∈ {&lt;, >, =}</b></li>
</ul>
<h3>Subtasks: </h3>
<ul>
<li><b>Subtask 1 : 1 ≤ N, M ≤ 10<sup>4</sup> : ( 20 pts )</b></li>
<li><b>Subtask 2 : 1 ≤ N, M ≤ 10<sup>5</sup> : ( 30 pts )</b></li>
<li><b>Subtask 3 : 1 ≤ N, M ≤ 10<sup>6</sup> : ( 50 pts )</b></li>
</ul>
<h3>Example:</h3>
<pre>
<b>Input:</b>
3 5
1 2 3
> 1 D
&lt; 2 C
= 3 D
> 4 C
&lt; 5 D

<b>Output:</b>
DCDDC
</pre><h3>Explanation: </h3>
<p>
<b>Subarray List :</b></p>
<ul>
<b>
<li>[1]</li>
<p></p></b><b>
<li>[2]</li>
<p></p></b><b>
<li>[3]</li>
<p></p></b><b>
<li>[1,2]</li>
<p></p></b><b>
<li>[2,3]</li>
<p></p></b><b>
<li>[1,2,3]</li>
<p></p></b></ul>
<p><br/><b>Numbers on the paper after replacement :</b></br/></p>
<ul>
<b>
<li>[1]</li>
<p></p></b><b>
<li>[2]</li>
<p></p></b><b>
<li>[3]</li>
<p></p></b><b>
<li>[2]</li>
<p></p></b><b>
<li>[3]</li>
<p></p></b><b>
<li>[3]</li>
<p></p></b>
</ul>

<p><b>Game 1 :</b> There are only 5 numbers > 1 in the list.<br />
<b>Game 2 :</b> There is only 1 number &lt; 2 in the list.<br />
<b>Game 3 :</b> There are only 3 numbers = 3 in the list.<br />
<b>Game 4 :</b> There are no numbers > 4 in the list. So the first player cannot make his move.<br />
<b>Game 5 :</b> There are 6 numbers &lt; 5 in the list.</p>
