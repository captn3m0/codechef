---
category_name: easy
problem_code: DUMPLING
problem_name: 'Greatest Dumpling Fight'
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
problem_author: rosyish
problem_tester: laycurse
date_added: 3-03-2012
tags:
    - april12
    - easy
    - rosyish
editorial_url: 'http://discuss.codechef.com/problems/DUMPLING'
time:
    view_start_date: 1334137590
    submit_start_date: 1334137590
    visible_start_date: 1334136600
    end_date: 1735669800
    current: 1493558141
layout: problem
---
All submissions for this problem are available.Chef Shifu and Chef Po are participating in the Greatest Dumpling Fight of 2012. Of course, Masterchef Oogway has formed the rules of the fight.

There is a long horizontal rope of infinite length with a center point P. Initially both Chef Shifu and Chef Po will stand on the center P of the rope facing each other. Don't worry, the rope is thick enough to hold Chef Po and Chef Shifu at the same place and at the same time. Chef Shifu can jump either **A** or **B** units to the left or right in one move. Chef Po can jump either **C** or **D** units to the left or right in one move.

Masterchef Oogway wants to place exactly one dumpling on the rope such that both Chef Shifu and Chef Po will be able to reach it independently in one or more moves. Also the dumpling can be placed at most **K** units away from the center of the rope. Masterchef Oogway will let you watch the fight if you can decide the number of possible positions on the rope to place the dumpling.

### Input

First line contains **T**, the number of test cases. Each of the next **T** lines contains five positive integers, **A B C D K**.

1&lt;=**T**&lt;=1000 1&lt;=**A**,**B**,**C**,**D**,**K**&lt;=10^18

### Output

For each test case, output on a newline, the number of possible positions to place the dumpling on the rope.

### Example

<pre>
<b>Input:</b>
3
2 4 3 6 7
1 2 4 5 1
10 12 3 9 16

<b>Output:</b>
3
3
5

<b>Explanation:</b>

For the second case,

Chef Po jumps 2 units to the right and then 1 unit to the left.
Chef Shifu jumps 5 units to the right and then 4 units to the left 
to reach 1 unit right from the center.

Chef Po jumps 2 units to the left and then 1 unit to the right.
Chef Shifu jumps 5 units to the left and then 4 units to the right 
to reach 1 unit left from the center.

Dumpling can also be placed at the center as a chef can reach it in 2 moves.
Thus, there are three different positions at most 1 unit away from the center 
that are reachable by both the chefs in one or more moves.


</pre>