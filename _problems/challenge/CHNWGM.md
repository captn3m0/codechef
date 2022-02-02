---
{"category_name":"challenge","problem_code":"CHNWGM","problem_name":"Chef and New Game","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":"iscsi","date_added":"1-10-2015","tags":{"0":"antoniuk1","1":"challenge","2":"june16"},"editorial_url":"http://discuss.codechef.com/problems/CHNWGM","time":{"view_start_date":1465983000,"submit_start_date":1465983000,"visible_start_date":1465983000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/mandarin/CHNWGM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/russian/CHNWGM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/vietnamese/CHNWGM.pdf">Vietnamese</a> as well.</h3>
<p>Chef has found a new game and now he wants you to help him to get as much points as possible. </p>
<p><b>Rules of the game</b>: There are different types of game pieces -  geometric shapes composed of some amount of square blocks. In the picture below you can see all the types of figures and enumeration. </p>
<p><img src="https://pp.vk.me/c623726/v623726985/3ebf9/g7u6IChM1jc.jpg" alt="picture" width = "500" height = "380" hspace = "25" /></p>
<p>The playing field is 10 cells width and 10 cells height. On each step of the game you are given exactly three game pieces. After that you need to put each of them to the game field such that after your move no two figures on the field are overlapped(you <b>cannot</b> rotate figures). If your move results in one or more horizontal or/and vertical lines of 10 units without gaps, those lines disappear. Notice that you put these three figures one by one and if you place the first figure and there are some lines ready to disappear, then they will disappear and only after that you place other figures.  </p>
<p>The game ends when you can't put no more figures on the game field.</p>
<p> </p>
<h3>Input</h3>
<p>Each line of input contains three integers <b>figure<sub>1</sub></b>, <b>figure<sub>2</sub></b> , <b>figure<sub>3</sub></b> denoting the type of the figures appeared on this step. If the game has ended - in the next line of input will be "-1 -1 -1". </p>
<h3>Interaction with the judge</h3>
<p>In each step you should read from the standard input all information about figures that appear in this step. After receiving this input, you should print one line containing nine space-separated parameters <b>id<sub>1</sub></b>, <b>r<sub>1</sub></b>, <b>c<sub>1</sub></b>, <b>id<sub>2</sub></b>, <b>r<sub>2</sub></b>, <b>c<sub>2</sub></b>, <b>id<sub>3</sub></b>, <b>r<sub>3</sub></b> and <b>c<sub>3</sub></b>. Integers {<b>id<sub>1</sub></b>, <b>id<sub>2</sub></b>, <b>id<sub>3</sub></b>} is the permutation of {1, 2, 3} and denote the order in which you will put these three figures. Integer <b>r<sub>i</sub></b> denotes the number of the row of the lowest block of <b>id<sub>i</sub><sup>th</sup></b> figure after you put it and <b>c<sub>i</sub></b> denotes the number of the column of the leftmost block of <b>id<sub>i</sub><sup>th</sup></b> figure after you put it. The rows are numbered from 1 to 10 from top to bottom and columns are numbered from 1 to 10 from left to right. Remember to <b>flush</b> the output after every line you print.</p>
<p>To finish the game(if you don't know where to put figures or it's impossible to put some figures) you need to output "-1" for figures you don't know where to put. For example, if on some move you don't know how to place all three figures, you need to output nine '-1"s as describing of all three figures. But if you can place, for example, only second figure, you need to output next numbers: "2 <b>r<sub>1</sub></b> <b>c<sub>1</sub></b> -1 -1 -1 -1 -1 -1". When judge reads "-1"s as describing of some figure, it means that the game ends at this step and then judge will output only "-1 -1 -1" as sign of finishing the game. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>figure<sub>i</sub></b> ≤ <b>19</b></li>
<li>Total amount of steps of the game does not exceed 5 * 10<sup>4</sup> </li>
</ul>
<h3>Scoring</h3>
<ul>
<li>For each test case, your score will be the sum of areas(amount of square blocks figure consists) of figures that you correctly place in the playing field. Your goal is to maximise this score.</li>
<li>Also there are some bonuses: if after your move exactly <b>x</b> row(s) and <b>y</b> column(s) will disappear - your score for this test will be increased by <b>x</b><sup>2</sup> + <b>y</b><sup>2</sup> + 5 * <b>x</b> *<b>y</b> and by 500 if after your move the field will be empty. </li>
<li>Your total score for the problem will be the sum of scores on all the test cases.</li>
<li>Your solution will be tested only on 20% of the test files during the contest and will be re-judged against 100% after the end of competition.</li>
<li>The game ends when you output "-1"s as describing of placing some figure(what means you want to finish the game) or total number of moves reached 5 * 10<sup>4</sup>. In both cases the judge will output "-1 -1 -1" as a sing of finishing of the game.</li>
<li>You will get WA verdict if you output incorrect data or some figures overlap. Incorrect data means that there is no way to put this figure at the place you output or you output completely incorrect data: <b>id<sub>i</sub></b> ∉ {1, 2, 3},  {<b>id<sub>1</sub></b>, <b>id<sub>2</sub></b>, <b>id<sub>3</sub></b>} is not the permutation of {1, 2, 3}, <b>r</b> ∉ [1..10] or <b>c</b> ∉ [1..10].</li>
<li>If you passed all 5 * 10<sup>4</sup> steps of the game, the next line of input will be "-1 -1 -1" and your result will be the score you got.</li>
<h3>Test data generation</h3>
<p>For each test file the probabilities of appearing each figure are manually chosen.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
8 3 11
6 14 12
5 10 11
5 7 11
16 19 1
-1 -1 -1

<b>Output:</b>
3 6 5 2 2 2 1 10 8
1 4 8 2 6 1 3 7 2
1 5 8 3 4 8 2 6 8
3 9 8 2 10 7 1 1 6
3 10 8 2 8 3 -1 -1 -1

</pre><h3>Explanation</h3>
<p>In this test case your score will be 74 = 66 (for areas of figures) + 8 (bonus score).</p>
<p>On the fifth move the player decided to finish the game and output three "-1"s as the describing of placing the last figure on this move. </p>
<p><img src="https://pp.vk.me/c624424/v624424985/4386a/Zb5BeeUOVC4.jpg" alt="picture" width = "360" height = "170" /></p>
<p><img src="https://pp.vk.me/c624424/v624424985/43860/wli20HCHoCc.jpg" alt="picture" width = "550" height = "170" /></p>
<p><img src="https://pp.vk.me/c624424/v624424985/43856/9r1yBC2O2mk.jpg" alt="picture" width = "550" height = "170" /></p>
</ul>