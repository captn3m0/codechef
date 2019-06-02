---
category_name: easy
problem_code: SUBLD
problem_name: 'Subtract Leading Digit'
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
problem_author: vijju123
problem_tester: null
date_added: 17-11-2018
tags:
    - vijju123
time:
    view_start_date: 1542546000
    submit_start_date: 1542546000
    visible_start_date: 1542546000
    end_date: 1735669800
    current: 1559472961
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Vasya learned about integer subtraction in school. He is still not very good at it, so he is only able to subtract any single digit number from any other number (which is not necessarily single digit). For practice, Vasya chose a positive integer $n$ and wrote it on the first line in his notepad. After that, on the second line he wrote the result of subtraction of the first digit of $n$ from itself. For example, if $n = 968$, then the second line would contain $968 - 9 = 959$, while with $n = 5$ the second number would be $5 - 5 = 0$. If the second number was still positive, then Vasya would write the result of the same operation on the following line, and so on. For example, if $n = 91$, then the sequence of numbers Vasya would write starts as follows: $91, 82, 74, 67, 61, 55, 50, \\ldots$. One can see that any such sequence eventually terminates with the number $0$. Since then, Vasya lost his notepad. However, he remembered the total number $k$ of integers he wrote down (including the first number $n$ and the final number $0$). What was the largest possible value of $n$ Vasya could have started with? ###Input: The first line contains $T$ , number of test cases per file. The only line in each testcase contains a single integer $k-$ the total number of integers in Vasya's notepad ($2 \\leq k \\leq 10^{12}$). ###Output: Print a single integer$-$ the largest possible value of the starting number $n$. It is guaranteed that at least one such number $n$ exists, and the largest possible value is finite. ###Constraints - $1 \\leq T \\leq 34 $ - $2 \\leq k \\leq 10^{12}$ ###Sample Input ``` 3 2 3 100 ``` ###Sample Output: ``` 9 10 170 ```
