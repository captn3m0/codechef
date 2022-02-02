---
{"category_name":"medium","problem_code":"WPLAY","problem_name":"Word Play","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"kaushik_iska","problem_tester":"laycurse","date_added":"1-01-2013","tags":{"0":"easy","1":"feb13","2":"game","3":"kaushik_iska"},"editorial_url":"http://discuss.codechef.com/problems/WPLAY","time":{"view_start_date":1360583729,"submit_start_date":1360583729,"visible_start_date":1360582602,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
<b>Alice</b> and <b>Bob</b> decide to play the game <b>"CCWordPlay"</b>.<br />
<b>CCWordPlay</b> is played as follows:<br />
<br />
Initially, there is a <b>r * c</b> grid of <b>uppercase English alphabets</b>, where <b>r</b> denotes the number of rows, and <b>c</b> denotes the number of columns.<br />
In the player's turn, this player should make a <b>valid dictionary word</b> using the<br />
<b>active</b> alphabets on the board. Initially all the alphabets on the board are active.<br />
If a player is unable to make any such word, then the player lost the game. If a player makes a word, then all the alphabets used to make the word should be considered inactive till the end of the game. The turns of players alternate, until one of them loses. As usual <b>Alice plays first</b>.<br />
<br/><br />
You are to say, if both <b>Alice</b> and <b>Bob</b> play optimally, who will win the game?
</br/></p>
<p><b>Note 1:</b></p>
<p>
The alphabets need not be adjacent in any way.</p>
<pre style="font-family:monospace">
IBC
DEF
AJN
</pre><p>
In the above configuration, <b>"CAN"</b>, is a valid word.
</p>
<p><b>Note 2:</b></p>
<p>
Consider a <b>2 * 2</b> of the grid</p>
<pre style="font-family:monospace">
BE
ED
</pre><p>
Let the dictionary be:</p>
<pre style="font-family:monospace">
BED
BEE
</pre><p>
Say a player made the word <b>"BED"</b>. This word can be make in two ways:</p>
<pre style="font-family:monospace">
--
E-

or

-E
--
</pre><p>
Note that after making <b>"BED"</b>, not all the <b>E</b>(s) are inactive. However, after <b>"BEE"</b> is created, both <b>E</b>s are inactive, namely the board will be</p>
<pre style="font-family:monospace">
--
-D
</pre>
<h3>Input</h3>
<p>
The first line of input contains <b>D</b> denoting the number of words in the dictionally.<br />
The next <b>D</b> lines contain words in the dictionally.<br />
Then the next line contains 2 space-separated integers denoting <b>r</b> and <b>c</b>.<br />
After that, the next line contains an integers <b>T</b> denoting the number of boards.<br />
Then the <b>T</b> boards are follow without any extra spaces and extra blank lines.
</p>
<h3>Output</h3>
<p>
For each board, print a single line containing,<br />
<b>"Alice"</b>, if Alice wins, or <b>"Bob"</b>, if Bob wins. (Quotes are only for clarity).
</p>
<h3>Constraints</h3>
<p>
1 ≤ <b>D</b> ≤ 500000<br /><br />
1 ≤ <b>T</b> ≤ 1000<br /><br />
1 ≤ <b>r</b>, <b>c</b> ≤ 4<br /><br />
1 ≤ The length of each word ≤ <b>r</b> * <b>c</b><br /><br />
The dictionary does not contain the same word more than once.<br /><br />
At least one of the following 3 conditions must be hold:</p>
<ul>
<li><b>r</b> = 4, <b>c</b> = 4, <b>T</b> ≤ 10</li>
<li><b>r</b> = 3, <b>c</b> = 4, <b>T</b> ≤ 100</li>
<li><b>r</b> ≤ 3, <b>c</b> ≤ 3, <b>T</b> ≤ 1000</li>
</ul>

<h3>Samples</h3>
<pre>
<b>Input:</b>
5
BED
BAD
RED
BREED
BEER
3 3
2
DER
RAD
FEE
BAR
BEE
RAN

<b>Output:</b>
Bob
Alice

</pre>