---
category_name: medium
problem_code: EXPALIN
problem_name: 'Exponential Sub-Palindromes'
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
max_timelimit: '3 - 6'
source_sizelimit: '50000'
problem_author: kostya_by
problem_tester: pavel1996
date_added: 27-12-2015
tags:
    - kostya_by
    - ltime32
    - palindrome
    - string
editorial_url: 'http://discuss.codechef.com/problems/EXPALIN'
time:
    view_start_date: 1454229000
    submit_start_date: 1454229000
    visible_start_date: 1454229000
    end_date: 1735669800
    current: 1493557649
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME32/mandarin/EXPALIN.pdf), [Russian](http://www.codechef.com/download/translated/LTIME32/russian/EXPALIN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME32/vietnamese/EXPALIN.pdf) as well.

You are given a binary string **S** of **N** bits. The bits in the string are indexed starting from 1. **S\[i\]** denotes the **i**th bit of **S**.

Let's say that a sequence **i1**, **i2**, …, **iK**(1 ≤ **K**; 1 ≤ **i1** < **i2** < … < **iK** ≤ **N**) _produces_ a palindrome when applied to **S**, if the string **S\[i1\]** **S\[i2\]** … **S\[ik\]** is a palindrome (that is, reads the same backward or forward).

In addition, a sequence **i1**, **i2**, …, **iK**(1 ≤ **K**; 1 ≤ **i1** < **i2** < … < **iK** ≤ **N**) is said to be _exponential_, if **ij + 1 = p \* ij** for each integer **1 ≤ j < K** and for some integer **p > 1**. Note, that a sequence of one element is always exponential.

Your task is to count the number of exponential sequences that produce a palindrome when applied to **S**.

### Input

The first line of input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The only line of description for each test case contains a binary string **S** of **N** bits.

### Output

For each test case, output a single line containing the number of exponential sequences that produce a palindrome.

### Constraints

- 1 ≤ **T** ≤ 10
- Subtask 1(20 points): 1 ≤ **N** ≤ 20
- Subtask 2(30 points): 1 ≤ **N** ≤ 1000
- Subtask 3(50 points): 1 ≤ **N** ≤ 5 × 105

### Note

The first test of the first subtask is the example test. It's made for you to make sure that your solution produces the same verdict both on your machine and our server.

### Time Limits

Time limit for the first and the second subtasks is 3s. Time limit for the third subtask is 6s.

### Example

```

<b>Input:</b>
2
11010
101001011

<b>Output:</b>
9
18


```
### Explanation of the first case in the example test

The following sequences are counted in the answer: {1}, {2}, {3}, {4}, {5}, {1, 2}, {1, 4}, {2, 4}, {1, 2, 4}.