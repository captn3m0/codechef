---
category_name: hard
problem_code: CUREK
problem_name: 'Curing Kingdom'
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
    - R
    - COB
    - FS
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: lg5293
problem_tester: null
date_added: 13-01-2019
tags:
    - lg5293
time:
    view_start_date: 1557739980
    submit_start_date: 1557739980
    visible_start_date: 1557739980
    end_date: 1735669800
    current: 1559472988
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/MAY19/hindi/CUREK.pdf), \[Bengali\](http://www.codechef.com/download/translated/MAY19/bengali/CUREK.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/MAY19/mandarin/CUREK.pdf), \[Russian\](http://www.codechef.com/download/translated/MAY19/russian/CUREK.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/MAY19/vietnamese/CUREK.pdf) as well. You are the ruler of a kingdom, and your cities have been infected with some mysterious disease! Formally, the kingdom may be represented as a graph with $N$ cities, conveniently labeled $1$ through $N$, and $M$ unweighted bidirectional roads between them. This graph is guaranteed to be connected, and it contains no self-loops or multiple edges. You would like to get rid of the infection. Initially, you have a cure, which you may send to a chosen subset of cities; these cities immediately become cured. Let's denote the cost of sending the cure to city $i$ by $w\_i$. The cost of sending a cure to a subset of cities is the sum of costs of sending the cure to each city from this subset. Luckily, you do not have to send your cure to all cities immediately, since you can also spread it according to the following process: While there is at least one remaining diseased (not yet cured) city, choose a diseased city such that there is a road between this city and a cured city, and make this city also cured (at no additional cost). This process happens one city at a time, until all cities are cured. To make sure the infection does not mutate, one more condition should be satisfied: the disease must be contained in a single connected subgraph at each point before and during this process. Formally, whenever you are choosing a city to cure, the subgraph created by removing all cities that are already cured (and roads with at least one endpoint in them) must be connected. Find the minimum cost of distributing the cure to initially cured cities in such a way that it is possible to cure all cities by spreading the cure to them according to the process described above. Also, find some strategy, i.e. the subset of initially cured cities and the sequence of cities cured afterwards using this process, with this minimum cost. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $M$. - The second line contains $N$ space-separated integers $w\_1, w\_2, \\ldots, w\_N$. - Each of the next $M$ lines contains two space-separated integers $a$ and $b$ denoting a road between cities $a$ and $b$. ### Output For each test case, print two lines. - The first of these lines should contain a single integer $K$ denoting the number of cities you send the cure to initially. - The second line should contain $N$ space-separated integers $p\_1, p\_2, \\ldots, p\_N$ with the following meaning: - $p\_1, p\_2, \\ldots, p\_K$ denote the labels of the cities you send the cure to initially. - For each $i$ ($1 \\le i \\le N-K$), $p\_{K+i}$ denotes the $i$-th city cured by spreading the cure to it. Your output must satisfy the following constraints: - $1 \\le K \\le N$ - $p\_1, p\_2, \\ldots, p\_N$ is a permutation of $1, 2, \\ldots, N$ - $\\sum\_{i=1}^K w\_{p\_i}$ is minimised over all strategies that cure all the cities - for each valid $i \\gt K$, there must be a road between city $p\_i$ and some city $p\_j$ such that $j \\lt i$ - for each valid $i \\gt K$, cities $p\_i, p\_{i+1}, \\ldots, p\_N$ must form (induce) a connected subgraph ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N, M \\le 500,000$ - $1 \\le w\_i \\le 10^9$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $500,000$ - the sum of $M$ over all test cases does not exceed $500,000$ - the graph described on the input is connected, does not contain any self-loops or multiple edges ### Subtasks \*\*Subtask #1 (50 points):\*\* $M = N-1$, i.e. the graph is a tree \*\*Subtask #2 (30 points):\*\* $w\_i = 1$ for each valid $i$ \*\*Subtask #3 (20 points):\*\* original constraints ### Example Input ``` 2 4 3 1 5 7 3 1 2 1 3 1 4 4 4 40 20 30 10 1 2 2 3 3 4 4 1 ``` ### Example Output ``` 2 4 2 1 3 1 4 3 2 1 ``` ### Explanation \*\*Example case 1:\*\* The graph is a star with city $1$ in the centre. Initially, we can send the cure to cities $4$ and $2$ with cost $3 + 5 = 8$. Then, we can spread the cure to city $1$ and then to city $3$. \*\*Example case 2:\*\* Initially, we can send the cure to city $4$, with cost $10$.
