---
category_name: medium
problem_code: CANDYGAM
problem_name: 'Candy Collecting Game'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: vamsi_kavala
problem_tester: laycurse
date_added: 28-08-2012
tags:
    - dynamic
    - easy
    - nov12
    - vamsi_kavala
editorial_url: 'http://discuss.codechef.com/problems/CANDYGAM'
time:
    view_start_date: 1352712600
    submit_start_date: 1352712600
    visible_start_date: 1352712600
    end_date: 1735669800
    current: 1493557499
layout: problem
---
All submissions for this problem are available.Alice and Bob have come to spend their day in a FunFair which is close to their house. They have played almost all games and seen all the attractions. But there's one game left which has caught their attention. The winner of this game could get a LOT of candies! The game is as follows:

- The game is a two-player game which is played on an **NxM** grid.
- Each cell of the grid has a certain number of candies. **A\[i\]\[j\]** denotes the number of candies in the **jth** column of the **ith** row.
- The players make alternate turns.
- In each turn, a player _must_ remove one _complete row_ or one _complete column_ from the grid. He will add all the candies in that row/column into his account.
- The only possible rows that a player can remove in his/her turn are the top row or the bottom row. Similarly, only leftmost column or the rightmost column can be removed in one turn.
- After removing the row or column, the game is played on the new reduced grid with one less row or column respectively.
- When the entire matrix is emptied, the player with higher number of candies wins the game and can take all those candies with him/her. The loser has to give back the candies collected so far and return empty-handed.
- If both players have equal number of candies, both of them are declared winners.

Alice and Bob want to take as many candies home as possible. They don't have much time with themselves. So they come up with a strategy using which they want to increase Bob's share of candies and decrease Alice's share. This way, they plan to make Bob win and take his entire share of candies! The strategy is as follows:

- Alice decides to pick the row or column from the present grid which has the _least_ number of candies in every turn of hers.
- If there are more than one such options, then her order of preference will be:
   1) first row
   2) last row
   3) first column
   4) last column.
   For example, if all these 4 rows/columns have the same number of candies, she will remove the first row in this turn.
- Bob chooses an optimal strategy through which he maximizes his share of candies in the end of the game. Note that Bob's strategy maximizes the number of his candies, not winner's candies. Also note that Bob knows Alice's strategy, of course, and he will take into account her strategy when he decides his move.

It's quite evident that their strategy is not optimal. It might happen that Bob loses a game. And sometimes, both might win (with equal number of candies). Given the grid and the number of candies in each cell, your task is to tell them how many candies will the winner get if they play with this combined strategy. Alice will always start the game (Ladies first!).

### Input:

First line of the test data contains a single integer **T**, the number of test cases.
 Each test case starts with two space separated integers **N** and **M**, the number of rows and columns of the grid respectively.
 Then follow **N** lines containing **M** space separated integers **A\[i\]\[j\]**. These lines describe the grid.

### Output:

For each test case, output a single line containing the number of candies the winner(s) gets.

### Constraints:

<pre>1 ≤ <b>T</b> ≤ 25
1 ≤ <b>N, M</b> ≤ 50
0 ≤ <b>A[i][j]</b> ≤ 1000000000 

</pre>### Example:

**Input:**

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

</pre>**Output:**

<pre>39
4
9

</pre>**Explanation:**
 _1st case:_ Alice picks the first column (with all 0's). We're left with a 3x2 grid now. Bob picks the first column (9+6+9=24). We're left with a 3x1 grid. Alice picks the last row (6). A 2x1 grid is left. Bob picks the entire column (9+6=15). Thus, Bob has 24+15=39 candies and Alice has 6. So clearly, Bob is the winner.
 _2nd case:_ Here, both end up with two candies each. Hence both are the winners. Thus the winner(s) have 2+2=4 candies in all.
