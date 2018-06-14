---
category_name: school
problem_code: CHEFRUN
problem_name: 'Secret Recipe'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
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
    - CLOJ
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: hloya_ygrt
problem_tester: null
date_added: 15-05-2018
tags:
    - hloya_ygrt
editorial_url: 'https://discuss.codechef.com/problems/CHEFRUN'
time:
    view_start_date: 1526841000
    submit_start_date: 1526841000
    visible_start_date: 1526841000
    end_date: 1735669800
    current: 1528987024
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK94/mandarin/CHEFRUN.pdf), [Russian](http://www.codechef.com/download/translated/COOK94/russian/CHEFRUN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK94/vietnamese/CHEFRUN.pdf) as well.

Chef and his competitor Kefa own two restaurants located at a straight road. The position of Chef's restaurant is $X\_1$, the position of Kefa's restaurant is $X\_2$. Chef and Kefa found out at the same time that a bottle with a secret recipe is located on the road between their restaurants. The position of the bottle is $X\_3$. The cooks immediately started to run to the bottle. Chef runs with speed $V\_1$, Kefa with speed $V\_2$. Your task is to figure out who reaches the bottle first and gets the secret recipe (of course, it is possible that both cooks reach the bottle at the same time). ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains five space-separated integers $X\_1$, $X\_2$, $X\_3$, $V\_1$ and $V\_2$. ### Output For each test case, print a single line containing the string `"Chef"` if Chef reaches the bottle first, `"Kefa"` if Kefa reaches the bottle first or `"Draw"` if Chef and Kefa reach the bottle at the same time (without quotes). ### Constraints - $1 \\le T \\le 10^5$ - $|X\_1|, |X\_2|, |X\_3| \\le 10^5$ - $X\_1 \\lt X\_3 \\lt X\_2$ - $1 \\le V\_1 \\le 10^5$ - $1 \\le V\_2 \\le 10^5$ ### Example Input ``` 3 1 3 2 1 2 1 5 2 1 2 1 5 3 2 2 ``` ### Example Output ``` Kefa Chef Draw ``` ### Explanation \*\*Example case 1.\*\* Chef and Kefa are on the same distance from the bottle, but Kefa has speed $2$, while Chef has speed $1$.
