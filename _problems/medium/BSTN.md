---
category_name: medium
problem_code: BSTN
problem_name: 'Bus Station'
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
max_timelimit: '2.5'
source_sizelimit: '50000'
problem_author: watcher
problem_tester: null
date_added: 23-01-2019
tags:
    - data
    - dynamic
    - ltime68
    - segment
    - watcher
editorial_url: 'https://discuss.codechef.com/problems/BSTN'
time:
    view_start_date: 1548522002
    submit_start_date: 1548522002
    visible_start_date: 1548522002
    end_date: 1735669800
    current: 1559472969
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTIME68/mandarin/BSTN.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTIME68/bengali/BSTN.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTIME68/hindi/BSTN.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTIME68/russian/BSTN.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME68/vietnamese/BSTN.pdf) as well. Ryan is the president of a planet. There is a large bus station on this planet and $M$ buses stop at this station every day. For each valid $i$, the $i$-th bus arrives at the station $t\_i$ seconds after midnight (on Ryan's planet, each day lasts $10^{100}$ hours, not $24$ hours), waits at the station for some non-negative (not necessarily integer) amount of time and then leaves. Ryan knows that $N$ people are coming to the station today. For each $i$ ($1 \\le i \\le N$), the $i$-th person is described by parameters $s\_i$, $a\_i$, $b\_i$, $c\_i$, $d\_i$ with the following meaning: - This person arrives at the station $s\_i$ seconds after midnight with dissatisfaction $0$. - If there is at least one bus that leaves the station strictly less than $a\_i$ seconds before this person arrives, their dissatisfaction increases by $b\_i$. - If this person has to wait at the station for at least $c\_i$ seconds before boarding a bus and leaving (this includes the time they spend waiting for a bus and the time spent waiting for that bus to leave), their dissatisfaction increases by $d\_i$. Ryan may be the president, but his power is quite limited. He can tell each bus driver when to leave the station and each passenger when to board a bus (these times do not have to be integers). He also has to follow one rule: it is not allowed for two buses to be at the station at the same time. As the president, his job is to make the citizens happy. Therefore, he is wondering about the minimum total dissatisfaction (the sum of final dissatisfactions of all $N$ passengers) he can achieve by using his power optimally. Of course, as an assistant to the president, you are the one who has to calculate that for him. Note that each passenger should board a bus at some point (during the day when they arrive at the station). Ryan does not want to leave someone hanging there for an eternity. Also, a passenger is allowed to board a bus at the moment when that bus is leaving (even if that passenger just arrived at the station at that moment). ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $M$. - The second line contains $M$ space-separated integers $t\_1, t\_2, \\ldots, t\_M$. - The third line contains a single integer $N$. - The fourth line contains $N$ space-separated integers $s\_1, s\_2, \\ldots, s\_N$. - The fifth line contains $N$ space-separated integers $a\_1, a\_2, \\ldots, a\_N$. - The sixth line contains $N$ space-separated integers $b\_1, b\_2, \\ldots, b\_N$. - The seventh line contains $N$ space-separated integers $c\_1, c\_2, \\ldots, c\_N$. - The eighth line contains $N$ space-separated integers $d\_1, d\_2, \\ldots, d\_N$. ### Output For each test case, print a single line containing one integer — the minimum total dissatisfaction of the passengers. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le M, N \\le 5 \\cdot 10^5$ - $1 \\le t\_i \\le 10^9$ for each valid $i$ - $1 \\le s\_i, a\_i, b\_i, c\_i, d\_i \\le 10^9$ for each valid $i$ - $t\_1, t\_2, \\ldots, t\_M, s\_1, s\_2, \\ldots, s\_N$ are pairwise distinct - the sum of $M$ over all test cases does not exceed $5 \\cdot 10^5$ - the sum of $N$ over all test cases does not exceed $5 \\cdot 10^5$ ### Subtasks \*\*Subtask #1 (15 points):\*\* - $1 \\le T \\le 50$ - $1 \\le N, M \\le 10^3$ \*\*Subtask #2 (85 points):\*\* original constraints ### Example Input ``` 1 2 5 10 3 4 6 11 4 4 4 4 4 4 2 4 1 100 2 2 ``` ### Example Output ``` 6 ```
