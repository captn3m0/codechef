---
category_name: easy
problem_code: TAASEQ
problem_name: 'The Lost Arithmetic Sequences'
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
problem_author: tuananh93
problem_tester: errichto
date_added: 8-09-2016
tags:
    - cook74
    - dynamic
    - easy
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/TAASEQ'
time:
    view_start_date: 1474223400
    submit_start_date: 1474223400
    visible_start_date: 1474223400
    end_date: 1735669800
    current: 1493558191
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK74/mandarin/TAASEQ.pdf), [Russian](http://www.codechef.com/download/translated/COOK74/russian/TAASEQ.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK74/vietnamese/TAASEQ.pdf) as well.

Jem couldn't even finish half of the homework exercises in "Advanced topics in algorithm" class. The teacher is really upset and gives him one final problem to solve - if he can't solve it, he is gonna fail the course.

Jem is given an array **A** consisting of **N** integers. The teacher asks him to remove exactly one number in the array to make the array become an arithmetic progressions.

Jem wanted to ask the teacher about the definition of arithmetic progressions but he remembered that he had heard this term in last week's lesson just before falling asleep. Now his life is in your hands again!

Anyways, we provide you the definition of arithmetic progression. Arithmetic progression is a sequence of numbers, where the difference between any two adjacent numbers is same.

### Input

Input contains mutilpe test cases. The first line of the input contains a single integer **T** represents the number of tests. It is followed by T group of line represent the test cases.

Each test case consists of two lines where the first line contains a single integer **N**.

The second line contains **N** space separated integers denoting the array **A**.

### Output

For each test case print out single integer which is the number you will remove from the array. If there is more than one solution take the smallest one. If there is no solution print out -1.

### Constraints

- **1 ≤ T ≤ 10**
- **2 ≤ N ≤ 105**
- **0 ≤ Ai ≤ 109**

### Example

```

<b>Input</b>:
3
2
3 4
4
1 5 3 4
6
2 4 6 7 8 10

<b>Output</b>:
3
-1
7

```
### Explaination

**test 1:** an array contain a single integer is considered to be an arithmetic progression so you can remove any number in the array. But note that we must print out the **smallest result** which is 3.

**test 2:** there is no solution since none of \[1, 3, 4\], \[1, 5, 3\], \[1, 5, 4\], \[5, 3, 4\] is an arithmetic progressions.

**test 3:** the only way to archive an airthmetic progressions is remove the number 7 which will give us \[2, 4, 6, 8, 10\].