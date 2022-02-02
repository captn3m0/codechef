---
languages_supported:
    - NA
title: CHEFBRO
category: NA
old_version: true
problem_code: CHEFBRO
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Chef's younger brother is in town. He's a big football fan and has a very important match to watch tonight. But the Chef wants to watch the season finale of MasterChef which will be aired at the same time. Now they don't want to fight over it like they used to when they were little kids. They want to decide it in a fair way. So they agree to play a game to make a decision. Their favourite childhood game!

The game consists of C boards. Each board i is a grid of dimension ni x mi.

**Rules of the game:**

- A coin is placed at (1,1) on every board initially.
- Each one takes a turn alternatively.
- In one turn, a player can choose any **one** board and move a coin from a cell (i,j) to one of the following cells: (i+1,j) OR (i+2,j) OR (i,j+1) OR (i,j+2) OR (i+1,j+1) OR (i+2,j+2).
- A coin cannot be moved out of the board at any point during the game.
- A coin cannot be moved once it reaches the cell (n,m) where n and m are the dimensions of the board of that coin.
- A player MUST make one valid move.
- The player who makes the last move gets to watch TV.
Both of them are passionate about their interests and want to watch their respective shows. So they will obviously make optimal moves in every turn. The Chef, being the elder brother, takes the first turn.

Your task is to predict which show they will be watching tonight.

### Input:

The first line of input contains a single integer T, the number of test cases. T tests follow.Each test case starts with a single line containing C, the number of boards in the game. Then follow C lines: each containing 2 integers ni and mi, the dimensions of the ith board.

### Output:

Given the number and dimensions of boards, for each test case, output in a single line: "MasterChef" if the Chef wins or "Football" if his brother wins.

### Constraints:

1&lt;=T&lt;=10000
 1&lt;=C&lt;=20
 2&lt;=ni,mi&lt;=1000

### Example:

**Input:**
 1
 1
 2 2

 **Output:**
 MasterChef

 **Explanation:**

The Chef can move the coin on the board from (1,1)-&gt;(2,2). This coin cannot be moved any further. And so, the Chef wins. Notice that if the Chef moves it to any other valid position, i.e. either to (1,2) or (2,1) he will lose!
