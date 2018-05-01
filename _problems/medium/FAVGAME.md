---
category_name: medium
problem_code: FAVGAME
problem_name: 'Completing favorite game'
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
problem_tester: xcwgf666
date_added: 26-08-2016
tags:
    - alex_2oo8
    - dfs
    - dp
    - dynamic
    - march17
    - medium
    - tree
editorial_url: 'https://discuss.codechef.com/problems/FAVGAME'
time:
    view_start_date: 1489397400
    submit_start_date: 1489397400
    visible_start_date: 1489397400
    end_date: 1735669800
    current: 1493557649
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH17/mandarin/FAVGAME.pdf?v=1), [Russian](http://www.codechef.com/download/translated/MARCH17/russian/FAVGAME.pdf?v=1) and [Vietnamese](http://www.codechef.com/download/translated/MARCH17/vietnamese/FAVGAME.pdf?v=1) as well.

Chef has a nice job. Actually he doesn't even remember what he is supposed to do there, because he just plays video-games all the time, exactly **h** hours every working day!

Recently he got bored of just randomly playing video-games and decided to complete all the levels of his favorite Game as fast as possible.

The Game consists of **n** levels numbered with integers from **1** to **n**. After completing every level, some **small** number of new levels is unlocked. The structure of the Game levels is a tree with the root in level **1**, i.e. every level (except for **1**) has a unique level that unlocks it and level **1** is the only level that is considered unlocked at the very beginning. Chef has completed his favorite Game lots of times, so he knows that he needs exactly **ti** hours to complete level **i**. Due to specifics of the Game every level should be completed entirely within one working day, i.e. Chef **cannot** start a level on Thursday, and finish it Friday morning.

Overall the game-play proceeds as follows:

1. There is a stack **S** that initially contains only the level **1**
2. Chef pops the topmost level out of the stack. Let's call this level **x**
3. Chef spends **tx** hours to complete level **x**. Note that he doesn't want to stay at work longer than for **h** hours, so if there is not enough time left today Chef will complete level **x** the next working day morning.
4. After completing level **x** some **mx** new levels get unlocked
5. Chef places all the **mx** unlocked levels on the top of the stack **S** in an arbitrary order, i.e. he is free to choose any order he likes
6. If stack **S** is empty, the Game is considered completed, otherwise Chef goes back to the step **2**

Can you help Chef figure out the minimum number of working days necessary to complete the Game?

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

For each test case, the first line of input contains two integers **n** and **h**.

The next line contains **n** space-separated integers ― **t1**, **t2**, **...**, **tn**.

The following **n** lines describe the structure of Game's levels: the **x**-th of them contains an integer **mx** followed by **mx** integers ― the levels that get unlocked after completing level **x**.

### Output

For each test case, output a single integer ― the minimum number of working days necessary to complete the Game.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **n** ≤ **1000**
- **1** ≤ **ti** ≤ **h** ≤ **24**
- 0 ≤ **mx** ≤ **10**
- It is guaranteed that the structure of the Game levels is a tree, i.e. it is possible to unlock all **n** levels and every level (except for **1**) has exactly one other level that unlocks it.

### Subtasks

- Subtask #1: **n ≤ 9** (7 points)
- Subtask #2: **mx ≤ 2** (20 points)
- Subtask #3: **n ≤ 100; h ≤ 8** (27 points)
- Subtask #4: Original constraints (46 points)

### Example

<pre><b>Input:</b>
<tt>2
5 24
13 24 22 12 16
1 3
0
2 2 5
0
1 4
10 8
1 4 3 1 7 3 2 2 4 4
3 2 5 10
2 3 4
0
0
1 6
3 7 8 9
0
0
0
0</tt>

<b>Output:</b>
<tt>5
4</tt>

</pre>### Explanation

**Example case 1:** Chef has to complete every level during separate working days, and so to complete all **5** levels he needs **5** working days.

**Example case 2:** Chef will complete the Game if he will always push unlocked levels into stack starting with the largest indexed one and ending with the smallest indexed one. That is, after Chef completes level **1** he first pushes level **10** (**S = \[10\]**), then level **5** (**S = \[10, 5\]**) and then level **2** (**S = \[10, 5, 2\]**). So the second level Chef will play is **2**.
