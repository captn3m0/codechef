---
category_name: medium
problem_code: MKSTR
problem_name: 'Make a String'
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
problem_author: fekete
problem_tester: null
date_added: 25-07-2018
tags:
    - dynamic
    - fekete
    - fekete
    - likecs
    - ltime62
    - medium
    - string
    - tries
editorial_url: 'https://discuss.codechef.com/problems/MKSTR'
time:
    view_start_date: 1532797200
    submit_start_date: 1532797200
    visible_start_date: 1532797200
    end_date: 1735669800
    current: 1559472977
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Hindi,](http://www.codechef.com/download/translated/LTIME62/hindi/MKSTR.pdf)[Mandarin chinese](http://www.codechef.com/download/translated/LTIME62/mandarin/MKSTR.pdf), [Russian](http://www.codechef.com/download/translated/LTIME62/russian/MKSTR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME62/vietnamese/MKSTR.pdf) as well.

You have an initially empty string $S$, a target string $T$ and a sequence of $n$ strings $p\_1, p\_2, \\dots, p\_n$. You may perform any number of operations; let's denote by $|S|$ the length of the string $S$ before the current operation. Each operation should be of one of the following types: - insert a lowercase English letter $x$ at the beginning of the string $S$; the cost of this operation is $cl\_x \\cdot |S|$ - append a lowercase English letter $x$ to the end of $S$ with cost $cr\_x \\cdot |S|$ - choose a valid index $i$ and insert the string $p\_i$ at the beginning of $S$ with cost $kl\_i \\cdot |S|$ - choose a valid index $i$ and append the string $p\_i$ to the end of $S$ with cost $kr\_i \\cdot |S|$ Note that in the first two types of operations, $x$ refers to any English lower case letter. Not just the letter 'x'. Your task is to calculate the minimum total cost of building the target string $T$, i.e. the minimum sum of costs of operations needed to make $S$ equal to $T$. ### Input - The first line of the input contains a single integer $n$. - $n$ lines follow. For each valid $i$, the $i$-th of these lines contains the string $p\_i$. - The next line contains $26$ space-separated integers $cl\_a, cl\_b, \\dots, cl\_z$. - The next line contains $26$ space-separated integers $cr\_a, cr\_b, \\dots, cr\_z$. - The next line contains $n$ space-separated integers $kl\_1, kl\_2, \\dots, kl\_n$. - The next line contains $n$ space-separated integers $kr\_1, kr\_2, \\dots, kr\_n$. - The last line contains a single string $T$. ### Output Print a single line containing one integer — the minimum cost of building the target string. ### Constraints - $1 \\le n \\le 10^4$ - $1 \\le |p\_i| \\le 100$ for each valid $i$ - $1 \\le |T| \\le 1,000$ - $1 \\le cl\_i, cr\_i \\le 10^9$ for each lowercase English letter $i$ - $1 \\le kl\_i, kr\_i \\le 10^9$ for each valid $i$ - all strings contain only lowercase English letters ### Subtasks \*\*Subtask #1 (30 points):\*\* - $n \\le 10$ - $|p\_i| \\le 10$ for each valid $i$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 3 aba ba xy 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 3 2 1 3 5 9 10 11 11 9 9 8 7 6 5 1 33 22 11 90 1 1 2 3 5 8 1 2 3 1 1 1 abacaba ``` ### Example Output ``` 5 ``` ### Explanation First of all, we should perform an operation of the first or second type and add the letter "c" to the initial empty string $S$, with cost $0$ because $|S|=0$ currently. Next, we should perform an operation of the third type, inserting the string "aba" at the beginning of $S$ with cost $1 \\cdot 1 = 1$ (since $|S|=1$ currently); after this operation, $S$ is "abac". Finally, we should perform an operation of the fourth type, appending the string "aba" to $S$ with cost $1 \\cdot 4 = 4$ (since $|S|=4$ currently). After this operation, $S=T$, so the total cost is $0 + 4 + 1 = 5$.
