---
category_name: medium
problem_code: BBRICKS
problem_name: 'Beautiful Bricks'
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
problem_author: neutron_byte
problem_tester: null
date_added: 14-09-2018
tags:
    - combinatorics
    - dynamic
    - neutron_byte
    - oct18
editorial_url: 'https://discuss.codechef.com/problems/BBRICKS'
time:
    view_start_date: 1540027803
    submit_start_date: 1540027803
    visible_start_date: 1540027803
    end_date: 1735669800
    current: 1559472967
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/OCT18/hindi/BBRICKS.pdf) ,\[Bengali\](http://www.codechef.com/download/translated/OCT18/bengali/BBRICKS.pdf) , \[Mandarin chinese\](http://www.codechef.com/download/translated/OCT18/mandarin/BBRICKS.pdf) , \[Russian\](http://www.codechef.com/download/translated/OCT18/russian/BBRICKS.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/OCT18/vietnamese/BBRICKS.pdf) as well. . Chef offers delicious food in his restaurant, but he wants to make it a more attractive place too. The guests in the restaurant usually walk along a path consisting of two adjacent, parallel rows of square bricks leading to the entrance. Each row is $N$ bricks long, all bricks have the same size and there are no holes. Unfortunately, the path looks pretty boring because all bricks have the same color. In order to make it more interesting, Chef wants to replace exactly $K$ bricks by more beautiful ones in such a way that no two replaced bricks share a side. Chef asks you to answer a question that is too complicated for him: in how many ways can Chef select the bricks to replace? Since the answer can be very large, compute it modulo $10^9 + 7$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains two space-separated integers $N$ and $K$. ### Output For each test case, print a single line containing one integer — the number of ways to replace bricks, modulo $10^9 + 7$. ### Constraints - $1 \\le T \\le 5$ - $1 \\le N \\le 10^9$ - $1 \\le K \\le 1,000$ ### Subtasks: \*\*Subtask #1 (25 points)\*\*: $1 \\le N \\le 1,000$ \*\*Subtask #2 (75 points)\*\*: original constraints ### Example Input ``` 1 3 2 ``` ### Example Output ``` 8 ``` ### Explanation \*\*Example case 1:\*\* There are exactly $8$ valid ways to choose the positions of $K = 2$ beautiful bricks.
