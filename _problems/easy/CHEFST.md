---
category_name: easy
problem_code: CHEFST
problem_name: 'Chef and the stones'
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
problem_author: tapasjain01
problem_tester: xcwgf666
date_added: 31-07-2015
tags:
    - ad
    - arithmetic
    - cakewalk
    - dec15
    - greedy
    - tapasjain01
editorial_url: 'http://discuss.codechef.com/problems/CHEFST'
time:
    view_start_date: 1450085400
    submit_start_date: 1450085400
    visible_start_date: 1450085400
    end_date: 1735669800
    current: 1493558121
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC15/mandarin/CHEFST.pdf), [Russian](http://www.codechef.com/download/translated/DEC15/russian/CHEFST.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC15/vietnamese/CHEFST.pdf) as well.

Chef has two piles of stones with him, one has **n1** stones and the other has **n2** stones. Fired up by boredom, he invented a game with the two piles.

Before the start of the game Chef chooses an integer **m**.

In the **j**-th move:

- He chooses a number **xj** such that **1 ≤ xj ≤ m**, and removes **xj** stones from both the piles (this is only possible when both the piles have ≥ **xj** stones).
- The number chosen must be unique over all the moves in the game. That is, for all **k j ≠ xk**.
 
 The game stops when Chef is unable to make any more moves. Chef wants to make the moves in such a way that the sum of the number of stones remaining in the two piles is minimized. Please help Chef find this.

### Input

- The first line of input contains an integer **T** denoting the number of test cases.
- Each test case consists of 1 line with three integers — **n1, n2** and **m** — separated by single spaces.
 
### Output

For each test case, output a single line containing the minimum sum of the number of stones of two piles.

### Constraints

**Subtask 1** : (5 pts)

- **1** ≤ **T** ≤ **100**
- 0 ≤ **m** ≤ **18**
- 0 ≤ **n1, n2** ≤ **100**

**Subtask 2** : (25 pts)

- **1** ≤ **T** ≤ **1000**
- 0 ≤ **m** ≤ **10000**
- 0 ≤ **n1, n2** ≤ **10000**

**Subtask 3** : (70 pts)

- **1** ≤ **T** ≤ **105**
- 0 ≤ **m** ≤ **109**
- 0 ≤ **n1, n2** ≤ **1018**

### Example

<pre><b>Input:</b>
<tt>3
1 1 1
1 2 1
4 5 2</tt>

<b>Output:</b>
<tt>0
1
3</tt>
</pre>
### Explanation

**Example case 1.** : Remove 1 stone from each of the piles. Now 0 stones are remaining, so chef cannot remove any more stones from the piles. Hence, answer is 0+0 = 0

**Example case 2.** : Again, remove 1 stone from both the piles to get (0,1) stones. Now chef cannot remove any more stones from pile 1, so he stops. Hence, answer is 0+1 = 1.

**Example case 3.** : First remove 1 stone from both the piles to get (3,4) stones. Now, remove 2 stones from both the piles so that (1,2) stones are remaining. Now chef cannot remove any more stones owing to the condition that he cannot remove the same number of stones twice. So, the answer is 1+2 = 3.
