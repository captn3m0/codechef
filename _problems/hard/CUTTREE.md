---
category_name: hard
problem_code: CUTTREE
problem_name: 'Chef Cuts Tree'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: jtnydv25
problem_tester: null
date_added: 31-12-2017
tags:
    - centroid
    - expected
    - fft
    - hard
    - jtnydv25
    - march18
    - probability
editorial_url: 'https://discuss.codechef.com/problems/CUTTREE'
time:
    view_start_date: 1520847000
    submit_start_date: 1520847000
    visible_start_date: 1520847000
    end_date: 1735669800
    current: 1525454451
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/MARCH18/mandarin/CUTTREE.pdf), [Russian](http://www.codechef.com/download/translated/MARCH18/russian/CUTTREE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MARCH18/vietnamese/CUTTREE.pdf) as well.

A forest is an undirected acyclic graph. Let us define the _strength_ of a forest as the sum of squares of sizes of its connected components. (Clearly, a tree with **n** nodes has strength **n2**.)

Chef has found a tree with **N** nodes on day 0. On each of the next **N-1** days, he's going to remove one edge. Let's denote the forest that remains after **i** days by **Fi**, for each 1 ≤ **i** ≤ **N-1**; also, let's denote the original tree by **F0**. On day **i**, **Fi** is created by randomly uniformly choosing one edge from **Fi-1** and removing it.

Let **Ei** be the expected value of strength of the forest **Fi**, for each 0 ≤ **i** ≤ **N-1**. It can be proven that this number can be written in the form **Pi** / **Qi**, where **gcd**(**Pi**, **Qi**) = 1 and **gcd**(**Qi**, 109 + 7) = 1. Let **Ri** = **Pi** · **Qi-1** mod 109 + 7, where **Qi-1** denotes the modular inverse of **Qi** modulo 109 + 7.

Find the values of **R0, R1, ..., RN-1**.

### Input

- The first line of the input contains a single integer **N** — the number of nodes in the tree.
- **N-1** lines follow. Each of these lines contains two space-separated integers **u** and **v** denoting an edge between nodes **u** and **v** in the tree.

### Output

Print a single line containing **N** space-separated integers **R0, R1, ..., RN-1**.

### Constraints

- 1 ≤ **N** ≤ 105
- 1 ≤ **u**, **v** ≤ **N**

### Subtasks

**Subtask #1 (25 points):** 1 ≤ **N** ≤ 103

**Subtask #2 (75 points):** original constraints

### Example

<pre><b>Input:</b>

5
1 2
1 3
2 4
2 5

<b>Output:</b>

25 16 333333346 7 5
</pre>