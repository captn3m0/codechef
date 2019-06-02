---
category_name: easy
problem_code: GENPERM
problem_name: 'Generating A Permutation'
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
problem_author: architk
problem_tester: null
date_added: 13-12-2017
tags:
    - acm17kgp
    - architk
    - constructive
    - easy
    - kgp17rol
editorial_url: 'https://discuss.codechef.com/problems/GENPERM'
time:
    view_start_date: 1515875400
    submit_start_date: 1515875400
    visible_start_date: 1515875400
    end_date: 1735669800
    current: 1525454366
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.For a permutation P = (p1, p2, ..., p**N**) of numbers \[1, 2, ..., **N**\], we define the function f(P) = max(p1, p2) + max(p2, p3) + ... + max(p**N**-1, p**N**).

You are given **N** and an integer **K**. Find and report a permutation P of \[1, 2, ..., **N**\] such that f(P) = **K**, if such a permutation exists.

Note f(\[1\]) = 0.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The only line of each test case consists of two space-separated integers **N, K** respectively.

### Output

For each test case, if a permutation satisfying the condition exists, output a single line containing **N** space-separated integers which denotes any such permutation. If no such permutation exists, output a single integer -1 instead.

Use fast I/O methods since the size of the output is large.

### Constraints

- 1 ≤ **T** ≤ 40
- 1 ≤ **N** ≤ 105
- Sum of **N** over all test cases in each file ≤ 106
- 0 ≤ **K** ≤ 2 \* 1010

### Example

<pre><b>Input:</b>
3
4 12
2 2
5 14

<b>Output:</b>
-1
1 2
5 4 3 2 1
</pre>
### Explanation

**Example 1.** There doesn't exist any permutation of numbers \[1, 2, 3, 4\] that can have its f value equal to 4. Hence answer is -1.

**Example 2.** The permutations \[1, 2\] and \[2, 1\] both have their f values equal to 2. You can print any of these two permutations.

**Example 3.** The permutation \[5, 4, 3, 2, 1\] has f value = max(5, 4) + max(4, 3) + max(3, 2) + max(2, 1) = 5 + 4 + 3 + 2 = 14.
