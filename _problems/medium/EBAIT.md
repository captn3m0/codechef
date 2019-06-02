---
category_name: medium
problem_code: EBAIT
problem_name: 'Election Bait'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: bciobanu
problem_tester: null
date_added: 18-11-2018
tags:
    - bciobanu
    - equality
    - medium
    - number
    - snckel19
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/EBAIT'
time:
    view_start_date: 1544295600
    submit_start_date: 1544295600
    visible_start_date: 1544295600
    end_date: 1735669800
    current: 1559472973
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/S19ELTST/hindi/EBAIT.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/S19ELTST/mandarin/EBAIT.pdf), \[Russian\](http://www.codechef.com/download/translated/S19ELTST/russian/EBAIT.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/S19ELTST/vietnamese/EBAIT.pdf) and \[Bengali\](http://www.codechef.com/download/translated/S19ELTST/bengali/EBAIT.pdf) as well. The final elections for the government of Berland are taking place. There are only two parties in these elections; let's denote them by 'A' and 'B'. A party wins the elections if it has strictly more votes than the other party; if a tie occurs, the elections are invalid. The voting system is fully electronic, so throughout the day, the current results of the elections are updated live, as soon as each vote is cast. However, what the citizens do not know is that the whole election is a setup: the parties are actually working together to make the population think party A is winning until the end of the elections, which is when party B would come out victorious. The parties want to make this work by simply ignoring all votes which are not set up by them. Instead, they want to bring $N$ convoys of buses (numbered $1$ through $N$) carrying people whose votes will be actually counted. Let's denote the number of buses in the $i$-th convoy by $V\_i$. Each bus in an odd-numbered convoy should carry $X$ people voting for party A and each bus in an even-numbered convoy should carry $Y$ people voting for party B. The convoys arrive in the given order. For a convoy with $V\_i$ buses, the people from the first bus of this convoy cast their votes one by one, then the people from the second bus cast their votes, and so on until the people from the $V\_i$-th bus cast their votes. Then, all the people leave on the same buses before the next convoy arrives. For each bus except the last bus from the last convoy, after the people from this bus cast their votes, party A must have strictly more votes than party B. After the people from the last bus overall cast their votes, party B must have strictly more votes than party A. Party A can afford buses with at most $C\_1$ seats and party B can affords buses with at most $C\_2$ seats, so $1 \\le X \\le C\_1$ and $1 \\le Y \\le C\_2$ must hold. Find values of $X$ and $Y$ which make this scenario possible or report that there is no solution. If there are multiple solutions, you may find any one. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case will contain three space-separated integers $N$, $C\_1$ and $C\_2$. - The second line contains $N$ space-separated integers $V\_1, V\_2, \\dots, V\_N$. ### Output For each test case, print a single line. It should contain two space-separated integers $X$ and $Y$, or a single integer $-1$ if there is no solution. ### Constraints - $1 \\le T \\le 500$ - $1 \\le C\_1, C\_2 \\le 10^9$ - $1 \\le V\_i \\le 10^9$ for each valid $i$ - $\\sum\_{i=1}^N V\_i \\le 10^9$ - the sum of $N$ over all test cases does not exceed $10^6$ ### Example Input ``` 2 4 30 30 3 4 1 8 6 20 10 1 1 1 2 1 4 ``` ### Example Output ``` 28 10 20 9 ``` ### Explanation \*\*Example case 1:\*\* The sequence of buses is "AAABBBBABBBBBBBB". Whenever we find an 'A', $X = 28$ people vote for party A and whenever we find a 'B', $Y = 10$ people vote for party B. \*\*Example case 2:\*\* We can verify that the number of people voting for party A is greater than the number of people voting for party B after the people from each bus vote, except for the last bus, which is when the number of votes for party B is $120$ and the number of votes for party A is $112$.
