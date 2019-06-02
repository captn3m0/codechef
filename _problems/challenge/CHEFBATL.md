---
category_name: challenge
problem_code: CHEFBATL
problem_name: 'Chef and Battleship'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: null
date_added: 6-05-2017
tags:
    - mgch
time:
    view_start_date: 1495099800
    submit_start_date: 1495099800
    visible_start_date: 1495099800
    end_date: 1735669800
    current: 1525454414
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Chef wants to play the famous game [Battleship](https://en.wikipedia.org/wiki/Battleship_(game)). Unfortunately, he doesn't have an opponent for the game and he decides to create an Artificial Intelligence program to play the game "Sea Battle" (a modification of the "Battleship").

"Sea Battle" is a guessing game for two players. It is played on grids (paper or board) on which the players' fleets of ships (including battleships) are marked. The locations of the fleet are concealed from the other player. Players alternate turns calling "shots" at the other player's ships, and the objective of the game is to destroy the opposing player's fleet. It is played on a 10×10 grid. A player gets to take another shot on the same turn if an enemy ship is hit and all the ships are not sunk yet. Ships cannot occupy squares next to each other, horizontally, vertically or diagonally. The set of ships is as follows: 1 submarine 1x4, 2 destroyers 1x3, 3 cruisers 1x2 and 4 battleships 1x1. The player who sunk all of the opponent's ships first wins. Below are some possible correct arrangements of fleets

<pre>
<tt>
##.####.##         ##...##.#.
..........         ..........
###.##.###         #.###.....
..........         #.........
#.#.#.#...         #...####..
..........         ..........
..........         ..#.##....
..........         ..........
..........         ..#..#....
..........         ..........
</tt>
</pre>
 These ones are incorrect

<pre>
<tt>
##.####.##         ##...##.#.
..........         ..........
###.##.###         #.###.....
..........         #.........
#.#.<b>#</b>.....         #...####..
.....<b>#</b>....         ..........
..........         ..#.##....
..........         .....#....
..........         ..#.......
..........         ..........
</tt>
</pre>
The first fleet is not correct as the battleships shown in bold are adjacent. The second one is incorrect, as it contains 7 battleships, whereas it should have contained only 4 battleships.

 In Chef's case, you need to help him to play against the AI (judge program), which will be run by a computer. The computer will play randomly (it chooses an empty cell with equal probability), but when the computer hits a ship, it will try to hit free neighbors of this cell. Please help Chef find a strategy to win, and to make the minimal total number of moves in the game.

The computer plays in the following given way:

 Let's consider a set of unmarked cells in the 10x10 grid. The program randomly chooses one cell and marks it. If that cell is a part of a ship (and this ship hasn't sunk yet, because it has more than 1 cell), the computer will try to hit unmarked neighbors of this cell (the ones that have a common side with it). When the computer hits an empty cell, it will next try to hit another neighbor and so forth. The neighbor to hit is chosen randomly over all unmarked/free neighbors. At some moment, if the computer knows 2 cells of the ship, and if the ship has at least 3 cells, then there are at most two choices to try the next time. The computer chooses randomly between these free cells and hits it. After the ship is sunk, the computer marks all free cells which have a common side or corner with this ship as marked.

### Input

 At most T=100 games will be played.

### Output

 Before each test case you can output 0 (to exit the game), or 1(start/proceed the game). When you start the game you should output 10 lines each containing 10 characters - correct arrangement of your ships('#' - denotes ship cell, '.' - free cell). After that, you should make the first move **x y**. The computer will write next line:

 1 - the cell you hit is empty or you've hit it already.

 2 - you hit a ship, but it hasn't sunk yet.

 3 - you sunk a ship

 4 - you win the game

 5 - you lost the game

 When the code is 1, the computer makes the next move.

When the code is 5, it means that you didn't hit any ship, and hence it is the computer's move now, and this is going to be the last move because the computer wins after this. The computer will also output the moves which make it win.

Note, when computer hits the ship, it makes next move too.

If the code is 1 or 5, the computer then outputs **K** - number of cells hit by it on its turn. Each of the next **K** lines contains two space-separated integers **x y**, both of them in a range from 1 to 10. A single game will end if code is 4 or 5. You should start the new game afterward. In case of 5, note that the computer's moves follow after the code.

### Example

Let's consider a smaller example: a field 4x4 with two ships 1x1 and one ship 1x2: ```
<b>Input:</b>
1<tt>
#...
#..#
....
#...
</tt>
2 2
					1
					3
 					1 1
 					2 1
 					2 3
3 3
 					3
1 4
 					2
1 3
 					3
3 1
 					1
 					2
 					2 4
 					4 2
4 1
 					4
1<tt>
..##
#...
..#.
....
</tt>
2 2
                                         1
                                         1
                                         3 1
2 3
                                         2
3 3
                                         3
1 1
                                         5
                                         4
                                         1 3
                                         2 1
                                         3 3
                                         1 4                                          
0
<pre>
### Explanation

Initially, you print 1, meaning that you chose to start the game. After that, you print a 10x10 field with correct arrangement of ships(where '#' denotes a cell with a ship, and '.' denotes a cell without a ship). In the example, we print a 4x4 field with 3 ships. After that, you make a shot in the position (2, 2). The computer prints a code 1, which means that no ship is located at the position (2, 2). Thereafter, the program hit your cell (1, 1), and after that makes one more turn in position (2, 1). Your ship on cells (1, 1)-(2, 1) is sunk now. The third shot of the program is at position (2, 3), but there is no ship there. So, computer made K=3 shots, and next 3 lines contain coordinates of the computer's shots on its turn.

You're choosing the next cell (3, 3). It so happens that there was a 1x1 battleship placed there and you have sunk it. Hence computer outputs 3. You next choose the next cells (1, 4) and (1, 3) respectively and a 1x2 ship (1, 4)-(1, 3) is sunk now. Note that the computer outputs a code 2 first and then 3 indicate that you first hit a ship and then sunk it. After one more turn, which we skip here, in the end, you shoot at position (4, 1) and kill the last of computer's ship, therefore computer prints 4 and game is over.

### Scoring

 Score is defined as sum of values (200 - total number of moves, if you win that game) over all the 100 games.

### Test generation: 

 Each test will contain T=100 games

Tests can be one of two types:

**Type #1**

Consider all ships. Let's choose a random subset of it and rotate every ship in the subset. After that, let's choose a random order of ships, and will add them one-by-one. Consider all possible positions where the ship can be located, and place it on random possible position.

**Type #2**

Consider all ships except four 1x1 battleships and arbitrary sub-rectangle of size **AxB**(6 A, **B** A and **B** are chosen randomly. Let's choose a random subset of it and rotate every ship in the subset. After that, let's choose a random order of ships, and will add them one-by-one in the chosen sub-rectangle. If in some moment we can't place the ship, repeat the procedure from the beginning one more time. After that, we will place 1x1 ships in the field 10x10 randomly over all possible positions one-by-one.
