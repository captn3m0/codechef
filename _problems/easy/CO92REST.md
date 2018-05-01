---
category_name: easy
problem_code: CO92REST
problem_name: 'Chef Restores an Array'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kefaa
problem_tester: null
date_added: 15-03-2018
tags:
    - cook92
    - datastructure
    - easy
    - kefaa
editorial_url: 'https://discuss.codechef.com/problems/CO92REST'
time:
    view_start_date: 1521397800
    submit_start_date: 1521397800
    visible_start_date: 1521397800
    end_date: 1735669800
    current: 1525198933
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK92/mandarin/CO92REST.pdf), [Russian](http://www.codechef.com/download/translated/COOK92/russian/CO92REST.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK92/vietnamese/CO92REST.pdf) as well.

Chef had an array **A** with length **N**, but some of its elements got lost. Now, each element of this array is either unknown (denoted by -1) or a positive integer not exceeding **K**.

Chef decided to restore the array **A** by replacing each unknown element by a positive integer not exceeding **K**.

However, Chef has **M** restrictions that must hold for the restored array. There are two types of restrictions:

- I **L** **R**, meaning that for each **i** such that **L** i ≤ **R**, the condition **Ai - Ai-1** = 1 should be satisfied.
- D **L** **R**, meaning that for each **i** such that **L** i ≤ **R**, the condition **Ai - Ai-1** = -1 should be satisfied.

Chef would like to know the number of ways to restore the array while satisfying all restrictions, modulo 109+7.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains three space-separated integers **N**, **M** and **K**.
- The second line contains **N** integers **A1, A2, ..., AN**.
- Each of the following **M** lines contains one restriction in the form I **L** **R** or D **L** **R**.

### Output

For each test case, print a single line containing one integer - the number of ways to restore the array modulo 109+7.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **N**, **M** ≤ 100,000
- 1 ≤ **K** ≤ 1,000,000,000
- 1 ≤ **L** R ≤ **N**
- 1 ≤ **Ai** ≤ **K** or **Ai** = -1 for each valid **i**
- 1 ≤ sum of **N** over all test cases ≤ 500,000
- 1 ≤ sum of **M** over all test cases ≤ 500,000

### Example

<pre><b>Input:</b>

3
4 2 10
2 3 5 4
I 1 2 
D 3 4
5 2 10
-1 -1 -1 -1 -1
I 1 3
D 3 5
6 2 2
-1 -1 -1 -1 -1 -1
I 1 4
D 4 6

<b>Output:</b>

1
8
0
</pre>