---
category_name: easy
problem_code: PROBSET
problem_name: 'Chef and Problem Setting'
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
problem_author: kingofnumbers
problem_tester: null
date_added: 23-08-2018
tags:
    - implementation
    - kingofnumbers
    - ltime63
editorial_url: 'https://discuss.codechef.com/problems/PROBSET'
time:
    view_start_date: 1535216402
    submit_start_date: 1535216402
    visible_start_date: 1535216402
    end_date: 1735669800
    current: 1559472956
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Hindi,](http://www.codechef.com/download/translated/LTIME63/hindi/PROBSET.pdf)[Mandarin chinese](http://www.codechef.com/download/translated/LTIME63/mandarin/PROBSET.pdf), [Russian](http://www.codechef.com/download/translated/LTIME63/russian/PROBSET.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME63/vietnamese/PROBSET.pdf) as well.

Chef wants to set problems for a Lunchtime contest. He already has all the problem ideas and tests for them. Now, he only needs someone to test them, so he asked Hasan to do it. Hasan is now testing the problems, the problem that hasan is currently testing has $M$ tests (numbered $1$ through $M$). He wrote $N$ solutions (numbered $1$ through $N$) for this problem; some of the solutions are intended to pass, while other ones are intended to fail on some tests. He has submitted all of his solutions to this problem in a testing contest. For each solution, the system returned a (possibly empty) list of tests on which this solution failed as feedback. There are three possible outcomes: - If there is a solution which is intended to pass all tests, but fails on some test, the tests are \*invalid\*. - If the tests are not invalid and there is a solution which is intended to fail on some test, but passes all tests, the tests are \*weak\*. - If the tests are not invalid or weak, they are \*fine\*. Help Hasan determine the outcome for this problem! ### Input - The first line of the input contains a single integer $T$ denoting the number of problems that Hasan wants to test. The description of $T$ problems follows. - The first line contains two space-separated integers $N$ and $M$. - $N$ lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains the string `"correct"` if the $i$-th solution is intended to pass or `"wrong"` if it is intended to fail, followed by a space and a string with length $M$. For each valid $j$, the $j$-th character of this string is '1' if the $i$-th solution passed the $j$-th test or '0' if it failed the $j$-th test. ### Output For each test case, print a single line containing one of the strings `"FINE"`, `"INVALID"` or `"WEAK"`. ### Constraints - $1 \\le T \\le 100$ - $2 \\le N, M \\le 50$ ### Subtasks \*\*Subtask #1 (100 points):\*\* original constraints ### Example Input ``` 4 4 5 correct 11111 wrong 10101 correct 11111 wrong 01111 4 5 correct 10110 wrong 11111 correct 11111 wrong 01000 4 5 correct 11111 wrong 11111 wrong 10100 wrong 00000 4 5 wrong 10110 correct 01101 correct 11111 wrong 11000 ``` ### Example Output ``` FINE INVALID WEAK INVALID ``` ### Explanation \*\*First problem:\*\* All correct submissions are passing all tests and each wrong submission is failing on at least one test, so the tests are fine. \*\*Second problem:\*\* The first submission is failing on the second and fifth test, even though it is intended to be correct, so the tests are invalid. Note that even though the second submission indicates that the tests are also weak, the answer is still `"INVALID"`, since you should print `"WEAK"` only if the tests are not invalid. \*\*Third problem:\*\* All correct submissions are passing, so the tests are valid, but the second submission is intended to fail, yet it passes all tests, so the tests are weak. \*\*Fourth problem:\*\* The second submission is correct, but it is not passing all tests, so the tests are invalid.
