---
category_name: easy
problem_code: MINPERM
problem_name: 'Minimum Good Permutation'
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
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: r_64
problem_tester: jingbo_adm
date_added: 26-07-2017
tags:
    - easy
    - r_64
    - sept17
editorial_url: 'https://discuss.codechef.com/problems/MINPERM'
time:
    view_start_date: 1505122200
    submit_start_date: 1505122200
    visible_start_date: 1505122200
    end_date: 1735669800
    current: 1514816569
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/SEPT17/mandarin/MINPERM.pdf), [russian](http://www.codechef.com/download/translated/SEPT17/russian/MINPERM.pdf) and [vietnamese](http://www.codechef.com/download/translated/SEPT17/vietnamese/MINPERM.pdf) as well.

 A permutation of length **n** is an array of size **n** consisting of **n** **distinct** integers in the range **\[1, n\]**. For example, (3, 2, 4, 1) is a permutation of length 4, but (3, 3, 1, 4) and (2, 3, 4, 5) are not, as (3, 3, 1, 4) contains duplicate elements, and (2, 3, 4, 5) contains elements not in range \[1,4\].

A permutation **p** of length **n** is _good_ if and only if for any **1** ≤ **i** ≤ **n**, **pi** ≠ **i**.

Please find the **lexicographically** smallest _good_ permutation **p**.

**Definition for "lexicographically smaller**":

For two permutations **p** and **q**, we say that **p** is lexicographically smaller than **q** if and only if there exists a index **1** ≤ **l** ≤ **n** such that:

- For any **1** ≤ **i** < **l**, **pi** = **q****i**. Note that if **l** = **1**, this constraint means nothing.
- and, **p****l** < **q****l**.

For example, (2, 3, 1, 4) < (2, 3, 4, 1) < (3, 4, 1, 2). The lexicographically smallest permutation is, of course, (1, 2, ..., **n**), though this one is not _good_.

### Input

First line of the input contains an integer **T** denoting number of test cases.

For each test case, the only line contains an integer **n**.

### Output

For each test case, output the lexicographically smallest _good_ permutation of length **n**. It's guaranteed that this permutation exists.

### Constraints

- **1** ≤ **T** ≤ **10**
- **2** ≤ **n** ≤ **105**

### Subtasks

- **Subtask #1 (17 points)**: **2** ≤ **n** ≤ **9**
- **Subtask #2 (83 points)**: Original Constraints

### Example

<pre>
<b>Input:</b>
4
2
3
5
6

<b>Output:</b>
2 1
2 3 1
2 1 4 5 3
2 1 4 3 6 5
</pre>### Explanation

 **Example case 1.** The only _good_ permutation of length 2 is (2, 1).

 **Example case 2.** Consider all permutations of length 3, they are(in lexicographically order):

- p = (1, 2, 3), it's not good since p\[1\] = 1, p\[2\] = 2 and p\[3\] = 3;
- p = (1, 3, 2), it's not good since p\[1\] = 1;
- p = (2, 1, 3), it's not good since p\[3\] = 3;
- p = (2, 3, 1), it's good since p\[1\] ≠ 1, p\[2\] ≠ 2 and p\[3\] ≠ 3;
- p = (3, 1, 2), it's good since p\[1\] ≠ 1, p\[2\] ≠ 2 and p\[3\] ≠ 3;
- p = (3, 2, 1), it's not good since p\[2\] = 2.

Thus the minimum good one is (2, 3, 1).

**Example case 3.** Consider two good permutations for third test case: p=(2, 1, 4, 5, 3) and q=(2, 4, 1, 5, 3), then p
