---
category_name: easy
problem_code: MINVOTE
problem_name: 'Minions and Voting'
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
problem_author: admin2
problem_tester: null
date_added: 28-02-2018
tags:
    - admin2
    - binary
    - easy
    - march18
editorial_url: 'https://discuss.codechef.com/problems/MINVOTE'
time:
    view_start_date: 1520847000
    submit_start_date: 1520847000
    visible_start_date: 1520847000
    end_date: 1735669800
    current: 1525454369
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/MARCH18/mandarin/MINVOTE.pdf), [Russian](http://www.codechef.com/download/translated/MARCH18/russian/MINVOTE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MARCH18/vietnamese/MINVOTE.pdf) as well.

There are **N** minions who are competing in an election of the president of the ACM (Association of Cute Minions). They are standing in a line in the order from minion 1 to minion **N**. For each **i** (1 ≤ **i** ≤ **N**), the **i**-th minion has an influence level of **Si**.

A single minion may cast any number of votes. Minion **j** will vote for minion **i** (**i** ≠ **j**) if and only if the influence level of the **j**-th minion is greater than or equal to the sum of influence levels of all the minions standing between them (excluding the **i**-th and **j**-th minion).

Your task is to find the number of votes received by each minion.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **N** denoting the number of minions.
- The second line contains **N** space-separated integers **S1, S2, ..., SN**.

### Output

For each test case, print a single line containing **N** space-separated integers. For each valid **i**, the **i**-th of these integers should denote the number of votes the **i**-th minion will get.

### Constraints

- 1 ≤ **T** ≤ 105
- 1 ≤ **N** ≤ 105
- 1 ≤ **Si** ≤ 109 for each valid **i**
- sum of **N** over all test cases won't exceed 106

### Subtasks

**Subtask #1 (30 points):**

- 1 ≤ **N** ≤ 500
- sum of **N** over all test cases won't exceed 10,000

**Subtask #2 (70 points):** original constraints

### Example

<pre><b>Input:</b>

2
4
4 3 2 1
5
1 2 2 3 1

<b>Output:</b>

1 2 3 2
2 3 2 3 1
</pre>### Explanation

**Example case 1:**

- The first minion will get only a vote of the second minion.
- The second minion will get votes of the first and third minion.
- The third minion will get votes of the first, second and fourth minion.
- The fourth minion will get votes of the second and third minion.
