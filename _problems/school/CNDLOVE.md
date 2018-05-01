---
category_name: school
problem_code: CNDLOVE
problem_name: 'Candy Love'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
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
    - CLOJ
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kr_abhinav
problem_tester: null
date_added: 3-04-2018
tags:
    - kr_abhinav
time:
    view_start_date: 1522873800
    submit_start_date: 1522873800
    visible_start_date: 1522873800
    end_date: 1735669800
    current: 1525198874
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Sammy and Simmy love candies and frequently visit the local candy shop. Sammy and Simmy have bought $N$ candy packs. Packet $i$ contains $A\_{i}$ candies. Sammy being the elder one is happy only if she has strictly more candies than Simmy. However Simmy, the more sensible one, is happy only if the difference between their number of candies is not more than $1$. The shopkeeper, being a generous lady, agrees to help Sammy and Simmy by distributing the candies among them in a way that makes both of them happy. The shopkeeper can open the packs and distribute the candies even within a single pack to different people. ###Input: - The first line will contain $T$, the number of testcases. - The first line of every test case will contain $N$, the number of candy packs. - The next line has $N$ integers, the $i\_{th}$ integer denoting $A\_{i}$, the number of candies in the $i\_{th}$ pack. ###Output: Output "YES" if its possible for the shopkeeper to make both the sisters happy otherwise output "NO". ###Constraints - $1 \\leq T \\leq 10^3$ - $1 \\leq N \\leq 10^3$ - $1 \\leq A\_{i} \\leq 100$ ###Sample Input: 1 2 5 2 ###Sample Output: YES ###EXPLANATION: Sammy gets 4 candies from the first pack. Simmy gets 1 candy from the first pack and 2 from the second one. So in total, Sammy has 4, and Simmy has 3. Since Sammy has strictly more candies than Simmy, Sammy is happy. And since the difference is not more then 1, Simmy is also happy. Thus both of them are happy.
