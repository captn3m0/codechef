---
category_name: easy
problem_code: MIKE1
problem_name: 'Mike and Matrices '
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
problem_author: kostya_by
problem_tester: null
date_added: 28-11-2013
tags:
    - cakewalk
    - implementation
    - kostya_by
    - ltime07
editorial_url: 'http://discuss.codechef.com/problems/MIKE1'
time:
    view_start_date: 1388305813
    submit_start_date: 1388305813
    visible_start_date: 1388305800
    end_date: 1735669800
    current: 1493558169
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME07/mandarin/MIKE1.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME07/russian/MIKE1.pdf).

Mike is given a matrix **A**, **N** and **M** are numbers of rows and columns respectively. **A1, 1** is the number in the top left corner. All the numbers in **A** are non-negative integers. He also has **L** pairs of integers (**ik**, **jk**). His task is to calculate **Ai1, j1** + **Ai2, j2** + ... + **AiL, jL**.

Unfortunately, Mike forgot if **Ai, j** was a number in the **i**'th row and **j**'th column or vice versa, if **Ai, j** was a number in the **j**'th row and **i**'th column.

So, Mike decided to calculate both **E1** = **Ai1, j1** + **Ai2, j2** + ... + **AiL, jL** and **E2** = **Aj1, i1** + **Aj2, i2** + ... + **AjL, iL**. If it is impossible to calculate **E1**(i.e. one of the summands doesn't exist), then let's assume, that it is equal to **-1**. If it is impossible to calculate **E2**, then let's also assume, that it is equal to **-1**.

Your task is to calculate **max(**E1**, **E2**)**.

### Input

The first line contains two integers **N** and **M**, denoting the number of rows and the number of columns respectively.

Each of next **N** lines contains **M** integers. The **j**'th integer in the **(i + 1)**'th line of the input denotes **Ai, j**.

The **(N + 2)**'th line contains an integer **L**, denoting the number of pairs of integers, that Mike has.

Each of next **L** lines contains a pair of integers. The **(N + 2 + k)**-th line in the input contains a pair (**ik**, **jk**).

### Output

The first line should contain an integer, denoting **max(**E1**, **E2**)**.

### Examples

<pre><b>Input:</b>
3 2
1 2
4 5
7 0
2
1 2
2 2
<b>Output:</b>
9

</pre><pre><b>Input:</b>
1 3
1 2 3
2
1 3
3 1
<b>Output:</b>
-1

</pre><pre><b>Input:</b>
1 3
1 2 3
2
1 1
3 1
<b>Output:</b>
4

</pre>### Explanation
In the first test case **N** equals to 3, **M** equals to 2, **L** equals to 2. **E1** = 2 + 5 = 7, **E2** = 4 + 5 = 9. The answer is **max(**E1**, **E2**)** = **max(**7**,** 9**)** = 9;

In the second test case **N** equals to 1, **M** equals to 3, **L** equals to 2. It is impossible to calculate **E1** and **E2**, because **A3, 1** doesn't exist. So the answer is **max(**E1**, **E2**)** = **max(**-1**,** -1**)** = -1;

In the third test case **N** equals to 1, **M** equals to 3, **L** equals to 2. It is impossible to calculate **E1**, because **A3, 1** doesn't exist. So **E1** is equal to -1. **E2** = 1 + 3 = 4. The answer is **max(**E1**, **E2**)** = **max(**-1**,**4**)** = 4.

### Scoring

1 ≤ **ik**, **jk** ≤ 500 for each test case.

Subtask 1 (10 points): 1 ≤ **N**, **M**, **L** ≤ 5, 0 ≤ **Ai, j** ≤ 10;

Subtask 2 (12 points): 1 ≤ **N**, **M**, **L** ≤ 300, 0 ≤ **Ai, j** ≤ 106, all the numbers in **A** are equal;

Subtask 3 (20 points): 1 ≤ **N**, **M**, **L** ≤ 300, 0 ≤ **Ai, j** ≤ 109;

Subtask 4 (26 points): 1 ≤ **N**, **M**, **L** ≤ 500, 0 ≤ **Ai, j** ≤ 109;

Subtask 5 (32 points): 1 ≤ **N**, **M** ≤ 500, 1 ≤ **L** ≤ 250 000, 0 ≤ **Ai, j** ≤ 109.
