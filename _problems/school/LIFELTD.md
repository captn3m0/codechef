---
category_name: school
problem_code: LIFELTD
problem_name: 'Life Limited'
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
date_added: 17-12-2018
tags:
    - admin2
time:
    view_start_date: 1545157800
    submit_start_date: 1545157800
    visible_start_date: 1545157800
    end_date: 1735669800
    current: 1559472927
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Recently the company Life Ltd created a new logo for themselves. You are asked to test the design of the logo. The logo is a 3 \* 3 square grid with 9 cells. Each cell contains some lower case english letter. This logo will be considered good if there exist three cells in the shape of an L that contain the letter 'l' (lower case 'L') in each of them. That is, there should be a cell with 'l', its cell directly beneath it should also have 'l' and the cell to the right of the second cell should also have 'l'. Your task is to tell whether the logo is good or not. ### Input - The first line of the input contains an integer $T$ denoting the number of test cases. The description of the test cases follows. - Each of the next three lines contains a description of the logo, i-th of the line contains three characters which denote the i-th row of the logo. ### Output For each test case, output yes or no according to the answer to the problem. ###Constraints - $1 \\le T \\le 100$ ### Example Input ``` 3 laz lla aaa ala lla aaa lll lll lll ``` ### Example Output ``` yes no yes ``` ###Explanation: \*\*Testcase1\*\*: The L shaped cells with 'l' in each of them is shown in bold here: \*\*l\*\*aa \*\*ll\*\*a aaa
