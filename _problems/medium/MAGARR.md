---
category_name: medium
problem_code: MAGARR
problem_name: 'Magic Array'
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
problem_author: smelskiy
problem_tester: null
date_added: 26-01-2019
tags:
    - implementation
    - medium
    - observations
    - smelskiy
    - snckfl19
editorial_url: 'https://discuss.codechef.com/problems/MAGARR'
time:
    view_start_date: 1550311200
    submit_start_date: 1550311200
    visible_start_date: 1550311200
    end_date: 1735669800
    current: 1559472975
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/SNCKFL19/hindi/MAGARR.pdf), \[Bengali\](http://www.codechef.com/download/translated/SNCKFL19/bengali/MAGARR.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/SNCKFL19/mandarin/MAGARR.pdf), \[Russian\](http://www.codechef.com/download/translated/SNCKFL19/russian/MAGARR.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/SNCKFL19/vietnamese/MAGARR.pdf) as well. Sonya loves problems with sequences, so she has a large collection of different sequences at home. Some of these sequences are magic sequences. A \*magic sequence\* with length $N$ is an integer sequence $s\_1, s\_2, \\ldots, s\_N$ with the following properties: - At least one of its elements is $0$. - For each valid $i$, $s\_i$ is the distance of element $s\_i$ to the closest zero element. Formally, $s\_i$ is the minimum of $|j-i|$ over all valid indices $j$ such that $s\_j = 0$. Note that this definition is self-consistent: if we fix the positions of all zeroes in the sequence, it does not require any of these elements to be non-zero or any other elements to be zero. For example, $\[0, 1, 2, 1, 0\]$, $\[2, 1, 0, 1, 0, 0\]$ and $\[2, 1, 0, 1, 2\]$ are magic sequences, but $\[1, 1, 0\]$, $\[1\]$ and $\[1, 2, 0, 2\]$ are not. Danya decided to determine how well Sonya is familiar with magic sequences, so he asked her a question. In this question, Danya gave Sonya a sequence $a\_1, a\_2, \\ldots, a\_N$. Sonya must determine whether it is possible to rearrange (permute) the elements of this sequence in such a way that the resulting sequence is a magic sequence. If it is possible, she also needs to find one such resulting sequence. Since Sonya needs to take care of her sequences, she asks you to answer Danya's question. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $a\_1, a\_2, \\ldots, a\_N$. ### Output For each test case: - If there is no solution, print a single line containing the string `"No"` (without quotes). - Otherwise, print two lines. The first of these lines should contain the string `"Yes"` (without quotes). The second line should contain $N$ space-separated integers — a permutation of $a\_1, a\_2, \\ldots, a\_N$ which forms a magic sequence. If there are multiple possible solutions, print any of them. ### Constraints - $1 \\le T \\le 3$ - $1 \\le N \\le 10^4$ - $0 \\le a\_i \\le N$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $10^4$ ### Example Input ``` 3 4 1 2 1 1 8 5 0 4 1 0 2 3 1 11 0 1 1 2 0 3 1 2 0 2 1 ``` ### Example Output ``` No Yes 0 1 0 1 2 3 4 5 Yes 0 1 2 3 2 1 0 1 2 1 0 ```
