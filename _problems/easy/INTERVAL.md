---
category_name: easy
problem_code: INTERVAL
problem_name: 'Interval Game'
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
problem_author: kingofnumbers
problem_tester: mgch
date_added: 8-06-2016
tags:
    - kingofnumbers
time:
    view_start_date: 1487496600
    submit_start_date: 1487496600
    visible_start_date: 1487496600
    end_date: 1735669800
    current: 1493558154
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB17/mandarin/INTERVAL.pdf), [Russian](http://www.codechef.com/download/translated/FEB17/russian/INTERVAL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB17/vietnamese/INTERVAL.pdf) as well.

Chef and his brother Chefu are playing a game. The game consist of two sequences of integers **A** of length **N** and **B** of length **M**, and it will last for exactly **M** turns, Chef will play in odd turns whereas Chefu will play in even turns (turns and sequences are 1-based).

In the **i**-th turn, the corresponding player should select an interval (continuous subsegment) of sequence **A** of length **Bi** that is **strictly** inside the interval selected in previous turn, i.e. if the interval in previous turn was **\[l,r\]** then if the interval in current turn is **\[u,v\]** then it should satisfy **l , except in the first turn where the player can select any interval of length **B1**.**

Initially the score of the game is 0. If it was **Chef**'s turn then we **add** to the score of the game points equal to sum of integers of the selected interval of sequence **A**. If it was **Chefu**'s turn then we **subtract** from the score of the game points equal to sum of integers of the selected interval of sequence **A**.

Chef wants to maximize the score of the game in the end while Chefu want to minimize it. Can you find out the score of the game in the end given that both Chef and Chefu are playing optimally.

### Input

The first line contains an integer **T** denoting the number of test-cases. Description of **T** test cases follow.

First line of each test case contains two space separated integers **N** and **M**, denoting the length of the sequence and the number of turns for which the game will last, respectively.

Second line of each test case contains **N** space separated integers denoting the sequence **A**

Third line of each test case contains **M** space separated integers denoting the sequence **B**

### Output

For each test case, output a single integer in a separate line corresponding to the score of the game at the end of the game.

### Constraints

- **1** ≤ **T** ≤ **10,000**
- **1** ≤ sum of **N** in all test-cases ≤ **300,000**
- **1** ≤ **Ai** ≤ **1,000,000,000**
- **1** ≤ **M** ≤ **200**
- **1** ≤ **Bi** ≤ **N**
- For each valid **i**: **Bi+1** + 2 ≤ **Bi**

### Subtasks

- **Subtask #1 (20 points)**: sum of **N** in all test-cases ≤ **400**
- **Subtask #2 (20 points)**: **M = 2**
- **Subtask #3 (60 points**: No additional constraints

### Example

<pre><b>Input:</b>
<tt>1
8 3
3 7 5 4 9 6 1 3
6 3 1</tt>

<b>Output:</b>
<tt>20</tt>

</pre>### Explanation
**Example case 1.** Chef chooses the interval **\[1, 6\]** (i.e. **(3, 7, 5, 4, 9, 6)**). The score now is 34 points.

In the next turn, Chefu chooses the interval **\[3, 5\]** (i.e. **(5, 4, 9)**). The score now is 34 - 18 = 16 points.

In the next turn, Chef chooses the interval **\[4, 4\]** (i.e. **(4)**). So finally score of the game is 16 + 4 =20.

This is the score of the game when both Chef and Chefu play optimally.
