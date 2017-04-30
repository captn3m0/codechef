---
category_name: easy
problem_code: DRGHTS
problem_name: Draughts
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
problem_author: sereja
problem_tester: gerald
date_added: 15-06-2013
tags:
    - easy
    - feb14
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/DRGHTS'
time:
    view_start_date: 1392629400
    submit_start_date: 1392629400
    visible_start_date: 1392629400
    end_date: 1735669800
    current: 1493558141
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB14/mandarin/DRGHTS.pdf) and [Russian](http://www.codechef.com/download/translated/FEB14/russian/DRGHTS.pdf).

Furik and Rubik have come to the sanatorium, which consists of **N** rooms and **M** passageways. Each passageway connects two rooms, and there is at most one way to move between each pair of rooms. Some rooms have opened windows. There is a draught between two different rooms if both rooms have opened windows, and are connected with each other by some way.

Furik is interested in one question: what is the number of pairs of rooms, which have a draught between them. Rubik wants to know what is the number of the rooms, which have at least one draught passing through the room.

### Input

The first line contains two space-separated integers **N** and **M**. The next line contains **N** integers, where the **i**th number is equal to **1**, if the window in the room number **i** is opened, otherwise . Then the next **M** lines contain pairs of integers, where the **i**th pair denotes the numbers of the connected rooms by **i**th passageway. Consider that the rooms are numerated by different integers from **1** to **N**.

### Output

In a single line print two numbers, denoting the answers to Furik and Rubik questions.

### Constraints

- **1** ≤ **N** ≤ **50000 (5 × 104)**
- ≤ **M** ≤ **N − 1**
- There is at most one way to move between each pair of rooms, that is, the given graph is a forest

### Example

```

<b>Input:</b>
6 5
1 1 1 1 1 0
1 2
1 6
1 5
2 4
4 3

<b>Output:</b>
10 5

<b>Input:</b>
2 1
1 0
1 2

<b>Output:</b>
0 0

```