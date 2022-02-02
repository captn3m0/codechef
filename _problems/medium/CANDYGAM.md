---
{"category_name":"medium","problem_code":"CANDYGAM","problem_name":"Candy Collecting Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"vamsi_kavala","problem_tester":"laycurse","date_added":"28-08-2012","tags":{"0":"dynamic","1":"easy","2":"nov12","3":"vamsi_kavala"},"editorial_url":"http://discuss.codechef.com/problems/CANDYGAM","time":{"view_start_date":1352712600,"submit_start_date":1352712600,"visible_start_date":1352712600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Alice and Bob have come to spend their day in a FunFair which is close to their house. They have played almost all games and seen all the attractions. But there's one game left which has caught their attention. The winner of this game could get a LOT of candies! The game is as follows:</p>
<ul>
<li> The game is a two-player game which is played on an <b>NxM</b> grid. </li>
<p></p>
<li> Each cell of the grid has a certain number of candies. <b>A[i][j]</b> denotes the number of candies in the <b>j<sup>th</sup></b> column of the <b>i<sup>th</sup></b> row. </li>
<p></p>
<li> The players make alternate turns. </li>
<p></p>
<li> In each turn, a player <i>must</i> remove one <i>complete row</i> or one <i>complete column</i> from the grid. He will add all the candies in that row/column into his account. </li>
<p></p>
<li> The only possible rows that a player can remove in his/her turn are the top row or the bottom row. Similarly, only leftmost column or the rightmost column can be removed in one turn. </li>
<p></p>
<li> After removing the row or column, the game is played on the new reduced grid with one less row or column respectively. </li>
<p></p>
<li> When the entire matrix is emptied, the player with higher number of candies wins the game and can take all those candies with him/her. The loser has to give back the candies collected so far and return empty-handed. </li>
<p></p>
<li> If both players have equal number of candies, both of them are declared winners. </li>
<p> 
</p></ul>
<p>Alice and Bob want to take as many candies home as possible. They don't have much time with themselves. So they come up with a strategy using which they want to increase Bob's share of candies and decrease Alice's share. This way, they plan to make Bob win and take his entire share of candies! The strategy is as follows:</p>
<ul>
<li> Alice decides to pick the row or column from the present grid which has the <i>least</i> number of candies in every  turn of hers. </li>
<p></p>
<li> If there are more than one such options, then her order of preference will be:<br /> 1) first row<br /> 2) last row<br /> 3) first column<br /> 4) last column.<br /> For example, if all these 4 rows/columns have the same number of candies, she will remove the first row in this turn. </li>
<p></p>
<li> Bob chooses an optimal strategy through which he maximizes his share of candies in the end of the game. Note that Bob's strategy maximizes the number of his candies, not winner's candies. Also note that Bob knows Alice's strategy, of course, and he will take into account her strategy when he decides his move. </li>
<p> 
</p></ul>
<p>It's quite evident that their strategy is not optimal. It might happen that Bob loses a game. And sometimes, both might win (with equal number of candies). Given the grid and the number of candies in each cell, your task is to tell them how many candies will the winner get if they play with this combined strategy. Alice will always start the game (Ladies first!).</p>
<h3>Input:</h3>
<p>First line of the test data contains a single integer <b>T</b>, the number of test cases.<br /> Each test case starts with two space separated integers <b>N</b> and <b>M</b>, the number of rows and columns of the grid respectively.<br /> Then follow <b>N</b> lines containing <b>M</b> space separated integers <b>A[i][j]</b>. These lines describe the grid.</p>
<h3>Output:</h3>
<p>For each test case, output a single line containing the number of candies the winner(s) gets.</p>
<h3>Constraints:</h3>
<pre>1 ≤ <b>T</b> ≤ 25
1 ≤ <b>N, M</b> ≤ 50
0 ≤ <b>A[i][j]</b> ≤ 1000000000 

</pre><p> </p>
<h3>Example:</h3>
<p><b>Input:</b></p>
<pre>3
3 3
0 9 9
0 6 6
0 9 6
2 2
1 1
1 1
1 4
1 2 3 4

</pre><p><b>Output:</b></p>
<pre>39
4
9

</pre><p><b>Explanation:</b><br /> <i>1<sup>st</sup> case:</i> Alice picks the first column (with all 0's). We're left with a 3x2 grid now. Bob picks the first column (9+6+9=24). We're left with a 3x1 grid. Alice picks the last row (6). A 2x1 grid is left. Bob picks the entire column (9+6=15). Thus, Bob has 24+15=39 candies and Alice has 6. So clearly, Bob is the winner.<br /> <i>2<sup>nd</sup> case:</i> Here, both end up with two candies each. Hence both are the winners. Thus the winner(s) have 2+2=4 candies in all.</p>
