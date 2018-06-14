---
category_name: easy
problem_code: MINEAT
problem_name: 'Minion Chef and Bananas'
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
editorial_url: 'https://discuss.codechef.com/problems/MINEAT'
time:
    view_start_date: 1520847000
    submit_start_date: 1520847000
    visible_start_date: 1520847000
    end_date: 1735669800
    current: 1525454394
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/MARCH18/mandarin/MINEAT.pdf), [Russian](http://www.codechef.com/download/translated/MARCH18/russian/MINEAT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MARCH18/vietnamese/MINEAT.pdf) as well.

Minion Chef likes to eat bananas a lot. There are **N** piles of bananas in front of Chef; for each **i** (1 ≤ **i** ≤ **N**), the **i**-th pile contains **Ai** bananas.

Chef's mother wants her to eat the bananas and be healthy. She has gone to the office right now and will come back in **H** hours. Chef would like to make sure that she can finish eating all bananas by that time.

Suppose Chef has an _eating speed_ of **K** bananas per hour. Each hour, she will choose some pile of bananas. If this pile contains at least **K** bananas, then she will eat **K** bananas from it. Otherwise, she will simply eat the whole pile (and won't eat any more bananas during this hour).

Chef likes to eat slowly, but still wants to finish eating all the bananas on time. Therefore, she would like to choose the minimum **K** such that she is able to eat all the bananas in **H** hours. Help Chef find that value of **K**.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains two space-separated integers **N** and **H** denoting the number of piles and the number of hours after which Chef's mom will come home.
- The second line contains **N** space-separated integers **A1, A2, ..., AN**.

### Output

For each test case, print a single line containing one integer — the minimum possible value of **K**.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **N** ≤ 105
- **N** ≤ **H** ≤ 109
- 1 ≤ **Ai** ≤ 109 for each valid **i**

### Subtasks

**Subtask #1 (30 points):**

- 1 ≤ **N** ≤ 100
- **Ai** ≤ 103 for each valid **i**

**Subtask #2 (70 points):** original constraints

### Example

<pre><b>Input:</b>

3
3 3
1 2 3
3 4
1 2 3
4 5
4 3 2 7

<b>Output:</b>

3
2
4
</pre>### Explanation

**Example case 1:** With a speed of **K** = 3 bananas per hour, Chef can finish eating all the bananas in 3 hours. It's the minimum possible speed with which she can eat all the bananas in 3 hours. With a speed of 2 bananas per hour, she would take at least 4 hours and with a speed of 1 banana per hour, she would take at least 6 hours.
