---
category_name: school
problem_code: EID
problem_name: 'Chef and Eid'
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
date_added: 23-08-2018
tags:
    - greedy
    - kingofnumbers
    - ltime63
    - sorting
editorial_url: 'https://discuss.codechef.com/problems/EID'
time:
    view_start_date: 1535216402
    submit_start_date: 1535216402
    visible_start_date: 1535216402
    end_date: 1735669800
    current: 1559472926
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Hindi,](http://www.codechef.com/download/translated/LTIME63/hindi/EID.pdf)[Mandarin chinese](http://www.codechef.com/download/translated/LTIME63/mandarin/EID.pdf), [Russian](http://www.codechef.com/download/translated/LTIME63/russian/EID.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME63/vietnamese/EID.pdf) as well.

During Eid, it's a tradition that each father gives his kids money which they can spend on entertainment. Chef has $N$ coins; let's denote the value of coin $i$ by $v\_i$. Since today is Eid, Chef is going to give one coin to each of his two children. He wants the absolute value of the difference between the values of coins given to the two children to be as small as possible, so that he would be as fair as possible. Help Chef by telling him the minimum possible difference between the values of the coins given to the two children. Of course, Chef cannot give the same coin to both children. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $v\_1, v\_2, \\dots, v\_N$. ### Output For each test case, print a single line containing one integer — the minimum possible difference. ### Constraints - $1 \\le T \\le 100$ - $2 \\le N \\le 10^5$ - the sum of $N$ in all test cases does not exceed $5 \\cdot 10^5$ - $1 \\le v\_i \\le 10^6$ for each valid $i$ ### Subtasks \*\*Subtask #1 (30 points):\*\* the sum of $N$ in all test cases does not exceed $2,000$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 2 3 1 4 2 3 1 3 3 ``` ### Example Output ``` 1 0 ``` ### Explanation \*\*Example case 1:\*\* Chef gives the coin with value $1$ to his first child and the coin with value $2$ to the second child, so the answer is $2-1 = 1$. \*\*Example case 2:\*\* Chef gives each of his children a coin with value $3$, so the difference is $0$.
