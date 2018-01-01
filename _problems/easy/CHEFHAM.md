---
category_name: easy
problem_code: CHEFHAM
problem_name: 'Chef and Hamming Distance of arrays'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - CAML
    - CLOJ
    - CLPS
    - COB
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 1-12-2017
tags:
    - admin2
    - dec17
editorial_url: 'https://discuss.codechef.com/problems/CHEFHAM'
time:
    view_start_date: 1512984600
    submit_start_date: 1512984600
    visible_start_date: 1512984600
    end_date: 1735669800
    current: 1514815999
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Vietnamese](http://www.codechef.com/download/translated/DEC17/vietnamese/CHEFHAM.pdf) 

. Chef likes to work with arrays a lot. Today he has an array **A** of length **N** consisting of positive integers. Chef's little brother likes to follow his elder brother, so he thought of creating an array **B** of length **N**. The little brother is too small to think of new numbers himself, so he decided to use all the elements of array **A** to create the array **B**. In other words, array **B** is obtained by shuffling the elements of array **A**.

The little brother doesn't want Chef to know that he has copied the elements of his array **A**. Therefore, he wants to create the array **B** in such a way that the _Hamming distance_ between the two arrays **A** and **B** is maximized. The Hamming distance between **A** and **B** is the number of indices **i** (1 ≤ **i** ≤ **N**) such that **Ai ≠ Bi**.

The brother needs your help in finding any such array **B**. Can you please find one such array for him?

Note that it's guaranteed that no element in **A** appears more than twice, i.e. frequency of each element is at most 2.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains an integer **N** denoting the length of the array **A**.
- The second line contains **N** space-separated integers **A1, A2 ... AN**.

### Output

- For each test case, print two lines.
- The first line should contain the maximum possible Hamming distance that array **B** can have from array **A**.
- The second line should contain **N** space-separated integers denoting the array **B**; the **i**-th integer should denote the value of **Bi**. Note that **B** should be an array obtained after shuffling the elements of **A**.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **N** ≤ 105
- 1 ≤ **Ai** ≤ 105
- The frequency of each integer in the array **A** will be at most 2.

### Subtasks

**Subtask #1 (30 points):** all elements in the array **A** are unique

**Subtask #2 (30 points):** 5 ≤ **N** ≤ 105

**Subtask #3 (40 points):** original constraints

### Example

<pre>
<b>Input</b>

3
2
1 2
3
1 2 1
4
2 6 5 2

<b>Output</b>

2
2 1
2
2 1 1
4
6 2 2 5

</pre>