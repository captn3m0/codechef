---
category_name: school
problem_code: BITOBYT
problem_name: 'Byte to Bit'
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
problem_author: shivam_g1470
problem_tester: null
date_added: 20-09-2018
tags:
    - easy
    - oct18
    - shivam_g1470
editorial_url: 'https://discuss.codechef.com/problems/BITOBYT'
time:
    view_start_date: 1540027803
    submit_start_date: 1540027803
    visible_start_date: 1540027803
    end_date: 1735669800
    current: 1559472924
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/OCT18/hindi/BITOBYT.pdf) ,\[Bengali\](http://www.codechef.com/download/translated/OCT18/bengali/BITOBYT.pdf) , \[Mandarin chinese\](http://www.codechef.com/download/translated/OCT18/mandarin/BITOBYT.pdf) , \[Russian\](http://www.codechef.com/download/translated/OCT18/russian/BITOBYT.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/OCT18/vietnamese/BITOBYT.pdf) as well. In the magical land of Byteland, there are three kinds of citizens: - a Bit - $2\\;\\mathrm{ms}$ after a Bit appears, it grows up and becomes a Nibble (i.e. it disappears and a Nibble appears) - a Nibble - $8\\;\\mathrm{ms}$ after a Nibble appears, it grows up and becomes a Byte - a Byte - $16\\;\\mathrm{ms}$ after a Byte appears, it grows up, splits into two Bits and disappears Chef wants to know the answer to the following question: what would the population of Byteland be immediately before the time $N\\;\\mathrm{ms}$ if only 1 Bit appeared at time $0\\;\\mathrm{ms}$? Help him and find the population (number of citizens) of each type. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains a single integer $N$. ### Output For each test case, print a single line containing three space-separated integers — the number of Bits, Nibbles and Bytes. ### Constraints - $1 \\le T \\le 10^4$ - $1 \\le N \\le 1,600$ ### Subtasks \*\*Subtask #1 (25 points):\*\* $1 \\le N \\le 140$ \*\*Subtask #2 (75 points):\*\* original constraints ### Example Input ``` 2 2 3 ``` ### Example Output ``` 1 0 0 0 1 0 ``` ### Explanation Immediately before the time $2\\;\\mathrm{ms}$, there is only one Bit. At $2\\;\\mathrm{ms}$, this Bit grows up, so immediately before $3\\;\\mathrm{ms}$, there is only one Nibble in Byteland.
