---
category_name: school
problem_code: EVENT
problem_name: Event
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
date_added: 23-11-2018
tags:
    - cakewalk
    - implementation
    - kingofnumbers
    - ltime66
editorial_url: 'https://discuss.codechef.com/problems/EVENT'
time:
    view_start_date: 1543078801
    submit_start_date: 1543078801
    visible_start_date: 1543078801
    end_date: 1735669800
    current: 1559472926
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Mandarin\](http://www.codechef.com/download/translated/LTIME66/mandarin/EVENT.pdf) , \[Bengali\](http://www.codechef.com/download/translated/LTIME66/bengali/EVENT.pdf) , \[Hindi\](http://www.codechef.com/download/translated/LTIME66/hindi/EVENT.pdf) , \[Russian\](http://www.codechef.com/download/translated/LTIME66/russian/EVENT.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME66/vietnamese/EVENT.pdf) as well. Chef is a very experienced and well-known cook. He has participated in many cooking competitions in the past — so many that he does not even remember them all. One of these competitions lasted for a certain number of days. The first day of the competition was day $S$ of the week (i.e. Monday, Tuesday etc.) and the last day was day $E$ of the week. Chef remembers that the duration of the competition (the number of days between the first and last day, inclusive) was between $L$ days and $R$ days inclusive. Is it possible to uniquely determine the exact duration of the competition? If so, what is this duration? ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains two space-separated strings $S$ and $E$, followed by a space and two space-separated integers $L$ and $R$. ### Output For each test case, print a single line containing: - the string `"impossible"` if there is no duration consistent with all given information - the string `"many"` if there is more than one possible duration - one integer — the duration of the competition, if its duration is unique ### Constraints - $1 \\le T \\le 10,000$ - $1 \\le L \\le R \\le 100$ - $S$ is one of the strings "saturday", "sunday", "monday", "tuesday", "wednesday", "thursday" or "friday" - $E$ is one of the strings "saturday", "sunday", "monday", "tuesday", "wednesday", "thursday" or "friday" ### Subtasks \*\*Subtask #1 (100 points):\*\* original constraints ### Example Input ``` 3 saturday sunday 2 4 monday wednesday 1 20 saturday sunday 3 5 ``` ### Example Output ``` 2 many impossible ```
