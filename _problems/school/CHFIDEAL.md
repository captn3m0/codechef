---
category_name: school
problem_code: CHFIDEAL
problem_name: 'Chef and An Ideal Problem'
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
editorial_url: 'https://discuss.codechef.com/problems/CHFIDEAL'
time:
    view_start_date: 1545075122
    submit_start_date: 1545075122
    visible_start_date: 1545075122
    end_date: 1735669800
    current: 1559472924
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/DEC18/hindi/CHFIDEAL.pdf) , \[Vietnamese\](http://www.codechef.com/download/translated/DEC18/vietnamese/CHFIDEAL.pdf) , \[Mandarin Chinese\](http://www.codechef.com/download/translated/DEC18/mandarin/CHFIDEAL.pdf) , \[Russian\](http://www.codechef.com/download/translated/DEC18/russian/CHFIDEAL.pdf) and \[Bengali\](http://www.codechef.com/download/translated/DEC18/bengali/CHFIDEAL.pdf) as well. "An ideal problem has no test data." - aryanc403 \*\*This is an interactive problem.\*\* Chef likes probability puzzles a lot, almost as much as interactive problems. Today, he learned about the [Monty Hall Paradox](https://en.wikipedia.org/wiki/Monty_Hall_problem). Suppose that Chef is participating in a game show, where he has to choose between three doors numbered $1$ through $3$. There is a car behind one of the doors and goats behind the other two. Chef does not know what is behind which door, but there is a game host who knows where the car is. First, you need to help Chef pick a door (let's denote it by $X$). Then, the host opens a different door (let's denote it by $Y$) such that there is a goat behind this door, and asks Chef to pick an arbitrary door again (let's denote it by $Z$). You need to help Chef pick door $Z$ too. You should do it in such a way that the probability of a car being behind door $Z$ is maximised. If there are multiple optimal possible ways to pick doors for Chef, you may choose any one. ### Interaction - First, you should print a line containing a single integer $X$ ($1 \\le X \\le 3$). - Then, you should read a line containing a single integer $Y$. - Finally, you should print a line containing a single integer $Z$ ($1 \\le Z \\le 3$). Don't forget to flush the output after printing each line! ### Constraints - $1 \\le Y \\le 3$ - $X \\neq Y$ ### Subtasks \*\*Subtask #1 (100 points):\*\* original constraints ### Example ``` You Grader 3 1 2 ```
