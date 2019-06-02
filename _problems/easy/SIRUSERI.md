---
category_name: easy
problem_code: SIRUSERI
problem_name: 'Siruseri Gerrymandering'
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
date_added: 17-12-2018
tags:
    - admin2
time:
    view_start_date: 1545157800
    submit_start_date: 1545157800
    visible_start_date: 1545157800
    end_date: 1735669800
    current: 1559472959
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.The country of Siruseri has $A\*B$ districts. You want to create $A$ states from these districts, such that each state has exactly $B$ districts, and each district is part of exactly one state. You don't care about the geographical location of the districts. You can pick any $B$ districts and make it into a state. There are only two parties contesting in the coming elections: $P\_1$ and $P\_2$. You know the number of votes that each party receives in each district. In the i-th district, $P\_1$ gets $c\_i$ votes and $P\_2$ gets $d\_i$ votes. You are guaranteed that all these $2\*A\*B$ integers (the number of votes received by each party in the districts) are distinct. Also, both $A$ and $B$ are odd. Suppose you have chosen which districts belong to which states, then, to find out who wins any particular state, they follow a weird rule: Suppose the number of votes that $P\_1$ gets in the $B$ districts of a particular state are $x\_1, x\_2, \\ldots, x\_B$, and the number of votes that $P\_2$ gets in the $B$ districts of this state are $y\_1, y\_2, \\ldots, y\_B$. Then among all these $2\*B$ numbers, the largest number is chosen (note that we are guaranteed of an unique largest number). If that number is some $x\_i$, then $P\_1$ wins this state. If the largest number is some $y\_j$, then $P\_2$ wins this state. You secretly support the party $P\_1$, and hence you want to assign the districts to states, in such a way, that the number of states won by $P\_1$ is maximized. Find this maximum number of states that $P\_1$ can win. Note that $c\_i$ and $d\_i$ will always remain associated with the i-th district. If the i-th district gets assigned to a particular state, then both $c\_i$ and $d\_i$ will be considered when deciding who won that state. ###Input: - The first line of the input contains a single integer, $T$, the number of testcases. The description of each testcase follows. - The first line of each testcase contains two integers, $A$ and $B$. - The second line of each testcase contains $A\*B$ integers: $c\_1, c\_2, \\ldots, c\_{A\*B}$, the number of votes won by $P\_1$ in the districts. - The third line of each testcase contains $A\*B$ integers: $d\_1, d\_2, \\ldots, d\_{A\*B}$, the number of votes won by $P\_2$ in the districts. ###Output: For each testcase output a single line which contains the maximum number of states that $P\_1$ can win. ###Constraints: - $1 \\leq T \\leq 5$ - $1 \\leq A, B$ - $A\*B \\leq 10^5$ - $A$, $B$ are odd - $1 \\leq c\_i, d\_i \\leq 10^9$ - All the $c\_i$ and $d\_i$ will be distinct. ###Sample Input: ``` 3 1 3 4 2 9 5 6 7 1 3 4 2 9 5 10 7 3 3 7 14 11 4 15 5 20 1 17 2 13 16 9 19 6 12 8 10 ``` ###Sample Output: ``` 1 0 3 ``` ###Explanation: \*\*Testcase 1\*\*: Since you have to form only 1 state, there is no choice, but to put all the 3 districts in that same state. Now to figure out who wins that single state, we take the maximum among {4, 2, 9, 5, 6, 7}. The maximum is 9, and that belongs to $P\_1$. Hence $P\_1$ wins this state. And because they have won 1 state, the answer is 1. \*\*Testcase 2\*\*: Similarly, there is no choice here. To figure out who wins that single state, we take the maximum among {4, 2, 9, 5, 10, 7}. The maximum is 10, and that belongs to $P\_2$. Hence $P\_2$ wins this state. And because $P\_1$ have won no states, the answer is 0. \*\*Testcase 3\*\*: We need to make three states with three districts each. Suppose we that the 3rd, 5th and 7th districts and form a state, the votes in them would be {11, 16, 15, 19, 20, 12}. The max among these is 20, and that belongs to $P\_1$. Hence $P\_1$ would win this state. Similarly, suppose we make the second state with the 2nd, 4th and 8th districts, the votes in them would be {14, 13, 4, 9, 1, 8}. The max among these is 14, and that belongs to $P\_1$. Hence $P\_1$ would win this state. The remaining three districts: 1st, 6th and 9th districts form the third state. The votes in them would be {7, 2, 5, 6, 17, 10}. The max among these is 17, and that belongs to $P\_1$. Hence $P\_1$ would win this state. In this situation, $P\_1$ wins three states. You obviously cannot do any better. Hence the answer is 3.
