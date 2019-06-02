---
category_name: school
problem_code: CAMPON
problem_name: 'Camp Or Not'
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
problem_author: deadwing97
problem_tester: null
date_added: 19-12-2018
tags:
    - cook101
    - deadwing97
editorial_url: 'https://discuss.codechef.com/problems/CAMPON'
time:
    view_start_date: 1545589802
    submit_start_date: 1545589802
    visible_start_date: 1545589802
    end_date: 1735669800
    current: 1559472924
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/CK101TST/hindi/CAMPON.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/CK101TST/mandarin/CAMPON.pdf), \[Russian\](http://www.codechef.com/download/translated/CK101TST/russian/CAMPON.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/CK101TST/vietnamese/CAMPON.pdf) and \[Bengali\](http://www.codechef.com/download/translated/CK101TST/bengali/CAMPON.pdf) as well. The Petrozavodsk camp takes place in about one month. Jafar wants to participate in the camp, but guess what? His coach is Yalalovichik. Yalalovichik is a legendary coach, famous in the history of competitive programming. However, he is only willing to send to the camp students who solve really hard problems on Timus. He started a marathon at the beginning of December. Initially, he said that people who solve 200 or more problems by the 31-st of December may go to the camp. Jafar made a schedule for the next month. For each day, he knows how many problems he is going to solve. The problem is that Yalalovichik is a really moody coach — he may wake up tomorrow and change his decision about the deadline and the number of problems that must be solved by this deadline to qualify for the camp. Jafar has $Q$ such scenarios. Now he wants to know: in each scenario, if he does not change his problem solving schedule, will he go to the camp or not? ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $D$ - the number of days in Jafar's schedule. - $D$ lines follow. For each $i$ ($1 \\le i \\le D$), the $i$-th of these lines contains two space-separated integers $d\_i$ and $p\_i$ denoting that Jafar will solve $p\_i$ problems on day $d\_i$. - The next line contains a single integer $Q$ denoting the number of scenarios Jafar considers. - $Q$ lines follow. For each $i$ ($1 \\le i \\le Q$), the $i$-th of these lines contains two space-separated integers $dead\_i$ and $req\_i$ denoting a scenario where Yalaovichik decides that students who solve $req\_i$ problems by day $dead\_i$ (inclusive) will go to the camp. ### Output For each scenario, print a single line containing the string `"Go Camp"` if Jafar is going to the camp or `"Go Sleep"` otherwise (without quotes). ### Constraints - $1 \\le T \\le 100$ - $1 \\le D \\le 31$ - $1 \\le d\_i \\le 31$ for each valid $i$ - $1 \\le p\_i \\le 100$ for each valid $i$ - $d\_1, d\_2, \\ldots, d\_D$ are pairwise distinct - $1 \\le Q \\le 100$ - $1 \\le dead\_i \\le 31$ for each valid $i$ - $1 \\le req\_i \\le 5,000$ for each valid $i$ ### Example Input ``` 1 3 10 5 14 4 31 1 2 9 2 15 7 ``` ### Example Output ``` Go Sleep Go Camp ``` ### Explanation \*\*Example case 1:\*\* - By the end of day $9$, Jafar will not have any problem solved. - By the end of day $15$, Jafar will have $9$ problems solved, which is enough to go to the camp, since he needs at least $7$ problems.
