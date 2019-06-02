---
category_name: easy
problem_code: EOSUBSEQ
problem_name: 'Even Odd subsequences'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.6'
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
    - PYP3
    - CLOJ
    - COB
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 17-12-2018
tags:
    - admin2
time:
    view_start_date: 1545157800
    submit_start_date: 1545157800
    visible_start_date: 1545157800
    end_date: 1735669800
    current: 1559472943
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given an array $a$ of length $n$. A subsequence of this array is valid, if it satisfies these two conditions: - There shouldn't be any two even numbers within a distance of $K$, both which have been chosen in the subsequence. i.e. there shouldn't be two indices $i, j$ such that $a\_i$ and $a\_j$ are even, $|i - j| \\leq K$ and $a\_i$ and $a\_j$ are in the subsequence. - Similarly, there shouldn't be any two odd numbers within a distance of $K$, both which have been chosen in the subsequence The sum of a subsequence is the sum of all the numbers in it. Your task is find the maximum sum possible in a valid subsequence of the given array. Print this maximum sum. ### Input - The first line of the input contains an integer $T$ denoting the number of test cases. The description of the test cases follows. - The first line of each test case contains two space-separated integers $n, k$. - The second line of each test case contains $n$ space-separated integers denoting the array $a$. ### Output For each test case, output an integer corresponding to the answer of the problem. ###Constraints - $1 \\le T \\le 10^5$ - $1 \\le n \\leq 10^5$ - $1 \\le k \\leq n$ - $1 \\le a\_i \\leq 10^9$ - Sum of $n$ over all the test cases doesn't exceed $10^6$ ### Example Input ``` 3 1 1 3 2 1 2 2 5 2 1 2 3 4 6 ``` ### Example Output ``` 3 2 11 ``` ###Explanation: \*\*Testcase 2\*\*: Only one of the two 2s can be chosen. Hence the answer is 2. \*\*Testcase 3\*\*: The subsequence containing the second, third and fifth numbers is a valid subsequence, and its sum is 2+3+6 = 11. You can check that this is the maximum possible, and hence is the answer.
