---
category_name: medium
problem_code: L56KTH
problem_name: 'Chef and Function'
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
max_timelimit: '2.5'
source_sizelimit: '50000'
problem_author: kefaa
problem_tester: mgch
date_added: 18-01-2018
tags:
    - binary
    - kefaa
    - ltime56
    - medium
    - persistence
    - trie
editorial_url: 'https://discuss.codechef.com/problems/L56KTH'
time:
    view_start_date: 1517073000
    submit_start_date: 1517073000
    visible_start_date: 1517073000
    end_date: 1735669800
    current: 1525198954
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME56/mandarin/L56KTH.pdf), [Russian](http://www.codechef.com/download/translated/LTIME56/russian/L56KTH.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME56/vietnamese/L56KTH.pdf) as well.

Chef has a sequence **A** containing **N** integers **A1, A2, ..., AN** and an integer **K**.

For each pair (**l**, **r**) such that 1 ≤ **l** ≤ **r** ≤ **N**, Chef defines functions **MIN**(**l**, **r**) = **min**(**al**, **al+1**, ..., **ar**) and **XOR**(**l**, **r**) = **al xor al+1 xor ... xor ar**. Then, Chef defines a function **f**(**l**, **r**) = **MIN**(**l**, **r**) ∙ **XOR**(**l**, **r**).

Chef wants to know the **K**-th smallest possible value of **f**(**l**, **r**). Formally, consider a sorted array of all **N(N+1)/2** possible values of **f**(**l**, **r**) for all possible pairs (**l**, **r**); Chef wants to know the **K**-th element of this array after it's sorted.

Help Chef!

### Input

- The first line of each test case contains two space-separated integers **N** and **K**.
- The second line contains **N** space-separated integers **A1, A2, ..., AN**.

### Output

For each test case, print a single line containing one integer — the **K**-th smallest value of **f**(**l**, **r**).

### Constraints

- 1 ≤ **N** ≤ 50,000
- 1 ≤ **K** ≤ **N ∙ (N+1) / 2**
- 1 ≤ **Ai** ≤ 50,000 for each valid **i**

### Subtasks

**Subtask #1 (10 points):**

- 1 ≤ **N** ≤ 100
- 1 ≤ **Ai** ≤ 100 for each valid **i**

**Subtask #2 (20 points):**

- 1 ≤ **N** ≤ 10,000
- 1 ≤ **Ai** ≤ 100 for each valid **i**

**Subtask #3 (30 points):**

- 1 ≤ **N** ≤ 30,000
- 1 ≤ **Ai** ≤ 30,000 for each valid **i**

**Subtask #4 (40 points):** original constraints

### Example

<pre><b>Input:</b>

4 7
1 3 6 4

<b>Output:</b>

9
</pre>
### Example

There are **N(N+1)/2** = 10 distinct pairs (**l**, **r**). The values of **MIN**(**l**, **r**), **XOR**(**l**, **r**) and **f**(**l**, **r**) for each pair are:

- **l** = 1, **r** = 1: **MIN** = 1, **XOR** = 1, **f** = 1
- **l** = 1, **r** = 2: **MIN** = 1, **XOR** = 2, **f** = 2
- **l** = 1, **r** = 3: **MIN** = 1, **XOR** = 4, **f** = 4
- **l** = 1, **r** = 4: **MIN** = 1, **XOR** = 0, **f** = 0
- **l** = 2, **r** = 2: **MIN** = 3, **XOR** = 3, **f** = 9
- **l** = 2, **r** = 3: **MIN** = 3, **XOR** = 5, **f** = 15
- **l** = 2, **r** = 4: **MIN** = 3, **XOR** = 1, **f** = 3
- **l** = 3, **r** = 3: **MIN** = 6, **XOR** = 6, **f** = 36
- **l** = 3, **r** = 4: **MIN** = 4, **XOR** = 2, **f** = 8
- **l** = 4, **r** = 4: **MIN** = 4, **XOR** = 4, **f** = 16

It's easy to see that the **K**=7-th smallest value of **MIN**(**l**, **r**) ∙ **XOR**(**l**, **r**) is 9.

### Note

: The time limit multiplier for python has been decreased to 3 from 5.
