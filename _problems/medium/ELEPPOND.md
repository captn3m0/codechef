---
category_name: medium
problem_code: ELEPPOND
problem_name: 'Elephants in a Pond'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 13-11-2018
tags:
    - admin2
    - bipartite
    - cook100
    - matching
    - maxflow
    - medium
    - segment
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/ELEPPOND'
time:
    view_start_date: 1542565802
    submit_start_date: 1542565802
    visible_start_date: 1542565802
    end_date: 1735669800
    current: 1559472973
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/CK100TST/hindi/ELEPPOND.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/CK100TST/mandarin/ELEPPOND.pdf), \[Russian\](http://www.codechef.com/download/translated/CK100TST/russian/ELEPPOND.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/CK100TST/vietnamese/ELEPPOND.pdf) and \[Bengali\](http://www.codechef.com/download/translated/CK100TST/bengali/ELEPPOND.pdf) as well. Some elephants have decided to drink water from a pond. The pond may be considered a grid with $N$ rows (numbered $1$ through $N$) and $N$ columns (numbered $1$ through $N$). There are $4N$ elephants and they stand at the perimeter of the pond in such a way that there is exactly one elephant at the top and bottom of each column and at the left and right end of each row. Since elephants can only see straight, in order to drink, an elephant must stretch its trunk over and into the pond. If an elephant's trunk has length $L$, it covers $L$ nearest cells to the elephant in the elephant's row or column. For example, for an elephant with trunk length $3$ standing at the south side of column $2$, its trunk should cover cells $(N, 2)$, $(N-1, 2)$ and $(N-2, 2)$. Since elephant herds have a strict hierarchy, the elephants on each side of the pond order themselves in such a way that their trunk lengths are either non-increasing or non-decreasing. It is guaranteed that the trunks of elephants at the opposite ends of a row or column will never touch each other. But it is still possible for the trunks of some elephants (which are on adjacent sides) to touch or intersect in this scenario. The trunks of two elephants touch if there is at least one cell they both cover. The elephants do not want this to happen, so some of them have to leave. Your task is to find the minimum number of elephants that have to be removed from this arrangement so that no two remaining elephants' trunks touch each other. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $L\_{n, 1}, L\_{n, 2}, \\dots, L\_{n, N}$, where $L\_{n, i}$ denotes the length of the trunk of the elephant at the north side of column $i$. - The third line contains $N$ space-separated integers $L\_{s, 1}, L\_{s, 2}, \\dots, L\_{s, N}$, where $L\_{s, i}$ denotes the length of the trunk of the elephant at the south side of column $i$. - The fourth line contains $N$ space-separated integers $L\_{e, 1}, L\_{e, 2}, \\dots, L\_{e, N}$, where $L\_{e, i}$ denotes the length of the trunk of the elephant at the east side of row $i$. - The fifth line contains $N$ space-separated integers $L\_{w, 1}, L\_{w, 2}, \\dots, L\_{w, N}$, where $L\_{w, i}$ denotes the length of the trunk of the elephant at the west side of row $i$. ### Output For each test case, print a single line containing one integer — the minimum number of elephants to remove. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N \\le 10,000$ - $0 \\le L\_{d, i} \\le N$ for each valid $i$ and direction $d$ - for each direction $d$, the sequence $L\_{d, 1}, L\_{d, 2}, \\dots, L\_{d, N}$ is monotonous (ie. either monotonically increasing, or monotonically decreasing) - $L\_{n, i} + L\_{s, i} \\le N$ for each valid $i$ - $L\_{e, i} + L\_{w, i} \\le N$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $10,000$ ### Example Input ``` 2 2 1 1 1 1 1 1 1 1 2 1 2 1 0 0 0 0 0 ``` ### Example Output ``` 4 0 ``` ### Explanation \*\*Example case 1:\*\* The elephant on the North side at column 1 and the elephant on the West side at row 1 have their trunks touching each other. Similarly, there are three other intersections. You can check that you need to remove at least 4 elephants.
