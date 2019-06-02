---
category_name: medium
problem_code: PROC18E
problem_name: 'Good Speech'
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
problem_author: meetsid20
problem_tester: null
date_added: 8-08-2018
tags:
    - meetsid20
time:
    view_start_date: 1534442400
    submit_start_date: 1534442400
    visible_start_date: 1534442400
    end_date: 1735669800
    current: 1559472979
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Kushagra is an extremely successful man. He has achieved everything a person can aspire for. He has been invited to give a speech about time management. But really he is no expert in managing time. The secret behind his huge success are rather his clever hacks. Obviously, he plans to use another such hack to prepare an epic time management speech. Kushagra's vocabulary consists of $\\text{N}$ words. He needs to write a speech (formally, a sequence of words with or without repetition) using exactly $\\text{K}$ of these words. Goodness of any letter = Index of that letter in the alphabet (1 indexed) Goodness of a word = Sum of goodness values of the letters in it For example the word abc has goodness = 1+2+3 = 6 Goodness of a speech is calculated as follows. - The 1st word contributes the value same as its own goodness. - The ith word contributes, its goodness $\\text{minus}$ the goodness of its longest prefix which is shared with at least one of the j (j
