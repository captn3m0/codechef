---
category_name: easy
problem_code: SEVENSEG
problem_name: 'Corrupted Seven-Segment Display'
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
problem_author: erfaniaa
problem_tester: null
date_added: 27-03-2019
tags:
    - bitmasking
    - easy
    - erfaniaa
    - implementation
    - ltime70
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/SEVENSEG'
time:
    view_start_date: 1553965202
    submit_start_date: 1553965202
    visible_start_date: 1553965202
    end_date: 1735669800
    current: 1559472958
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTIME70/mandarin/SEVENSEG.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTIME70/bengali/SEVENSEG.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTIME70/hindi/SEVENSEG.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTIME70/russian/SEVENSEG.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME70/vietnamese/SEVENSEG.pdf) as well. Consider a seven-segment display, which can be used to show a decimal digit ($0$ through $9$). When a digit is shown on a working display, specific segments of the display turn on, as depicted in the following image (for digits $1$ through $9$): !\[\](https://codechef\_shared.s3.amazonaws.com/download/Images/LTIME70/SEVENSEG/SEVENSEG.PNG) $0$ is depicted as usual, with all the segments turned on, except the middle one. Some of the segments of this display (possibly all or none) are dead ― they never turn on. In order to find out which segments could be dead, we ran $N$ tests with the display. For each $i$ ($1 \\le i \\le N$), in the $i$-th test, we tried to show the digit $x\_i$ and out of the $7$ segments of the display, $y\_i$ segments turned on. It is possible that the results of tests have been recorded incorrectly. Determine if the recorded results are valid, i.e. if there is a set of dead segments such that in each test, the recorded number of segments that turned on is correct. If it is valid, calculate the minimum possible number of dead segments and the maximum possible number of dead segments consistent with the results of the tests. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - $N$ lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains two space-separated integers $x\_i$ and $y\_i$. ### Output For each test case: - If the results of tests are invalid, print a single line containing the string `"invalid"` (without quotes). - Otherwise, print a single line containing two space-separated integers ― the minimum and maximum number of dead segments. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N \\le 10$ - $0 \\le x\_i \\le 9$ for each valid $i$ - $0 \\le y\_i \\le 7$ for each valid $i$ - $x\_1, x\_2, \\ldots, x\_N$ are pairwise distinct ### Subtasks \*\*Subtask #1 (20 points):\*\* $N = 1$ \*\*Subtask #2 (80 points):\*\* original constraints ### Example Input ``` 2 2 2 4 5 4 2 8 6 0 7 ``` ### Example Output ``` 1 2 invalid ```
