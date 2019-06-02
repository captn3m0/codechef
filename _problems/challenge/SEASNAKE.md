---
category_name: challenge
problem_code: SEASNAKE
problem_name: 'Sereja and Snake'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
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
    - CLOJ
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: xcwgf666
date_added: 8-08-2013
tags:
    - challenge
    - sept13
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEASNAKE'
time:
    view_start_date: 1379324373
    submit_start_date: 1379324373
    visible_start_date: 1379323800
    end_date: 1735669800
    current: 1525199673
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.This problem is about the classical video game, called Snake.
We ask you to solve the simplified version of the game.

The rules are quite simple and natural, but they will be described here formally.

You are given a rectangular field of **N** rows and **M** columns. Cells in this field are identified by their coordinates.
(**X**, **Y**) is co-ordinate of a cell in this field if **0 ≤ X ≤ N-1** and **0 ≤ Y ≤ M-1**, where **X** is row number of the cell and **Y** is column number of the cell.

There is a snake in the field. Initially it consists of a single cell, but it can grow. A Snake can be described by the sequence of distinct cells it occupies in the field, **(X1, Y1), (X2, Y2) ... (XK, YK)** . The first cell of this sequence is called the *head* and the last cell is called its *tail*. Initially, the snake consists of a single cell (0, 0), and this cell is the head as well as the tail at the same time.

The snake can make a move in four directions. The head cell (**X1**, **Y1**) can be moved to one of the cells ((**X1**-1+**N**)%**N**, **Y1**), ((**X1**+1)%**N**, **Y1**),
(**X1**, (**Y1**-1+**M**)%**M**) or (**X1**, (**Y1**+1)%**M**), i.e. to one of the four neighbours. Let the coordinate of the new cell to which snake's head moves be **(Xnew, Ynew)**. Then, there are two cases:

**1**) The new cell **(Xnew, Ynew)** contains an apple. In this case, the snake *eats* the apple, and the sequence describing the new state of snake becomes **(Xnew, Ynew), (X1, Y1), (X2, Y2) ... (XK, YK)** . That is, the new cell is appended to the beginning of the sequence by shifting all previous elements to the right. Obviously, the length of the snake will be increased by one after this move. Then, the apple is removed from this cell, and a new apple appears somewhere else.

**2**) Otherwise, *first*, the length of snake is shortened by 1 by removing the tail. Then the new cell is appended to the beginning of the sequence, just like in previous case. In this case, the sequence describing the new state of snake becomes **(Xnew, Ynew), (X1, Y1), (X2, Y2) ... (XK-1, YK-1)** . The only difference from the previous case is that the tail cell will disappear, so the number of cells will not change. Note that **(Xnew, Ynew)** can be same as **(XK, YK)** in this case without causing any conflict. **(XK-1, YK-1)** will become the new tail cell \[unless **K=1** in which case **(Xnew, Ynew)** will be the head as well as the tail\].

**N\*M-1** apples will appear in the field. You are given the sequence of **N\*M-1** cells (not necessarily distinct). Initially, there will be an apple in the first cell from the sequence. When the snake eats it, a new apple appears in the second cell from the sequence, and so on. Your goal here is to make the snake eat all the **N\*M-1** apples in *minimal* number of moves.

It is guaranteed that the first apple will not appear in the cell (0, 0). It is also guaranteed that any two consecutive cells from the sequence will not be the same. You can also assume that **N\*M** is even.

**Note**

- You should move your snake in such a way that at all times, the sequence describing the snake has distinct elements.
- The game is different from conventional video game because the new apple can arrive on a cell already occupied by the snake. This case is no different and the snake must *eat* this apple as well by moving its *head* to location of the apple.

### Input

The first line of the input consists of two numbers - **N** and **M**.

Then, **N\*M-1** lines follow, the i-th such line consists of two integers - the coordinates of the cell where the **i**-th apple will appear.

### Output

The first line of the output should contain **Q** - the number of moves. **Q** should not exceed **900000**.

Then, **Q** lines should follow. The **i**-th number should be equal to:

0 - in case you move the head of the snake to the cell ((**X1**-1+**N**)%**N**, **Y1**)

**1** - in case you move the head of the snake to the cell ((**X1**+1)%**N**, **Y1**)

**2** - in case you move the head of the snake to the cell (**X1**, (**Y1**+**M**-1)%**M**)

**3** - in case you move the head of the snake to the cell (**X1**, (**Y1**+1)%**M**)

### Constraints

- 1 <= **N** <= 30
- 1 <= **M** <= 30

### Example

<pre><b>Input:</b>
2 2
1 1
1 0
0 1

<b>Output:</b>
5
3 1 3 1 3

</pre>
### Scoring & the test data generation

Your score is the number of the moves made, you should minimise it.

The sequence of the cells is generated randomly and the cells are distributed uniformly.
