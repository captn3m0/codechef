---
category_name: hard
problem_code: ARRAYSUM
problem_name: 'Arrays Sum'
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
max_timelimit: '1 - 3'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: zedthirtyeight
date_added: 21-02-2016
tags:
    - data
    - dynamic
    - ltime34
    - medium
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/ARRAYSUM'
time:
    view_start_date: 1459011600
    submit_start_date: 1459011600
    visible_start_date: 1459011600
    end_date: 1735669800
    current: 1493556613
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME33/mandarin/ARRAYSUM.pdf), [Russian](http://www.codechef.com/download/translated/LTIME33/russian/ARRAYSUM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME33/vietnamese/ARRAYSUM.pdf) as well.

You are given an array **A**, consisting of **N** integers and an array **B**, consisting of **M** integers.

The subsequence of **A** is the array that can be obtained by picking the elements at the arbitrary sorted set of positions from **A**.

Your task is to count the number of such subsequences **C** of **A** that:

- **C** contains exactly **M** elements.
- The array **(C+B)** is non-decreasing. Here by **+** operation, we mean element-wise sum. 
  For example, the array **(4, 8, 5)** plus the array **(10, 20, 30)** is **(14, 28, 35)**.
  Formally, **(C+B)** is an array of size **M** such that **(C+B)i** = **Ci** + **Bi**.

In case some subsequence appears more that once, you should counts it as many times as it appears.
Formally, two subarrays of an array **a**, (**ai\_1**, **ai\_2**, ... ,**ai\_n**) and (**aj\_1**, **aj\_2**, ... ,**aj\_m**) will be considered different if either their lengths are different i.e. **n != m** or there exists an index **k** such that such that **i\_k**  **!= j\_k**.

Since the answer can be very large, we ask you to calculate it, modulo **109+7**.

### Input

The first line of input contains a pair of space separated integers **N** and **M**, denoting the number of elements in the array **A** and the number of elements in the array **B**.

The second line contains **N** space-separated integers **Ai**, denoting the array **A**.

The third line contains **M** space-separated integers **Bj**, denoting the array **B**.

### Output

Output a single line containing the number of subsequences **C** as asked in the problem, modulo **109+7**.

### Constraints

- **1** ≤ **Ai, Bi** ≤ **109**
- **1** ≤ **M** ≤ **N**

### Subtasks

- Subtask #1 (33 points): **1** ≤ **N** ≤ **50**, **1** ≤ **M** ≤ **5**
- Subtask #2 (33 points): **1** ≤ **N** ≤ **500**, **1** ≤ **M** ≤ **50**
- Subtask #3 (34 points): **1** ≤ **N** ≤ **2000**, **1** ≤ **M** ≤ **1000**

### Example

```

<b>Input #1:</b>
5 3
1 5 2 4 7
7 9 6

<b>Output #1:</b>
4

<b>Input #2:</b>
4 2
7 7 7 7
3 4

<b>Output #2:</b>
6

```
### Explanation

**Example case 1.** The suitable subsequences are (1, 2, 7), (1, 4, 7), (5, 4, 7), (2, 4, 7).

**Example case 2.** The suitable subsequence is **(7, 7)**, and it appears 6 times:

- at indices **(1, 2)**
- at indices **(1, 3)**
- at indices **(1, 4)**
- at indices **(2, 3)**
- at indices **(2, 4)**
- at indices **(3, 4)**

So, the answer is 6.