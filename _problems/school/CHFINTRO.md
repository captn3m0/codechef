---
category_name: school
problem_code: CHFINTRO
problem_name: 'Chef and Interactive Contests'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: null
date_added: 23-11-2018
tags:
    - cakewalk
    - dec18
    - mgch
editorial_url: 'https://discuss.codechef.com/problems/CHFINTRO'
time:
    view_start_date: 1545075122
    submit_start_date: 1545075122
    visible_start_date: 1545075122
    end_date: 1735669800
    current: 1559472924
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/DEC18/hindi/CHFINTRO.pdf) , \[Vietnamese\](http://www.codechef.com/download/translated/DEC18/vietnamese/CHFINTRO.pdf) , \[Mandarin Chinese\](http://www.codechef.com/download/translated/DEC18/mandarin/CHFINTRO.pdf) , \[Russian\](http://www.codechef.com/download/translated/DEC18/russian/CHFINTRO.pdf) and \[Bengali\](http://www.codechef.com/download/translated/DEC18/bengali/CHFINTRO.pdf) as well. "Every beginning has an end... and an editorial." - taran\_1407 What the hell are all these interactive problems? What does flushing output mean? So many questions... Chef explains it in an easy way: you must communicate with a grader program, which accepts your input only if you flushed the output. There is a contest with interactive problems where $N$ people participate. Each contestant has a known rating. Chef wants to know which contestants will not forget to flush the output in interactive problems. Fortunately, he knows that contestants with rating at least $r$ never forget to flush their output and contestants with rating smaller than $r$ always forget to do it. Help Chef! ### Input - The first line of the input contains two space-separated integers $N$ and $r$. - Each of the following $N$ lines contains a single integer $R$ denoting the rating of one contestant. ### Output For each contestant, print a single line containing the string `"Good boi"` if this contestant does not forget to flush the output or `"Bad boi"` otherwise. ### Constraints - $1 \\le N \\le 1,000$ - $1,300 \\le r, R \\le 1,501$ ### Subtasks \*\*Subtask #1 (100 points):\*\* original constraints ### Example Input ``` 2 1500 1499 1501 ``` ### Example Output ``` Bad boi Good boi ```
