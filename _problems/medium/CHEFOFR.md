---
category_name: medium
problem_code: CHEFOFR
problem_name: 'Offer for Chef'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: utkarsh97
problem_tester: null
date_added: 23-01-2019
tags:
    - april19
    - binary
    - bitmasking
    - bitwise
    - medium
    - utkarsh97
editorial_url: 'https://discuss.codechef.com/problems/CHEFOFR'
time:
    view_start_date: 1555320602
    submit_start_date: 1555320602
    visible_start_date: 1555320602
    end_date: 1735669800
    current: 1559472970
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/APRIL19/hindi/CHEFOFR.pdf), \[Bengali\](http://www.codechef.com/download/translated/APRIL19/bengali/CHEFOFR.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/APRIL19/mandarin/CHEFOFR.pdf), \[Russian\](http://www.codechef.com/download/translated/APRIL19/russian/CHEFOFR.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/APRIL19/vietnamese/CHEFOFR.pdf) as well. Chef is very happy today because he got an offer from Gordon Ramsay himself to work for him in London. Chef wants to prepare a delicious cake for Gordon to impress him, but he does not know that Gordon Ramsay is not easy to impress. Gordon cut Chef's cake into $N$ small slices (numbered $1$ through $N$), placed in a row in such a way that for each valid $i$, slices $i$ and $i+1$ are adjacent. Note that slices $N$ and $1$ are \*\*not\*\* adjacent. For each valid $i$, the $i$-th slice has \*taste\* $A\_i$. Gordon wants to put special toppings on some slices and then ask Chef to group all slices into $K$ clusters in such a way that the slices in each cluster form a contiguous sequence and the \*sweetness\* of the cake is maximum possible. For each valid $i$, let's denote the topping on the $i$-th slice by $t\_i$ ($t\_i = 0$ if there is no topping on this slice); the \*sweetness\* of this slice is $t\_i \\cdot A\_i$, so the sweetness of a slice without any special topping is $0$. The sweetness of a cluster is the total (summed up) sweetness of all slices in this cluster. Let's denote the sweetnesses of all clusters by $S\_1, S\_2, \\ldots, S\_K$. The sweetness of the whole cake is computed as $S\_1 \* S\_2 \* \\ldots \* S\_K$, where the operation $\*$ is defined in the following way: for any non-negative integers $x$ and $y$ such that $x \\ge y$, $$x \* y = y \* x = \\sum\_{n=0}^{\\lfloor\\log\_2(x)\\rfloor} 2^n\\left(\\left\\lfloor\\frac{x}{2^n}\\right\\rfloor \\bmod 2\\right)\\left(\\left\\lfloor\\frac{y}{2^n}\\right\\rfloor \\bmod 2\\right) \\,.$$ It can be proven that this operation is associative, i.e. $(x \* y) \* z = x \* (y \* z)$. You should answer $Q$ queries. In each query, you are given the toppings on all slices and the number of clusters $K$. Tell Chef the maximum possible sweetness of the cake! ### Input - The first line of the input contains a single integer $N$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$. - The next line contains a single integer $Q$. - For each query, two lines follow. The first of these lines contains a single integer $K$. The second line contains $N$ space-separated integers $t\_1, t\_2, \\ldots, t\_N$. ### Output Print a single line containing one integer — the maximum sweetness. ### Constraints - $1 \\le Q \\le 10$ - $1 \\le N \\le 10^5$ - $1 \\le K \\le 10^5$ - $1 \\le A\_i \\le 10^{15}$ for each valid $i$ - $0 \\le t\_i \\le 10$ for each valid $i$ - in each query, the number of slices with toppings does not exceed $50$ ### Subtasks \*\*Subtask #1 (100 points):\*\* original constraints ### Example Input ``` 10 15 5 26 4 3 13 5 5 27 11 2 3 2 3 1 4 7 1 5 1 1 1 1 0 0 0 0 0 0 0 1 0 0 ``` ### Example Output ``` 33 5 ``` ### Explanation For the first query, Chef can choose clusters in the following way: cluster $1$ contains slices $1$ and $2$, cluster $2$ contains slices $3$ through $7$ and cluster $3$ contains slices $8$ through $10$. The sweetness of the cake is $(15 \\cdot 2 + 5 \\cdot 3) \* (26 \\cdot 1 + 4 \\cdot 4 + 3 \\cdot 7 + 13 \\cdot 1 + 5 \\cdot 5) \* (5 \\cdot 1 + 27 \\cdot 1 + 11 \\cdot 1) = 33$.
