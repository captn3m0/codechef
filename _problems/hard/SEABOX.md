---
category_name: hard
problem_code: SEABOX
problem_name: 'Sereja and BOX'
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
problem_author: sereja
problem_tester: null
date_added: 7-10-2016
tags:
    - ad
    - dynamic
    - jan17
    - knapsack
    - medium
    - sereja
editorial_url: 'https://discuss.codechef.com/problems/SEABOX'
time:
    view_start_date: 1484731800
    submit_start_date: 1484731800
    visible_start_date: 1484731800
    end_date: 1735669800
    current: 1493556824
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN17/mandarin/SEABOX.pdf), [Russian](http://www.codechef.com/download/translated/JAN17/russian/SEABOX.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN17/vietnamese/SEABOX.pdf) as well.

Sereja has a box **A** with size **N\*N\*N**, where **N=2Q** for some integer **Q**. Each cell **A(i, j, k)** contains some binary value (zero or one). Sereja now has C++ function **F(A)** (where the box **A** is parameter of the function **F**):


```

int F(box A, int dx = 0, int dy = 0, int dz = 0, int size = N) {
   vector<bool> B = {};
   for (int i = dx; i 
</bool>
```This function computes compression level of the box. Sereja now wants to know minimal and maximal value of **F(D)** among all boxes **D** which has same dimensions as **A** and differ in no more than **K** cells with **A**.

### Input

First line contains integers **N** and **K**.

Each of **N** next blocks contains **N** lines, each line contains **N** numbers, **k-th** number in **j-th** line of **i-th** block means value of **A(i,j,k)**.

### Output

Output two numbers in a single line - minimal and maximal value of **F(D)**.

### Constraints

- **1** ≤ **N** ≤ **32**
- **1** ≤ **K** ≤ **N3**

### Subtasks

- **Subtask #1:** **1** ≤ **N** ≤ **2** (5 points)
- **Subtask #2:** **1** ≤ **N** ≤ **4** (15 points)
- **Subtask #3:** **1** ≤ **N** ≤ **8** (20 points)
- **Subtask #4:** **1** ≤ **N** ≤ **16** (25 points)
- **Subtask #5:** original constraints (35 points)

### Example 1

```
<b>Input:</b>
2 0
0 0
0 0
0 0
0 0

<b>Output:</b>
1 1

```
### Example 2

```
<b>Input:</b>
2 1
0 0
0 0
0 0
0 0

<b>Output:</b>
1 8

```