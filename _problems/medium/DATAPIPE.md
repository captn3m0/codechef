---
category_name: medium
problem_code: DATAPIPE
problem_name: 'Data Pipelines'
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
date_added: 26-10-2018
tags:
    - admin2
    - arithmetic
    - cook100
    - easy
    - maths
    - pattern
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/DATAPIPE'
time:
    view_start_date: 1542565802
    submit_start_date: 1542565802
    visible_start_date: 1542565802
    end_date: 1735669800
    current: 1559472971
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/CK100TST/hindi/DATAPIPE.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/CK100TST/mandarin/DATAPIPE.pdf), \[Russian\](http://www.codechef.com/download/translated/CK100TST/russian/DATAPIPE.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/CK100TST/vietnamese/DATAPIPE.pdf) and \[Bengali\](http://www.codechef.com/download/translated/CK100TST/bengali/DATAPIPE.pdf) as well. Data pipelines are very important in dealing with big data. A data pipeline takes data from some source stream(s), processes this data and sends it to output stream(s). Codechef Beam is an example of such a pipeline. This pipeline takes data from $N\_s$ source streams and it is expected to send data to $N\_{oe}$ output streams. However, the actual number of output streams may be different. Internally, Beam calculates a parameter $K = \\lceil N\_s / N\_{oe} \\rceil$: the maximum number of source streams that may be sent to a single output stream. Then, output streams are created. The first $K$ input streams are assigned to one output stream, the next $K$ input streams to a second output stream and so on, until there are less than $K$ unassigned input streams. Then, if the number of unassigned input streams is positive, another output stream is created and all those unassigned input streams are assigned to it. For example, for $N\_s = 35$, $N\_{oe} = 20$, we have $K = 2$ and the actual number of output streams is $18$: $17$ output streams taking $2$ input streams each and one output stream taking $1$ input stream. You are given $N\_{oe}$, the maximum possible number of input streams $M$ and the desired final number of output streams $N\_{of}$. Find the number of integers $x$ from $1$ to $M$ (inclusive) such that if $N\_s = x$, Codechef Beam sends data to exactly $N\_{of}$ output streams. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains three space-separated integers $M$, $N\_{oe}$ and $N\_{of}$. ### Output For each test case, print a single line containing one integer — the number of possible values of $N\_s$ satisfying the given criteria. ### Constraints - $1 \\le T \\le 10^3$ - $1 \\le M, N\_{oe}, N\_{of} \\le 10^9$ ### Example Input ``` 2 40 20 18 40 20 5 ``` ### Example Output ``` 3 1 ``` ### Explanation \*\*Example case 1:\*\* The number of input streams $N\_s$ can be $18$, $35$ or $36$. \*\*Example case 2:\*\* The number of input streams must be $5$, since the number of output streams cannot be $5$ otherwise.
