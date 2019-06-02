---
category_name: school
problem_code: SPELLBOB
problem_name: 'Spell Bob'
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
problem_author: admin2
problem_tester: null
date_added: 30-07-2018
tags:
    - admin2
    - admin2
    - aug18
    - cakewalk
    - likecs
editorial_url: 'https://discuss.codechef.com/problems/SPELLBOB'
time:
    view_start_date: 1534152605
    submit_start_date: 1534152605
    visible_start_date: 1534152605
    end_date: 1735669800
    current: 1559472931
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Hindi,](http://www.codechef.com/download/translated/AUG18/hindi/SPELLBOB.pdf)[Mandarin chinese](http://www.codechef.com/download/translated/AUG18/mandarin/SPELLBOB.pdf), [Russian](http://www.codechef.com/download/translated/AUG18/russian/SPELLBOB.pdf) and [Vietnamese](http://www.codechef.com/download/translated/AUG18/vietnamese/SPELLBOB.pdf) as well.

Chef likes to play with cards a lot. Today, he's playing a game with three cards. Each card has a letter written on the top face and another (possibly identical) letter written on the bottom face. Chef can arbitrarily reorder the cards and/or flip any of the cards in any way he wishes (in particular, he can leave the cards as they were). He wants to do it in such a way that the letters on the top faces of the cards, read left to right, would spell out the name of his favorite friend Bob. Determine whether it is possible for Chef to spell "bob" with these cards. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single string with length $3$ denoting the characters written on the top faces of the first, second and third card. - The second line contains a single string with length $3$ denoting the characters written on the bottom faces of the first, second and third card. ### Output For each test case, print a single line containing the string "yes" (without quotes) if Chef can spell "bob" or "no" (without quotes) if he cannot. ### Constraints - $1 \\le T \\le 20,000$ - each string contains only lowercase English letters ### Subtasks \*\*Subtask #1 (100 points):\*\* original constraints ### Example Input ``` 3 bob rob dbc ocb boc obc ``` ### Example Output ``` yes yes no ``` ### Explanation \*\*Example case 1:\*\* The top faces of the cards already spell out "bob". \*\*Example case 2:\*\* Chef can rearrange the cards in the following way to spell "bob": the second card non-flipped, the first card flipped and the third card flipped. \*\*Example case 3:\*\* There is no way for Chef to spell out "bob".
