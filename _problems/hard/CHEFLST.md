---
category_name: hard
problem_code: CHEFLST
problem_name: 'Chef and Lost Story'
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
problem_author: bciobanu
problem_tester: null
date_added: 18-08-2018
tags:
    - bciobanu
    - bitmasking
    - determinant
    - gaussian
    - hard
    - matrix
    - scwartz
    - sept18
editorial_url: 'https://discuss.codechef.com/problems/CHEFLST'
time:
    view_start_date: 1537176602
    submit_start_date: 1537176602
    visible_start_date: 1537176602
    end_date: 1735669800
    current: 1559472988
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/SEPT18/hindi/CHEFLST.pdf) ,\[Bengali\](http://www.codechef.com/download/translated/SEPT18/bengali/CHEFLST.pdf) , \[Mandarin chinese\](http://www.codechef.com/download/translated/SEPT18/mandarin/CHEFLST.pdf) , \[Russian\](http://www.codechef.com/download/translated/SEPT18/russian/CHEFLST.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/SEPT18/vietnamese/CHEFLST.pdf) as well. Once upon a time, in a land far, far away... nevermind, we don't recall the rest of the story. All we know is that Chef has a matrix of integers $M$ with $N$ rows and $N$ columns; he wants to take a single element from each row and a single element from each column ($N$ elements in total) and find their \[bitwise XOR\](https://en.wikipedia.org/wiki/Bitwise\_operation#XOR). Find the set of all values he could obtain. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - $N$ lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of the following lines contains $N$ space-separated integers $M\_{i, 1}, M\_{i, 2}, \\dots, M\_{i, N}$. ### Output For each test case, print a single line containing one or more space-separated integers in increasing order — the obtainable values. ### Constraints - $1 \\le T \\le 7$ - $1 \\le N \\le 60$ - $0 \\le M\_{i, j} \\le 1,023$ for each valid $i, j$ ### Subtasks \*\*Subtaks #1 (5 points):\*\* $1 \\le N \\le 10$ \*\*Subtask #2 (20 points):\*\* $1 \\le N \\le 14$ \*\*Subtaks #3 (5 points):\*\* $0 \\le M\_{i, j} \\le 1$ for each valid $i, j$ \*\*Subtask #4 (70 points):\*\* original constraints ### Example Input ``` 1 3 5 9 15 19 7 2 1 0 0 ``` ### Example Output ``` 2 7 9 10 26 28 ``` ### Explanation \*\*Example case 1:\*\* We could choose $M\_{1, 1} = 5$ and $M\_{2, 2} = 7$; since we are only allowed to choose one element from each row and one from each column, we cannot choose anything else from rows 1, 2 and columns 1, 2, so we have to choose $M\_{3, 3} = 0$. Their XOR is $5 \\oplus 7 \\oplus 0 = 2$. Another combination could be $M\_{1, 3} = 15$, $M\_{2, 1} = 19$ and $M\_{3, 2} = 0$. Their XOR is $15 \\oplus 19 \\oplus 0 = 28$.
