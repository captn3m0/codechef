---
category_name: medium
problem_code: PERMLIST
problem_name: 'Create Permutation'
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
problem_author: kingofnumbers
problem_tester: null
date_added: 22-02-2019
tags:
    - dsu
    - kingofnumbers
    - ltime69
editorial_url: 'https://discuss.codechef.com/problems/PERMLIST'
time:
    view_start_date: 1550941202
    submit_start_date: 1550941202
    visible_start_date: 1550941202
    end_date: 1735669800
    current: 1559472979
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTIME69/mandarin/PERMLIST.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTIME69/bengali/PERMLIST.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTIME69/hindi/PERMLIST.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTIME69/russian/PERMLIST.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME69/vietnamese/PERMLIST.pdf) as well. Consider a list $L$ of permutations, where a \*permutation with length\* $x$ denotes a permutation of integers $1$ through $x$ and the elements of this list are indexed starting from $1$. Initially, the list contains a single permutation with length $1$ (i.e. $L\_1 = (1)$). You may create new permutations and append them to $L$ using operations with the following form: - Choose two (not necessarily distinct) valid indices $i$ and $j$. - Let's denote the permutations $L\_i$ and $L\_j$ by $(A\_1, A\_2, \\ldots, A\_S)$ and $(B\_1, B\_2, \\ldots, B\_R)$ respectively. - Create a new permutation in one of the following ways (note that the permutations $L\_i$ and $L\_j$ in the list $L$ are not actually changed): 1. Add $S$ to each element of $L\_j$, then concatenate $L\_i$ and $L\_j$, i.e. the resulting permutation is $C = (A\_1, A\_2, \\ldots, A\_S, B\_1 + S, B\_2 + S, \\ldots, B\_R + S)$. For example, if $L\_i = (1, 4, 2, 3)$ and $L\_j = (2, 1)$, then $C = (1, 4, 2, 3, 6, 5)$. 2. Add $R$ to each element of $L\_i$, then concatenate $L\_i$ and $L\_j$, i.e. the resulting permutation is $C = (A\_1 + R, A\_2 + R, \\ldots, A\_S + R, B\_1, B\_2, \\ldots, B\_R)$. For example, if $L\_i = (1, 4, 2, 3)$ and $L\_j = (2, 1)$, then $C = (3, 6, 4, 5, 2, 1)$. - Append $C$ to $L$, i.e. if $L$ contained $p$ permutations before this operation, then $C$ becomes permutation $L\_{p+1}$. You are given a permutation $P = (P\_1, P\_2, \\ldots, P\_N)$. You should create this permutation using at most $2N$ operations (the last of these operations must append $P$ to $L$) or determine that it is impossible. It is not required to use the minimum number of operations. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $P\_1, P\_2, \\ldots, P\_N$. ### Output For each test case, if it is impossible to create the given permutation, print a single line containing the string `"NO"` (without quotes). Otherwise: - Print a line containing the string `"YES"` (without quotes). - Then, print a line containing a single integer $K$ — the number of operations you want to perform ($1 \\le K \\le 2N$). - Then, print $K$ lines. Each of these lines should contain three space-separated integers $i$, $j$ and $w$ describing one operation ($1 \\le w \\le 2$), where $w=1$ or $w=2$ denotes that you want to create the new permutation in the first way or the second way (described above), respectively. Your solution will be considered incorrect if either $i$ or $j$ is invalid for any of your operations or if at the end, the last permutation in the list is not equal to $P$. ### Constraints - $1 \\le T \\le 1,000$ - $2 \\le N \\le 10^6$ - the sum of $N$ over all test cases does not exceed $10^6$ ### Subtasks \*\*Subtask #1 (50 points):\*\* - $N \\le 1,000$ - the sum of $N$ over all test cases does not exceed $5,000$ \*\*Subtask #2 (50 points):\*\* original constraints ### Example Input ``` 2 3 3 1 2 4 3 1 4 2 ``` ### Example Output ``` YES 2 1 1 1 1 2 2 NO ```
