---
category_name: medium
problem_code: NONOVSEG
problem_name: 'Non Overlapping Segments'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 12-12-2017
tags:
    - acm17kgp
    - admin2
    - dynamic
    - kgp17rol
    - medium
editorial_url: 'https://discuss.codechef.com/problems/NONOVSEG'
time:
    view_start_date: 1515875400
    submit_start_date: 1515875400
    visible_start_date: 1515875400
    end_date: 1735669800
    current: 1525454400
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given **N** horizontal segments each of length **R**. You are given the x-coordinates of their left end-points: the i-th segment has the left end point at **xi**. You can see that the right end point will be at **xi + R**.

You want to move the segments such that they lie entirely in the range **\[0, L\]**. After the movements, no two segments should overlap, however, they are allowed to touch each other.

Find out the minimum number of segments that you need to move to achieve this. In other words, you want to maximize the number of segments that are left untouched. It's guaranteed that the sum of the lengths of the segments is such that they all can fit in **\[0, L\]**.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains three space-separated integers **N, L, R**.
- The second line of each test case contains **N** space-separated integers. The i-th integer denotes the coordinate of the left end point of i-th segment, i.e. **xi**.

### Output

For each test case, output a single integer corresponding to the minimum number of segments that you need to move.

### Constraints

- 1 ≤ **T** ≤ 2500
- 1 ≤ **N** ≤ 500
- 1 ≤ **L, R** ≤ 109
- -109 ≤ **xi** ≤ 109
- Sum of **N** over all test cases in a single test file won't exceed 2500.
- **L** ≥ **R \* N**, i.e. all the segments can fit inside the range.

### Example

<pre>
<b>Input</b>
3
4 4 1
0 1 2 3
4 4 1
-1 2 3 5
4 4 1
2 2 2 2

<b>Output</b>
0
2
3
</pre>### Explanation

**Example 1**. All the segments lie in the range \[0, **L**\]. None of the segments overlap with each other. Hence, we don't need to move any segment at all.

**Example 2**. You can move the first segment to \[0, 1\]. You can also move the fourth segment to \[1, 2\]. After this movement, you can see that the all the segments lie in the range \[0, **L**\] and none of the segments overlap with each other. Overall, we moved 2 segments. There is no way to achieve this by moving less than 2 segments.
