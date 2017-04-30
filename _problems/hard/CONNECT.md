---
category_name: hard
problem_code: CONNECT
problem_name: 'Find a special connected block'
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
max_timelimit: '7'
source_sizelimit: '50000'
problem_author: shangjingbo
problem_tester: laycurse
date_added: 28-02-2012
tags:
    - april12
    - hard
    - shangjingbo
editorial_url: 'http://discuss.codechef.com/problems/CONNECT'
time:
    view_start_date: 1334137565
    submit_start_date: 1334137565
    visible_start_date: 1334136600
    end_date: 1735669800
    current: 1493556662
layout: problem
---
All submissions for this problem are available.Given an **n**\***m** board with a number between -1 and **n**\***m** in every entries.

And an **n**\***m** matrix **M** is also given, where **M**i,j is the cost of selecting the _(i,j)_ entry of the given board.

Your task is to find a connected block (which means these entries can reach each other by just go up, down, left and right without going out the block) in the board that contains at least **K** distinct positive numbers without any -1, and it must have minimum total cost for selecting these entries. Output the minimum total cost.

### Input

First line consists of three integers, **n**, **m**, **K** (1 <= **n**, **m** <= 15, 1 <= **K** <= 7).

The followings are two **n**\***m** matrices, the first denotes the numbers on the board and the second denotes the cost of every entry.

Namely, the first **n** lines contain **m** integers, where the _j_th number in _i_th line denotes the number on the entry (_i_,_j_) of the board. These integers are in \[-1, **n**\***m**\].

Next **n** lines contain **m** integers too. The _j_th number in _i_th line denotes the cost of selecting the entry (_i_,_j_) of the board. These integers are in \[1, 100000\].

### Output

Only one line contains the minimum cost to finish the task. If the task is impossible, output -1 please.

### Example

```

<b>Input:</b>
3 3 3
0 0 1 
2 3 3 
-1 2 1 
3 1 5 
4 10 1 
9 3 4 
<b>Output:</b>
8

```