---
category_name: easy
problem_code: CAPTBIRD
problem_name: 'Capturing Bird in A Camera'
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
date_added: 13-12-2018
tags:
    - admin2
time:
    view_start_date: 1545157800
    submit_start_date: 1545157800
    visible_start_date: 1545157800
    end_date: 1735669800
    current: 1559472938
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Nature photographing may be fun for tourists, but it is one of the most complicated things for photographers. To capture all the facets of a bird, you might need more than one cameras. You recently encountered such a situation. There are $n$ photographers, so there are $n$ cameras in a line on the x-axis. All the cameras are at distinct coordinates. You want to pair up these cameras ($n$ is even) in such a way that the sum of angles subtended on the bird by the pair of cameras is maximized. Formally, let A, B be two cameras, and let P be the bird to be captured by these two cameras. The angle will APB. Note: All angles are in radians. ### Input - The first line of the input contains an integer $T$ denoting the number of test cases. The description of the test cases follows. - The first line of each test case contains an integer $n$. - The second line of each test case contains $n$ space-separated integers denoting the $x\_i$ coordinates of the cameras. - The third line of each test case contains two space-separated integers $P, Q$ denoting the x and y coordinates of the bird respectively. ### Output For each test case, output your answer in a single line. Your answer would be considered correct if its absolute error is less than or equal to 1e-6 of the actual answer. ###Constraints - $1 \\le T \\le 10$ - $2 \\le n \\leq 100$ - $1 \\le x\_i \\leq 300$ - $0 \\le P \\leq 300$ - $1 \\le Q \\leq 300$ ### Example Input ``` 2 2 0 1 0 1 2 0 1 100 1 ``` ### Example Output ``` 0.785398163397 0.000100999899 ``` ###Explanation \*\*Note\*\*: $1 \\leq x\_i$ is not being satisfied by the sample input, but will be satisfied in the actual test data. \*\*Testcase 1\*\*: There are only 2 cameras, so they have to paired up with each other. And the angle subtended by then is 45 degrees. Converting this to radians gives the output.
