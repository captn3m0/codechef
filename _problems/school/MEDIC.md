---
category_name: school
problem_code: MEDIC
problem_name: 'When to take medicine'
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
    - R
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: vishal_nnd0
problem_tester: null
date_added: 16-04-2019
tags:
    - vishal_nnd0
time:
    view_start_date: 1556307900
    submit_start_date: 1556307900
    visible_start_date: 1556307900
    end_date: 1735669800
    current: 1559472929
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You visit a doctor on a date given in the format $yyyy:mm:dd$. Your doctor suggests you to take pills every alternate day starting from that day. You being a forgetful person are pretty sure won’t be able to remember the last day you took the medicine and would end up in taking the medicines on wrong days. So you come up with the idea of taking medicine on the dates whose day is odd or even depending on whether $dd$ is odd or even. Calculate the number of pills you took on right time before messing up for the first time. ###Note: Every year that is exactly divisible by four is a leap year, except for years that are exactly divisible by 100; the centurial years that are exactly divisible by 400 are still leap years. For example, the year 1900 is not a leap year; the year 2000 is a leap year. ###Input: - First line will contain $T$, number of testcases. Then the testcases follow. - Each testcase contains of a single line of input, in the format $yyyy:mm:dd$ ###Output: For each testcase, output in a single line the required answer. ###Constraints - $ 1 \\leq T \\leq 1000 $ - $ 1900 \\leq yyyy \\leq 2038 $ - $yyyy:mm:dd$ is a valid date ###Sample Input: 1 2019:03:31 ###Sample Output: 1 ###EXPLANATION: You can take pill on the right day only on 31st March. Next you will take it on 1st April which is not on the alternate day.
