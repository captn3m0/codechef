---
category_name: medium
problem_code: MAXTAX
problem_name: 'Maximize the Tax'
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
problem_author: stelkasouridis
problem_tester: null
date_added: 29-01-2019
tags:
    - dynamic
    - feb19
    - medium
    - scc
    - stelkasouridis
    - topologicalsort
editorial_url: 'https://discuss.codechef.com/problems/MAXTAX'
time:
    view_start_date: 1550050202
    submit_start_date: 1550050202
    visible_start_date: 1550050202
    end_date: 1735669800
    current: 1559472977
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/FEB19TST/hindi/MAXTAX.pdf), \[Bengali\](http://www.codechef.com/download/translated/FEB19TST/bengali/MAXTAX.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/FEB19TST/mandarin/MAXTAX.pdf), \[Russian\](http://www.codechef.com/download/translated/FEB19TST/russian/MAXTAX.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/FEB19TST/vietnamese/MAXTAX.pdf) as well. Nikitas does not want to study for his exams, so he decided to become a disruptor and get a part-time job as a tax collector in Airland. Airland consists of $N$ houses (numbered $1$ through $N$) and $M$ one-way supply pathways that connect them. Each house has a budget; let's denote the budget of house $i$ by $B\_i$ (in coins). The \*neighbourhood\* of a house is the set of houses which both can supply this house and can be supplied from this house. (directly or indirectly, including itself) Nikitas can choose to start his tax-collecting journey at any house. Then, he can move along supply pathways to visit more houses and collect taxes on the way. For each valid $i$, when Nikitas visits house $i$ for the first time (including the house where he starts the journey), but hasn't visited any house in the neighbourhood of house $i$ before, then he must choose a positive integer $c$ and announce to each house in this neighbourhood that it should pay $c$ coins in taxes. Whenever a house with a budget $b$ is asked to pay $c$ coins, two things can happen. If $c \\le b$, this house pays the tax. If $c \\gt b$, this house cannot afford to pay the tax, so it does not pay anything. Note that no house may be asked to pay taxes twice. When the houses that can afford to pay the announced tax pay it, Nikitas can continue his journey in the same way until he cannot collect any more money. He has to be careful, though ― at the end, if there are more than $K$ houses that were asked to pay their tax, but did not pay because they could not afford it, the captain of Airland will take his katana and capture Nikitas, so he will end his tax-collecting journey without earning any money. Otherwise, Nikitas earns all the money he collected. Nikitas wants to maximise the amount of money he will make. Luckily, you know all the information about the supply pathways in Airland, so you offer to help Nikitas calculate the maximum amount of money he can make without getting captured. Since this number may be large, compute it modulo $1000000021$ ($10^9 + 21$). ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains three space-separated integers $N$, $M$ and $K$. - The second line contains $N$ space-separated integers $B\_1, B\_2, \\ldots, B\_N$. - $M$ lines follow. Each of these lines contains two space-separated integers $u$ and $v$ denoting the starting and ending house of a supply pathway. ### Output For each test case, print a single line containing one integer ― the maximum amount of money Nikitas can make without being captured, modulo $1000000021$ ($10^9+21$). ### Constraints - $1 \\le T \\le 5$ - $3 \\le N \\le 10^5$ - $1 \\le M \\le 2 \\cdot 10^5$ - $1 \\le B\_i \\le 10^9$ for each valid $i$ - $0 \\le K \\le 200$ - the sum of $N$ over all test cases does not exceed $10^5$ - the sum of $M$ over all test cases does not exceed $2 \\cdot 10^5$ ### Subtasks \*\*Subtask #1 (10 points):\*\* - $K = 0$ - $3 \\le N \\le 1,000$ - $1 \\le M \\le 5 \\cdot 10^4$ - the sum of $M$ over all test cases does not exceed $5 \\cdot 10^4$ \*\*Subtask #2 (10 points):\*\* - $K = 1$ - $3 \\le N \\le 1,000$ - $1 \\le M \\le 5 \\cdot 10^4$ - the sum of $M$ over all test cases does not exceed $5 \\cdot 10^4$ \*\*Subtask #3 (20 points):\*\* - $3 \\le N \\le 1,000$ - $1 \\le M \\le 5 \\cdot 10^4$ - $0 \\le K \\le 100$ - the sum of $M$ over all test cases does not exceed $5 \\cdot 10^4$ \*\*Subtask #4 (60 points):\*\* original constraints ### Example Input ``` 1 4 4 1 2 8 15 9 1 3 2 1 4 3 3 2 ``` ### Example Output ``` 25 ``` ### Explanation \*\*Example case 1:\*\* Nikitas can start at house $4$, and since it is not supplied from any other house, he can get $9$ coins from it. Then, he can move to house $3$ and he has to ask each house in the neighbourhood of house $3$ (houses $1$, $2$ and $3$, since house $2$ supplies house $1$ directly and house $3$ indirectly through house $1$, while house $3$ supplies house $2$ directly) to pay. Since $K = 1$, Nikitas will be okay if house $1$ does not pay, so he can ask for $8$ coins from each house. He gets $8 \\cdot 2 = 16$ coins in total from houses $2$ and $3$. At the end, Nikitas earns $9 + 16 = 25$ coins.
