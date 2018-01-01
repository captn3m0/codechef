---
category_name: easy
problem_code: BWCELL
problem_name: 'Black And White Cells'
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
problem_author: ma5termind
problem_tester: pushkarmishra
date_added: 4-11-2015
tags:
    - ma5termind
editorial_url: 'http://discuss.codechef.com/problems/BWCELL'
time:
    view_start_date: 1448785800
    submit_start_date: 1448785800
    visible_start_date: 1448785800
    end_date: 1735669800
    current: 1493558111
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME30/mandarin/BWCELL.pdf), [Russian](http://www.codechef.com/download/translated/LTIME30/russian/BWCELL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME30/vietnamese/BWCELL.pdf)

Chef and his best friend Aleksa are into mathematical games these days. Today, they have some **( ≥ 0 )** black cells represented as **B**, and a white cell represented as **W**, lying randomly in a straight line. They have decided to play with these cells. In a move, a player chooses some **( > 0 )** black cells lying on any one side of the white cell and remove them. It should be noted that a player is not allowed to choose black cells from both side of the given white cell. Both the players alternate their moves, and play optimally. The player who is unable to move in his respective turn will lose the game.

Aleksa, being a girl, has a habit of playing first. But Chef is fairly smart himself, and will not play the game if he is going to lose it. Therefore, he wants to know the winner beforehand. Can you tell him who is going to win the game for the given configuration of cells?

### Input

 First line of input contains a single integer **T** denoting the number of test cases. First and the only line of each test case contains a string **S** consisting of the characters **'B'** and **'W'**, denoting black and white cells, respectively.

### Output

For each test case, output **"Chef"** if chef wins the game for the given configuration. Else print **"Aleksa"**. (quotes for clarity only).

### Constraints

**1. 1 ≤ T ≤ 10** **1. 1 ≤ |S| ≤ 10000** **1. S contains exactly 1 white cell.** 
### Scoring

**1. Subtask 1: 1 ≤ T ≤ 10, 1 ≤ |S| ≤ 10 : ( 30 pts )** **1. Subtask 2: 1 ≤ T ≤ 10, 1 ≤ |S| ≤ 100 : ( 30 pts )** **1. Subtask 3: 1 ≤ T ≤ 10, 1 ≤ |S| ≤ 10000 : ( 40 pts )** 
### Example

<pre>
<b>Input</b>
3
W
BW
BWBB

<b>Output</b>
Chef
Aleksa
Aleksa

</pre>###  Explanation
- **Test 1 :** Aleksa cannot make a move in her first turn as there is no black cell in the given configuration.
- **Test 2 :** Aleksa can remove 1 black cell lying on the left of white cell in her turn. But then, Chef cannot make a move in his turn as there will be no black cells left.
- **Test 3 :** Figure out yourself.
