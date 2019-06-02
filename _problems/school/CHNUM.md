---
category_name: school
problem_code: CHNUM
problem_name: 'Chef and Number Game'
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
problem_author: adityad1998
problem_tester: null
date_added: 19-02-2019
tags:
    - adityad1998
    - cakewalk
    - march19
    - maths
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/CHNUM'
time:
    view_start_date: 1552469402
    submit_start_date: 1552469402
    visible_start_date: 1552469402
    end_date: 1735669800
    current: 1559472925
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/MAR19TST/hindi/CHNUM.pdf), \[Bengali\](http://www.codechef.com/download/translated/MAR19TST/bengali/CHNUM.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/MAR19TST/mandarin/CHNUM.pdf), \[Russian\](http://www.codechef.com/download/translated/MAR19TST/russian/CHNUM.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/MAR19TST/vietnamese/CHNUM.pdf) as well. Recently, Chef hosted a strange competition at the Byteland annual fair. There were $N$ participants in the competition (numbered $1$ through $N$); at the end of the competition, their scores were $A\_1, A\_2, \\ldots, A\_N$. Since it was a strange competition, negative scores were allowed too. The \*total score\* of the competition is calculated as follows: - Divide the participants into one or more non-empty groups (subsets); if there are $K$ groups, let's denote them by $G\_1, G\_2, \\ldots, G\_K$. Each participant should be a member of exactly one group. - Sum up the scores of participants in each individual group. For each valid $i$, let's denote the sum of scores of participants in group $i$ by $X\_i$. - The total score of the competition is the sum of squares of these summed up scores, i.e. $X\_1^2 + X\_2^2 + \\ldots + X\_K^2$. Chef wants to choose the groups in such a way that the total score is maximum possible. Since there may be many ways to form the groups that lead to the maximum total score, Chef wants to know just the size of the largest group and the size of the smallest group which could be formed while still maximising the total score. These sizes are independent - formally, they are the maximum and minimum size $s$ of a group such that there is a way to form groups which maximises the total score and contains a group with size $s$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$. ### Output For each test case, print a single line containing two space-separated integers - the size of the largest possible group and the size of the smallest possible group. ### Constraints - $1 \\le T \\le 20$ - $1 \\le N \\le 10^5$ - $1 \\le |A\_i| \\le 10^9$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $5 \\cdot 10^5$ ### Subtasks \*\*Subtask #1 (100 points):\*\* original constraints ### Example Input ``` 1 5 5 2 4 6 7 ``` ### Example Output ``` 5 5 ``` ### Explanation \*\*Example case 1:\*\* To maximise the total score, everyone has to belong to the same group with scores $\[5, 2, 4, 6, 7\]$. For this group, $X = 5+2+4+6+7 = 24$ and the total score is $24^2 = 576$. The size of the largest possible group, as well as the size of the smallest possible group, is $5$.
