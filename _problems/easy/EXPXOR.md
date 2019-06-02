---
category_name: easy
problem_code: EXPXOR
problem_name: 'Expected Xor'
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
problem_author: anachor
problem_tester: null
date_added: 13-05-2019
tags:
    - anachor
    - cook106
    - cookoff
editorial_url: 'https://discuss.codechef.com/problems/EXPXOR'
time:
    view_start_date: 1558290720
    submit_start_date: 1558290720
    visible_start_date: 1558290720
    end_date: 1735669800
    current: 1559472944
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK106/hindi/EXPXOR.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/COOK106/mandarin/EXPXOR.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK106/russian/EXPXOR.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK106/vietnamese/EXPXOR.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK106/bengali/EXPXOR.pdf) as well. Monisha likes to paint. She has painted $N$ paintings (numbered $1$ through $N$) and wants to choose some subset of these paintings for an exhibition. For each valid $i$, the $i$-th painting has \*beauty\* $b\_i$ and the probability that it will be displayed at the exhibition is $p\_i$. Each painting is chosen or excluded from the exhibition independently randomly. The beauty of the resulting exhibition is the bitwise XOR of the beauties of all displayed paintings. If no paintings are displayed, the XOR is $0$. Monisha wants to find out how beautiful her exhibition is going to be. Help her compute the expected value of the beauty of the exhibition. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $b\_1, b\_2, \\ldots, b\_N$. - The third line contains $N$ space-separated real numbers $p\_1, p\_2, \\ldots, p\_N$. Each of these numbers is given with at most five digits after the decimal point. ### Output For each test case, print a single line containing one real number — the expected beauty of the exhibition. Your answer will be considered correct if its absolute or relative error does not exceed $10^{-6}$. ### Constraints - $1 \\le N \\le 10^5$ - $0 \\le b\_i \\le 10^9$ for each valid $i$ - $0 \\le p\_i \\le 1$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $4 \\cdot 10^5$ ### Example Input ``` 2 3 5 6 2 1.0 0.0 0.5 4 2 2 2 2 0.5 0.5 0.5 0.5 ``` ### Example Output ``` 6.000000000000000 1.000000000000000 ``` ### Explanation \*\*Example case 1:\*\* The first painting must be displayed at the exhibition, the second one must be excluded. If the third painting is displayed (with probability $0.5$), the beauty is $5 \\oplus 2 = 7$; if it is excluded (with probability $0.5$), the beauty is $5$. The expected beauty is $0.5 \\cdot 5 + 0.5 \\cdot 7 = 6$. \*\*Example case 2:\*\* If there is an odd number of paintings at the exhibition, the beauty is $2$; this has a probability of $0.5$. If there is an even number of paintings, the beauty is $0$ (with probability $0.5$), so the expected beauty is $0.5 \\cdot 0 + 0.5 \\cdot 2 = 1$.
