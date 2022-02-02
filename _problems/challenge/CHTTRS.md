---
{"category_name":"challenge","problem_code":"CHTTRS","problem_name":"Chef and Chetris","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":"kevinsogo","date_added":"4-08-2015","tags":{"0":"antoniuk1","1":"challenge","2":"sept15"},"editorial_url":"http://discuss.codechef.com/problems/CHTTRS","time":{"view_start_date":1442223000,"submit_start_date":1442223000,"visible_start_date":1442223000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT15/mandarin/CHTTRS.pdf">Mandarin</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT15/russian/CHTTRS.pdf">Russian</a>. Translations in Vietnamese to be uploaded soon.</h3>
<p>Chef has created his own game called <b>Chetris</b> and now he wants you to play this game. The rules of Chetris are very similar to a rather well-known game <a href="https://en.wikipedia.org/wiki/Tetris"><b>Tetris</b></a>, but there are some subtle differences, so we recommend you to read the rules before start playing.</p>
<p><b>Rules of the game:</b> <em>Tetrominos</em> are game pieces — geometric shapes composed of four square blocks each. There are seven types of Tetrominos and each of them can be rotated (lets enumerate types of Tetrominos by numbers from 1 to 7 and their rotational configuration by small Latin letters <em>a</em> through <em>d</em> ). You can see this enumeration in the picture below.</p>
<p><img src="https://s3.amazonaws.com/codechef_shared/download/SEPT15/CHTTRS1.jpg" alt="picture" width = "500" height = "600" hspace = "25" /></p>
<p>A random sequence of Tetrominos fall down the playing field (a rectangular vertical shaft). The playing field is 15 cells wide and 15 cells tall. On each step of the game, exactly one Tetromino appears above the game field. After that you should decide how you will rotate the figure (<b>you can't rotate the figure when it is falling</b>), but sometimes there appear <b> Fixed Tetrominos</b> that you cannot rotate. After you choose some rotation of the figure(or it's the Fixed Tetraminos) , it start falling. While the figure is falling, you can manipulate it by moving sideways (you can move the figure only by an integer number of cells and also you can assume that time for moving figure by one or more cells in left or right direction takes zero time). Similar to Tetris, the Tetrominos stop falling when under one of its square block there is bottom of the gamefield or a block from other Tetrominos. If this results in one or more horizontal lines of 15 units without gaps, those lines disappear, and any block above the deleted line will fall by a distance exactly equal to the height of the cleared rows below them. According to the rules of <b>Chetris</b>, when some k rows disappear and after falling down k rows, even if some block has no block directly below it , <b>it will not fall down and will instead stay afloat</b>. For example, see the picture below:</p>
<p><img src="https://s3.amazonaws.com/codechef_shared/download/SEPT15/CHTTRS2.jpg" alt="picture" width = "550" height = "170" /></p>
<p>The game ends when some Tetromino locks partially or completely above the visible portion of the playing field.</p>
<p>Your task is to place as many Tetrominos as possible before the game is over.</p>
<h3>Input</h3>
<p>Each line of input contains an integer <b>type</b> denoting the type of the figure: 1 - normal Tetromino, 2 - Fixed Tetromino.  If <b>type</b> = 1 then next number in this line will be <b>figure</b> -  denoting the kind of the Tetromino that will appear. If <b>type</b> = 2 then next number in this line will be <b>figure</b> -  denoting the kind of Tetromino that will appear and next character <b>rot</b> denoting the rotation of this Fixed Tetromino. If the game has ended - in the next line of input will be "Game over". </p>
<h3>Interaction with the judge</h3>
<p>In each step you should read from the standard input all information about the Tetromino that appears in this step. After receiving this input, you should print one line containing three space-separated parameters <b>rot</b>, <b>r</b> and <b>c</b>, where <b>rot</b> denoting the rotation of this figure (a, b, c or d) and integers <b>r</b> and  <b>c</b> where <b>r</b> denotes the row number of the lowest block of this Tetromino after it stops falling and <b>c</b> denotes the column column of the leftmost block of this Tetromino after it stops(note that if the current Tetromino if Fixed Tetromino that rotation in your output must be equal to the rotation in the input). The rows are numbered 1 to 15 from top to bottom and columns are numbered 1 to 15 from left to right. Remember to <b>flush</b> the output after every line you print.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>type</b> ≤ <b>2</b></li>
<li><b>1</b> ≤ <b>figure</b> ≤ <b>7</b></li>
<li>Total amount of steps of the game does not exceed 5 * 10<sup>4</sup> </li>
</ul>
<h3>Scoring</h3>
<ul>
<li>For each test case, your score will be the number of Tetrominos that you correctly place in the playing field. Your goal is to maximise this score.</li>
<li>Also there are some bonuses: if after your move exactly <b>x</b> row(s) will disappear - your score for this test will be increased by 10 * <b>x</b><sup>2</sup>(i.e. 10, 40, 90, 160) and and by 500 if after your move the field will be empty. </li>
<li>Your total score for the problem will be the sum of scores on all the test cases.</li>
<li>Your solution will be tested only on 20% of the test files during the contest and will be re-judged against 100% after the end of competition.</li>
<li>The game will end if you output incorrect data or at least one block of some Tetromino is above the visible part of the playing field when the Tetromino stops. Incorrect data means that there is no way to put this figure in the rotational configuration you selected at the place you output or you output completely incorrect data: <b>rot</b> ∉ {a, b, c, d} or <b>r</b> ∉ [1..15] or <b>c</b> ∉ [1..15].</li>
<li>If you correctly placed all 5 * 10<sup>4</sup> Tetrominos on the playing field, the next line of input will be "Game over" and you will get a score of 5 * 10<sup>4</sup>.</li>
<h3>Test data generation</h3>
<p>For each test file the probabilities of appearing each Tetraminos are manually chosen. The probability of appearing the Fixed Tetraminos is manually chosen too.</p>
<h3>Example</h3>
<pre><b>Input:</b>
1 7
1 5
2 1 b
1 3
1 1
2 2 c
1 4
1 6 
Game over

<b>Output:</b>
a 15 12
a 14 10
b 12 11
c 9 10
a 7 7
c 6 7
a 3 8
a 1 6
</pre><pre><b>Input:</b>
1 1
1 1
1 3
1 6
1 6
1 5
Game over

<b>Output:</b>
a 15 1
a 15 6
a 15 10
a 15 13
c 15 4
b 15 12

</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> </p>
<p>In this test case your score will be 7.</p>
<p><img src="https://s3.amazonaws.com/codechef_shared/download/SEPT15/CHTTRS3.jpg" alt="picture" width = "550" height = "120" /></p>
<p><img src="https://s3.amazonaws.com/codechef_shared/download/SEPT15/CHTTRS4.jpg" alt="picture" width = "550" height = "120" /></p>
<p><b>Example case 2.</b> </p>
<p>In this test case your score will be 16.</p>
<p><img src="https://s3.amazonaws.com/codechef_shared/download/SEPT15/CHTTRS5.jpg" alt="picture" width = "550" height = "120" /></p>
<p><img src="https://s3.amazonaws.com/codechef_shared/download/SEPT15/CHTTRS6.jpg" alt="picture" width = "550" height = "120" /></p>
</ul>