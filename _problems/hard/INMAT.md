---
category_name: hard
problem_code: INMAT
problem_name: 'Interactive Matrix'
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
problem_author: allllekssssa
problem_tester: null
date_added: 26-07-2018
tags:
    - allllekssssa
    - allllekssssa
    - aug18
    - binary
    - cases
    - likecs
    - medium
editorial_url: 'https://discuss.codechef.com/problems/INMAT'
time:
    view_start_date: 1534152605
    submit_start_date: 1534152605
    visible_start_date: 1534152605
    end_date: 1735669800
    current: 1559472990
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Hindi,](http://www.codechef.com/download/translated/AUG18/hindi/INMAT.pdf)[Mandarin chinese](http://www.codechef.com/download/translated/AUG18/mandarin/INMAT.pdf), [Russian](http://www.codechef.com/download/translated/AUG18/russian/INMAT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/AUG18/vietnamese/INMAT.pdf) as well.

Chef and his wife Chefina started playing a new game. At the beginning of the game, Chefina secretly writes down a matrix $A$ with $N$ rows (numbered $1$ through $N$) and $N$ columns (numbered $1$ through $N$). All elements of this matrix are distinct positive integers. Then, Chefina asks Chef to find the position (row and column) of the element with value $V$, or determine that such an element does not occur in $A$. Chef does not know the matrix $A$, but he can ask Chefina at most $K$ questions about it. Each question must be in the format $1\\, r\\, c$; Chefina answers Chef with the number $A\_{r, c}$. Since this task is really hard for Chef, Chefina decided to give him additional help — she told Chef that the matrix she writes down has a special property: each row and each column is sorted in some order (descending or ascending). Different rows and columns may be sorted in different order. Chef may ask at most $K$ questions in the format above. Afterwards, he must tell Chefina the position of the element $V$ in the format $2\\, i\\, j$, with the meaning that $A\_{i, j} = V$ if $V$ occurs in $A$, or with $i=j=-1$ if $V$ does not occur in $A$. This is an interactive problem. You should play the game for Chef; the grader plays for Chefina. ### Input The first line of the input contains three space-separated integers $N$, $K$ and $V$. ### Interaction To ask a question, print one line containing three space-separated integers $1$, $r$ and $c$ to the output. Then, read the answer to this question from the input. The answer for an invalid question is $-1$. You may ask at most $K$ questions. Don't forget to flush the output after printing each line! Finally, print the answer as one line containing three space-separated integers $2$, $i$ and $j$. ### Constraints - $1 \\le N \\le 1,000$ - $1 \\le A\_{i, j} \\le 10^9$ for each valid $i, j$ - $1 \\le V \\le 10^9$ ### Subtasks \*\*Subtask #1 (10 points):\*\* - $1 \\le N \\le 100$ - $K = N \\cdot N$ \*\*Subtask #2 (20 points):\*\* - $1 \\le N \\le 1,000$ - $K = 11,000$ \*\*Subtask #3 (30 points):\*\* - $1 \\le N \\le 1,000$ - $K = 6,000$ \*\*Subtask #4 (40 points):\*\* - $1 \\le N \\le 1,000$ - $K = 4,000$ ### Example Input ``` 3 10 4 ``` \*\*Interaction\*\* ``` Chef Chefina 1 1 1 2 1 1 2 6 1 2 1 4 2 2 1 ``` ### Explanation Chefina wrote down a matrix with $3$ columns and $3$ rows. Chef needs to find the number $4$ in at most $10$ questions. One possible matrix $A$ could be: ``` 2 6 8 4 9 12 7 11 13 ```
