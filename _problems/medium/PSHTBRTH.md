---
{"category_name":"medium","problem_code":"PSHTBRTH","problem_name":"Pishty and birthday","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"fekete","problem_tester":"xcwgf666","date_added":"19-02-2017","tags":{"0":"fekete","1":"game","2":"march17","3":"medium","4":"segment","5":"sprague"},"editorial_url":"https://discuss.codechef.com/problems/PSHTBRTH","time":{"view_start_date":1489397400,"submit_start_date":1489397400,"visible_start_date":1489397400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/mandarin/PSHTBRTH.pdf?v=1">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/russian/PSHTBRTH.pdf?v=1">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/vietnamese/PSHTBRTH.pdf?v=1">Vietnamese</a> as well.</h3>

<p>A little boy Pishty lives in Khust - an ancient town in the best country of the world - Uzhlyandia
(also Khust is a wonderful town with their own castle and smart bears, but this is not relevant for us). And he is celebrating his birthday today!</p>

<p>
Citizens of Uzhlyandia love two things : cakes and <a href = "https://en.wikipedia.org/wiki/Goulash"> goulash </a> , but Pishty prefer cakes.
So his friend Lotsy decided to buy<b> N </b> cakes, because a friend's birthday must be the best day of his life!</p>

<p>
A cake can be thought of as a 4 × 4 square matrix, and in each cell of the matrix no more than 1 candle can be placed.</p>

<p>
The two boys like to play a game, in which they extinguish candles.</p>

<p>
They play in turns, with the birthday boy Pishty taking the first turn. In each turn, one of the boys picks a cake with burning candles on it, chooses a rectangle (ie. a <a href = "http://mathworld.wolfram.com/Submatrix.html"> submatrix </a>) which has burning candles in all its cells, and extinguishes all those candles. If a boy can't make a move, he loses. You should assume that they play optimally. No one likes to lose a game, even to their best friend!
</p>

<p>
Because Pishty and Lotsy are best friends, Lotsy wants to buy the best collection of cakes, and so he has M queries to make to the Chef. There are 2 types of queries :
<ul>
<li> to find the winner in the game if it is played with only the cakes in the range <b>[L; R]</b> </li>
<li> to change a matrix, denoting a cake at some position </li>
</ul>
Help Chef answer all of Lotsy's queries, and make Pishty's birthday the best birthday in the world!</p>


<h3>Input</h3>
<p> The first line contains one integer <b> T </b>, denoting the number of test cases. Then <b>T</b> test case descriptions follow.</p>
<p>The first line of the each description contains two integers <b> N </b> and
<b> M</b>, denoting the number of cakes and the number of queries respectively.</p>
<p>
The following <b>5 × N</b> lines contain information about the <b>N</b> cake-denoting matrices (four lines of strings of four chars (without spaces), followed by an empty line). An element of a matrix equals <b>1</b> if there is a burning candle and <b>0</b> if there isn't anything.</p>

<p>Then the queries follow in one of the following formats:
<ul>
<li> <b> 1 L R </b> - to find the winner in the game where only the caked in the range <b>[L; R]</b> are used.</li>
<li><b> 2 pos matrix </b> -  to change the cake-denoting matrix at position <b>pos</b> to <b>matrix</b>
<p>Here, <b>2 pos</b> will be on the first line and <b>matrix </b> will be described in the next four lines. each of which will be a string of four chars, without spaces in between. There will be no empty line after these four lines.
</p>
</li>
</ul>
</p>

<h3>Output</h3>
<p>For each query of first type output a single line containing a string <b>"Pishty"</b>, if Pishty will win, or <b>"Lotsy"</b> otherwise.</p>

<h3>Constraints</h3>
<ul>
<li> <b>1</b> ≤  <b>T </b>  ≤ <b> 5 </b> </li>
<li> <b>1</b> ≤  <b>N, M</b> ≤ <b> 10<sup>5</sup></b> </li>
<li> <b>1</b> ≤  <b>L </b> ≤ <b> R </b> ≤ <b>N</b> </li>
<li> <b>1</b> ≤  <b>pos </b>  ≤ <b>N</b> </li>
</ul>

<h3>Subtasks</h3>
<b>
<p> Subtask 1 :  20 points
<ul><li> 1 ≤ N, M ≤ 10  </li> </ul></p>
<p> Subtask 2: 30 points
<ul><li> 1 ≤ N, M ≤ 1000  </li> </ul></p>
<p> Subtask 3 : 50 points
<ul><li> 1 ≤ N, M ≤ 10<sup>5</sup>  </li> </ul></p>
</b>


<h3>Example</h3>
<pre><b>Input:</b>
<tt>1
3 6
0110
0000
0000
0001

0000
0000
0000
0000

1000
1000
0000
0000

1 1 1
1 2 2
1 3 3
1 1 3
2 2
0001
0010
0100
1000
1 1 3</tt>

<b>Output:</b>
<tt>Pishty
Lotsy
Pishty
Pishty
Pishty</tt>
</pre>
<p> </p>