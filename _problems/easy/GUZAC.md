---
category_name: easy
problem_code: GUZAC
problem_name: 'GukiZ and Candies'
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
problem_author: allllekssssa
problem_tester: null
date_added: 12-08-2018
tags:
    - allllekssssa
    - cook
    - cook97
    - greedy
    - math
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/GUZAC'
time:
    view_start_date: 1534703400
    submit_start_date: 1534703400
    visible_start_date: 1534703400
    end_date: 1735669800
    current: 1559472946
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK97/mandarin/GUZAC.pdf), [Russian](http://www.codechef.com/download/translated/COOK97/russian/GUZAC.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK97/vietnamese/GUZAC.pdf) as well.

Professor GukiZ decided to distribute all of his candies to his $N$ students (numbered $1$ through $N$). Let's denote the number of candies GukiZ gave to the $i$-th student by $p\_i$. As GukiZ has a lot of students, he does not remember all the exact numbers of candies he gave to the students. He only remembers the following properties of the sequence $p$: - The numbers of candies given to each of the first $K$ students ($p\_1, p\_2, \\dots, p\_K$) are known exactly. - All elements of the sequence $p$ are distinct. - The difference between the maximum and minimum element of the sequence $p$ does not exceed $x$. - The professor gave out the biggest possible total number of candies, i.e. $S = p\_1 + p\_2 + p\_3 + \\ldots + p\_N$ is maximum possible. Normally, professors never lie, so the information provided by GukiZ is valid and there is at least one sequence that satisfies all conditions. GukiZ would like to know the total number of candies $S$ he had at the beginning. Can you help him find this number? ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains three space-separated integers $N$, $K$ and $x$. - The second line contains $K$ space-separated integers $p\_1, p\_2, \\dots, p\_K$. ### Output For each test case, print a single line containing one integer — the number of candies GukiZ had. ### Constraints - $1 \\le T \\le 50$ - $1 \\le N \\le 10^9$ - $1 \\le K \\le \\mathrm{min}(N, 2 \\cdot 10^4)$ - $0 \\le x \\le 10^9$ - $1 \\le p\_i \\le 10^9$ for each valid $i$ - there is at least one valid distribution of candies to students ### Example Input ``` 2 4 3 4 2 1 5 2 2 9 3 6 ``` ### Example Output ``` 12 9 ``` ### Explanation \*\*Example case 1:\*\* There are four students. We know that the first student got $p\_1 = 2$ candies, the second student got $p\_2 = 1$ and the third got $p\_3 = 5$ candies; we don't know the number of candies given to the last student. The difference between the maximum and minimum number of candies given to students is already $5-1 = 4 = x$, so the fourth student could only have been given between $1$ and $5$ candies. It can't be $5$ either, so we maximize the number of candies if we give $4$ candies to the fourth student. In total, there are $2 + 1 + 5 + 4 = 12$ candies. \*\*Example case 2:\*\* We know the number of candies given to each of the two students, so we know that GukiZ had $3 + 6 = 9$ candies.
