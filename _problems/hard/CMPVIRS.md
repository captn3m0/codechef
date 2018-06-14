---
category_name: hard
problem_code: CMPVIRS
problem_name: 'Computer Virus'
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
    - codemelange
    - combinatorics
    - hard
    - kr_abhinav
    - math
editorial_url: 'https://discuss.codechef.com/problems/CMPVIRS'
time:
    view_start_date: 1522873800
    submit_start_date: 1522873800
    visible_start_date: 1522873800
    end_date: 1735669800
    current: 1525454405
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.There are $N$ computer screens in a line from left to right. The $i^{th}$ screen from left displays number $i (1 \\le i \\le N) $. Now these computer screens are divided into $m$ groups. You are given $d\_1,d\_2,d\_3....d\_m (1 \\le d\_1 \\le d\_2 \\le d\_3... \\le d\_m$ and $\\sum\_{i=1}^{m} d\_i = N)$. This means that $1^{st}$ group contains screens displaying numbers from $1$ to $d\_1$, $2^{nd}$ group contains numbers from $d\_1+1$ to $d\_1+d\_2$ and so on. Now there is a computer virus which is infecting these computer screens. Initially, all screens are uninfected. Now, these computers perform the following operations as long as there exists an uninfected screen: During each operation step, two things happen. First, the virus infects the rightmost uninfected screen in each group. Then, every uninfected screen updates the value on its screen to the sum of all values on uninfected screens to its left, and its own screen, modulo $10^9+7$. For given $N$ and $d\_1,d\_2...d\_m$ find sum of all numbers on the screens of the computers (eventually, after everything becomes infected, and this process stops) modulo $10^9+7$. ###Input: - First line contains two integers $N$ and $m$. - Next line contains $m$ space separated integers denoting the array $d\_1,d\_2.....,d\_m$. ###Output: Output in a single line sum of all numbers on the screens of computers modulo $10^9+7$. ###Constraints - $2 \\leq N \\leq 10^7$ - $1 \\leq m \\leq 10^3$ - $\\sum\_{i=1}^{m} d\_i = N$ - $1 \\le d\_1 \\le d\_2 \\le ...d\_{m-1} \\le d\_m$ ###Sample Input: 6 2 3 3 ###Sample Output: 33 ###EXPLANATION: There are two groups. Group1 Group2 1 2 \*\*3\*\* 4 5 \*\*6\*\* (3 and 6 infected) 1 3 \*\*3\*\* 7 12 \*\*6\*\* (update value on each uninfected screen by sum of all numbers on uninfected screens to its left including the current screen modulo 1000000007) 1 \*\*3\*\* \*\*3\*\* 7 \*\*12\*\* \*\*6\*\* (Now virus infects the rightmost uninfected computer in each group) 1 \*\*3\*\* \*\*3\*\* 8 \*\*12\*\* \*\*6\*\* (update value on each uninfected screen by sum of all numbers on uninfected screens to its left including the current screen modulo 1000000007) \*\*1\*\* \*\*3\*\* \*\*3\*\* \*\*8\*\* \*\*12\*\* \*\*6\*\*(Virus infects the rightmost uninfected computer in each group) Answer = (1+3+3+8+12+6)% 1000000007 = 33
