---
category_name: school
problem_code: DANOW
problem_name: 'Danny Wants To Know'
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
problem_author: aashu_k
problem_tester: null
date_added: 5-04-2019
tags:
    - aashu_k
time:
    view_start_date: 1554669000
    submit_start_date: 1554669000
    visible_start_date: 1554669000
    end_date: 1735669800
    current: 1559472925
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.As we know, Danny has a huge army and each time she wins a battle the size of her army is increased. Missandei, her advisor and Handmaiden, keeps the log of each battle and the amount and strength of soldiers won in a battle. Now, Danny has some questions for Missandei in which she asks the strength of the army gained during some battles. She will ask the query of the form $L, R$ and Missandei has to tell the strength gained in between the $L$ and $R$ battles. Help Missandei. You are given an array $A$, where $A\[i\]$ represents the number of soldiers won in $i^{th}$ battle and the strength of a soldier who won in $i^{th}$ battle is given in another array $B\[i\]$. ( $B\[i\]$ represents the strength of each soldier who won in the $i^{th}$ battle). ###Input: - First line will contain $N$ and $Q$, number of battles fought and number of queries. - Next line contains $N$ space separated integers denoting the array $A$. - Next line contains $N$ space separated integers denoting the array $B$. - Next $Q$ lines contain two integers $L$ and $R$. ###Output: For each query, output the strength gained in between the $L$ and $R$ battles (both inclusive). ###Constraints - $1 \\leq N, Q \\leq 1000$ - $0 \\leq A\[i\] \\leq 10^6$ - $0 \\leq B\[i\] \\leq 10^6$ - $1 \\leq L \\leq R \\leq N$ ###Sample Input: 5 3 2 3 1 6 5 1 2 3 4 5 2 3 1 1 1 5 ###Sample Output: 9 2 60 ###EXPLANATION: For the first query, strength gained in $2^{nd}$ battle is $2\*3 = 6$ and in $3^{rd}$ battle is $3\*1 = 3$. Total = $6 + 3 = 9$.
