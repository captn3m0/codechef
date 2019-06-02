---
category_name: medium
problem_code: CHONQ
problem_name: 'Cheating on Queue'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: wild_hamster
problem_tester: null
date_added: 27-01-2019
tags:
    - march19
    - maths
    - medium
    - partial
    - taran_1407
    - wild_hamster
editorial_url: 'https://discuss.codechef.com/problems/CHONQ'
time:
    view_start_date: 1552469402
    submit_start_date: 1552469402
    visible_start_date: 1552469402
    end_date: 1735669800
    current: 1559472970
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/MAR19TST/hindi/CHONQ.pdf), \[Bengali\](http://www.codechef.com/download/translated/MAR19TST/bengali/CHONQ.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/MAR19TST/mandarin/CHONQ.pdf), \[Russian\](http://www.codechef.com/download/translated/MAR19TST/russian/CHONQ.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/MAR19TST/vietnamese/CHONQ.pdf) as well. Chef went to the store and saw a long queue. There are $N$ people in the queue (numbered $1$ through $N$ from the front of the queue to the back); as it usually happens in such a situation, each person has a certain anger level. Let's denote the anger level of the $i$-th person by $a\_i$. Chef wants to finish shopping as fast as possible, so he decided to try jumping the queue instead of just standing at its back. However, he cannot make the people already standing in the queue much angrier, since that would not end well for him. Chef may stand in the queue directly in front of person $p$ only if the expression $$\\left\\lfloor \\frac{a\_p}{1} \\right\\rfloor + \\left\\lfloor \\frac{a\_{p+1}}{2} \\right\\rfloor + \\left\\lfloor \\frac{a\_{p+2}}{3} \\right\\rfloor + \\ldots + \\left\\lfloor \\frac{a\_N}{N-p+1} \\right\\rfloor$$ does not exceed a given integer $K$. Here, $\\lfloor x \\rfloor$ denotes the floor function - the largest integer which does not exceed $x$. When Chef joins the queue, his \*position\* in the queue is the number of the person directly behind him, or $N+1$ if he stands at the back of the queue. Find the minimum position at which Chef should join the queue, either by cutting in front of someone or (if it is impossible to cut in front of anyone without violating the condition above) standing at the back of the queue. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $K$. - The second line contains $N$ space-separated integers $a\_1, a\_2, \\ldots, a\_N$. ### Output For each test case, print a single line containing one integer - the minimum position at which Chef should join the queue. ### Constraints - $1 \\le T \\le 5$ - $1 \\le N \\le 10^5$ - $1 \\le K \\le 10^9$ - $1 \\le a\_i \\le 10^5$ for each valid $i$ ### Subtasks \*\*Subtask #1 (15 points):\*\* $1 \\le N \\le 1,000$ \*\*Subtask #2 (85 points):\*\* original constraints ### Example Input ``` 1 3 3 1 2 3 ``` ### Example Output ``` 1 ```
