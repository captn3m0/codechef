---
{"category_name":"medium","problem_code":"CAOS3","problem_name":"CAO Stage-3","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kaushik_iska","problem_tester":"shangjingbo","date_added":"17-07-2013","tags":{"0":"dynamic","1":"easy","2":"kaushik_iska","3":"oct13","4":"sprague"},"editorial_url":"http://discuss.codechef.com/problems/CAOS3","time":{"view_start_date":1381743000,"submit_start_date":1381743000,"visible_start_date":1381743000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/OCT13/mandarin/CAOS3.pdf ">here</a></h3>
<h3 id="problemstatement">Problem Statement</h3>
<p><strong>Past</strong></p>
<p>In the year 2048, the Virtual Reality Massively Multiplayer Online Role-Playing Game (VRMMORPG), <strong>Code Art Online (CAO)</strong>, is released. With the Chef Gear, a virtual reality helmet that stimulates the user's five senses via their brain, players can experience and control their in-game characters with their minds.</p>
<p>On August 2nd, 2048, all the players log in for the first time, and subsequently discover that they are unable to log out. They are then informed by Code Master, the creator of CAO, that if they wish to be free, they must reach the third stage game.</p>
<p>Kirito is a known star player of CAO. You are to help him log out.</p>
<p><strong>Present</strong></p>
<p><em>Stage 3</em></p>
<p>A map is described by a 2D grid of cells. Each cell is either a <strong>#</strong> or a <strong>^</strong>. <strong>#</strong> denotes a wall. A monster exists in a cell, if the cell is not a wall and the cell is a <strong>centre of Prime-Cross (CPC)</strong>.</p>
<p>A cell <strong>C</strong> is said to be a <strong>CPC</strong> if it satisfies the following property. Let <strong>L</strong> be the number of contiguous <strong>^</strong> to the left of <strong>C</strong>, in the same row as <strong>C</strong>, <strong>R</strong> be the number of contiguous <strong>^</strong> to the right of <strong>C</strong>, in the same row as <strong>C</strong>,  <strong>T</strong> be the number of contiguous <strong>^</strong> to the top of <strong>C</strong>, in the same column as <strong>C</strong>, <strong>B</strong> be the number of contiguous <strong>^</strong> to the bottom of <strong>C</strong>, in the same column as <strong>C</strong>, if there exists a prime number <strong>P</strong>, where <strong>P ≤ minimum of [L, R, T, B]</strong>, then <strong>C</strong> is said to be a <strong>CPC</strong>.</p>
<p>Kirito and Asuna decide to play the following game. Players alternate their turns. Asuna gets the first turn, Kirito being a gentleman allows ladies to have the first move. In a turn, players have to choose a cell where a monster resides and transform the cell into a volcano. The volcano immediately erupts filling all the cells in the same row and also all the cells in the same column with lava. Lava stops flowing past the cells which already have lava in them. The player who makes the last move wins.</p>
<p>Given that Kirito and Asuna both play optimally, you are to say who wins the game.</p>
<p><strong>Future</strong></p>
<p>Have fun solving the other tasks :-)</p>
<h3 id="input">Input</h3>
<p>The first line of the input contains an integer <strong>T</strong> denoting the number of test cases. The description of <strong>T</strong> test cases follows. Each case start with a line containing two space separated integers <strong>R, C</strong>, denoting the number of rows and columns in the map respectively. Followed by <strong>R</strong> lines containing <strong>C</strong> characters each, describing the map.</p>
<h3 id="output">Output</h3>
<p>For each test case, output a single line containing the the name of the winner. I.e. <strong>"Kirito" or "Asuna"</strong>.</p>
<h3 id="constraints">Constraints</h3>
<ul>
<li>1 ≤ T ≤ 10</li>
<li>1 ≤ R ≤ 20</li>
<li>1 ≤ C ≤ 20</li>
</ul>
<h3 id="example">Example</h3>
<pre>
<b>Input:</b>
1
7 7
^#^#^^^
^#^^^#^
^#^^^^^
^^^#^^^
^^^^^^^
^^^^^^^
^^^^^^^

<b>Output:</b>
Asuna
</pre><h3 id="explanation">Explanation</h3>
<p>This is the intial configuration, you can see the positions of monsters at CPC's.</p>
<p><img src="//www.codechef.com/download/caos3-1.png" /> </p>
<p>
Asuna can win in 1 move if she decides to place the volcano in <b>(5, 5)</b> hence <b>Asuna wins in the example</b>. But for the sake of analysing a couple more moves lets assume she places the volcano on any of the other two monsters.<br />
It wouldn't make a difference as it would kill 2 monsters in any case. This is the first move Asuna places the volcano at <strong>(3, 5)</strong>, assume without any loss of generality.</p>
<p><img src="//www.codechef.com/download/caos3-2.png" /> </p>
<p>Now, in this turn Kirito simply places the volcano on the remaining monster, in this case at <strong>(5, 3)</strong>, it kills the monster. Asuna can't place volcano at anyother position. Hence, Kirito wins.</p>
<p><img src="//www.codechef.com/download/caos3-3.png" /></p>
