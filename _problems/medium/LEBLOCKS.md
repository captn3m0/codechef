---
category_name: medium
problem_code: LEBLOCKS
problem_name: 'Little Elephant and Blocks'
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
problem_author: witua
problem_tester: null
date_added: 21-03-2012
tags:
    - combinatorics
    - dynamic
    - june14
    - medium
    - witua
editorial_url: 'http://discuss.codechef.com/problems/LEBLOCKS'
time:
    view_start_date: 1402911000
    submit_start_date: 1402911000
    visible_start_date: 1402911000
    end_date: 1735669800
    current: 1493557740
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE14/mandarin/LEBLOCKS1.pdf) and [Russian](http://www.codechef.com/download/translated/JUNE14/russian/LEBLOCKS2.pdf).

Little Elephant from Zoo of Lviv has **n** (0-based numeration) blocks consisted of **1x1x1** cubes in such way that the size of **i-th** block is **1x1xAi**. Each of the blocks also has a color, which is a positive integer. The color of **i-th** block is **Ci**. There will be no more than two blocks of the same color.

Little Elephant wants to stack the blocks in the stack. In order to do so, he choose some random permutation **P** of integers from  to **n-1**, inclusive, and stacks all the blocks in order of **P**, i. e. at first he stacks **P0-th** block, then **P1-th** and so on.

After stacking Little Elephant has a sequence of size **S** consisted of cubes (0-based numeration) in order from the stack, where **S = A0 + A1 + ... + An-1**. Then he counts the number of such pairs of cubes with indices **i** and **j** that **j - i = k** and **i-th** cube has same color as **j-th**. Call this number as colorfulness of the corresponding permutation.

 Help Little Elephant and for a given **n**, **k** and the description of blocks find the expected colorfulness, considering that permutation **P** is chosen randomly.

### Input

First line of the input contains single integer **T** - the number of test cases. Then **T** test cases follow. First line of each test case contains pair of integers **n** and **k**. Next **n** lines of each test case contain pairs of integers **Ai** and **Ci**.

### Output

In **T** lines print **T** numbers - the answers for the corresponding test cases. Your answer will considered correct if it has at most **10-6** absolute or relative error.

### Constraints

1 ≤ **T** ≤ 10

1 ≤ **n** ≤ 20

1 ≤ **k** ≤ 200

1 ≤ **Ai** ≤ 10

1 ≤ **Ci** ≤ n

There will be no three or more blocks of the same color in a single test case.

### Example

```

<b>Input:</b>
1
7 5
3 1
2 2
2 1
4 3
1 2
1 3
4 4

<b>Output:</b>
0.9095238


```