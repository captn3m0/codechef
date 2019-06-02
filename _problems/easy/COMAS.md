---
category_name: easy
problem_code: COMAS
problem_name: 'Chef and Meatballs'
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
problem_author: wreckingball
problem_tester: null
date_added: 23-11-2018
tags:
    - dec18
    - easy
    - wreckingball
editorial_url: 'https://discuss.codechef.com/problems/COMAS'
time:
    view_start_date: 1545075122
    submit_start_date: 1545075122
    visible_start_date: 1545075122
    end_date: 1735669800
    current: 1559472942
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/DEC18/hindi/COMAS.pdf) , \[Vietnamese\](http://www.codechef.com/download/translated/DEC18/vietnamese/COMAS.pdf) , \[Mandarin Chinese\](http://www.codechef.com/download/translated/DEC18/mandarin/COMAS.pdf) , \[Russian\](http://www.codechef.com/download/translated/DEC18/russian/COMAS.pdf) and \[Bengali\](http://www.codechef.com/download/translated/DEC18/bengali/COMAS.pdf) as well. \*\*This is an interactive problem.\*\* Chef has cooked $N$ meatballs, numbered $1$ through $N$. No two meatballs contain the same amount of meat. You want to eat the meatiest meatball, i.e. the meatball with the maximum amount of meat, but you do not know which one it is and Chef does not want to just give it for you. Therefore, he decided to play a game with you. You may ask Chef at most $Q = 4 + N/2$ questions. In each question, you must give Chef the numbers of five distinct meatballs and Chef tells you the numbers of the $3$-rd and $4$-th meatiest of these meatballs. Find the number of the meatiest meatball! ### Interaction - First, you should read a line containing a single integer $T$ denoting the number of test cases. - For each test case, you should start by reading a line containing a single integer $N$. - To ask a question, you should print a line containing the character '?', a space and five space-separated integers $i\_1$, $i\_2$, $i\_3$, $i\_4$ and $i\_5$: the numbers of five distinct meatballs (in any order). Then, you must read a line containing two space-separated integers: the numbers of the $3$-rd and $4$-th meatiest meatball. - To finish solving a test case, print a line containing the character '!', a space and an integer $i\_m$: the number of the meatiest meatball ($1 \\le i\_m \\le N$). Don't forget to flush the output after printing each line! ### Constraints - $1 \\le T \\le 1,000$ - $6 \\le N \\le 100$ ### Subtasks \*\*Subtask #1 (60 points):\*\* $Q = N + 3$ \*\*Subtask #2 (40 points):\*\* $Q = 4 + N/2$ (original constraints) ### Example ``` You Grader 1 6 ? 1 2 3 4 5 3 4 ? 1 2 3 4 6 3 4 ? 1 2 3 5 6 3 5 ? 1 2 4 5 6 4 5 ? 1 3 4 5 6 4 5 ? 2 3 4 5 6 4 5 ! 6 ``` ### Explanation The meatballs are sorted in ascending order of meatiness.
