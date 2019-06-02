---
category_name: easy
problem_code: PERIODCN
problem_name: 'Count Periodic Numbers'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 12-12-2018
tags:
    - admin2
time:
    view_start_date: 1544985000
    submit_start_date: 1544985000
    visible_start_date: 1544985000
    end_date: 1735669800
    current: 1559472954
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.A positive integer $n$ is said to be periodic if satisfies the following property: Take the binary representation of $n$ without leading zeros. Then create an array which contains the length of consecutive runs of equal bits in this binary representation. All the elements of this array should be equal. If there are two unequal elements in this array, then $n$ is not periodic. For example: Suppose $n = 3$. Its binary representation is 11. And the array created would be {2}, which corresponds to the fact that there are two equal bits in the beginning. This is periodic. Suppose $n = 51$. Its binary representation is 110011. And the array created would be {2, 2, 2}, which corresponds to the fact that there are two equal bits are the beginning, then the next two are equal, and then the next two are equal. This is also periodic. Suppose $n = 103$. Its binary representation is 1100111. And the array created would be {2, 2, 3}, which corresponds to the fact that there are two equal bits are the beginning, then the next two are equal, and then the next three are equal. This is not periodic because the array contains two different values (2 and 3). You are given two integers $L, R$. Find the number of integers in the range $\[L, R\]$ (both inclusive) that are periodic. ### Input - The first line of the input contains an integer $T$ denoting the number of test cases. The description of the test cases follows. - The first line of each test case contains two space-separated integers $L, R$. ### Output For each test case, output a single line containing an integer corresponding to the number of periodic numbers in the range $\[L, R\]$. ###Constraints - $1 \\le T \\le 10^5$ - $1 \\le L, R \\leq 10^9$ ### Example Input ``` 2 3 3 1 10 ``` ### Example Output ``` 1 6 ``` ###Explanation \*\*Testcase 1\*\*: The only number between $L$ and $R$ is 3, which is periodic. Hence the answer is 1. \*\*Testcase 2\*\*: The periodic numbers between 1 and 10 are 1, 2, 3, 5, 7, 10. Since there are six of them, then answer is 6.
