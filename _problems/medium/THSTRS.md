---
category_name: medium
problem_code: THSTRS
problem_name: 'Three Strings'
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
max_timelimit: '1.75'
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
    current: 1559472984
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given three strings $A, B, C$. You want to find a string $Z$ (possibly empty) such that the string $A + Z + B$ contains $C$ as a substring. Find out the smallest possible length of string $A + Z + B$ that can satisfy the above criteria. ### Input - The first line of the input contains an integer $T$ denoting the number of test cases. The description of the test cases follows. - Each testcase consists of three lines which contain the strings $A, B, C$ respectively. ### Output For each test case, output an integer corresponding to the answer of the problem. ###Constraints - $1 \\le T \\le 10^5$ - $1 \\le |A|, |B|, |C| \\leq 2 \* 10^5$ - Each string consists only of lower case English alphabets ('a' to 'z') - Sum of the length of all three strings over all the testcases doesn't exceed $6 \* 10^6$ ### Example Input ``` 2 abc cde bccd abc cde cec ``` ### Example Output ``` 6 7 ``` ###Explanation: \*\*Testcase 1\*\*: Take $Z$ to be the empty string. So now, $A + Z + B$ becomes "abccde", and "bccd" is a substring of it. So this is a valid choice, and you can see that you cannot get a shorter string. Hence the answer is 6. \*\*Testcase 2\*\*: Take $Z$ = "e". So now, $A + Z + B$ becomes "abcecde", and "cec" is a substring of it. So this is a valid choice, and you can see that you cannot get a shorter string. Hence the answer is 7.
