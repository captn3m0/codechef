---
category_name: challenge
problem_code: SNAKGAME
problem_name: 'Game of snakes on a grid'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: xcwgf666
date_added: 15-03-2016
tags:
    - admin2
time:
    view_start_date: 1460374200
    submit_start_date: 1460374200
    visible_start_date: 1460374200
    end_date: 1735669800
    current: 1525199674
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL16/mandarin/SNAKGAME.pdf), [Russian](http://www.codechef.com/download/translated/APRIL16/russian/SNAKGAME.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL16/vietnamese/SNAKGAME.pdf) as well.

You are going to play a game with Chef on a grid of size **n** rows by **m** columns. Some of the cells of the grid are blocked. The aim of the game is to create snakes of as large lengths as possible in the grid, while avoiding death and getting bonuses with along with the journey.

This is an **interactive challenge**, judge program will be playing on behalf of Chef.

The game will played alternately between you and the judge. You are the one to move first. In your first move, you can choose any of the empty cells of the grid and start creating a snake from that cell. A snake is identified by its two ends, head and tail. When you create a new snake, then both head and tail of the snake will be same.

In your subsequent moves, you can increase length of your snake by extending it from either of its ends, i.e. from head or tail. In other words, you can choose an empty cell adjacent to either head or tail, and extend the snake by moving its respective end to the empty cell. A cell is said to be adjacent to other if they share a side (i.e. each cell has no more than **4** cells adjacent to it).

If at some stage, you are not able to extend the snake, then the snake will be considered dead. Now you can create another snake on the grid similarly. For each snake created, you will be granted score proportional to its length. You will also be charged penalty for each dead snake. Please see the scoring section for exact details.

Please note that when you or judge make a move to create or extend snake, then the cells occupied by the dead or live snakes, or initially blocked cells are considered to be non-empty cells.

During your journey, you can also be given a special bonus. In this special bonus, the judge program will be freezed for **turns** turns, i.e. during these turns, the judge will not be creating or extending a snakes. All other rules remain unchanged.

Note that if there is no empty cell left in the grid, then the game will end. Game will also be considered to be ended if your move is an EXIT move. Please see the next sections for details about various moves.

### Input and Output

The first line of the input contains three space-separated integers **n, m, K** denoting the height and width of the grid and number of blocked cells.

Each of following **K** lines will contain two space-separated integers **x y**, denoting the coordinate of blocked cell.

After that you will be first one to make a move, followed by the move of the judge, followed by you and then judge and so on in the alternate order. In your move, you can print "EXIT" to exit the game. Also, the judge can print "EXIT" if all the cells of the grids are occupied and there is no way to move further. You should not make any move after that.

Please flush the output buffer after each of your moves (for example, by calling fflush(stdout) in C++), otherwise your solution might not work properly.

For further details, please read the next section.

### Interaction with the judge

Each of your moves can have one of tree types.

- **MOVE from\_x from\_y to\_x to\_y** : Extend the length of the current snake by moving its' one of the ends from the cell with coordinates **(from\_x, from\_y)** to one of its adjacent empty neighbours with coordinates **(to\_x, to\_y)**. Please note that **(from\_x, from\_y)** should be one of the ends of the snake.
- **NEW x y** : Create a new snake whose head/tail will be at an empty cell with coordinates **(x, y)**.
- **EXIT** : Exit the game.

Please note that we follow **1-based indexing** in the entire problem.

Similarly, judge's move can also be one of the above kinds. Other than the above moves, judge will have one more move, called **FREEZE** move. During this move, the judge will be freezed and won't take its' turn of extending or creating snake. This move will be represented by **FREEZE turns**, where **turns** denotes the number of turns for which judge will be freezed.

Note that if in its' turn, judge made **FREEZE turns** move, then in its' next move, it will have to make **FREEZE turns-1** move if **turns > 1**.
Please see the second example for better understanding.

### Constraints

- **200 ≤ n, m ≤ 300** for type 1 test files.
- **500 ≤ n, m ≤ 600** for type 2 test files.

###  Scoring 

If your snake is of length **L**, then the score you get for this snake will be **L \* floor(sqrt(L))**. Total score will be sum of scores of each snake you create. Also, you will be paying a penalty of **floor(sqrt(L))** for each dead snake. Note that the last snake created by you will also be considered dead at the end of the game.

In summary, for each snake of length **L**, you will get a score of **(L - 1) \* floor(sqrt(L))**

Your total score for the problem will be the sum of scores on all the test cases.

### Example 1

<pre>
2 2 0(judge printed n, m and number of blocked cells)
NEW 1 1 (your move to create a new snake)
NEW 1 2 (judge's move to create a new snake)
MOVE 1 1 2 1 (your move to extend the snake)
MOVE 1 2 2 2 (judge's move to extend the snake)
EXIT (your move to exit the game as there is no empty cell)

Your score for this will be = 2 * floor(sqrt(2)) - floor(sqrt(2)) = floor(sqrt(2)) = 1;
</pre>### Example 2

<pre>

3 3 0 (judge printed n, m and number of blocked cells)
NEW 2 2 (your move to create a new snake)
FREEZE 2 (judge freezed for 2 turns)
MOVE 2 2 3 2 (your move to extend the snake)
FREEZE 1 (judge is freezed for 1 turn, i.e. it is allowed to create/extend a snake in the next turn.)
MOVE 3 2 3 3 (your move to extend the snake)
NEW 2 3 (judge created new snake)
MOVE 2 2 1 2 (your move to extend the snake)
FREEZE 1  (judge is freezed for 1 turn)
MOVE 1 2 1 1 (your move to extend the snake)
MOVE 2 3 1 3 (judge's move to extend the snake)
MOVE 1 1 2 1 (your move to extend the snake)
NEW 3 1 (judge's move to create a new snake)
EXIT (your move to exit the game, as there are no empty cells to continue the game.)

You have created one snake of length 6. So your score is 6 * sqrt(6) - sqrt(6) = 5 * floor(sqrt(6)) = 5 * 2 = 10.

Judge created two snakes of length 2 and 1.
</pre>### Example 3

<pre>
3 4 2
1 1
3 4
NEW 1 2
NEW 2 4
MOVE 1 2 1 3
MOVE 2 4 2 3
MOVE 1 3 1 4
MOVE 2 3 3 3
NEW 3 2
NEW 2 1
MOVE 3 2 2 2
MOVE 2 1 3 1
EXIT
</pre>###  Test data generation 

There will be two types of the test files.

- **n, m are randomly generated number from 200 to 300.**
- **n, m are randomly generated number from 500 to 600.**

There will be 10 test files of each type. During the contest, you will be shown the score for only two test file of each type.

The grid will initially be empty. Each of the cells has 1/25 probability of being marked as blocked.

The judge will choose its' move according to following strategy:

The judge maintains the head and the tail of the snake.

- If its last move was **FREEZE turns** move such that **turns > 1**, then the current move will be **FREEZE turns'** where **turns' = turns - 1**.
- Otherwise, with the probability of 1/500, the judge will make a freezing move, the number of turns of freezing move will be a random number between **1** and **50**.
- If it is the beginning of the game, judge will start a new snake.
- If the judge is unable to extend its' current snake, it will create a new snake by choosing one of the empty cells of the grid randomly as the head/tail of the new snake.
- Otherwise, with the probability **99/100**, the judge will try to extend its' current snake by extending it from both head and tail. It will consider all the empty adjacent cells of both head and tail. Judge will select one of these cells uniformly randomly to extend its snake.
- With the remaining **1/100** probability, the judge will create a new snake.
