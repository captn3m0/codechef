---
category_name: medium
problem_code: PSHTRG
problem_name: 'Pishty and Triangles'
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
problem_author: fekete
problem_tester: null
date_added: 12-12-2017
tags:
    - fekete
    - march18
    - medium
    - mergesort
    - segment
    - triangle
editorial_url: 'https://discuss.codechef.com/problems/PSHTRG'
time:
    view_start_date: 1520847000
    submit_start_date: 1520847000
    visible_start_date: 1520847000
    end_date: 1735669800
    current: 1525454449
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/MARCH18/mandarin/PSHTRG.pdf), [Russian](http://www.codechef.com/download/translated/MARCH18/russian/PSHTRG.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MARCH18/vietnamese/PSHTRG.pdf) as well.

Pishty is a little boy who lives in Khust, an ancient town with a castle and smart bears. Right now, he wants you to help him with a programming problem.

You are given a sequence **A1, A2, ..., AN** and **Q** queries. There are two types of queries:

- 1 **pos** **val** — Set **Apos** = **val**.
- 2 **l r** — Find the maximum possible perimeter of a triangle with non-zero area whose sides are elements of the subsequence **Al, Al+1, ..., Ar**. Note that each element of the subsequence can only be used as the length of at most one side, i.e. the sides of each valid triangle must be elements **Ax**, **Ay**, **Az**, where **l ≤ x < y < z ≤ r**.

For each query of the second type, compute the maximum possible perimeter or determine that no valid triangle exists.

### Input

- The first line of the input contains two space-separated integers **N** and **Q**.
- The second line contains **N** space-separated integers **A1, A2, ..., AN**.
- **Q** lines follow. Each of these lines describes one query in the following format: 
  - 1 **pos** **val** for a query of the first type
  - 2 **l** **r** for a query of the second type

### Output

For each query of the second type, print a single line containing one integer — the maximum perimeter or 0 if no triangle can be formed.

### Constraints

- 1 ≤ **N**, **Q** ≤ 105
- 1 ≤ **Ai** ≤ 109 for each valid **i**
- 1 ≤ **val** ≤ 109
- 1 ≤ **l** ≤ **r** ≤ **N**
- 1 ≤ **pos** ≤ **N**

###  Subtasks:

**Subtask #1 (5 pts):** 1 ≤ **N**, **Q** ≤ 100

**Subtask #2 (25 pts):** 1 ≤ **N**, **Q** ≤ 2000

**Subtask #3 (70 pts):** original constraints

### Example

<pre><b>Input:</b>

5 4
3 1 8 9 7
2 1 5
1 2 12
2 1 3
2 2 5

<b>Output:</b>

24
0
29
</pre>### Explanation

The first query asks us to find the maximum perimeter of a triangle using some of the elements {3, 1, 8, 9, 7}. We can take the elements 7, 8, and 9 and construct a triangle using these three elements as side lengths. This triangle has perimeter 7 + 8 + 9 = 24, which is the maximum possible perimeter. Hence the answer is 24.

The second query asks us to change the second element to 12.

The third query asks us to find the maximum perimeter of a triangle using some of the elements {3, 12, 8}. These three elements do not form a triangle, hence the answer is 0.

The fourth query asks us to find the maximum perimeter of a triangle using some of the elements {12, 8, 9, 7}. We can take the elements 8, 9 and 12 and make a triangle using these three elements as side lengths. This triangle has perimeter 8 + 9 + 12 = 29, which is maximum possible. Hence the answer is 29.
