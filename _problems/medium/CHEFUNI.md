---
category_name: medium
problem_code: CHEFUNI
problem_name: 'Chef and Universe'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
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
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: saluja123
problem_tester: null
date_added: 30-05-2017
tags:
    - dec17
    - saluja123
editorial_url: 'https://discuss.codechef.com/problems/CHEFUNI'
time:
    view_start_date: 1512984600
    submit_start_date: 1512984600
    visible_start_date: 1512984600
    end_date: 1735669800
    current: 1514817151
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/DEC17/mandarin/CHEFUNI.pdf), [Russian](http://www.codechef.com/download/translated/DEC17/russian/CHEFUNI.pdf) and[Vietnamese](http://www.codechef.com/download/translated/DEC17/vietnamese/CHEFUNI.pdf) as well.

Chef lives in the Universe in which only planets are present. Every planet is identified by 3 integers \[p, q, r\]. Chef lives on the planet \[0, 0, 0\] and wants to go to planet \[X, Y, Z\] with minimum energy loss.

The energy loss is determined by the following rules:

- If Chef goes from \[p, q, r\] to \[p+1, q, r\] or \[p, q+1, r\] or \[p, q, r+1\], then A units of energy are lost.
- If Chef goes from \[p, q, r\] to \[p+1, q+1, r\] or \[p, q+1, r+1\] or \[p+1, q, r+1\], then B units of energy are lost.
- If Chef goes from \[p, q, r\] to \[p+1, q+1, r+1\], then C units of energy are lost.

Your task is to calculate the minimum energy loss possible when Chef goes from planet \[0, 0, 0\] to planet \[X, Y, Z\].

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The only line of each test case contains 6 space-separated integers denoting the values of **X, Y, Z, A, B** and **C** respectively.

### Output

For each test case, output a single line containing one integer — the minimum energy loss.

### Constraints

- 1 ≤  **T**  ≤ 105
- 1 ≤ **X, Y, Z** ≤ 105
- 1 ≤ **A, B, C** ≤ 103
 
### Subtasks

**Subtask #1 (20 points):**

- 1 ≤ **T** ≤ 50
- 1 ≤ **X, Y, Z** ≤ 100
 
**Subtask #2 (80 points):** original constraints

### Example

<pre><b>Input:</b>

2
1 2 3 10 1 5
2 2 1 1 2 3

<b>Output:</b>

3
5
</pre>
### Explanation

**Example case 1:** One of the possible solutions is \[0, 0, 0\] --> \[1, 0, 1\] --> \[1, 1, 2\] --> \[1, 2, 3\]. The minimum energy loss is **B** + **B** + **B** = 3 · **B** = 3 · 1 = 3.

**Example case 2:** One of the possible solutions is \[0, 0, 0\] --> \[1, 1, 1\] --> \[2, 2, 1\]. The minimum energy loss is **C** + **B** = 3 + 2 = 5.
