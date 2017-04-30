---
category_name: medium
problem_code: CAOS3
problem_name: 'CAO Stage-3'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kaushik_iska
problem_tester: shangjingbo
date_added: 17-07-2013
tags:
    - dynamic
    - easy
    - kaushik_iska
    - oct13
    - sprague
editorial_url: 'http://discuss.codechef.com/problems/CAOS3'
time:
    view_start_date: 1381743000
    submit_start_date: 1381743000
    visible_start_date: 1381743000
    end_date: 1735669800
    current: 1493557499
layout: problem
---
All submissions for this problem are available.###  Read problems statements in Mandarin Chinese [here](http://www.codechef.com/download/translated/OCT13/mandarin/CAOS3.pdf )

### Problem Statement

**Past**

In the year 2048, the Virtual Reality Massively Multiplayer Online Role-Playing Game (VRMMORPG), **Code Art Online (CAO)**, is released. With the Chef Gear, a virtual reality helmet that stimulates the user's five senses via their brain, players can experience and control their in-game characters with their minds.

On August 2nd, 2048, all the players log in for the first time, and subsequently discover that they are unable to log out. They are then informed by Code Master, the creator of CAO, that if they wish to be free, they must reach the third stage game.

Kirito is a known star player of CAO. You are to help him log out.

**Present**

_Stage 3_

A map is described by a 2D grid of cells. Each cell is either a **\#** or a **^**. **\#** denotes a wall. A monster exists in a cell, if the cell is not a wall and the cell is a **centre of Prime-Cross (CPC)**.

A cell **C** is said to be a **CPC** if it satisfies the following property. Let **L** be the number of contiguous **^** to the left of **C**, in the same row as **C**, **R** be the number of contiguous **^** to the right of **C**, in the same row as **C**, **T** be the number of contiguous **^** to the top of **C**, in the same column as **C**, **B** be the number of contiguous **^** to the bottom of **C**, in the same column as **C**, if there exists a prime number **P**, where **P ≤ minimum of \[L, R, T, B\]**, then **C** is said to be a **CPC**.

Kirito and Asuna decide to play the following game. Players alternate their turns. Asuna gets the first turn, Kirito being a gentleman allows ladies to have the first move. In a turn, players have to choose a cell where a monster resides and transform the cell into a volcano. The volcano immediately erupts filling all the cells in the same row and also all the cells in the same column with lava. Lava stops flowing past the cells which already have lava in them. The player who makes the last move wins.

Given that Kirito and Asuna both play optimally, you are to say who wins the game.

**Future**

Have fun solving the other tasks :-)

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. Each case start with a line containing two space separated integers **R, C**, denoting the number of rows and columns in the map respectively. Followed by **R** lines containing **C** characters each, describing the map.

### Output

For each test case, output a single line containing the the name of the winner. I.e. **"Kirito" or "Asuna"**.

### Constraints

- 1 ≤ T ≤ 10
- 1 ≤ R ≤ 20
- 1 ≤ C ≤ 20

### Example

```

<b>Input:</b>
1
7 7
^#^#^^^
^#^^^#^
^#^^^^^
^^^#^^^
^^^^^^^
^^^^^^^
^^^^^^^

<b>Output:</b>
Asuna

```
### Explanation

This is the intial configuration, you can see the positions of monsters at CPC's.

![](//www.codechef.com/download/caos3-1.png)

Asuna can win in 1 move if she decides to place the volcano in **(5, 5)** hence **Asuna wins in the example**. But for the sake of analysing a couple more moves lets assume she places the volcano on any of the other two monsters.
It wouldn't make a difference as it would kill 2 monsters in any case. This is the first move Asuna places the volcano at **(3, 5)**, assume without any loss of generality.

![](//www.codechef.com/download/caos3-2.png)

Now, in this turn Kirito simply places the volcano on the remaining monster, in this case at **(5, 3)**, it kills the monster. Asuna can't place volcano at anyother position. Hence, Kirito wins.

![](//www.codechef.com/download/caos3-3.png)