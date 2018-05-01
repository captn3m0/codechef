---
category_name: hard
problem_code: KNGHTMOV
problem_name: 'Knight Moving'
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
max_timelimit: '9'
source_sizelimit: '50000'
problem_author: anhdq
problem_tester: laycurse
date_added: 20-07-2012
tags:
    - anhdq
    - dynamic
    - gauss
    - number
    - sep12
editorial_url: 'http://discuss.codechef.com/problems/KNGHTMOV'
time:
    view_start_date: 1347355996
    submit_start_date: 1347355996
    visible_start_date: 1347355800
    end_date: 1735669800
    current: 1493556738
layout: problem
---
All submissions for this problem are available.Consider an infinitely large chess table. From the cell (0, 0), our knight has to move to the cell (**X**, **Y**) by the rule: our knight could only move from a cell (**u**, **v**) to the cell (**u**+**AX**, **v**+**AY**) or (**u**+**BX**, **v**+**BY**) in one move. Note that it may be different from ordinary knight's move of chess.

In addition, there is **K** blocked cell(s) on the table where the knight could not move on.

Your task is to count how many distinct ways the knight could complete his mission. Two ways are called "distinct" if and only if they have different numbers of steps or there exists **i** such that they are in different cells after **i**-th step. Note that our knight may continue to move after he reaches the cell (**X**, **Y**).

### Input

The first line contains an integer **T**, denoting the number of test cases. Each test case is described as follows:

- The first line contains 3 integer **X**, **Y**, **K**.
- The second line contains 4 integers **AX**, **AY**, **BX**, **BY**.
- The third line contains **K** pair(s) of integers, each represents co-ordinate of a blocked cell. This line does not exist if **K** = 0.

### Output

For each test case, output on a line the number of ways found modulo 1000000007 (109+7). If there are infinitely many ways, then output -1 instead.

### Constraints

1 ≤ **T** ≤ 5
0 ≤ **K** ≤ 15
The absolute values of all other input values are at most 500.
(0, 0) is not a blocked cell.
(**X**, **Y**) is not a blocked cell.

### Example

<pre>
<b>Input:</b>
3
3 3 0
1 2 2 1
9 9 2
1 2 2 1
1 2 6 6
1 1 0
0 0 0 0

<b>Output:</b>
2
4
0


</pre>**Explanations:**

In the first and second examples, our knight's move is the similar to ordinary knight's, but only 2 directions are allowed. In the first example, there are 2 ways (0, 0) -> (1, 2) -> (3, 3) and (0, 0) -> (2, 1) -> (3, 3).

In the third example, our knight's cannot move toward, so our knight's cannot complete his mission.
