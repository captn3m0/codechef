---
category_name: medium
problem_code: GAMSTICK
problem_name: 'Game on Stick'
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
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: melnik
problem_tester: kingofnumbers
date_added: 17-08-2017
tags:
    - cook85
    - game
    - medium
    - melnik
editorial_url: 'https://discuss.codechef.com/problems/GAMSTICK'
time:
    view_start_date: 1503253800
    submit_start_date: 1503253800
    visible_start_date: 1503253800
    end_date: 1735669800
    current: 1514816322
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/COOK85/mandarin/GAMSTICK.pdf), [russian](http://www.codechef.com/download/translated/COOK85/russian/GAMSTICK.pdf) and [vietnamese](http://www.codechef.com/download/translated/COOK85/vietnamese/GAMSTICK.pdf) as well.

One free afternoon, Chef found an old board game in his kitchen. He decided to invite his friends Miron and Slava to come play it with him.

The board is a rectangular grid of size  **2 × N**. Initially, Miron and Slava each put their chips at a location **(x1,y1 )** and **(x2,y2 )** respectively. The game then proceeds as follows :

- Each player moves their chip in turns.
- In each turn, a player can move his chip to an adjacent cell that has not been visited by the other player before.
- Two cells are adjacent if they share a side
- A player can also skip his turn
- The cell that is initially occupied by a particular player's chip is considered visited by him

 The outcome of the game is decided as follows :

- If a player manages to visit strictly more than half the total number of cells (i.e. visited at least **N**+1 cells), he immediately **wins** and the other player loses.
- if the game continued for more than **10100** turns without any player declared a winner yet then it becomes a **draw**.

Given that both players move optimally and Miron starts first, can you help Chef predict the winner of the game?

### Input

 The first line contains a single integer **T**, the number of test cases. Each test case is described by a single line containing five space-separated integers **N**, **x1**, **y1**, **x2**, **y2**.

### Output

For each test case, output a single line with string **Miron**, **Slava** or **Draw**, denoting the answer to the problem.

### Constraints

- **1** ≤ **T** ≤  **105**
- **1** ≤ **N** ≤  **1018**
- **1** ≤ **x1**, **x2** ≤ **2**
- **1** ≤ **y1**, **y2** ≤ **N**
- Cells (**x1**, **y1**) and (**x2**, **y2**) are different.

### Example

<pre><b>Input:</b>
4
5 1 1 2 3
1 1 1 2 1
3 1 1 2 3
4 1 2 1 4
<b>Output:</b>
Slava
Draw
Draw
Miron

</pre>