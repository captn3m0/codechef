---
category_name: hard
problem_code: UNGAME
problem_name: 'Unusual game'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: alex_2oo8
problem_tester: kingofnumbers
date_added: 21-01-2017
tags:
    - alex_2oo8
    - cook78
    - dynamic
    - fractals
    - math
    - medium
editorial_url: 'https://discuss.codechef.com/problems/UNGAME'
time:
    view_start_date: 1485109800
    submit_start_date: 1485109800
    visible_start_date: 1485109800
    end_date: 1735669800
    current: 1493556895
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK78/mandarin/UNGAME.pdf), [Russian](http://www.codechef.com/download/translated/COOK78/russian/UNGAME.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK78/vietnamese/UNGAME.pdf) as well.

Recently Chef invented a two player game. The game is played on a horizontal strip consisting of **n** cells that are numbered from left to right with consecutive integers from **1** to **n**. At the beginning of the game, a pawn is placed at the cell numbered **x**. The players make moves alternately, i.e. the first player makes all odd numbered moves (1st, 3rd, 5th and so on) and the second player all even numbered moves (2nd, 4th, 6th and so on). During the **k**-th move the player should move the pawn either exactly **k** cells to the left or exactly **k** cells to the right (provided the pawn doesn't land outside the strip). For example, in the **k**-th move, if the pawn is located at cell **p** before the move, it can be moved to either **(p - k)** or **(p + k)** if the appropriate cells are part of the strip . The player who is not able to make a move (i.e. both the above choices lead to cells outside of the strip) loses the game. Assume that both the players play optimally.

Before trying to play the game himself, Chef wants to understand the game more. So, he wants to find the outcome of **m** such games, where in the **i**-th game the initial location of pawn is **xi**. Can you please help Chef in this?

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

For each test case, the first line of input contains two space separated integers ― **n** and **m**.

The second line contains **m** space separated integers ― **x1**, **x2**, ..., **xm**.

### Output

For each test case, output a single line containing **m** space separated integers ― **i**-th of them should be an integer either **1** or **2**, corresponding to the player that will win if the game starts with the pawn located at cell **xi**.

### Constraints

- **1** ≤ **T** ≤ **300**
- **1** ≤ the sum of **n** over all test cases ≤ **106**
- **1** ≤ **m** ≤ **50**
- **1** ≤ **xi** ≤ **n**

### Example

<pre><b>Input:</b>
2
3 2
2 3
4 2
2 4

<b>Output:</b>
2 1
1 1

</pre>### Explanation
**Example case 1.**

There are three cells in the horizontal strip.

If the pawn is initially located at cell **2**, during the first move it will be moved to either **1** or **3**. The second player can later move the pawn to cell **3** or **1**, respectively. Now, the first player has to move the pawn to three cells to the left or to the right, both of which end up moving the pawn outside the strip, so he is unable to make a move and will lose the game in this case. Hence, the second player wins the game.

If the pawn is initially located at cell **3**, the first player will have to move to cell **2** during first move and then the second player will be have no available move that can still keep the pawn on the strip, thus the second player loses the game. So, the first player is the winner in this case.
