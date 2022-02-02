---
{"category_name":"challenge","problem_code":"CROSSES","problem_name":"The Game of Crosses \u0026 Crosses","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"TEXT","40":"CLOJ","41":"FS"},"max_timelimit":2.21739,"source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"1-12-2008","tags":{"0":"admin"},"time":{"view_start_date":1232505083,"submit_start_date":1232505083,"visible_start_date":1232505083,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>The game of <a href="http://en.wikipedia.org/wiki/Gomoku">gomoku</a> (otherwise known as naughts &amp; crosses), played on an <i>n x n</i> board has many interesting variations. One of them is the Game of Crosses &amp; Crosses, with the following set of rules:
<ul>
<li>Two players - red and black - take it in turns to place one cross of their respective color on an unoccupied square of the <i>n x n</i> gaming board. Red starts the game.
</li><li>After each player's move, any rectangles with sides equal to at least 2, lying entirely within the gaming board and covered completely by crosses, are simultaneously removed (cut off) from the gaming board and the game continues.
</li><li>When all the squares remaining in the gaming board are covered by crosses, the game comes to an end. The score of each player is equal to the number of crosses of his color left standing on the gaming board, and the player with the higher score is considered the winner.
</li></ul>
</p><p>
The game of crosses &amp; crosses has been the favorite pastime of Bytelandian schoolchildren during their lessons. Little Johnny was no different, and among his friends he actually became a notable crossing champion.
</p><p>
But not many people knew about Johnny's crossing talent, and Johnny often used this to his advantage. So when a few years after Johnny's abdication from the throne of Byteland an unsuspecting publisher signed a million dolar contract with the ex-king for a series of memoirs entitled <i>The famous victories of Johnny the Great</i>, he was certainly not prepared for what he received -- a detailed account of Johnny's childhood games of crosses &amp; crosses. To make matters worse, all accounts are written by Johnny in exciting prose, rich in action, e.g.: "Then I played yet another game on a 3x3 board. I placed my first cross at (1,1). Then I placed a cross at (2,3). The next cross I placed at (2,2). The cross after that I placed at (3,3). Finally, I placed a cross at (1,2) and I won the game 2:1.".
</p><p>In a desperate effort to save the day, the publisher employed you to create illustrations for the book. You are given a free hand in reinacting the games (and in particular the oponent's moves, which Johnny has modestly left out), provided your version of events is not an evident contradiction of Johnny's text.

<h3>Input</h3>
</p><p>Input begins with a line containing a single integer t (t=100) followed by t test cases.

</p><p>Each test case starts with a line with three integers describing a single game: n sr sb, denoting the length of the side of the playing board, the number of points scored by the red player (Johnny) and the number of points scored by the black player (Johnny's oponent), respectively (3&lt;=n&lt;=250, 0&lt;=sb&lt; sr). The next ceil(n<sup>2</sup>/2) lines contain 2 integers x<sub>i</sub> y<sub>i</sub> each - the coordinates of the squares where Johnny placed his crosses in successive moves (1&lt;= x<sub>i</sub>, y<sub>i</sub> &lt;= n).

<h3>Output</h3>
</p><p>For the i-th test case output a line with the text case i Y or case i N, specifying whether you wish to solve the given case. Then in the former case print  exactly floor(n<sup>2</sup>/2) lines containining 2 integers each - the coordinates of the squares where Johnny's anonymous oponent placed his crosses in successive moves.
 
<h3>Scoring</h3>

</p><p>The score awarded to your program is equal to the number of correctly solved test cases. For each case, the game defined by yours and Johnny's description must have the outcome (final score) defined at input.

<h3>Example</h3>

<pre>
<b>Input:</b>
1
3 2 1
1 1
2 3
2 2
3 3
1 2

<b>Output:</b>
case 1 Y
3 1
1 3
2 1
3 2

<b>Score:</b>
1
</pre>
</p><p>
<img src="http://www.codechef.com/download/adrian_crosses.png" alt="Illustration to sample test data" />
</p>
<b>
Warning: large Input/Output data, be careful with certain languages
</b>