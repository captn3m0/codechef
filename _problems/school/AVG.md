---
category_name: school
problem_code: AVG
problem_name: 'Average Number'
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
    - cakewalk
    - kingofnumbers
    - ltime69
editorial_url: 'https://discuss.codechef.com/problems/AVG'
time:
    view_start_date: 1550941202
    submit_start_date: 1550941202
    visible_start_date: 1550941202
    end_date: 1735669800
    current: 1559472922
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTIME69/mandarin/AVG.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTIME69/bengali/AVG.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTIME69/hindi/AVG.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTIME69/russian/AVG.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME69/vietnamese/AVG.pdf) as well. Chef had a sequence of positive integers with length $N + K$. He managed to calculate the arithmetic average of all elements of this sequence (let's denote it by $V$), but then, his little brother deleted $K$ elements from it. All deleted elements had the same value. Chef still knows the remaining $N$ elements — a sequence $A\_1, A\_2, \\ldots, A\_N$. Help him with restoring the original sequence by finding the value of the deleted elements or deciding that there is some mistake and the described scenario is impossible. Note that the if it is possible for the deleted elements to have the same value, then it can be proven that it is unique. Also note that this value must be a positive integer. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains three space-separated integers $N$, $K$ and $V$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$. ### Output For each test case, print a single line containing one integer — the value of the deleted elements, or $-1$ if there is a mistake. ### Constraints - $1 \\le T \\le 100$ - $1 \\le N, K \\le 100$ - $1 \\le V \\le 10^5$ - $1 \\le A\_i \\le 10^5$ for each valid $i$ ### Subtasks \*\*Subtask #1 (100 points):\*\* original constraints ### Example Input ``` 3 3 3 4 2 7 3 3 1 4 7 6 5 3 3 4 2 8 3 ``` ### Example Output ``` 4 -1 -1 ```
