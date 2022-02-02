---
{"category_name":"easy","problem_code":"ONCHESS","problem_name":"Online Chess","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"amrmahmoud","date_added":"17-11-2017","tags":{"0":"cook88","1":"easy","2":"kingofnumbers","3":"kingofnumbers","4":"likecs","5":"looping"},"editorial_url":"https://discuss.codechef.com/problems/ONCHESS","time":{"view_start_date":1511116200,"submit_start_date":1511116200,"visible_start_date":1511116200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK88/russian/ONCHESS.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK88/vietnamese/ONCHESS.pdf">Vietnamese</a> as well.</h3>
<p>There is a website for playing chess online with other people, whenever you want to play a game, you can either create new game and wait for an opponent to join, or you can join already created game.</p>

<p>Each player has a number representing his rating, after each game the winner will take some rating points from the loser, unless the players agreed to make the game unrated before the start</p>

<p>Whenever you create a game you have first to choose some parameters for this game:

<ul>
<li>minimum and maximum rating for the opponent that you would like to play with</li>
<li>whether this game will be rated or not</li>
<li>the total thinking time allowed for each player</li>
<li>whether you would like to play with white, black or let the server choose a random color random</li>
</ul>
</p><p>
after choosing those parameters and creating the game you will wait for an opponent to join your game, after someone joins the game will start.
</p>


<p>if you would like to join a game you can see the list of already created games that are still waiting for an opponent and you can see the parameters for each game after that you can select one of them to join.

</p> 

<p>
Chef is one of the developers of this website and today he thought that it's good idea to add new feature to it, the feature is that whenever a player creates a new game before asking the player to wait for an opponent the website will try to automatically find suitable opponent among those who already have created a game and still waiting for opponent, the website should choose the opponent such that all parameters specified by both players must be satisfied, if more than one suitable match exists then the player who just created a game will  be matched with the suitable player who created a game first, if there's no match at all then the website will ask the player to wait for an opponent. 
</p>

<p>
rules applied to check whether two players can be matched:

<ul>
<li>rating of each player is inside the range of rating that the other player selected</li>

<li>both players selected the game to be rated, or both of them selected the game to be unrated</li>

<li>total thinking time chosen by both players are equal</li>


<li>both players chose random color, or one of them chose white while the other chose black</li>
</ul>
</p>

<p>
Now, given a list of players who created a new game, in the same order of creating, for each player find out if this player should be matched with another player who is at that time waiting for an opponent , if there are more than one possible match, then choose the one who created a game first (thus has waited more), if there is no match then ask the player to wait.
</p>

<p>
note that once a player is matched with another one then both players can no longer be matched with other players. also in this problem no player will join a game manually, all of them will create new game.
</p>
<p> </p>


<h3>Input</h3>
<p>First line of input contains a single integer <b>T</b> denoting the number of test-cases.</p>

<p>First line of each test-case contains a single integer <b>N</b> denoting the number of players who will create a new game</p>

<p>each of the following <b>N</b> lines contains a description of a player, <b>R<sub>i</sub></b> <b>Min<sub>i</sub></b> <b>Max<sub>i</sub></b> <b>Time<sub>i</sub></b>  <b>isRated<sub>i</sub></b> <b>Color<sub>i</sub></b> 

<p><b>R<sub>i</sub></b> is rating of player i, <b>Min<sub>i</sub></b> <b>Max<sub>i</sub></b> is minimum and maximum rating of the opponent that this player would like to play with, <b>Time<sub>i</sub></b> is the total thinking time for each player it can be only one of the following 5 15 30 60, <b>isRated<sub>i</sub></b> can be one of the values "rated" or "unrated", <b>Color<sub>i</sub></b> can be one of the following "white", "black" or "random"
</p>
<p> </p>

<h3>Output</h3>
<p>For each test-case output <b>N</b> lines, i-th line should be the number of the player that player i is matched when he created a new game, or word "wait" if there's no match. players are numbered from 1 to <b>N</b> in same order as input</p>

<p> </p>

<h3>Constraints</h3>

<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>R<sub>i</sub></b>  ≤ <b>1,000,000</b></li>
<li><b>1</b> ≤ <b>Min<sub>i</sub></b> ≤ <b>Max<sub>i</sub></b>  ≤ <b>1,000,000</b></li>
<li><b>Color<sub>i</sub></b> can only be "white", "black" or "random"</li>
<li><b>isRated<sub>i</sub></b> can only be "rated" or "unrated"</li>
<li><b>Time<sub>i</sub></b> can only be 5, 15, 30, 60</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
7
5 1 10 15 rated random
11 1 20 15 rated random
10 3 30 15 rated random
2 5 15 15 rated random
30 20 60 60 unrated white
50 20 40 60 unrated random
50 20 40 60 unrated black


<b>Output:</b>
wait
wait
1
2
wait
wait
5

</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b>
<ul>
<li>player 1 has to wait because there are no other players yet</li>
<li>player 2 has to wait because he can't play with player 1 because player 2 has rating 11 while player 1 want opponent rating to be 10 at max</li>
<li>player 3 can be with player 1 or player 2, so he will play with player 1 because he created a game first</li>
<li>player 4 can be with player 1 or player 2, but player 1 already entered a game with player 3 so he is unavailable now so player 4 will play with player  2</li>
<li>player 5 has to wait because there are no other players</li>
<li>player 6 has to wait because he can't play with player 5 because player 6 wants colored to be selected at random, while player 5 wants to take white</li>
<li>player 7 will play with player 5</li>

</ul>
</p>

