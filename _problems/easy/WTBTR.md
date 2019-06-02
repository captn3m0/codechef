---
category_name: easy
problem_code: WTBTR
problem_name: 'Where to Build the Roads'
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
problem_author: deepanshuvaid7
problem_tester: null
date_added: 25-04-2019
tags:
    - deepanshuvaid7
time:
    view_start_date: 1557739980
    submit_start_date: 1557739980
    visible_start_date: 1557739980
    end_date: 1735669800
    current: 1559472963
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/MAY19/hindi/WTBTR.pdf), \[Bengali\](http://www.codechef.com/download/translated/MAY19/bengali/WTBTR.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/MAY19/mandarin/WTBTR.pdf), \[Russian\](http://www.codechef.com/download/translated/MAY19/russian/WTBTR.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/MAY19/vietnamese/WTBTR.pdf) as well. Chef bought a huge (effectively infinite) planar island and built $N$ restaurants (numbered $1$ through $N$) on it. For each valid $i$, the Cartesian coordinates of restaurant $i$ are $(X\_i, Y\_i)$. Now, Chef wants to build $N-1$ straight narrow roads (line segments) on the island. The roads may have arbitrary lengths; restaurants do not have to lie on the roads. The slope of each road must be $1$ or $-1$, i.e. for any two points $(x\_1, y\_1)$ and $(x\_2, y\_2)$ on the same road, $|x\_1-x\_2| = |y\_1-y\_2|$ must hold. Let's denote the minimum distance Chef has to walk from restaurant $i$ to reach a road by $D\_i$. Then, let's denote $a = \\mathrm{max}\\,(D\_1, D\_2, \\ldots, D\_N)$; Chef wants this distance to be minimum possible. Chef is a busy person, so he decided to give you the job of building the roads. You should find a way to build them that minimises $a$ and compute $a \\cdot \\sqrt{2}$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $X\_i$ and $Y\_i$. ### Output For each test case, print a single line containing one real number — the minimum distance $a$ multiplied by $\\sqrt{2}$. Your answer will be considered correct if its absolute or relative error does not exceed $10^{-6}$. ### Constraints - $1 \\le T \\le 100$ - $2 \\le N \\le 10^4$ - $|X\_i|, |Y\_i| \\le 10^9$ for each valid $i$ ### Subtasks \*\*Subtask #1 (10 points):\*\* - $1 \\le T \\le 10$ - $2 \\le N \\le 5$ - $|X\_i|, |Y\_i| \\le 10$ for each valid $i$ - $a \\cdot \\sqrt{2}$ is an integer \*\*Subtask #2 (90 points):\*\* original constraints ### Example Input ``` 2 3 0 0 0 1 0 -1 3 0 1 1 0 -1 0 ``` ### Example Output ``` 0.5 0 ``` ### Explanation \*\*Example case 1:\*\* We should build roads described by equations $y-x+0.5 = 0$ and $y-x-0.5 = 0$. \*\*Example case 2:\*\* We should build roads described by equations $y-x-1 = 0$ and $y+x-1 = 0$.
