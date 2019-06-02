---
category_name: medium
problem_code: GCDCNT
problem_name: 'Chef and Gcd Queries'
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
problem_author: vipsharmavip
problem_tester: null
date_added: 31-01-2018
tags:
    - inclusion
    - march18
    - medium
    - mobius
    - vipsharmavip
editorial_url: 'https://discuss.codechef.com/problems/GCDCNT'
time:
    view_start_date: 1520847000
    submit_start_date: 1520847000
    visible_start_date: 1520847000
    end_date: 1735669800
    current: 1525454464
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/MARCH18/mandarin/GCDCNT.pdf), [Russian](http://www.codechef.com/download/translated/MARCH18/russian/GCDCNT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MARCH18/vietnamese/GCDCNT.pdf) as well.

Chef likes solving problems involving a lot of queries with numbers. One day, he found a new problem which he finds difficult to solve. Therefore, he's asking for your help!

You are given a sequence **A1**, **A2**, ..., **AN** and **Q** queries. There are two types of queries:

- 1 **X** **Y** — Set **AX** = **Y**.
- 2 **L** **R** **G** — Compute the number of indices **i** such that **L** ≤ **i** ≤ **R** and **gcd**(**G**, **Ai**) = 1.

Find the answer to each query of the second type.

Note: **gcd**(**X**, **Y**) denotes the greatest common divisor — the highest positive integer which divides both **X** and **Y**.

### Input

- The first line of the input contains a single integer **N** denoting the number of elements in the sequence.
- The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN**.
- The third line contains a single integer **Q** denoting the number of queries.
- Each of the following **Q** lines describes one query in the following format: 
  - 1 **X** **Y** for a query of the first type
  - 2 **L** **R** **G** for a query of the second type

### Output

For each query of type 2, print a single line containing one integer - the answer to the query.

### Constraints

- 1 ≤ **N**, **Q** ≤ 5 · 104
- 1 ≤ **L** ≤ **R** ≤ **N**
- 1 ≤ **X** ≤ **N**
- 1 ≤ **Y**, **G** ≤ 105
- 1 ≤ **Ai** ≤ 105 for each valid **i**

### Subtasks 

**Subtask #1 (15 points):** 1 ≤ **N**, **Q** ≤ 1000

**Subtask #2 (85 points):** original constraints

### Example

<pre><b>Input:</b>

4
2 3 4 5
3
2 1 4 2
1 2 6
2 1 4 2

<b>Output:</b>

2
1
</pre>
### Explanation

In the first query, **gcd**(**A2**, 2) = 1 and **gcd**(**A4**, 2) = 1, so the answer is 2.

In the third query, only **gcd**(**A4**, 2) is equal to 1, so the answer is 1.
